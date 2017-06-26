<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return array(
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=' . __DB_NAME__ . ';host=' . __DB_HOST__,
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
    'session' => array(
        'config' => array(
            'class' => 'Zend\Session\Config\SessionConfig',
            'options' => array(
                'name' => 'wefix',
            ),
        ),
        'storage' => 'Zend\Session\Storage\SessionArrayStorage',
    ),
    'translation' => array (
        'available' => ['fr','en','de','nl'],
        'dictionnary' => array (
            'fr' => 'fr_FR',
            'en' => 'en_US',
            'de' => 'de_DE',
            'nl' => 'nl_NL'
        ),
        'database' => array (
            'fr' => 1,
            'en' => 2,
            'de' => 3,
            'nl' => 4
        ),
        'defaultLanguage' => 'fr'
    ),
    'be2bill' => array(
        // Real paiements identifiers
        'identifier' => 'EMGK',
        'mdp' => 'aRmjcNQ=l8$)YBN4',
        'formUrl' => 'https://secure-magenta1.be2bill.com/front/form/process.php',

        // Test paiements identifiers
        // 'identifier' => 'WEFIX',
        // 'mdp' => 'T}A/c!<NYNR0!0i&',
        // 'formUrl' => 'https://secure-test.be2bill.com/front/form/process.php',
    ),
);
