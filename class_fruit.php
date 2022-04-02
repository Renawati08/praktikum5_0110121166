<?php
// parent class
class Buah{
    public $nama;
    public $warna;

    //method construct
    public function __construct($name, $color)
    {
        $this->nama = $name;
        $this->warna = $color;  
    }

    //method intro
    public function intro(){
        echo "Ini adalah buah dengan nama : {$this->nama} warna {$this->warna}";
    }
}

//child class
class Mangga extends Buah {
    //method biji
    public function manis(){
        echo "Buah ini sudah matang dan rasanya manis";
    }
}

//buat objek
$mangga_indramayu = new Mangga("Mangga indramayu", "kuning");
$mangga_indramayu->intro();
echo "<br>";
$mangga_indramayu->manis()
?>