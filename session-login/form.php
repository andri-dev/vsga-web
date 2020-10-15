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
   ?>
  <form action="simpan.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control col-md-4" name="nama" placeholder="Nama"/>    
    </div>
    <div class="form-group">
      <label for="nama">Nim:</label>
      <input type="text" class="form-control col-md-4" name="nim" placeholder="Nim"/>
    </div>    
    <div class="form-group">
      <label for="nama">IPK:</label>
      <input type="text" class="form-control col-md-4" name="ipk" placeholder="IPK"/>
    </div>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <select name="jenis_kelamin" class="form-control col-md-4">
        <option >Pilih jenis kelamin</option>
        <option value="laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="nama">Warna kulit :</label><br>      
      <input type="radio" name="kulit" class="form-group col-md-4" value="gelap" id="">Gelap <br>
    <input type="radio" name="kulit" class="form-group col-md-4" value="terang" id="">Terang <br>
    </div>

    <div class="form-group">
      <label for="nama">Select image to upload:</label>      
      <input type="file" name="fileToUpload" class="form-group col-md-4"  id="fileToUpload">    
    </div>   
    <input type="submit" class="btn btn-info" value="Simpan">
  </form>
 </body>

 </html>
