<?php

return array(
    'controllers' => array(
        'factories' => array(
            'Index'      => 'Application\Controller\Factory\IndexControllerFactory',
            'Reparation' => 'Application\Controller\Factory\ReparationControllerFactory',
            'Order'      => 'Application\Controller\Factory\OrderControllerFactory',
            'Promotion'      => 'Application\Controller\Factory\PromotionControllerFactory',
        )
    ),
    'view_helpers' => array(
        'invokables' => array(
            'CleanRef' => 'Application\View\Helper\CleanRef',
        ),
    ),
    'router' => array(
        'routes' => array(
            'application' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/[:lang/]',
                    'defaults' => array(
                        'controller' => 'Index',
                        'action' => 'Index',
                        'lang' => ''
                    ),
                    'constraints' => array(
                        'lang' => '(en|de|fr|nl)?'
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    /**
                     * The route for the ajax form
                     * To search a failure from criteria
                     */
                    'failureAjaxSearch' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => 'failure/search/:device',
                            'constraints' => array(
                                'device' => '[A-Za-z0-9-]+',
                            ),
                            'defaults' => array(
                                'controller' => 'Index',
                                'action' => 'ajaxFailureSearch',
                            ),
                        ),
                    ),
                    'page' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => ':action',
                            'constraints' => array(
                                'action' => '[A-Za-z0-9-]+',
                            ),
                            'defaults' => array(
                                'controller' => 'Index',
                            ),
                        ),
                    ),
//					 'testChrono' => array(
//						'type'    => 'Literal',
//						'options' => array(
//							'route'    => 'test-chrono',
//							'defaults' => array(
//								'controller' => 'Order',
//								'action' => 'testChrono',
//							),
//						),
//					),
                    'success' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'success',
                            'defaults' => array(
                                'controller' => 'Order',
                                'action' => 'success',
                            ),
                        ),
                    ),
                    'cancel' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'cancel',
                            'defaults' => array(
                                'controller' => 'Order',
                                'action' => 'cancel',
                            ),
                        ),
                    ),
                    'be2billNotification' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'be2bill/hook/notification',
                            'defaults' => array(
                                'controller' => 'Order',
                                'action' => 'be2bill',
                                'state' => 'notification',
                            ),
                        ),
                    ),
                    'be2billUnpaid' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'be2bill/hook/unpaid',
                            'defaults' => array(
                                'controller' => 'Order',
                                'action' => 'be2bill',
                                'state' => 'unpaid',
                            ),
                        ),
                    ),
                    'be2billForm' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'be2bill/form',
                            'defaults' => array(
                                'controller' => 'Order',
                                'action' => 'be2billForm',
                            ),
                        ),
                    ),
                    'newOrder' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => 'new-order',
                            'defaults' => array(
                                'controller' => 'Order',
                                'action' => 'add',
                            ),
                        ),
                    ),
                    'process' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => 'process/:order_id/:token',
                            'constraints' => array(
                                'order_id' => '[0-9]+',
                                'token' => '[A-Za-z0-9-]+',
                            ),
                            'defaults' => array(
                                'controller' => 'Order',
                                'action' => 'process',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
//							'callContact' => array(
//								'type'    => 'Literal',
//								'options' => array(
//									'route'    => '/call',
//									'defaults' => array(
//										'controller' => 'Order',
//										'action' => 'callContact',
//									),
//								),
//							),
                            'facture' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/facture',
                                    'defaults' => array(
                                        'controller' => 'Order',
                                        'action' => 'facture',
                                    ),
                                ),
                            ),
                            'diagnostic' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/diagnostic',
                                    'defaults' => array(
                                        'controller' => 'Order',
                                        'action' => 'diagnostic',
                                    ),
                                ),
                            ),
                            'shipping' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/shipping',
                                    'defaults' => array(
                                        'controller' => 'Order',
                                        'action' => 'shipping',
                                    ),
                                ),
                            ),

                            'pay' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/pay',
                                    'defaults' => array(
                                        'controller' => 'Order',
                                        'action' => 'payProcess',
                                    ),
                                ),
                            ),
                            'cancelShipping' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/cancel-shipping',
                                    'defaults' => array(
                                        'controller' => 'Order',
                                        'action' => 'cancelShipping',
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'reparation' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => ':device',
                            'constraints' => array(
                                'device' => 'reparation-[A-Za-z0-9ç-]+',
                            ),
                            'defaults' => array(
                                'controller' => 'Reparation',
                                'action' => 'picker',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'brand' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '/:brand',
                                    'constraints' => array(
                                        'brand' => '[A-Za-z0-9ç-]+',
                                    ),
                                    'defaults' => array(
                                        'controller' => 'Reparation',
                                        'action' => 'picker',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'simple' => array(
                                        'type' => 'Literal',
                                        'options' => array(
                                            'route' => '_simplehtml',
                                            'defaults' => array(
                                                'controller' => 'Reparation',
                                                'action' => 'picker',
                                                'simplehtml' => true,
                                            ),
                                        ),
                                    ),
                                    'model' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/:model',
                                            'constraints' => array(
                                                'model' => '[A-Za-z0-9ç-]+',
                                            ),
                                            'defaults' => array(
                                                'controller' => 'Reparation',
                                                'action' => 'picker',
                                            ),
                                        ),
                                        'may_terminate' => true,
                                        'child_routes' => array(
                                            'simple' => array(
                                                'type' => 'Literal',
                                                'options' => array(
                                                    'route' => '_simplehtml',
                                                    'defaults' => array(
                                                        'controller' => 'Reparation',
                                                        'action' => 'picker',
                                                        'simplehtml' => true,
                                                    ),
                                                ),
                                            ),
                                            'color' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/:color',
                                                    'constraints' => array(
                                                        'color' => '[A-Za-z0-9ç-]+',
                                                    ),
                                                    'defaults' => array(
                                                        'controller' => 'Reparation',
                                                        'action' => 'picker',
                                                    ),
                                                ),
                                                'may_terminate' => true,
                                                'child_routes' => array(
                                                    'simple' => array(
                                                        'type' => 'Literal',
                                                        'options' => array(
                                                            'route' => '_simplehtml',
                                                            'defaults' => array(
                                                                'controller' => 'Reparation',
                                                                'action' => 'picker',
                                                                'simplehtml' => true,
                                                            ),
                                                        ),
                                                    ),
                                                    'failure' => array(
                                                        'type' => 'Segment',
                                                        'options' => array(
                                                            'route' => '/:failure',
                                                            'constraints' => array(
                                                                'failure' => '[A-Za-z0-9ç-]+',
                                                            ),
                                                            'defaults' => array(
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
                    //
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
                    
                    // 'language' => array(
                    //     'type'    => 'Segment',
                    //     'options' => array(
                    //         'route' => ':lang',
                    //         'defaults' => array(
                    //             'lang' => 'en', //default
                    //             'controller' => 'Index',
                    //             'action' => 'Boutiques',
                    //         ),
                    //         'constraints' => array(
                    //             'lang' => '(en|de|fr|nl)?',
                    //         ),
                    //     ),
                    // ),
                ),
            ),
        ),
    ),
    'translator' => array(
        'locale' => 'fr_FR',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/website.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
);
