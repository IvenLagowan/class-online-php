<?php 

// array
// variabel yang dapat dimiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// membuat array
// cara lama
// pasangan antara key dan velue
// key-nya adalah index, yang dimulai dari 0

$hari = array("Senin", "Selasa", "Rabu");

// cara baru

$bulan = ["January", "Feberuary", "Maret"];

$arr1 = [123, "Aku", false];


// menampilkan array

// var_dump($hari);

// echo "<br>";

// print_r($bulan);

// echo "<br>";


// menampilkan 1 elemen pada array

// echo $arr1[0];
// echo "<br>";

// echo $bulan[2];


// menambahkan elemen baru pada array 

var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";

echo "<br>";
var_dump($hari);




















?>