<!-- panggil bootsrap css -->
<?php
require_once('header.php');
//Cek apakah sudah login atau belum. 
// Jika belum login, arahkan ke form halaman login
// session_start();
if(!isset($_SESSION['is_login'])){
  $_SESSION['pesan'] = "Halaman tidak bisa diakses";
  header('location: form_login.php');
}
?>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!-- panggil bootsrap js -->

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<?php
//link javascript dan css bisa dilihat pada http://www.datatables.net 
//untuk link jquery bisa dicari via google dengan keyword 'jquery CDN'

require_once('koneksi.php');

$sql      = "SELECT * FROM mahasiswa";
$result   = mysqli_query($conn, $sql);
//tambahkan id pada tag table
echo "<a href='form.php' class='btn btn-info'>Tambah data</a>";
echo "<table border=1 id='myTable' class='table-striped'> 
        <thead>
          <th>Nama</th>
          <th>Nim</th>
          <th>IPK</th>
          <th>Program Studi</th>
          <th>Jenis Kelamin</th>
          <th>Foto</th>
          <th>Aksi</th>
        </thead>";
while ($row = mysqli_fetch_assoc($result)) {
  $idmahasiswa = $row['idmahasiswa'];
  if($row['foto'] == '' OR strlen($row['foto']) <= 7 OR $row['foto'] == 'uploads/'){
    $foto = './uploads/no_image.jpg';
  }
  else{
    $foto = './'.$row['foto']; //mengarahkan ke document root
  }
  
  echo "<tr>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['nim']."</td>";  
    echo "<td>".$row['ipk']."</td>";  
    echo "<td>".$row['programstudi']."</td>";  
    echo "<td>".$row['jenis_kelamin']."</td>";  
    echo "<td><img src='$foto' class='rounded-circle' height='100' width='100'></td>";  
    echo "<td>
    <a href='edit.php?idmahasiswa=$idmahasiswa' class='btn btn-warning'>Edit</a> | 
    <a href='hapus.php?idmahasiswa=$idmahasiswa' class='btn btn-danger'>Hapus</a></td>"; 
  echo "</tr>";
}    
echo "</table>";

?>
