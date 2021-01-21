<?php
class Animal
{
    public $name;
    public $legs = 2;
    public $cold_blooded = "false";
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }
    public function getColdBlooded()
    {
        return $this->cold_blooded;
    }
}