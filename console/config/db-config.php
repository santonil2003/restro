<?php

if (YII_ENV == 'production') {
    return [
        'class'    => 'yii\db\Connection',
        'dsn'      => 'mysql:host=localhost;dbname=restro',
        'username' => 'root',
        'password' => 'root',
        'charset'  => 'utf8',
    ];
} else {
    return [
        'class'    => 'yii\db\Connection',
        'dsn'      => 'mysql:host=localhost;dbname=restro',
        'username' => 'root',
        'password' => 'root',
        'charset'  => 'utf8',
    ];
}
