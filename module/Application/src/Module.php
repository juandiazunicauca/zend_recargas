<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

class Module
{
    const VERSION = '3.1.3';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    // public function getServiceConfig()
    // {
    //     return [
    //         'factories' => [
    //             Model\TarjetaCreditoTable::class => function($container) {
    //                 $tableGateway = $container->get(Model\TarjetaCreditoTableGateway::class);
    //                 return new Model\TarjetaCreditoTable($tableGateway);
    //             },
    //             Model\TarjetaCreditoTableGateway::class => function ($container) { 
    //                 $dbAdapter = $container->get(AdapterInterface::class);
    //                 $resultSetPrototype = new ResultSet();
    //                 $resultSetPrototype->setArrayObjectPrototype(new Model\TarjetaCredito());
    //                 return new TableGateway('tarjeta_credito', $dbAdapter, null, $resultSetPrototype);
    //             },
    //         ],
    //     ];
    // }

    // public function getControllerConfig()
    // {
    //     return [
    //         'factories' => [
    //             Controller\IndexController::class => function($container) {
    //                 return new Controller\IndexController(
    //                     $container->get(Model\TarjetaCreditoTable::class)
    //                 );
    //             },
    //         ],
    //     ];
    // }
}
