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
        return false;
    }

    public function POST($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"], $parameters["long"], $parameters["lat"], $parameters["alt"], $parameters["name"], $parameters["qrcode"], $parameters["budget"])) {
            return DigsTable::addDig(new DigModel($parameters["id"], $parameters["long"], $parameters["lat"], $parameters["alt"], $parameters["name"], $parameters["qrcode"], $parameters["budget"]));
        }
        return false;
    }

    public function PUT($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"], $parameters["long"], $parameters["lat"], $parameters["alt"], $parameters["name"], $parameters["qrcode"], $parameters["budget"])) {
            return DigsTable::setDig($parameters["id"], new DigModel($parameters["id"], $parameters["long"], $parameters["lat"], $parameters["alt"], $parameters["name"], $parameters["qrcode"], $parameters["budget"]));
        }
        return false;
    }

    public function DELETE($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"])) {
            return DigsTable::removeDig($parameters["id"]);
        }
        return false;
    }

}