<?php 

require_once('./db.php');
$koneksi = connect();

$merek = $_POST['merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

$value = "'" . $merek . "','".$warna."','".$jumlah."'";
$query = mysqli_query($koneksi, "INSERT INTO printer  (nama_merek, warna, jumlah) VALUES (". $value .")");

if($query) {
    echo "succsess";
} else {
    echo "error";
}

?>