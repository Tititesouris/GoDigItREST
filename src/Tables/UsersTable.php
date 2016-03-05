<?php

namespace Tables;

use Models\UserModel;
use Database;

class UsersTable
{

    public static function getAllUsers() {
        $ret = array();
        foreach(Database::fetchAll("SELECT * FROM users") as $row)
        {
            $ret[] = (new UserModel($row['id'],$row['name'],$row['email'],$row['password_hash']))->toArray();
        }
        return $ret;
        /*
        return array(
            (new UserModel(1, "Quentin Brault", "bloop@gmail.com", "password"))->toArray(),
            (new UserModel(2, "Potato Brault", "bloop@gmail.com", "password"))->toArray()
        );
        */
    }

    public static function getUser($id) {
        return Database::fetchOne("SELECT * FROM users WHERE id=" . $id);
        //return (new UserModel($id, "Quentin Brault", "bloop@gmail.com", "password"))->toArray();
    }

    public static function getUserByName($username) {
        return Database::fetchOne("SELECT * FROM users WHERE name=" . $username);
        //return (new UserModel(0, $username, "bloop@gmail.com", "password"))->toArray();
    }

    public static function addUser(UserModel $user)
    {
        
        //return (new UserModel($user->getId(), $user->getUsername(), $user->getEmail(), $user->getPassword()))->toArray();
    }

    public static function setUser($username, UserModel $user)
    {
        //return (new UserModel($user->getId(), $user->getUsername(), $user->getEmail(), $user->getPassword()))->toArray();
    }

    public static function removeUser($id) {
        //return (new UserModel($id, null, null, null))->toArray();
    }
}