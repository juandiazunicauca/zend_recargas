<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Request;
use Application\Model\TarjetaCreditoTable;

class IndexController extends AbstractActionController
{
    private $table;
    /* 
    public function __construct()
    {
        //TarjetaCreditoTable $table
       // $this->table = $table;
    } */

    // public function getCountries()
    // {
    //     // try {
    //     //     $client = new Zend\Soap\Client("http://www.webservicex.net/country.asmx?op=GetCountries");
    //     //     $result = $client->GetCountries();      
    //     //     print_r($result);
    //     //   } catch (SoapFault $s) {
    //     //     die('ERROR: [' . $s->faultcode . '] ' . $s->faultstring);
    //     //   } catch (Exception $e) {
    //     //     die('ERROR: ' . $e->getMessage());
    //     //   }
    //     return array();
    // }

    function insertarAction()
    {
    }
    
    public function indexAction()
    {
        $request = $this->getRequest();
        //print_r($request->getMethod());
        
        $amount = $this->params()->fromPost('amount', '0');
        $country = $this->params()->fromPost('country', 'USD');
        $lista = array(
            "listCountry" => $this->listCountries(),
            "listCantidades" => $this->listValores(),
            "amount" => $amount,
            "country" => $country,
        );
        if ($request->getMethod() == "POST") {
            $lista['confirmacion'] = true;
        }
        return new ViewModel($lista);
    }

    public function creditcardAction()
    {
        $amount = $this->params()->fromQuery('amount', '0');
        $country = $this->params()->fromQuery('country', 'USD');
        $request = $this->getRequest();
        //print_r($request->getMethod());
        $result = array(
            "listCountry" => $this->listCountries(),
            "amount" => $amount,
            "country" => $country,
        );
        if ($request->getMethod() == "POST") {
            $cardName = $this->params()->fromPost('cardName', 'default_val');
            $cardNumber = $this->params()->fromPost('cardNumber', 'default_val');
            $cardName = $this->params()->fromPost('cardName', 'default_val');
            $expirationDate = $this->params()->fromPost('expirationDate', 'default_val');
            $cvv = $this->params()->fromPost('cvv', 'default_val');
            $address = $this->params()->fromPost('address', 'default_val');
            $zip = $this->params()->fromPost('zip', 'default_val');

            $result["confirmacion"] = true;
            
        }
        return new ViewModel($result);
    }

    public function listCountries()
    {
        $listCountry = array("Colombia" => "COP", "Cuba" => "CU", "Argentina" => "ARG", "Ecuador" => "ECU");
        return  $listCountry;
    }

    public function listValores()
    {
        $listValor = array("10", "20", "30", "40", "50", "60", "70", "80", "90");
        return  $listValor;
    }

    public function resultadoAction()
    {
        $amount = $this->params()->fromQuery('amount', '0');
        $country = $this->params()->fromQuery('country', 'USD');
        $result = array(
            "amount" => $amount,
            "country" => $country,
            "tax" => $amount * 0.07,
        );
        return new ViewModel($result);
    }
}