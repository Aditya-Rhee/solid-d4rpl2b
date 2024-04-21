<?php
include_once "PerhitunganPersegi.php";

$sisiPersegi = 4;
$persegi = new Persegi($sisiPersegi);

$sisi = $persegi->getSisi();
$perhitungan = new PerhitunganPersegi();

$luas = $perhitungan->hitungLuas($sisi);
echo "Luas persegi dengan panjang sisi $sisi adalah $luas";