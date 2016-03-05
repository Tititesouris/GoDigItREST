<?php
include_once "RESTObject.php";
include_once "tables/DigsTable.php";

class Digs extends RESTObject
{

    public static function GET($parameters)
    {
        if (empty($parameters)) {
            return DigsTable::getAllDigs();
        }
        elseif (isset($parameters["id"])) {
            return DigsTable::getDig($parameters["id"]);
        }
        return false;
    }

    public static function POST($parameters)
    {
        // TODO: Implement POST() method.
    }

    public static function PUT($parameters)
    {
        // TODO: Implement PUT() method.
    }

    public static function DELETE($parameters)
    {
        // TODO: Implement DELETE() method.
    }

}