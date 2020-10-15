<?php

include_once('../koneksi.php');
    require_once('../header.php');
     
     $sql = "SELECT * 
            FROM jumbotron";
    //  echo $sql;
     $query     = mysqli_query($conn, $sql);     
     while ($row = mysqli_fetch_assoc($query)) {
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><a href="./single_jumbotron.php?id=<?=$row['id']?>"><?=$row['judul']?></a></h1>
    <!-- <p class="lead"><?//=$row['isi']?></p> -->
  </div>
</div>
<?php
     }?>