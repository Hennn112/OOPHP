<?php

class Visibility{

    public $public = 'public'; //semua class
    protected $protected = 'protected'; //class itu sendiri dan class turunan
    private $private = 'private'; //class sendiri

    function CetakProperti(){ //berjalan karena di execute di class
        echo "Akses dari dalam class <br>";
        echo "public : ".$this->public."<br>";
        echo "protected : ".$this->protected."<br>";
        echo "private : ".$this->private."<br>";
    }
}

$obj = new Visibility();
$obj->CetakProperti();
echo "<br> Pengaksesan dari luar class <br>";
echo "public : ".$obj->public."<br>";