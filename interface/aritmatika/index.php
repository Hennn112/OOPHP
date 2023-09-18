<?php

class Aritmatika
{
    public $bilangan1;
    private $bilangan2;
    protected $bilangan3;

    public function setBilangan3($bilangan3)
    {
        $this->bilangan3 = $bilangan3;
    }

    public function getbilangan3()
    {
        return $this->bilangan3;
    }

    public function setBilangan2($bilangan2)
    {
        $this->bilangan2 = $bilangan2;
    }

    public function getLabel()
    {
        return $this->bilangan2;
    }

    public function tambah()
    {
        $hasil = $this->bilangan1 + $this->bilangan3 + $this->getLabel();
        return $hasil;
    }

    public function kurang()
    {
        $hasil = $this->bilangan1 - $this->bilangan3 - $this->getLabel();
        return $hasil;
    }

    public function kali()
    {
        $hasil = $this->bilangan1 * $this->bilangan3 * $this->getLabel();
        return $hasil;
    }

    public function bagi()
    {

        $hasil = $this->bilangan1 / $this->bilangan3 / $this->getLabel();
        return $hasil;
    }
}


$operasi = new Aritmatika();

// Melakukan operasi tambah
echo "Hasil Penjumlahan: " . $operasi->tambah() . "<br>";

// Melakukan operasi kurang
echo "Hasil Pengurangan: " . $operasi->kurang() . "<br>";

// Melakukan operasi kali
echo "Hasil Perkalian: " . $operasi->kali() . "<br>";

// Melakukan operasi bagi
echo "Hasil Pembagian: " . $operasi->bagi() . "<br>";

?>
