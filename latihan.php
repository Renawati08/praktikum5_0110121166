<?php
//class buah
class Fruit{
    public $nama;
    protected $warna;
    private $berat;
}

// buat objek
$mangga = new Fruit();

//akses property public
echo $mangga->nama = "Mangga"; //berhasil

// //akses property private
// echo $mangga->berat = 30; //error

// //akses property protected
// echo $mangga->warna = "Hijau"; //error
?>