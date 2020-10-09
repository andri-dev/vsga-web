<?php 
require_once('../config/db.php');

function addArticle($title, $content) {
    $koneksi = connect();

    $query = mysqli_query($koneksi, "INSERT INTO article (title, content) VALUES ('".$title."','".$content."')");

    if($query) {
        header("Location: ../addarticle.php");
    } 
    else {
        header("Location: ../addarticle.php");
    }
}

if($_GET['add']){

    $title = $_POST['title'];
    $content = $_POST['content'];

    addArticle($title, $content);
}

?>