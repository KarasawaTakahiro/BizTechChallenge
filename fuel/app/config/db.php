<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'active' => 'dev',

    'dev' => array(
        'type' => 'mysqli',
        'connection' => array(
            'hostname' => 'localhost',
            'database' => 'biztechpre',
            'username' => 'root',
            'password' => 'vagrant',
            'persistent' => FALSE,
        ),
        'charset' => 'utf8',
        'caching' => false,
        'table_prefix' => ''
    ),

);

