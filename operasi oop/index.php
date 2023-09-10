<?php

class angka{

    public $nilai;

    public function __construct($nilai)
    {
        $this->nilai =$nilai;
    }

    public function hitung(){
        if ($this->nilai >=90 && $this->nilai <=100) {
            return 'A';
        }
        else if ($this->nilai >= 80 && $this->nilai <=90) {
            return 'B';
        }
        elseif ($this->nilai <= 70) {
            return 'C';
        }
    }
}

$objek = new angka(100);
$hasil = $objek->hitung();
echo "Nilai huruf: ". $hasil;



?>