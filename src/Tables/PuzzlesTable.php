<?php

namespace Tables;


use Models\PuzzleModel;

class PuzzlesTable
{

    public static function getAllPuzzles() 
    {
        $puzzles = array();
        foreach(Database::fetchAll("SELECT * FROM puzzles") as $puzzle)
        {
            $puzzles[] = (new PuzzleModel($puzzle["id"], $puzzle["name"], $puzzle["description"], array($puzzle["clue1"], $puzzle["clue2"], $puzzle["clue3"]), $puzzle["comments"], PuzzlesTable::getPuzzle($puzzle["puzzle_id"])))->toArray();
        }
        return $puzzles;
    }

    public static function getPuzzle($id) 
    {
        return array("error" => "Not Implemented yet");
    }

    public static function getPuzzleByQRCode($QRCode) {
        return array("error" => "Not Implemented yet");
    }

    public static function addPuzzle(PuzzleModel $puzzle)
    {
        return array("error" => "Not Implemented yet");
    }

    public static function setPuzzle($id, PuzzleModel $puzzle)
    {
        return array("error" => "Not Implemented yet");
    }

    public static function removePuzzle($id)
    {
        return array("error" => "Not Implemented yet");
    }

}