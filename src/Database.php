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
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }
    
    public static function fetchOne($sql)
    {
        $db = Database::getConnection();
        $stmt = $db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
    }
}