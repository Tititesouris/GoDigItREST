<?php
namespace Pages;

use Models\PuzzleModel;
use Tables\PuzzlesTable;

class Puzzles extends Page
{

    public function GET($parameters)
    {
        if (empty($parameters)) {
            return PuzzlesTable::getAllPuzzles();
        }
        elseif (isset($parameters["id"])) {
            return PuzzlesTable::getPuzzle($parameters["id"]);
        }
        /*elseif (isset($parameters["name"])) {
            return PuzzlesTable::getPuzzleByName($parameters["name"]);
        }*/
        return array("error" => "Invalid parameters");
    }

    public function POST($parameters)
    {
        if (!empty($parameters) && isset($parameters["name"], $parameters["description"],/* $parameters["qrcode"],*/ $parameters["latitude"], $parameters["longitude"])) {
            return PuzzlesTable::addPuzzle(new PuzzleModel(6, $parameters["name"], $parameters["description"],/* $parameters["qrcode"],*/ $parameters["latitude"], $parameters["longitude"]));
        }
        return array("error" => "Invalid parameters");
    }

    public function PUT($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"], $parameters["name"], $parameters["description"], $parameters["qrcode"], $parameters["latitude"], $parameters["longitude"])) {
            return false;
        }
        return array("error" => "Invalid parameters");
    }

    public function DELETE($parameters)
    {
        return array("error" => "Not Implemented yet");
    }

}