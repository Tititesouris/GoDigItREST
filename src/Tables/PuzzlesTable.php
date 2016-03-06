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
            $puzzles[] = (new PuzzleModel($puzzle['id'], $puzzle['name'], $puzzle['description'], $puzzle['qr_code'], $puzzle['latitude'], $puzzle['longitude']))->toArray();
        }
        return $puzzles;
    }

    public static function getPuzzle($id) 
    {
        $puzzle = Database::fetchOne("SELECT * FROM puzzles WHERE id=" . $id);
        return (new PuzzleModel($puzzle['id'], $puzzle['name'], $puzzle['description'], $puzzle['qr_code'], $puzzle['latitude'], $puzzle['longitude']))->toArray();
    }

    public static function getPuzzleByQRCode($QRCode) 
    {
        $puzzle = Database::fetchOne("SELECT * FROM puzzles WHERE qr_code=" . $QRCode);
        return (new PuzzleModel($puzzle['id'], $puzzle['name'], $puzzle['description'], $puzzle['qr_code'], $puzzle['latitude'], $puzzle['longitude']))->toArray();
    }

    public static function addPuzzle(PuzzleModel $puzzle)
    {
        $result = Database::exec("INSERT INTO puzzles(name, description, qr_code, latitude, longitude) VALUES('".$puzzle->getName()."','".$puzzle->getDescription()."','".$puzzle->getQRCode()."','".$puzzle->getLatitude()."','".$puzzle->getLongitude()."')");
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