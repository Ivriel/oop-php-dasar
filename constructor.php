<?php
// ada toko yang jualan produk: komik, game

class Produk {
     public 
     $judul,
     $penulis,
     $penerbit,
     $harga;

     public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 250000)// bakal jalan tanpa dipanggil
     {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
     }

     public function getLabel(){
        return "$this->penulis, $this->penerbit";
     }
}


$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);

$produk2 = new Produk("Uncharted","Neil Druckmann","Sony Computer",250000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";
echo "<pre>"; // Tambahkan tag <pre> sebelum var_dump
var_dump($produk2);
echo "</pre>"; //
