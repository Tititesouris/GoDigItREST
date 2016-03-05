<?php

namespace Tables;

use Models\DigModel;
use Database;

class DigsTable
{
    public static function getAllDigs() 
    {
        //var_dump(Database::fetchAll("SELECT * FROM digs"));
        
        $ret = array();
        foreach(Database::fetchAll("SELECT * FROM digs") as $row)
        {
            $ret[] = (new DigModel($row['id'],$row['lon'],$row['lat'],$row['alt'],$row['name'],$row['qr_code'],0))->toArray();
        }
        return $ret;
        /*return array(
            (new DigModel(1, 2, 3, 5, "Test", "dsadasdsadada", 0))->toArray(),
            (new DigModel(2, 2, 3, 5, "Test 2", "dsadasdsadada", 0))->toArray()
        );*/
    }

    public static function getDig($id) {
        return Database::fetchOne("SELECT * FROM digs WHERE id=" . $id);
        /*return array(
            (new DigModel($id, 2, 3, 5, "Test", "dsadasdsadada", 0, false, false, false))->toArray()
        );*/
    }

    public static function addDig(DigModel $dig) {
        return (new DigModel($dig->getId(), $dig->getLat(), $dig->getLong(), $dig->getAlt(), $dig->getName(), $dig->getQrcode(), $dig->getBudget(), false, false, false))->toArray();
    }

    public static function setDig($id, DigModel $dig) {
        return (new DigModel($dig->getId(), $dig->getLat(), $dig->getLong(), $dig->getAlt(), $dig->getName(), $dig->getQrcode(), $dig->getBudget(), false, false, false))->toArray();
    }

    public static function removeDig($id) {
        return (new DigModel($id, null, null, null, null, null, null, false, false, false))->toArray();
    }

}