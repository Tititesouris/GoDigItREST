<?php
namespace Pages;

use Tables\DigsTable;

class Digs extends RESTObject
{

    public function GET($parameters)
    {
        if (empty($parameters)) {
            return DigsTable::getAllDigs();
        }
        elseif (isset($parameters["id"])) {
            return DigsTable::getDig($parameters["id"]);
        }
        return false;
    }

    public function POST($parameters)
    {
        // TODO: Implement POST() method.
    }

    public function PUT($parameters)
    {
        // TODO: Implement PUT() method.
    }

    public function DELETE($parameters)
    {
        // TODO: Implement DELETE() method.
    }

}