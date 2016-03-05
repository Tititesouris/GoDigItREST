<?php

namespace Tables;

use Models\UserModel;

class UsersTable
{

    public static function getAllUsers() {
        return array(
            (new UserModel(1, "Quentin Brault", "bloop@gmail.com", "password"))->toArray(),
            (new UserModel(2, "Potato Brault", "bloop@gmail.com", "password"))->toArray()
        );
    }

    public static function getUser($id) {
        return (new UserModel($id, "Quentin Brault", "bloop@gmail.com", "password"))->toArray();
    }

    public static function addUser(UserModel $user)
    {
        return (new UserModel($user->getId(), $user->getName(), $user->getEmail(), $user->getPassword()))->toArray();
    }

    public static function setUser($id, UserModel $user)
    {
        return (new UserModel($user->getId(), $user->getName(), $user->getEmail(), $user->getPassword()))->toArray();
    }

    public static function removeUser($id) {
        return (new UserModel($id, null, null, null))->toArray();
    }
}