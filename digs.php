<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__."/vendor/autoload.php";

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
    case "GET":
        echo json_encode((new \Pages\Digs())->GET($_GET));
        break;
    case "POST":
        echo json_encode((new \Pages\Digs())->POST($_POST));
        break;
    case "PUT":
        echo json_encode((new \Pages\Digs())->PUT(file_get_contents("php://input")));
        break;
    case "DELETE":
        echo json_encode((new \Pages\Digs())->DELETE(file_get_contents("php://input")));
        break;
    default:
        echo json_encode((new \Pages\Digs())->OTHER());
}