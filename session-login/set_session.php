<?php
include_once('header.php');
require_once('koneksi.php');
// session_start();
$username   = $_POST['username'];
$password   = md5($_POST['password']);

$sql    = "SELECT * 
            FROM user
            WHERE username = '$username' AND password='$password'";   

$query  = mysqli_query($conn, $sql); 
//cek berapa data yang dikembalikan dari hasil query
//Jika lebih dari 0, artinya data dari form cocok dengan 
// yang ada di dalam database
if(mysqli_num_rows($query) > 0){
    $row                    = mysqli_fetch_assoc($query);
    $_SESSION['nama']       = $row['nama'];
    $_SESSION['username']   = $row['username'];
    $_SESSION['akses']      = $row['akses'];
    $_SESSION['is_login']   = TRUE;
    header('location: read.php');
    // echo "Variabel session berhasil dibuat";
}
else{
    $_SESSION['pesan'] = "Username atau password salah";
    //header('location: form_login.php');
    // echo "Data tidak ditemukan";
}



?>