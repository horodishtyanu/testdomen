<?php
$dir = $_SERVER["DOCUMENT_ROOT"]."/testdomen/classes";
$obj = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir),RecursiveIteratorIterator::SELF_FIRST);
foreach($obj as $name => $object){
    if (is_file($name)){
        include_once($name);
    }
}

$con = new \classes\transport\Connect();
$auth = new \classes\main\AuthUser();
$method="authLogin";
$params=json_encode((object)["login"=>"demo","password"=>"demo"]);

var_dump($auth->getToken($params));