<?php 
function connect() {
    $host = "127.0.0.1";
    $username = "root";
    $password = "root";
    $database = "db_siswa";

    $conn = mysqli_connect($host,$username,$password,$database);
    return $conn;
}

?>