<?php

namespace Tables;


use Models\PuzzleModel;

class PuzzlesTable
{

    public static function getAllPuzzles() {
        return false;
    }

    public static function getPuzzle($id) {
        return false;
    }

    public static function getPuzzleByQRCode($QRCode) {
        return false;
    }

    public static function addPuzzle(PuzzleModel $puzzle)
    {
        return false;
    }

    public static function setPuzzle($id, PuzzleModel $puzzle)
    {
        return false;
    }

    public static function removePuzzle($id)
    {
        return false;
    }

}