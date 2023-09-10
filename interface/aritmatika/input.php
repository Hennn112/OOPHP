<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAWR</title>
</head>
<body>
    <h2>Itung Kids</h2>
    <form action="#" method="POST">
        <input type="number" name="bilangan1" placeholder="Bilangan1"><br>
        <input type="number" name="bilangan2" placeholder="Bilangan2"><br>
        <input type="number" name="bilangan3" placeholder="Bilangan3"><br>
        <button type="submit" name="submit">Hitung</button>
    </form>
</body>
</html>



<?php


class Aritmatika {
    public $bilangan1;
    private $bilangan2;
    protected $bilangan3;

    public function tambah($bilangan1, $bilangan2, $bilangan3) {
        $this->bilangan1 = $bilangan1;
        $this->bilangan2 = $bilangan2;
        $this->bilangan3 = $bilangan3;
        $hasil = intval($this->bilangan1) + intval($this->bilangan2) + intval($this->bilangan3);
        return $hasil;
    }

    public function kurang($bilangan1, $bilangan2, $bilangan3) {
        $this->bilangan1 = $bilangan1;
        $this->bilangan2 = $bilangan2;
        $this->bilangan3 = $bilangan3;
        $hasil = intval($this->bilangan1) - intval($this->bilangan2) - intval($this->bilangan3);
        return $hasil;
    }

    public function kali($bilangan1, $bilangan2, $bilangan3) {
        $this->bilangan1 = $bilangan1;
        $this->bilangan2 = $bilangan2;
        $this->bilangan3 = $bilangan3;
        $hasil = intval($this->bilangan1) * intval($this->bilangan2) * intval($this->bilangan3);
        return $hasil;
    }

    public function bagi($bilangan1, $bilangan2, $bilangan3) {

        if ($bilangan2 != 0 && $bilangan3 != 0) {
            $bagi = $bilangan1 / $bilangan2 / $bilangan3;
            return "Hasil pembagian: $bagi<br>";
        } else {
            return "Tidak dapat melakukan pembagian dengan nol<br>";
        }


        // $this->bilangan1 = $bilangan1;
        // $this->bilangan2 = $bilangan2;
        // $this->bilangan3 = $bilangan3;
        // $hasil = intval($this->bilangan1) / intval($this->bilangan2) / intval($this->bilangan3);

        // return $hasil;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {
        $bilangan1 = isset($_POST['bilangan1']) && $_POST['bilangan1'] !== '' ? $_POST['bilangan1'] : null;
        $bilangan2 = isset($_POST['bilangan2']) && $_PuOST['bilangan2'] !== '' ? $_POST['bilangan2'] : null;
        $bilangan3 = isset($_POST['bilangan3']) && $_POST['bilangan3'] !== '' ? $_POST['bilangan3'] : null;

        if ($bilangan1 === null && $bilangan2 === null && $bilangan3 === null) {
            echo "Data Kosong";
            die;
        }else{
    $operasi = new Aritmatika();
    echo "Hasil Penjumlahan: " . $operasi->tambah($bilangan1, $bilangan2, $bilangan3) . "<br>";
    echo "Hasil Pengurangan: " . $operasi->kurang($bilangan1, $bilangan2, $bilangan3) . "<br>";
    echo "Hasil Perkalian: " . $operasi->kali($bilangan1, $bilangan2, $bilangan3) . "<br>";
    echo "Hasil Pembagian: " . $operasi->bagi($bilangan1, $bilangan2, $bilangan3) . "<br>";

        }
    }  
} 

?>

