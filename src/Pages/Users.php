<?php

namespace Pages;

use Models\UserModel;
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
        if (!empty($parameters) && isset($parameters["name"], $parameters["email"], $parameters["password"])) {
            return UsersTable::addUser(new UserModel(6, $parameters["name"], $parameters["email"], $parameters["password"]));
        }
        return array("error" => "Invalid parameters");
    }

    public function PUT($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"], $parameters["name"], $parameters["email"], $parameters["password"])) {
            return UsersTable::setUser($parameters["id"], new UserModel($parameters["id"], $parameters["name"], $parameters["email"], $parameters["password"]));
        }
        return array("error" => "Invalid parameters");
    }

    public function DELETE($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"])) {
            return UsersTable::removeUser($parameters["id"]);
        }
        return array("error" => "Invalid parameters");
    }

}