<?php
namespace Pages;

use Models\PuzzleModel;
use Tables\PuzzlesTable;

class Puzzles extends Page
{

    public function GET($parameters)
    {
        return array("error" => "Not Implemented yet");
    }

    public function POST($parameters)
    {
        if (!empty($parameters) && isset($parameters["name"], $parameters["description"], $parameters["qrcode"], $parameters["latitude"], $parameters["longitude"])) {
            return PuzzlesTable::addPuzzle(new PuzzleModel(6, $parameters["name"], $parameters["description"], $parameters["qrcode"], $parameters["latitude"], $parameters["longitude"]));
        }
        return array("error" => "Invalid parameters");
    }

    public function PUT($parameters)
    {
        return array("error" => "Not Implemented yet");
    }

    public function DELETE($parameters)
    {
        return array("error" => "Not Implemented yet");
    }

}