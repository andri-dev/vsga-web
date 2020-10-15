<?php
require_once('koneksi.php');

$nama             = $_POST['nama'];
$nim              = $_POST['nim'];
$ipk              = $_POST['ipk'];
$jeniskelamin     = $_POST['jenis_kelamin'];
$kulit            = $_POST['kulit'];

$target_dir     = "uploads/";
$target_file    = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk       = 1;
$imageFileType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

// print_r($_POST);
$sql      = "INSERT INTO mahasiswa(nama, nim,ipk, programstudi, jenis_kelamin, foto)
              VALUES ('$nama','$nim','$ipk', '$kulit',  '$jeniskelamin', '$target_file')";
mysqli_query($conn, $sql);
header("location: read.php");
?>
