<?php
// define("NAMA","Ivriel Gunawan");
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// class Coba {
//     const NAMA = "Ivriel";
// }

// echo Coba::NAMA;

echo __LINE__; // menampilkan baris dimana constant ini ditulis
echo "<br>";
echo __FILE__; // menampilkan file dimana constant ini ditulis
echo "<br>";
echo __DIR__; // menampilkan folder dimana constant ini ditulis
echo "<br>";
function coba() {
    return __FUNCTION__;
}

echo coba();

class Coba {
    public $kelas = __CLASS__;
}

echo "<br>";

$obj = new Coba();
echo $obj->kelas;
?>