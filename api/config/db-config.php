<?php

if (YII_ENV == 'production') {
    return [
        'class'    => 'yii\db\Connection',
        'dsn'      => 'mysql:host=192.168.0.120;dbname=restro',
        'username' => 'root',
        'password' => 'abc123',
        'charset'  => 'utf8',
    ];
} else {
    return [
        'class'    => 'yii\db\Connection',
        'dsn'      => 'mysql:host=192.168.0.120;dbname=restro',
        'username' => 'root',
        'password' => 'abc123',
        'charset'  => 'utf8',
    ];
}
