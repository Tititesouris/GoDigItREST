<?php
namespace Models;


class UserModel extends AbstractModel
{

    private $username;

    private $email;

    private $password;

    public function __construct($id, $name, $email, $password)
    {
        parent::__construct($id);
        $this->username = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function toArray()
    {
        return array(
            "id" => $this->id,
            "username" => $this->username,
            "email" => $this->email,
            "password" => $this->password
        );
    }

}