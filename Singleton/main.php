<?php

require 'Config.php';
require 'Database.php';


$config = Config::getInstance();

$host = $config->getConfig('host');
$dbname = $config->getConfig('dbname');
$username = $config->getConfig('username');
$password = $config->getConfig('password');

$dsn = "mysql:host=$host;dbname=$dbname";


$db = Database::getInstance();

$db->setConnect($dsn, $username, $password);

$result = $db->getConnection()->query('SELECT * FROM testTable');