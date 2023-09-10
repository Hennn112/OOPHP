<?php

class Laptop{

    private $pemilik = "Orlando";
    Private $merk = "Lenovo";

    public function __construct(){
        echo "Ini Berasal dari Construct Laptop";
    }

    public function hidupkan_laptop(){
        echo "Laptop Merk <b> $this->merk </b> ini punya <b> $this->pemilik </b>";
    }

    public function __destruct(){
        echo "<br>";
        echo "Ini Berasal dari Destruct Laptop";
    }
}

$laptop_andi = new laptop();

echo "<br>";
echo $laptop_andi->hidupkan_laptop();

echo "<br>";
//hapus objek $laptop_andi
unset($laptop_andi);

//harusnya si dest tampil keluar gada unset,karena diunset jadi dest auto jalan
echo "<br>";
echo "Objek di hancurkan";

?>