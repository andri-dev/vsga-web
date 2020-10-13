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

function editArticle($id, $title, $content) {
    $koneksi = connect();
    
    $value = "title='".$title."',content='".$content."'";

    $query = mysqli_query($koneksi, "UPDATE article SET ".$value."WHERE id='".$id."'");

    if($query) {
        header("Location: ../");
    } else {
        header("Location: ../");
    }
}

function deleteArticle($id) {
    $koneksi = connect();

    $query = mysqli_query($koneksi, "DELETE FROM article WHERE id='".$id."'");

    if($query) {
        header("Location: ../");
    } else {
        header("Location: ../");
    }
}

if($_GET['add']){

    $title = $_POST['title'];
    $content = $_POST['content'];

    addArticle($title, $content);
}

if($_GET['edit']){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    editArticle($id, $title, $content);
}

if($_GET['delete']){

    $id = $_GET['id'];

    deleteArticle($id);
}

?>