<?php

namespace Tables;

use Models\UserModel;
use Database;

class UsersTable
{

    public static function getAllUsers() {
        $users = array();
        foreach(Database::fetchAll("SELECT id, name, email, password FROM users") as $user)
        {
            $users[] = (new UserModel($user["id"], $user["username"], $user["email"], $user["password"]))->toArray();
        }
        return $users;
    }

    public static function getUser($id) {
        $user = Database::fetchOne("SELECT id, name, email, password FROM users WHERE id=".$id);
        return new UserModel($user["id"], $user["username"], $user["email"], $user["password"]);
    }

    public static function getUserByName($username) {
        $user = Database::fetchOne("SELECT id, name, email, password FROM users WHERE name=".$username);
        return new UserModel($user["id"], $user["username"], $user["email"], $user["password"]);
    }

    public static function addUser(UserModel $user)
    {
        $result = Database::exec("INSERT INTO users(name, email, password_hash) VALUES('".$user->getUsername()."','".$user->getEmail()."','".$user->getPassword()."')");
        return count($result) > 0;
//         return array("error" => "Not Implemented yet");
    }

    public static function setUser($username, UserModel $user)
    {
        $result = Database::exec("UPDATE users SET name='".$user->getUsername()."',email='".$user->getEmail()."',password_hash='".$user->getPassword()."' WHERE name='".$username."'");
        return json_encode($result);
//         return array("error" => "Not Implemented yet");
    }

    public static function removeUser($id) {
        
//         return array("error" => "Not Implemented yet");
    }
}