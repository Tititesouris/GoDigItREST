<?php

namespace Tables;

use Database;
use Models\HuntModel;

class HuntsTable
{
    public static function getAllHunts() {
        $hunts = array();
        foreach(Database::fetchAll("SELECT id, name, qr_code, clue1, clue2, clue3, comments, puzzle_id FROM hunts") as $hunt)
        {
            $hunts[] = (new HuntModel($hunt["id"], $hunt["name"], $hunt["qrcode"], array($hunt["clue1"], $hunt["clue2"], $hunt["clue3"]), $hunt["comments"], PuzzlesTable::getPuzzle($hunt["puzzle_id"])))->toArray();
        }
        return $hunts;
    }

    public static function getHunt($id) {
        $hunt = Database::fetchOne("SELECT id, name, qr_code, clue1, clue2, clue3, comments, puzzle_id FROM hunts WHERE id=".$id);
        return (new HuntModel($hunt["id"], $hunt["name"], $hunt["qrcode"], array($hunt["clue1"], $hunt["clue2"], $hunt["clue3"]), $hunt["comments"], PuzzlesTable::getPuzzle($hunt["puzzle_id"])))->toArray();
    }

    public static function getHuntByQRCode($QRCode) {
        $hunt = Database::fetchOne("SELECT id, name, qr_code, clue1, clue2, clue3, comments, puzzle_id FROM hunts WHERE qrcode".$QRCode);
        return (new HuntModel($hunt["id"], $hunt["name"], $hunt["qrcode"], array($hunt["clue1"], $hunt["clue2"], $hunt["clue3"]), $hunt["comments"], PuzzlesTable::getPuzzle($hunt["puzzle_id"])))->toArray();
    }

    public static function addHunt(HuntModel $dig)
    {
        $result = Database::exec("INSERT INTO hunts(id, name, qr_code, clue1, clue2, clue3, comments, puzzle_id) VALUES(".$dig->getId().",".$dig->getName().",".$dig->getQRCode().",".$dig->getClues()[0].",".$dig->getClues()[1].",".$dig->getClues()[2].",".$dig->getComments().",".$dig->getPuzzle()->getId().")");
        return len($result) > 0;
        //return array("error" => "Not Implemented yet");
    }

    public static function setHunt($id, HuntModel $dig)
    {
        $result = Database::exec("UPDATE hunts SET name='".$dig->getName()."', qr_code='".$dig->getQRCode()."', clue1='".$dig->getClues
        ()[0]."', clue2='".$dig->getClues()[1]."', clue3='".$dig->getClues()[2]."', comments='".$dig->getComments()."', puzzle_id='".$dig->getPuzzle()->getId()."')");
        return len($result) > 0;
        //return array("error" => "Not Implemented yet");
    }

    public static function removeHunt($id)
    {
        $result = Database::exec("DELETE FROM hunts WHERE id=".$id);
        return len($result) > 0;
        //return array("error" => "Not Implemented yet");
    }

}