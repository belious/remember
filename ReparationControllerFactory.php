<?php

namespace Application\Controller\Factory;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface,  
    Zend\ServiceManager\Exception\ServiceNotCreatedException,
    Application\Controller\ReparationController;

class ReparationControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $sm          = $serviceLocator->getServiceLocator();
        $routerMatch = $sm->get('router')->match($sm->get('request'));

        $lang       = $routerMatch->getParam("lang");
        $langMapper = $sm->get('lang_mapper');
        $langId     = $langMapper->findByLang($lang)->getId();

        $deviceMapper     = $sm->get('device_mapper');
        $deviceLangMapper = $sm->get('device_lang_mapper');

        $brandMapper     = $sm->get('brand_mapper');
        $brandLangMapper = $sm->get('brand_lang_mapper');

        $modelMapper     = $sm->get('model_mapper');
        $modelLangMapper = $sm->get('model_lang_mapper');

        $failureMapper    = $sm->get('failure_mapper');
        $failureLangMapper = $sm->get('failure_lang_mapper');

        $controller = new ReparationController(
            $lang,
            $langId,
            $deviceMapper,
            $deviceLangMapper,
            $brandMapper,
            $brandLangMapper,
            $modelMapper,
            $modelLangMapper,
            $failureMapper,
            $failureLangMapper
        );
        return $controller;
    }
}