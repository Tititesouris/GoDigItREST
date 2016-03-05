<?php
namespace Models;


class PuzzleModel extends AbstractModel
{
    private $name;

    private $description;

    private $QRCode;

    private $latitude;

    private $longitude;
    
    public function __construct($id, $name, $description, $QRCode, $latitude, $longitude)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->description = $description;
        $this->QRCode = $QRCode;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function toArray()
    {
        return array(
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "qrcode" => $this->QRCode,
            "latitude" => $this->latitude,
            "longitude" => $this->longitude
        );
    }

}