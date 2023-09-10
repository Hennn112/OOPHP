<?php

interface bangunDatar{
    public function luasKotak();
}

class luas implements bangunDatar{
    public $sisi1,
            $sisi2;

    public function __construct($sisi1, $sisi2) {
        $this->sisi1 = $sisi1;
        $this->sisi2 = $sisi2;

    }

    public function luasKotak()
    {
       $hasil ="Ini adalah luas dari sebuah Kotak : ". $this->sisi1 * $this->sisi2;
       return $hasil;
    }

}

$hitung = new luas(25, 30);
echo $hitung->sisi1. " x ". $hitung->sisi2. "<br>";

echo $hitung->luasKotak();

?>