<?php
require_once('Animal.php');
class frog extends Animal
{
    public $legs = 4;
    public $cold_blooded = "true";
    public function jump()
    {
        echo "hop hop";
    }
}