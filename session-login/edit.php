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
     include_once('koneksi.php');
     require_once('header.php');
     $idmahasiswa = $_GET['idmahasiswa'];
     $sql = "SELECT * 
            FROM mahasiswa 
            WHERE idmahasiswa = $idmahasiswa";
    //  echo $sql;
     $query     = mysqli_query($conn, $sql);
     $result    = mysqli_fetch_assoc($query);
     ?>
  <form action="update.php?idmahasiswa=<?=$idmahasiswa?>" method="post" 
  enctype="multipart/form-data">
  <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control col-md-4" name="nama" value="<?=$result['nama']?>" placeholder="Nama"/>      
    </div>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control col-md-4" name="nim" value="<?=$result['nim']?>" placeholder="Nim"/>      
    </div>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control col-md-4" name="ipk" value="<?=$result['ipk']?>" placeholder="IPK"/>      
    </div>

    <div class="form-group">
      <label for="nama">Nama:</label>
      <select name="jenis_kelamin"  class="form-control col-md-4">
        <!-- Selected untuk select option-->
        <option >Pilih jenis kelamin</option>
        <option value="laki-laki" <?php if($result['jenis_kelamin'] == 'laki-laki') echo 'selected'; ?>>Laki-laki</option>
        <option value="perempuan" <?php if($result['jenis_kelamin'] == 'perempuan') echo 'selected'; ?>>Perempuan</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="nama"> Warna kulit :</label><br>
     
      <!-- Checked untuk select radio button-->
      <input type="radio" name="kulit"  value="gelap" <?php if($result['programstudi'] == 'gelap') echo 'checked'; ?>>Gelap <br>
      <input type="radio" name="kulit" value="terang" <?php if($result['programstudi'] == 'terang') echo 'checked'; ?>>Terang <br>    
    </div>
    <div class="form-group">
      <label for="nama"> Warna kulit :</label><br>     
      Foto<br> <img src="<?=$result['foto']?>"" class="rounded" height="120" width="200"><br>
      Select image to upload:<br>
      <input type="file" class="form-control col-md-4"  name="fileToUpload" id="fileToUpload" value="<?=$row['foto']?>"><br>
    </div>
    <input type="submit" class="btn btn-info" value="Simpan">
  </form>
 </body>

 </html>
