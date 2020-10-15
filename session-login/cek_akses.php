<?php
require_once('header.php');
//Cek apakah sudah login atau belum. 
// Jika belum login, arahkan ke form halaman login
// session_start();
if(!isset($_SESSION['is_login'])){
  $_SESSION['pesan'] = "Halaman tidak bisa diakses"; 
  header('location: form_login.php');
}
if($_SESSION['akses'] != 'admin'){
    $_SESSION['pesan'] = "Halaman tidak bisa diakses"; 
    header('location: read.php');
}
else{
    echo "Konten halaman admin";
}

