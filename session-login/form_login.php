<!DOCTYPE html>
 <html lang="en">
<head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">
 </head>
 <body>
   <?php
   require_once('header.php');
//    session_start();
   if(isset($_SESSION['pesan'])){
     echo '<div class="alert alert-primary" role="alert">
        '.$_SESSION['pesan'].'
      </div>';
       session_destroy();
   }
   ?>
  <form action="set_session.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control col-md-4" name="username" placeholder="Username"/>    
    </div>
    <div class="form-group">
      <label for="nama">Nim:</label>
      <input type="password" class="form-control col-md-4" name="password" placeholder="Password"/>
    </div>   
    <input type="submit" class="btn btn-info" value="Login">
  </form>
 </body>

 </html>
