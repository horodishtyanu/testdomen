<?php
$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'].'/testdomen/';
define('CLASS_DIR', '../classes');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_extensions('.php');
spl_autoload_register();
session_start();

if (!isset($_SESSION['userToken']) && $_SERVER['REQUEST_URI'] !== '/testdomen/login.php'){
    header('Location: /testdomen/login.php');
}
if (isset($_POST['event'])){
    print_r(\classes\transport\AjaxParser::parser($_POST));
    die;
}
$con = new \classes\transport\Connect();
$auth = new \classes\main\AuthUser();