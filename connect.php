<?php 
$host = "127.0.0.1";
$username = "root";
$password = "root";
$database = "db_siswa";

$db = mysqli_connect($host,$username,$password,$database);
echo 'Berhasil connect...';

if(!$db){
    die('Database error :' . mysqli_connect_error());
}
?>