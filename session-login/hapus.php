<?php
include_once('koneksi.php');

$id   = $_GET['idmahasiswa'];
$sql  = "DELETE FROM mahasiswa 
        WHERE idmahasiswa = $id";
mysqli_query($conn, $sql);
header("location: read.php");

?>
