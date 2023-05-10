<?php

class sekolah {
    public $nama;
    private $alamat = "jl.wk";
    protected   $jmlhSiswa = 5,
                $jmlhGuru = 5,
                $jmlhKelas = 5;


    public function setAlamat($alamat){
        return $this->alamat = $alamat;
    }
    public function getData(){
       return $this->alamat;
    }
}

class kelas extends sekolah{
    public function setSiswa ($siswa){
        return $this->jmlhSiswa = $siswa;
    }
    public function getSiswa (){
        return $this->jmlhSiswa;
    }
    public function setGuru ( $guru ){
        return $this->jmlhGuru = $guru;
    }
    public function getGuru (){
        return $this->jmlhGuru;
    }
    public function setKelas ( $kelas ){
        return $this->jmlhKelas = $kelas;
    }
    public function getKelas (){
        return $this->jmlhKelas;
    }
}

$smk = new sekolah();
echo "Nama sekolah: ". $smk->nama. "<br>";
$smk->setAlamat("jl.Wangun");
echo "Alamat sekolah: ". $smk->getData()."<br>";
$smk1 = new kelas();
$smk1->setSiswa(30); 
echo "Jumlah siswa: ".$smk1->getSiswa()."<br>";
$smk1->setKelas(30);
echo "Jumlah Kelas: ".$smk1->getKelas()."<br>";
$smk1->setGuru(30);
echo "Jumlah Guru: ".$smk1->getGuru()."<br>";
