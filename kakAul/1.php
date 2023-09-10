<?php

//class
class Laptop{
    //property
    var $pemilik;
    public $merk;
    public $ukuran_layar;

    //buat methode class
    public function hidupkan_laptop(){
        echo "Hidupkan Laptop";
    }
    public function matikan_laptop(){
        echo "Matikan Laptop";
    }
}

//buat objek class
$laptop_anto = new Laptop();

//set property
$laptop_anto->pemilik="Anto";
$laptop_anto->merk="Asus";
$laptop_anto->ukuran_layar="15 inchi";

//tampilan property
echo "Laptop ini milik <b>$laptop_anto->pemilik</b>";
echo "<br>";
echo "Dengan merk <b>$laptop_anto->merk</b>";
echo "<br>";
echo "Serta berukuran <b>$laptop_anto->ukuran_layar</b>";
echo "<br>";

//tampilan methode
echo $laptop_anto->hidupkan_laptop();
echo "<br>";
echo $laptop_anto->matikan_laptop();
?>