<?php

namespace Application\Controller\Factory;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface,  
    Zend\ServiceManager\Exception\ServiceNotCreatedException,
    Application\Controller\PromotionController;

class PromotionControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $sm          = $serviceLocator->getServiceLocator();
        $routerMatch = $sm->get('router')->match($sm->get('request'));

        $lang       = $routerMatch->getParam("lang");


        $promo      = $routerMatch->getParam("promo");



        $controller = new PromotionController(
            $lang,
            $promo
        );
        return $controller;
    }
}