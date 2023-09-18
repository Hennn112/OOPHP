<?php

class Toko{
    protected function beli(){
        return "Yey beli baru";
    }
    //echo ini baru bisa
}
//turunkan class toko ke laptop
class Laptop extends Toko{
    public function beli_laptop(){
        return $this->beli();
    }
}

class komputer extends Laptop{
    public function beli_komputer(){
        return $this->beli_laptop();
    }
}
//buat objek dari class laptop (inheritant)
$laptop_baru = new Laptop();
$toko = new Toko();
$belikomputer = new komputer();
//panggil methode objek
echo "<br>";
echo $laptop_baru->beli_laptop();
echo "<br>";
echo $belikomputer->beli_komputer();
?>