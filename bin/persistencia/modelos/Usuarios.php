<?php

class Usuarios extends ModeloGenerico
{
    protected $id;
    protected $name;
    protected $phone;
    protected $adress;
    protected $email;

    public function __construct($propiedades = null)
    {
        parent::__construct("user", Usuarios::class, $propiedades);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getAdress()
    {
        return $this->adress;
    }
    public function getEmail()
    {
        return $this->email;
    }

    // Set a de valores

    public function setId($id)
    {
        $this->id=$id;
    }

    public function setName($name)
    {
        $this->name=$name;
    }
    public function setPhone($phone)
    {
        $this->phone=$phone;
    }
    public function setAdress($adress)
    {
        $this->adress=$adress;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
}
