<?php
namespace Models;

class HuntModel extends AbstractModel
{

    private $name;
    private $QRCode;
    private $clues;
    private $comments;
    private $puzzle;
    
    public function __construct($id, $name, $QRCode, $clues, $comments, $puzzle)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->QRCode = $QRCode;
        $this->clues = $clues;
        $this->comments = $comments;
        $this->puzzle = $puzzle;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getQRCode()
    {
        return $this->QRCode;
    }

    public function setQRCode($QRCode)
    {
        $this->QRCode = $QRCode;
    }

    public function getClues()
    {
        return $this->clues;
    }

    public function setClues($clues)
    {
        $this->clues = $clues;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    public function getPuzzle()
    {
        return $this->puzzle;
    }

    public function setPuzzle($puzzle)
    {
        $this->puzzle = $puzzle;
    }

    public function toArray() {
        return array(
            "id" => $this->id,
            "name" => $this->name,
            "qrcode" => $this->QRCode,
            "clues" => $this->clues,
            "comments" => $this->comments,
            "puzzle" => $this->puzzle
        );
    }

}