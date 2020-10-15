<?php
include_once('../koneksi.php');
require_once('../header.php');


$judul             = $_POST['judul'];
$isi              = $_POST['isi'];



// print_r($_POST);
$sql      = "INSERT INTO jumbotron(judul, isi)
              VALUES ('$judul','$isi')";
mysqli_query($conn, $sql);
header("location: display_jumbotron.php");
?>
