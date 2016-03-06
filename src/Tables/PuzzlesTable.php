<?php

namespace Tables;


use Models\PuzzleModel;
use Database;

class PuzzlesTable
{

    public static function getAllPuzzles() 
    {
        $puzzles = array();
        foreach(Database::fetchAll("SELECT * FROM puzzles") as $puzzle)
        {
            $puzzles[] = (new PuzzleModel($puzzle["id"], $puzzle["name"], $puzzle["description"], $puzzle["qr_code"] array($puzzle["clue1"], $puzzle["clue2"], $puzzle["clue3"]), $puzzle["comments"], PuzzlesTable::getPuzzle($puzzle["puzzle_id"])))->toArray();
        }
        return $puzzles;
    }

    public static function getPuzzle($id) 
    {
        return Database::fetchOne("SELECT * FROM puzzles WHERE id=" . $id);
    }

    public static function getPuzzleByQRCode($QRCode) 
    {
        return Database::fetchOne("SELECT * FROM puzzles WHERE =" . $id);
    }

    public static function addPuzzle(PuzzleModel $puzzle)
    {
        $result = Database::exec("INSERT INTO puzzles(name, description, qr_code, latitude, longitude, id) VALUES('".$puzzle->getName()."','".$puzzle->getDescription()."','".$puzzle->getQRCode()."','".$puzzle->getLatitude()."','".$puzzle->getLongitude()."'),'".$puzzle->getId()."'");
        return array("name" => $puzzle->getName());
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