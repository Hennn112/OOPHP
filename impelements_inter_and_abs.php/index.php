<?php

interface mahlukHidup{
    public function kelakuan($baik);
}

abstract class manusia implements mahlukHidup{
    abstract public function aksi($berjalan);
}

class asal extends manusia{
    var $baik, $berjalan;

    public function kelakuan($baik)
    {
        $this->baik= $baik;
        return $baik;
    } 

    public function aksi($berjalan)
    {
        $this->berjalan= $berjalan;
        return $berjalan;
    }

    public function get()
    {
        echo "Manusia ini berkelakuan:". $this->baik. "<br>";
        echo "Manusia ini sedang:". $this->berjalan;
    }
}

$hasil = new asal();
$hasil->kelakuan("baik");
$hasil->aksi("berjalan");
echo $hasil->get();