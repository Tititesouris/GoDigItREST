<?php

namespace Pages;

use Models\UserModel;
use Tables\UsersTable;

class Users extends Page
{

    public function GET($parameters)
    {
        if (empty($parameters)) {
            return UsersTable::getAllUsers();
        }
        elseif (isset($parameters["id"])) {
            return UsersTable::getUser($parameters["id"]);
        }
        elseif (isset($parameters["username"])) {
            return UsersTable::getUserByName($parameters["username"]);
        }
        return array("error" => "Invalid parameters");
    }

    public function POST($parameters)
    {
        if (!empty($parameters) && isset($parameters["username"], $parameters["email"], $parameters["password"])) {
            return UsersTable::addUser(new UserModel(6, $parameters["username"], $parameters["email"], $parameters["password"]));
        }
        return array("error" => "Invalid parameters");
    }

    public function PUT($parameters)
    {
        if (!empty($parameters) && isset($parameters["username"], $parameters["email"], $parameters["password"])) 
        {
            return UsersTable::setUser($parameters["username"], new UserModel(0, $parameters["username"], $parameters["email"], $parameters["password"]));
        }
        return array("error" => "Invalid parameters");
    }

    public function DELETE($parameters)
    {
        if (!empty($parameters) && isset($parameters["id"])) 
        {
            return UsersTable::removeUser($parameters["id"]);
        }
        return array("error" => "Invalid parameters");
    }

}