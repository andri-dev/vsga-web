<?php
require_once('koneksi.php');

$nama     = $_POST['nama'];
$nim      = $_POST['nim'];
$ipk      = $_POST['ipk'];
$idmahassiswa = $_GET['idmahasiswa'];

$sqlfile = "SELECT * FROM mahasiswa where idmahasiswa=$idmahassiswa";
$query  = mysqli_query($conn, $sqlfile);

$result = mysqli_fetch_assoc($query);
$path = $result['foto'];
if($result['foto'] != ''  OR $result['foto'] != 'uploads/'){
    unlink($path);
}

$target_dir     = "uploads/";
$target_file    = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

$sql      = "UPDATE mahasiswa 
            SET nama='$nama',
                nim='$nim',
                ipk='$ipk',
                foto = '$target_file' 
            WHERE idmahasiswa=$idmahassiswa";
echo $sql;
mysqli_query($conn, $sql);

header("location: read.php");
?>
