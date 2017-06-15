<?php
return array (
  'service_manager' => 
  array (
    'aliases' => 
    array (
      'translator' => 'MvcTranslator',
    ),
    'allow_override' => false,
    'abstract_factories' => 
    array (
      0 => 'Zend\\Navigation\\Service\\NavigationAbstractServiceFactory',
    ),
    'invokables' => 
    array (
      'AstraZenecaForm' => 'AstraZeneca\\Form\\AstraZenecaForm',
    ),
    'factories' => 
    array (
      'TwbBundle\\Options\\ModuleOptions' => 'TwbBundle\\Options\\Factory\\ModuleOptionsFactory',
      'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
      'navigation' => 'Zend\\Navigation\\Service\\DefaultNavigationFactory',
    ),
  ),
  'translator' => 
  array (
    'locale' => 'fr_FR',
    'translation_file_patterns' => 
    array (
      0 => 
      array (
        'type' => 'phparray',
        'base_dir' => './vendor/zendframework/zendframework/resources/languages',
        'pattern' => '/%.2s/Zend_Validate.php',
        'text_domain' => 'Zend_Validate',
      ),
      1 => 
      array (
        'type' => 'phparray',
        'base_dir' => '/var/www/wefixdev/module/Mail/config/../language',
        'pattern' => '%s.php',
        'text_domain' => 'Mail',
      ),
      2 => 
      array (
        'type' => 'gettext',
        'base_dir' => '/var/www/wefixdev/module/Application/config/../language',
        'pattern' => '%s.mo',
      ),
      3 => 
      array (
        'type' => 'gettext',
        'base_dir' => '/var/www/wefixdev/module/Admin/config/../language',
        'pattern' => '%s.mo',
      ),
    ),
  ),
  'view_manager' => 
  array (
    'display_not_found_reason' => false,
    'display_exceptions' => false,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_path_stack' => 
    array (
      0 => '/var/www/wefixdev/module/Basic/config/../view',
      1 => '/var/www/wefixdev/module/Mail/config/../view',
      2 => '/var/www/wefixdev/module/Application/config/../view',
      3 => '/var/www/wefixdev/module/Admin/config/../view',
      4 => '/var/www/wefixdev/module/PhoneBack/config/../view',
      5 => '/var/www/wefixdev/module/LandingPage/config/../view',
      6 => '/var/www/wefixdev/module/AstraZeneca/config/../view',
    ),
    'template_map' => 
    array (
      'layout/layout' => '/var/www/wefixdev/module/Application/config/../view/layout/website.phtml',
      'layout/admin' => '/var/www/wefixdev/module/Admin/config/../view/layout/index.phtml',
    ),
    'strategies' => 
    array (
      0 => 'ViewJsonStrategy',
    ),
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'Index' => 'Application\\Controller\\Factory\\IndexControllerFactory',
      'Reparation' => 'Application\\Controller\\Factory\\ReparationControllerFactory',
      'Order' => 'Application\\Controller\\Factory\\OrderControllerFactory',
      'Promotion' => 'Application\\Controller\\Factory\\PromotionControllerFactory',
      'Devices' => 'Admin\\Controller\\Factory\\DevicesControllerFactory',
      'Brands' => 'Admin\\Controller\\Factory\\BrandsControllerFactory',
      'Models' => 'Admin\\Controller\\Factory\\ModelsControllerFactory',
      'Failures' => 'Admin\\Controller\\Factory\\FailuresControllerFactory',
    ),
    'invokables' => 
    array (
      'Admin' => 'Admin\\Controller\\AdminController',
      'MapPoints' => 'Admin\\Controller\\MapPointsController',
      'Slider' => 'Admin\\Controller\\SliderController',
      'FeaturedFailure' => 'Admin\\Controller\\FeaturedFailureController',
      'Calls' => 'Admin\\Controller\\CallsController',
      'Postal' => 'Admin\\Controller\\PostalController',
      'Colors' => 'Admin\\Controller\\ColorsController',
      'Pictos' => 'Admin\\Controller\\PictosController',
      'Orders' => 'Admin\\Controller\\OrdersController',
      'Landings' => 'Admin\\Controller\\LandingsController',
      'Images' => 'Admin\\Controller\\ImagesController',
      'PhoneBack' => 'PhoneBack\\Controller\\PhoneBackController',
      'LandingPage' => 'LandingPage\\Controller\\LandingPageController',
      'AstraZeneca' => 'AstraZeneca\\Controller\\AstraZenecaController',
      'AstraZenecaSiege' => 'AstraZeneca\\Controller\\AstraZenecaSiegeController',
    ),
  ),
  'view_helpers' => 
  array (
    'invokables' => 
    array (
      'CleanRef' => 'Application\\View\\Helper\\CleanRef',
      'alert' => 'TwbBundle\\View\\Helper\\TwbBundleAlert',
      'badge' => 'TwbBundle\\View\\Helper\\TwbBundleBadge',
      'buttonGroup' => 'TwbBundle\\View\\Helper\\TwbBundleButtonGroup',
      'dropDown' => 'TwbBundle\\View\\Helper\\TwbBundleDropDown',
      'form' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleForm',
      'formButton' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormButton',
      'formSubmit' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormButton',
      'formCheckbox' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormCheckbox',
      'formCollection' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormCollection',
      'formElementErrors' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormElementErrors',
      'formMultiCheckbox' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormMultiCheckbox',
      'formRadio' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormRadio',
      'formRow' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormRow',
      'formStatic' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormStatic',
      'formErrors' => 'TwbBundle\\Form\\View\\Helper\\TwbBundleFormErrors',
      'glyphicon' => 'TwbBundle\\View\\Helper\\TwbBundleGlyphicon',
      'fontAwesome' => 'TwbBundle\\View\\Helper\\TwbBundleFontAwesome',
      'label' => 'TwbBundle\\View\\Helper\\TwbBundleLabel',
    ),
    'factories' => 
    array (
      'formElement' => 'TwbBundle\\Form\\View\\Helper\\Factory\\TwbBundleFormElementFactory',
    ),
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'application' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/[:lang/]',
          'defaults' => 
          array (
            'controller' => 'Index',
            'action' => 'Index',
            'lang' => '',
          ),
          'constraints' => 
          array (
            'lang' => '(en|de|fr|nl)?',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'failureAjaxSearch' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => 'failure/search/:device',
              'constraints' => 
              array (
                'device' => '[A-Za-z0-9-]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Index',
                'action' => 'ajaxFailureSearch',
              ),
            ),
          ),
          'page' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => ':action',
              'constraints' => 
              array (
                'action' => '[A-Za-z0-9-]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Index',
              ),
            ),
          ),
          'success' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => 'success',
              'defaults' => 
              array (
                'controller' => 'Order',
                'action' => 'success',
              ),
            ),
          ),
          'cancel' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => 'cancel',
              'defaults' => 
              array (
                'controller' => 'Order',
                'action' => 'cancel',
              ),
            ),
          ),
          'be2billNotification' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => 'be2bill/hook/notification',
              'defaults' => 
              array (
                'controller' => 'Order',
                'action' => 'be2bill',
                'state' => 'notification',
              ),
            ),
          ),
          'be2billUnpaid' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => 'be2bill/hook/unpaid',
              'defaults' => 
              array (
                'controller' => 'Order',
                'action' => 'be2bill',
                'state' => 'unpaid',
              ),
            ),
          ),
          'be2billForm' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => 'be2bill/form',
              'defaults' => 
              array (
                'controller' => 'Order',
                'action' => 'be2billForm',
              ),
            ),
          ),
          'newOrder' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => 'new-order',
              'defaults' => 
              array (
                'controller' => 'Order',
                'action' => 'add',
              ),
            ),
          ),
          'process' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => 'process/:order_id/:token',
              'constraints' => 
              array (
                'order_id' => '[0-9]+',
                'token' => '[A-Za-z0-9-]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Order',
                'action' => 'process',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'facture' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/facture',
                  'defaults' => 
                  array (
                    'controller' => 'Order',
                    'action' => 'facture',
                  ),
                ),
              ),
              'diagnostic' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/diagnostic',
                  'defaults' => 
                  array (
                    'controller' => 'Order',
                    'action' => 'diagnostic',
                  ),
                ),
              ),
              'shipping' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/shipping',
                  'defaults' => 
                  array (
                    'controller' => 'Order',
                    'action' => 'shipping',
                  ),
                ),
              ),
              'pay' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/pay',
                  'defaults' => 
                  array (
                    'controller' => 'Order',
                    'action' => 'payProcess',
                  ),
                ),
              ),
              'cancelShipping' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/cancel-shipping',
                  'defaults' => 
                  array (
                    'controller' => 'Order',
                    'action' => 'cancelShipping',
                  ),
                ),
              ),
            ),
          ),
          'reparation' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => ':device',
              'constraints' => 
              array (
                'device' => 'reparation-[A-Za-z0-9ç-]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Reparation',
                'action' => 'picker',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'brand' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/:brand',
                  'constraints' => 
                  array (
                    'brand' => '[A-Za-z0-9ç-]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Reparation',
                    'action' => 'picker',
                  ),
                ),
                'may_terminate' => true,
                'child_routes' => 
                array (
                  'simple' => 
                  array (
                    'type' => 'Literal',
                    'options' => 
                    array (
                      'route' => '_simplehtml',
                      'defaults' => 
                      array (
                        'controller' => 'Reparation',
                        'action' => 'picker',
                        'simplehtml' => true,
                      ),
                    ),
                  ),
                  'model' => 
                  array (
                    'type' => 'Segment',
                    'options' => 
                    array (
                      'route' => '/:model',
                      'constraints' => 
                      array (
                        'model' => '[A-Za-z0-9ç-]+',
                      ),
                      'defaults' => 
                      array (
                        'controller' => 'Reparation',
                        'action' => 'picker',
                      ),
                    ),
                    'may_terminate' => true,
                    'child_routes' => 
                    array (
                      'simple' => 
                      array (
                        'type' => 'Literal',
                        'options' => 
                        array (
                          'route' => '_simplehtml',
                          'defaults' => 
                          array (
                            'controller' => 'Reparation',
                            'action' => 'picker',
                            'simplehtml' => true,
                          ),
                        ),
                      ),
                      'color' => 
                      array (
                        'type' => 'Segment',
                        'options' => 
                        array (
                          'route' => '/:color',
                          'constraints' => 
                          array (
                            'color' => '[A-Za-z0-9ç-]+',
                          ),
                          'defaults' => 
                          array (
                            'controller' => 'Reparation',
                            'action' => 'picker',
                          ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => 
                        array (
                          'simple' => 
                          array (
                            'type' => 'Literal',
                            'options' => 
                            array (
                              'route' => '_simplehtml',
                              'defaults' => 
                              array (
                                'controller' => 'Reparation',
                                'action' => 'picker',
                                'simplehtml' => true,
                              ),
                            ),
                          ),
                          'failure' => 
                          array (
                            'type' => 'Segment',
                            'options' => 
                            array (
                              'route' => '/:failure',
                              'constraints' => 
                              array (
                                'failure' => '[A-Za-z0-9ç-]+',
                              ),
                              'defaults' => 
                              array (
                                'controller' => 'Reparation',
                                'action' => 'picker',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
		  'promotion' => array(
                'type' => 'Segment',
                'options' => array(
                'route' => ':promo',
                'constraints' => array(
					'promo' => 'promotion-[A-Za-z0-9ç-]+',
                     ),
                'defaults' => array(
                    'controller' => 'Promotion',
                    'action' => 'promotion',
                ),
                ),		
                'may_terminate' => true,
               ),
        ),
      ),
      'admin' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/[:lang/]admin/index',
          'defaults' => 
          array (
            'controller' => 'Admin',
            'action' => 'index',
            'lang' => 'fr',
          ),
          'constraints' => 
          array (
            'lang' => 'en|fr|de|nl',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'mappoint' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/mappoints',
              'defaults' => 
              array (
                'controller' => 'MapPoints',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'add' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/new',
                  'defaults' => 
                  array (
                    'action' => 'edit',
                  ),
                ),
                'may_terminate' => true,
              ),
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'edit',
                  ),
                ),
                'may_terminate' => true,
              ),
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'delete',
                  ),
                ),
                'may_terminate' => true,
              ),
            ),
          ),
          'slider' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/slider',
              'defaults' => 
              array (
                'controller' => 'Slider',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'add' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/new',
                  'defaults' => 
                  array (
                    'action' => 'edit',
                  ),
                ),
                'may_terminate' => true,
              ),
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'edit',
                  ),
                ),
                'may_terminate' => true,
              ),
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'delete',
                  ),
                ),
                'may_terminate' => true,
              ),
            ),
          ),
          'featured' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/featured',
              'defaults' => 
              array (
                'controller' => 'FeaturedFailure',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'add' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/new',
                  'defaults' => 
                  array (
                    'action' => 'edit',
                  ),
                ),
                'may_terminate' => true,
              ),
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'edit',
                  ),
                ),
                'may_terminate' => true,
              ),
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'delete',
                  ),
                ),
                'may_terminate' => true,
              ),
            ),
          ),
          'landing' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/landings',
              'defaults' => 
              array (
                'controller' => 'Landings',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:landing_id',
                  'constraints' => 
                  array (
                    'landing_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'edit',
                  ),
                ),
                'may_terminate' => true,
              ),
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:landing_id',
                  'constraints' => 
                  array (
                    'landing_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'delete',
                  ),
                ),
                'may_terminate' => true,
              ),
            ),
          ),
          'orders' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/orders',
              'defaults' => 
              array (
                'controller' => 'Orders',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:order_id',
                  'constraints' => 
                  array (
                    'order_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Orders',
                    'action' => 'edit',
                  ),
                ),
                'may_terminate' => true,
                'child_routes' => 
                array (
                  'repair' => 
                  array (
                    'type' => 'Segment',
                    'options' => 
                    array (
                      'route' => '/repair[/:repair_id]',
                      'constraints' => 
                      array (
                        'repair_id' => '[0-9]+',
                      ),
                      'defaults' => 
                      array (
                        'controller' => 'Orders',
                        'action' => 'repair',
                        'repair_id' => '0',
                      ),
                    ),
                  ),
                  'deleteRepair' => 
                  array (
                    'type' => 'Segment',
                    'options' => 
                    array (
                      'route' => '/delete/:repair_id',
                      'constraints' => 
                      array (
                        'repair_id' => '[0-9]+',
                      ),
                      'defaults' => 
                      array (
                        'controller' => 'Orders',
                        'action' => 'deleteRepair',
                      ),
                    ),
                  ),
                  'chronopost' => 
                  array (
                    'type' => 'Literal',
                    'options' => 
                    array (
                      'route' => '/chronopost',
                      'defaults' => 
                      array (
                        'controller' => 'Orders',
                        'action' => 'chronopost',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'devices' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/devices',
              'defaults' => 
              array (
                'controller' => 'Devices',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:device_id',
                  'constraints' => 
                  array (
                    'device_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Devices',
                    'action' => 'edit',
                  ),
                ),
              ),
            ),
          ),
          'brands' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/:device_id/brands',
              'constraints' => 
              array (
                'device_id' => '[0-9]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Brands',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'add' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/add',
                  'defaults' => 
                  array (
                    'controller' => 'Brands',
                    'action' => 'add',
                  ),
                ),
              ),
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:brand_id',
                  'constraints' => 
                  array (
                    'brand_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Brands',
                    'action' => 'edit',
                  ),
                ),
              ),
              'editlang' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/editlang/:brand_id',
                  'constraints' => 
                  array (
                    'brand_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Brands',
                    'action' => 'editlang',
                  ),
                ),
              ),
              'star' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/star/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Brands',
                    'action' => 'star',
                  ),
                ),
              ),
              'down' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/down/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Brands',
                    'action' => 'down',
                  ),
                ),
              ),
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:brand_id',
                  'constraints' => 
                  array (
                    'brand_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Brands',
                    'action' => 'delete',
                  ),
                ),
              ),
            ),
          ),
          'models' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/model/:brand_id',
              'constraints' => 
              array (
                'id' => '[0-9]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Models',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'add' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/add',
                  'defaults' => 
                  array (
                    'controller' => 'Models',
                    'action' => 'add',
                  ),
                ),
              ),
              'star' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/star/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Models',
                    'action' => 'star',
                  ),
                ),
              ),
              'down' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/down/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Models',
                    'action' => 'down',
                  ),
                ),
              ),
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:model_id',
                  'constraints' => 
                  array (
                    'model_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Models',
                    'action' => 'edit',
                  ),
                ),
              ),
              'editlang' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/editlang/:model_id',
                  'constraints' => 
                  array (
                    'model_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Models',
                    'action' => 'editlang',
                  ),
                ),
              ),
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:model_id',
                  'constraints' => 
                  array (
                    'model_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Models',
                    'action' => 'delete',
                  ),
                ),
              ),
            ),
          ),
          'colors' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/color/:model_id',
              'constraints' => 
              array (
                'model_id' => '[0-9]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Colors',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:color_id',
                  'constraints' => 
                  array (
                    'color_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Colors',
                    'action' => 'edit',
                  ),
                ),
              ),
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:color_id',
                  'constraints' => 
                  array (
                    'color_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Colors',
                    'action' => 'delete',
                  ),
                ),
              ),
            ),
          ),
          'failures' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/failure/:color_id',
              'constraints' => 
              array (
                'color_id' => '[0-9]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Failures',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'add' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/add',
                  'defaults' => 
                  array (
                    'controller' => 'Failures',
                    'action' => 'add',
                  ),
                ),
              ),
              'edit' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/edit/:failure_id',
                  'constraints' => 
                  array (
                    'failure_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Failures',
                    'action' => 'edit',
                  ),
                ),
              ),
              'editlang' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/editlang/:failure_id',
                  'constraints' => 
                  array (
                    'failure_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Failures',
                    'action' => 'editlang',
                  ),
                ),
              ),
              'store' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/store/:failure_id',
                  'constraints' => 
                  array (
                    'failure_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Failures',
                    'action' => 'store',
                  ),
                ),
              ),
              'star' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/star/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Failures',
                    'action' => 'star',
                  ),
                ),
              ),
              'down' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/down/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Failures',
                    'action' => 'down',
                  ),
                ),
              ),
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:failure_id',
                  'constraints' => 
                  array (
                    'failure_id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Failures',
                    'action' => 'delete',
                  ),
                ),
              ),
            ),
          ),
          'calls' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/calls',
              'defaults' => 
              array (
                'controller' => 'Calls',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Calls',
                    'action' => 'delete',
                  ),
                ),
              ),
            ),
          ),
          'postal' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/postal',
              'defaults' => 
              array (
                'controller' => 'Postal',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Postal',
                    'action' => 'delete',
                  ),
                ),
              ),
            ),
          ),
          'pictos' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/pictos',
              'defaults' => 
              array (
                'controller' => 'Pictos',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Pictos',
                    'action' => 'delete',
                  ),
                ),
              ),
            ),
          ),
          'images' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/images',
              'defaults' => 
              array (
                'controller' => 'Images',
                'action' => 'list',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'delete' => 
              array (
                'type' => 'Segment',
                'options' => 
                array (
                  'route' => '/delete/:id',
                  'constraints' => 
                  array (
                    'id' => '[0-9]+',
                  ),
                  'defaults' => 
                  array (
                    'controller' => 'Images',
                    'action' => 'delete',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'phoneBack' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/phone-back',
          'defaults' => 
          array (
            'controller' => 'PhoneBack',
            'action' => 'create',
          ),
        ),
      ),
      'landingPageIphone2' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/reparation-iphone-2',
          'defaults' => 
          array (
            'controller' => 'LandingPage',
            'action' => 'iphone2',
          ),
        ),
      ),
      'landingPage' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/reparation/:landing_id/:landing_url',
          'defaults' => 
          array (
            'controller' => 'LandingPage',
            'action' => 'dynamic',
          ),
          'constraints' => 
          array (
            'landing_id' => '[0-9]+',
          ),
        ),
      ),
      'astrazeneca' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/astrazeneca',
          'defaults' => 
          array (
            'controller' => 'AstraZeneca',
            'action' => 'index',
          ),
        ),
        'may_terminate' => false,
        'child_routes' => 
        array (
          'pay' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/:id',
              'constraints' => 
              array (
                'id' => '[0-9]+',
              ),
              'defaults' => 
              array (
                'action' => 'pay',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'facture' => 
              array (
                'type' => 'Literal',
                'options' => 
                array (
                  'route' => '/facture',
                  'defaults' => 
                  array (
                    'action' => 'facture',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'astrazeneca-siege' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/astrazeneca-siege',
          'defaults' => 
          array (
            'controller' => 'AstraZenecaSiege',
            'action' => 'index',
          ),
        ),
        'may_terminate' => false,
      ),
      'astrazeneca_pay' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/be2bill-mobile/form',
          'defaults' => 
          array (
            'controller' => 'AstraZeneca',
            'action' => 'template',
          ),
        ),
      ),
    ),
  ),
  'twbbundle' => 
  array (
    'ignoredViewHelpers' => 
    array (
      0 => 'file',
      1 => 'checkbox',
      2 => 'radio',
      3 => 'submit',
      4 => 'multi_checkbox',
      5 => 'static',
      6 => 'button',
      7 => 'reset',
    ),
    'type_map' => 
    array (
    ),
    'class_map' => 
    array (
    ),
  ),
  'db' => 
  array (
    'driver' => 'Pdo',
    'dsn' => 'mysql:dbname=app;host=localhost',
    'driver_options' => 
    array (
      1002 => 'SET NAMES \'UTF8\'',
    ),
    'username' => 'wfadmin',
    'password' => 'wfadmin2K12',
  ),
  'session' => 
  array (
    'config' => 
    array (
      'class' => 'Zend\\Session\\Config\\SessionConfig',
      'options' => 
      array (
        'name' => 'wefix',
      ),
    ),
    'storage' => 'Zend\\Session\\Storage\\SessionArrayStorage',
  ),
  'translation' => 
  array (
    'available' => 
    array (
      0 => 'fr',
      1 => 'en',
      2 => 'de',
      3 => 'nl',
    ),
    'dictionnary' => 
    array (
      'fr' => 'fr_FR',
      'en' => 'en_US',
      'de' => 'de_DE',
      'nl' => 'nl_NL',
    ),
    'database' => 
    array (
      'fr' => 1,
      'en' => 2,
      'de' => 3,
      'nl' => 4,
    ),
    'defaultLanguage' => 'fr',
  ),
  'be2bill' => 
  array (
    'identifier' => 'EMGK',
    'mdp' => 'aRmjcNQ=l8$)YBN4',
    'formUrl' => 'https://secure-magenta1.be2bill.com/front/form/process.php',
  ),
  'mailer' => 
  array (
    'default_message' => 
    array (
      'from' => 
      array (
        'email' => 'contact@wefix.net',
        'name' => 'WeFix',
      ),
      'encoding' => 'utf-8',
    ),
    'smtp_options' => 
    array (
      'name' => 'wefix.net',
      'host' => 'smtp.gmail.com',
      'port' => 465,
      'connection_class' => 'login',
      'connection_config' => 
      array (
        'username' => 'contact@wefix.net',
        'password' => 'alloallo',
        'ssl' => 'ssl',
      ),
    ),
  ),
  'static_path' => '/var/www/wefixdev/config/autoload/../../subdomain/resources',
  'static_url' => '/static',
);