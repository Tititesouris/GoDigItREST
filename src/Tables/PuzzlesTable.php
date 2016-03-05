<?php

namespace Tables;


use Models\PuzzleModel;

class PuzzlesTable
{

    public static function getAllPuzzles() {
        return array("error" => "Not Implemented yet");;
    }

    public static function getPuzzle($id) {
        return array("error" => "Not Implemented yet");;
    }

    public static function getPuzzleByQRCode($QRCode) {
        return array("error" => "Not Implemented yet");;
    }

    public static function addPuzzle(PuzzleModel $puzzle)
    {
        return array("error" => "Not Implemented yet");;
    }

    public static function setPuzzle($id, PuzzleModel $puzzle)
    {
        return array("error" => "Not Implemented yet");;
    }

    public static function removePuzzle($id)
    {
        return array("error" => "Not Implemented yet");;
    }

}