<?php
namespace Pages;

use Models\DigModel;
use Tables\DigsTable;

class Digs extends RESTObject
{

    public function GET($parameters)
    {
        if (empty($parameters)) {
            return DigsTable::getAllDigs();
        }
        elseif (isset($parameters["id"])) {
            return DigsTable::getDig($parameters["id"]);
        }
        return array("error" => "Invalid parameters");
    }

    public function POST($parameters)
    {
        if (!empty($parameters) && isset($parameters["long"], $parameters["lat"], $parameters["alt"], $parameters["name"], $parameters["qrcode"], $parameters["budget"], $parameters["placed"], $parameters["found"], $parameters["solved"])) {
            return DigsTable::addDig(new DigModel(6, $parameters["long"], $parameters["lat"], $parameters["alt"], $parameters["name"], $parameters["qrcode"], $parameters["budget"], $parameters["placed"], $parameters["found"], $parameters["solved"]));
        }
        return array("error" => "Invalid parameters");
    }

    public function PUT($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"], $parameters["long"], $parameters["lat"], $parameters["alt"], $parameters["name"], $parameters["qrcode"], $parameters["budget"], $parameters["placed"], $parameters["found"], $parameters["solved"])) {
            return DigsTable::setDig($parameters["id"], new DigModel($parameters["id"], $parameters["long"], $parameters["lat"], $parameters["alt"], $parameters["name"], $parameters["qrcode"], $parameters["budget"], $parameters["placed"], $parameters["found"], $parameters["solved"]));
        }
        return array("error" => "Invalid parameters");
    }

    public function DELETE($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"])) {
            return DigsTable::removeDig($parameters["id"]);
        }
        return array("error" => "Invalid parameters");
    }

}