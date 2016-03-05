<?php

class Database
{
    private static $connection = null;
    
    public static function getConnection()
    {
        if (!isset($connection))
        {
            $connection = new PDO('mysql:host=localhost;dbname=godigit;charset=utf8mb4', 'godigit-user', 'swordfish'); 
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $connection;
    }
    
    public static function fetchAll($sql)
    {
        $db = Database::getConnection();
        $stmt = $db->query($sql);
        ret = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($ret);
    }
    
    public static function fetchOne($sql)
    {
        $db = Database::getConnection();
        $stmt = $db->query($sql);
        $ret = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
        var_dump($ret);
    }
}