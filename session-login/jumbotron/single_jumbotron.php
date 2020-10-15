<?php
    include_once('../koneksi.php');
    require_once('../header.php');
    $id     = $_GET['id'];
    $sql    = "SELECT * 
                FROM jumbotron
                WHERE id = $id";    
    $query     = mysqli_query($conn, $sql);     
    $row       = mysqli_fetch_assoc($query);
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?=$row['judul']?></h1>
    <p class="lead"><?=$row['isi']?></p>
  </div>
</div>

<?php
//panggil halaman komentar
require_once('../comment.php');
?>
