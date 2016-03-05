<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__."/vendor/autoload.php";

$method = $_SERVER["REQUEST_METHOD"];
var_dump($method);
switch($method) {
    case "GET":
        var_dump(new \Pages\Digs($_GET));
        break;
    case "POST":
        // $_POST;
        break;
    case "PUT":
        // parse_str(file_get_contents("php://input"), $parameters);
        break;
    case "DELETE":
        // parse_str(file_get_contents("php://input"), $parameters);
        break;
    default:
        echo "ERROR";
}