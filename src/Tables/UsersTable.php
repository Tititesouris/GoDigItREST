<?php

namespace Tables;

use Models\UserModel;
use Database;

class UsersTable
{

    public static function getAllUsers() {
        $users = array();
        foreach(Database::fetchAll("SELECT id, username, email, password FROM users") as $user)
        {
            $users[] = (new UserModel($user["id"], $user["username"], $user["email"], $user["password"]))->toArray();
        }
        return $users;
    }

    public static function getUser($id) {
        $user = Database::fetchOne("SELECT id, username, email, password FROM users WHERE id=".$id);
        return new UserModel($user["id"], $user["username"], $user["email"], $user["password"]);
    }

    public static function getUserByName($username) {
        $user = Database::fetchOne("SELECT id, username, email, password FROM users WHERE username=".$username);
        return new UserModel($user["id"], $user["username"], $user["email"], $user["password"]);
    }

    public static function addUser(UserModel $user)
    {
        return array("error" => "Not Implemented yet");
    }

    public static function setUser($username, UserModel $user)
    {
        return array("error" => "Not Implemented yet");
    }

    public static function removeUser($id) {
        return array("error" => "Not Implemented yet");
    }
}