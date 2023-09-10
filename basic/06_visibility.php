<?php

class kendaraan{

    public $nama;
    private $warna;
    protected $harga;

    public function __construct( $nama = "civic", $warna = "hitam", $harga = "0"){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    public function infokendaraan(){
        return $this->warna;
    }
}

class transportasi extends kendaraan{
    public function tampilkendaraan(){
        return $this->harga;
    }
}

$mobil = new kendaraan();
echo "public: ". $mobil->nama. "<br>";

$mobil1 = new transportasi();
echo "protected: ". $mobil1->tampilkendaraan(). "<br>";

echo "private: ". $mobil->infokendaraan(). "<br>";