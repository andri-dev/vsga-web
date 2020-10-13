<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vsga</title>
  </head>
  <body>
    <h2>List Mahasiswa</h2>
    <table border="1">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Jurusan</th>
      </tr>
      <?php 
        include 'koneksi.php';
        $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        $no=1;

        foreach ($mahasiswa as $row ) {
            $jk = $row['jenis_kelamin']=='p'?'Perempuan':'Laki laki';
        ?>
      <tr>
        <td><?= $row['nim']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $jk; ?></td>
        <td><?= $row['jurusan']; ?></td>
      </tr>
      <?php
        }
        ?>
    </table>
  </body>
</html>
