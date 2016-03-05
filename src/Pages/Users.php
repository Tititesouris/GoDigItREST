<?php

namespace Pages;

use Tables\UsersTable;

class Users extends RESTObject
{

    public function GET($parameters)
    {
        if (empty($parameters)) {
            return UsersTable::getAllUsers();
        }
        elseif (isset($parameters["id"])) {
            return UsersTable::getUser($parameters["id"]);
        }
        return array("error" => "Invalid parameters");
    }

    public function POST($parameters)
    {
        // TODO: Implement POST() method.
        return array("error" => "Invalid parameters");
    }

    public function PUT($parameters)
    {
        // TODO: Implement PUT() method.
        return array("error" => "Invalid parameters");
    }

    public function DELETE($parameters)
    {
        // TODO: Implement DELETE() method.
        return array("error" => "Invalid parameters");
    }

}