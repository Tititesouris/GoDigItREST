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

    private $placed;

    private $found;

    private $solved;

    public function __construct($id, $long, $lat, $alt, $name, $qrcode, $budget, $placed, $found, $solved)
    {
        parent::__construct($id);
        $this->long = $long;
        $this->lat = $lat;
        $this->alt = $alt;
        $this->name = $name;
        $this->qrcode = $qrcode;
        $this->budget = $budget;
        $this->placed = $placed;
        $this->found = $found;
        $this->solved = $solved;
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

    public function getPlaced()
    {
        return $this->placed;
    }

    public function setPlaced($placed)
    {
        $this->placed = $placed;
    }

    public function getFound()
    {
        return $this->found;
    }

    public function setFound($found)
    {
        $this->found = $found;
    }

    public function getSolved()
    {
        return $this->solved;
    }

    public function setSolved($solved)
    {
        $this->solved = $solved;
    }

    public function toArray() {
        return array(
            "id" => $this->id,
            "long" => $this->long,
            "lat" => $this->lat,
            "alt" => $this->alt,
            "name" => $this->name,
            "qrcode" => $this->qrcode,
            "budget" => $this->budget,
            "placed" => $this->placed,
            "found" => $this->found,
            "solved" => $this->solved
        );
    }

}