<?php

namespace Tables;

use Models\HuntModel;

class HuntsTable
{
    public static function getAllHunts() {
        return array(
            (new HuntModel(1, "Test", "r4nd0mqrc0d3", array("What", "is", "love"), "Get some change with you", 7))->toArray(),
            (new HuntModel(1, "Test", "r4nd0mqrc0d3", array("What", "is", "love"), "Get some change with you", 7))->toArray(),
        );
    }

    public static function getHunt($id) {
        return false;
    }

    public static function getHuntByQRCode($QRCode) {
        return false;
    }

    public static function addHunt(HuntModel $dig)
    {
        return false;
    }

    public static function setHunt($id, HuntModel $dig)
    {
        return false;
    }

    public static function removeHunt($id)
    {
        return false;
    }

}