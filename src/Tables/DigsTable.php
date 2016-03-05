<?php

namespace Tables;

use Models\DigModel;

class DigsTable
{
    public static function getAllDigs() {
        return array(
            new DigModel(1, 2, 3, 5, "Test", "dsadasdsadada", 0),
            new DigModel(2, 2, 3, 5, "Test", "dsadasdsadada", 0)
        );
    }

    public static function getDig($id) {
        return array(
            new DigModel($id, 2, 3, 5, "Test", "dsadasdsadada", 0)
        );
    }

    public static function addDig(DigModel $dig) {
        return new DigModel($dig->getId(), $dig->getLat(), $dig->getLong(), $dig->getAlt(), $dig->getName(), $dig->getQrcode(), $dig->getBudget());
    }

    public static function setDig($id, DigModel $dig) {
        return new DigModel($dig->getId(), $dig->getLat(), $dig->getLong(), $dig->getAlt(), $dig->getName(), $dig->getQrcode(), $dig->getBudget());
    }

    public static function removeDig($id) {
        return new DigModel($id, null, null, null, null, null, null);
    }

}