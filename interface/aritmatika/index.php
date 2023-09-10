<?php

class Aritmatika
{
    public $bilangan1;
    private $bilangan2;
    protected $bilangan3;

    public function getLabel()
    {
        return $this->bilangan2;
    }

    public function setBilangan2($nilai)
    {
        $this->bilangan2 = $nilai;
    }
}

class hitung extends Aritmatika
{
   public function setBilangan3($nilai)
    {
        $this->bilangan3 = $nilai;
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

$operasi = new hitung();

$operasi->bilangan1 = 5;
$operasi->setBilangan3(2);

$operasi->setBilangan2(3);

// Melakukan operasi tambah
echo "Hasil Penjumlahan: " . $operasi->tambah() . "<br>";

// Melakukan operasi kurang
echo "Hasil Pengurangan: " . $operasi->kurang() . "<br>";

// Melakukan operasi kali
echo "Hasil Perkalian: " . $operasi->kali() . "<br>";

// Melakukan operasi bagi
echo "Hasil Pembagian: " . $operasi->bagi() . "<br>";

?>
