<?php
include_once("models/DigModel.php");

class DigsTable
{
    public static function getAllDigs() {
        return array(
            new DigModel(1, 2, 3, 5, "Test", "dsadasdsadada", 0),
            new DigModel(2, 2, 3, 5, "Test", "dsadasdsadada", 0)
        );
    }

    public static function getDig($id) {
        return array(
            new DigModel($id, 2, 3, 5, "Test", "dsadasdsadada", 0)
        );
    }

    public static function addDig($dig) {

    }

}