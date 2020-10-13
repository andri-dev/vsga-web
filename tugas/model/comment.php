<?php 
require_once('../config/db.php');

function addComment($articleid, $title, $content) {
    $koneksi = connect();
    
    $value = "'" . $articleid . "','".$title."','".$content."'";

    $query = mysqli_query($koneksi, "INSERT INTO comment (articleid, title, content) VALUES (". $value .")");

    if($query) {
        header("Location: ../detail.php?id=".$articleid);
    } else {
        header("Location: ../detail.php?id=".$articleid);
    }
}

function editComment($articleid, $title, $content, $idComment) {
    $koneksi = connect();
    
    $value = "articleid='" . $articleid . "',title='".$title."',content='".$content."'";

    $query = mysqli_query($koneksi, "UPDATE comment SET ".$value."WHERE id='".$idComment."'");

    if($query) {
        header("Location: ../detail.php?id=".$articleid);
    } else {
        header("Location: ../detail.php?id=".$articleid);
    }
}

function deleteComment($articleid, $idComment) {
    $koneksi = connect();

    $query = mysqli_query($koneksi, "DELETE FROM comment WHERE id='".$idComment."'");

    if($query) {
        header("Location: ../detail.php?id=".$articleid);
    } else {
        header("Location: ../detail.php?id=".$articleid);
    }
}

if($_GET['add']){

    $articleid = $_POST['id-article'];
    $title = $_POST['title-comment'];
    $content = $_POST['content-comment'];

    addComment($articleid, $title, $content);
}

if($_GET['edit']){

    $articleid = $_POST['id-article'];
    $idComment = $_POST['id-comment'];
    $title = $_POST['title-comment'];
    $content = $_POST['content-comment'];

    editComment($articleid, $title, $content, $idComment);
}


if($_GET['delete']){

    $articleid = $_GET['idArticle'];
    $idComment = $_GET['idComment'];

    deleteComment($articleid, $idComment);
}
?>