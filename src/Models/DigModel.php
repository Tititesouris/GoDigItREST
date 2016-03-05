<?php
namespace Models;

class DigModel extends AbstractModel
{

    private $long;

    private $lat;

    private $alt;

    private $name;

    private $qrcode;

    private $budget;

    public function __construct($id, $long, $lat, $alt, $name, $qrcode, $budget)
    {
        parent::__construct($id);
        $this->long = $long;
        $this->lat = $lat;
        $this->alt = $alt;
        $this->name = $name;
        $this->qrcode = $qrcode;
        $this->budget = $budget;
    }

    public function getLong()
    {
        return $this->long;
    }

    public function setLong($long)
    {
        $this->long = $long;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    public function getAlt()
    {
        return $this->alt;
    }

    public function setAlt($alt)
    {
        $this->alt = $alt;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getQrcode()
    {
        return $this->qrcode;
    }

    public function setQrcode($qrcode)
    {
        $this->qrcode = $qrcode;
    }

    public function getBudget()
    {
        return $this->budget;
    }

    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    public function toArray() {
        return array(
            "id" => $this->id,
            "long" => $this->long,
            "lat" => $this->lat,
            "alt" => $this->alt,
            "name" => $this->name,
            "qrcode" => $this->qrcode,
            "budget" => $this->budget
        );
    }

}