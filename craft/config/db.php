<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */


$dev = array(
    'server' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'ec_dev');

$develop = array(
    'server' => 'localhost',
    'user' => 'ec',
    'password' => 'QZVGKzy2XsEurzx6',
    'database' => 'ec_dev');

$staging = array(
    'server' => 'localhost',
    'user' => 'ec',
    'password' => 'QZVGKzy2XsEurzx6',
    'database' => 'ec_staging');

$production = array(
    'server' => 'localhost',
    'user' => 'ec',
    'password' => '',
    'database' => 'ec_production');


return array(
    '*' => array(
        'tablePrefix' => 'craft',
    ),
    '.dev' => $dev,
    'localhost' => $dev,
    '192.168.1' => $dev,
    'ec-dev.sekkithub.com' => $develop,
    'ec-stage.sekkithub.com' => $staging,
    'www.ec.com' => $production
);
