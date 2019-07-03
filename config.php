<?php
session_start();
//function connect()
//{
//    $host = '127.0.0.1';
//    $db = 'mysite';
//    $user = 'root';
//    $pass = '';
//    $charset = 'utf8mb4';
//
//    $options = [
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//        PDO::ATTR_EMULATE_PREPARES => false,
//    ];
//    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//    try {
//        return new PDO($dsn, $user, $pass, $options);
//    } catch (\PDOException $e) {
//        throw new \PDOException($e->getMessage(), (int)$e->getCode());
//    }
//}

////connect to data base
define("hostName","127.0.0.1");
define("dbname","shop");
define("dbuser","root");
define("dbpassword","");
// end db
define("base_url","http://" . $_SERVER['SERVER_NAME'] . "/shop/");
define("base_dir",dirname(__FILE__)."/");
include_once "autoloader.php";
//include 'jdf.php-2.70-[jdf.scr.ir]/jdf.php';