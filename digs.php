<?php
include_once "pages/Digs.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$method = $_SERVER["REQUEST_METHOD"];
var_dump($method);
switch($method) {
    case "GET":
        var_dump(Digs::GET($_GET));
        break;
    case "POST":
        $parameters = $_POST;
        break;
    case "PUT":
        parse_str(file_get_contents("php://input"), $parameters);
        break;
    case "DELETE":
        parse_str(file_get_contents("php://input"), $parameters);
        break;
    default:
        echo "ERROR";
}