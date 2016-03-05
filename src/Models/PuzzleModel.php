<?php
namespace Models;


class PuzzleModel extends AbstractModel
{

    private $name;

    private $description;

    private $QRCode;

    private $latitude;

    private $longitude;

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