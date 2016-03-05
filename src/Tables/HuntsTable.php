<?php

namespace Tables;

use Database;
use Models\HuntModel;

class HuntsTable
{
    public static function getAllHunts() {
        $hunts = array();
        foreach(Database::fetchAll("SELECT id, name, qrcode, clue1, clue2, clue3, comments, puzzle_id FROM hunts") as $hunt)
        {
            $hunts[] = (new HuntModel($hunt["id"], $hunt["name"], $hunt["qrcode"], array($hunt["clue1"], $hunt["clue2"], $hunt["clue3"]), $hunt["comments"], PuzzlesTable::getPuzzle($hunt["puzzle_id"])))->toArray();
        }
        return $hunts;
    }

    public static function getHunt($id) {
        $hunt = Database::fetchOne("SELECT id, name, qrcode, clue1, clue2, clue3, comments, puzzle_id FROM hunts WHERE id=".$id);
        return (new HuntModel($hunt["id"], $hunt["name"], $hunt["qrcode"], array($hunt["clue1"], $hunt["clue2"], $hunt["clue3"]), $hunt["comments"], PuzzlesTable::getPuzzle($hunt["puzzle_id"])))->toArray();
    }

    public static function getHuntByQRCode($QRCode) {
        return array("error" => "Not Implemented yet");;
    }

    public static function addHunt(HuntModel $dig)
    {
        return array("error" => "Not Implemented yet");;
    }

    public static function setHunt($id, HuntModel $dig)
    {
        return array("error" => "Not Implemented yet");;
    }

    public static function removeHunt($id)
    {
        return array("error" => "Not Implemented yet");;
    }

}