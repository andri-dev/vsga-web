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

if($_GET['add']){

    $articleid = $_POST['id-article'];
    $title = $_POST['title-comment'];
    $content = $_POST['content-comment'];

    addComment($articleid, $title, $content);
}

?>