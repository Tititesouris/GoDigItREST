<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__."/vendor/autoload.php";

$method = $_SERVER["REQUEST_METHOD"];
var_dump($method);
switch($method) {
    case "GET":
        var_dump((new \Pages\Digs())->GET($_GET));
        break;
    case "POST":
        var_dump((new \Pages\Digs())->POST($_POST));
        break;
    case "PUT":
        var_dump((new \Pages\Digs())->PUT(file_get_contents("php://input")));
        break;
    case "DELETE":
        var_dump((new \Pages\Digs())->DELETE(file_get_contents("php://input")));
        break;
    default:
        var_dump((new \Pages\Digs())->OTHER());
}