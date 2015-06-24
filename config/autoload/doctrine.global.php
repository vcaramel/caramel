<?php
/**
 * Created by PhpStorm.
 * User: viet
 * Date: 19/06/15
 * Time: 17:03
 */
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => 3306,
                    'dbname' => 'caramel',
                ),
            ),
        )
    ));