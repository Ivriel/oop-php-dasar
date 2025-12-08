<?php

abstract class Produk { // public: bisa diakses dari mana aja. protected: hanya bisa diakses di kelas itu sendiri dan yang extend parent. private: hanya bisa dipake di kelas itu sendiri.
     protected
     $judul,
     $penulis,
     $penerbit,
     $harga,
     $diskon = 0;
     public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 250000)// bakal jalan tanpa dipanggil
     {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
     }

     function setJudul($judul)
     {
        if(!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
     }

     public function getJudul(){
        return $this->judul;
     }

     public function setPenulis($penulis)
     {
        $this->penulis= $penulis;
     }

     public function getPenulis()
     {
        return $this->penulis;
     }

     public function setPenerbit($penerbit)
     {
        $this->penerbit = $penerbit;
     }

     public function getPenerbit()
     {
        return $this->penerbit;
     }

    public function setDiskon($diskon)
    {   
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

     public function setHarga($harga) {
        $this->harga = $harga;
     }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon/100);
    }

     public function getLabel(){
        return "$this->penulis, $this->penerbit";
     }

   
    abstract public function getInfo();

}