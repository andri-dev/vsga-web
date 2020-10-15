<?php
require_once('koneksi.php');

$idartikel   =  $_GET['idartikel'];
$judul       = $_POST['judul'];
$komentar    = $_POST['komentar'];

// print_r($_POST);
$sql      = "INSERT INTO komentar(judul, komentar, idartikel)
              VALUES ('$judul','$komentar', $idartikel)";
            //   echo $sql;
mysqli_query($conn, $sql);
header("location: single_jumbotron.php?id=$idartikel");
?>
