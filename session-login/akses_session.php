<?php
include_once('header.php');
session_start();
echo $_SESSION['nama'];
echo "<br>";
echo $_SESSION['nim'];
echo "<br>";
echo $_SESSION['ipk'];
?>