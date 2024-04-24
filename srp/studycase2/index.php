<?php 

require_once "mahasiswa.php";
require_once "mahasiswaview.php";

$mahasiswa = new Mahasiswa("2205031", "Aditya Wisnu");

$view = new MahasiswaView();

$view->showMahasiswa($mahasiswa);