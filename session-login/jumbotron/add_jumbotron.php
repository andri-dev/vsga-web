<!DOCTYPE html>
 <html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Add Jumbotron</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">
 </head>
 <body>
   <?php
   
   
    require_once('../header.php');
   ?>
  <form action="simpan_jumbotron.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama">Judul:</label>
      <input type="text" class="form-control col-md-4" name="judul" placeholder="Judul"/>    
    </div>
    <div class="form-group">
      <label for="nama">Isi:</label>
      <input type="text" class="form-control col-md-4" name="isi" placeholder="Isi"/>
    </div>
    <input type="submit" class="btn btn-info" value="Simpan">
  </form>
 </body>

 </html>
