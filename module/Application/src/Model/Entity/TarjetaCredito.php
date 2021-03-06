<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Model;

class TarjetaCredito
{
    public $id;
    public $card_holder_name;
    public $card_number;
    public $expiration_date;
    public $cvv;
    public $address;
    public $zip;
    public $country;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->card_holder_name = !empty($data['card_holder_name']) ? $data['card_holder_name'] : null;
        $this->card_number  = !empty($data['card_number']) ? $data['card_number'] : null;
        $this->expiration_date     = !empty($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->cvv = !empty($data['cvv']) ? $data['cvv'] : null;
        $this->address  = !empty($data['address']) ? $data['address'] : null;
        $this->zip = !empty($data['zip']) ? $data['zip'] : null;
        $this->country  = !empty($data['country']) ? $data['country'] : null;
    }
}
