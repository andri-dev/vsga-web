<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello VSGA</title>
</head>
<body>
    <form action="add.php" method="post">
        <label for="no">No</label>
        <input type="text" name="no" id="no"><br>
        <label for="merek">Merek</label>
        <input type="text" name="merek" id="merek"><br>
        <label for="warna">Warna</label>
        <input type="text" name="warna" id="warna"><br>
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" id="jumlah"><br>

        <input type="submit" value="simpan">
    </form>

    <?php 
    
    require_once('./db.php');
    $koneksi = connect();

    $query = mysqli_query($koneksi, "SELECT * FROM printer");

    if(mysqli_num_rows($query) > 0 ) {
        while($row = mysqli_fetch_array($query)){
            echo $row['id'] . '<br>';
            echo $row['nama_merek'] . '<br>';
            echo $row['warna'] . '<br>';
            echo $row['jumlah'] . '<br><br>';
        }
    }
    
    ?>
</body>
</html>