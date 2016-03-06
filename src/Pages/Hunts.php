<?php
namespace Pages;

use Models\HuntModel;
use Tables\HuntsTable;

class Hunts extends Page
{

    public function GET($parameters)
    {
        if (empty($parameters)) {
            return HuntsTable::getAllHunts();
        }
        elseif (isset($parameters["id"])) {
            return HuntsTable::getHunt($parameters["id"]);
        }
        elseif (isset($parameters["qrcode"])) {
            return HuntsTable::getHuntByQRCode($parameters["qrcode"]);
        }
        return array("error" => "Invalid parameters");
    }

    public function POST($parameters)
    {
        if (!empty($parameters) && isset($parameters["name"], $parameters["qrcode"], $parameters["clue1"], $parameters["clue2"], $parameters["clue3"], $parameters["comments"], $parameters["puzzle_id"])) {
            return HuntsTable::addHunt(new HuntModel(6, $parameters["name"], $parameters["qrcode"], array($parameters["clue1"], $parameters["clue2"], $parameters["clue3"]), $parameters["comments"], $parameters["puzzle_id"]));
        }
        return array("error" => "Invalid parameters", "parameters");
    }

    public function PUT($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"], $parameters["long"], $parameters["lat"], $parameters["alt"], $parameters["name"], $parameters["qrcode"], $parameters["budget"], $parameters["placed"], $parameters["found"], $parameters["solved"])) {
            return false;
        }
        return array("error" => "Invalid parameters");
    }

    public function DELETE($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"])) {
            return false;
        }
        return array("error" => "Invalid parameters");
    }

}