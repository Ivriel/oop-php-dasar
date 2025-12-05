<?php
// ada toko yang jualan produk: komik, game

class Produk {
     public 
     $judul,
     $penulis,
     $penerbit,
     $harga,
     $jumlahHalaman,
     $waktuMain;

     public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 250000,$jumlahHalaman=0,$waktuMain=0)// bakal jalan tanpa dipanggil
     {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
     }

     public function getLabel(){
        return "$this->penulis, $this->penerbit";
     }

     public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
     }

}

class Komik extends Produk {
    public function getInfoProduk()
    {
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) = {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk()
    {
        $str = " {$this->getInfoProduk()} ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}


$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100,0);

$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000,0,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();