<?php 
echo '
<form action="" method="post">
Nama : <input type="text" name="nama"> <br>
Alamat : <textarea name="alamat" cols="30" rows="10"></textarea><br>
TTL : <input type="text" name="ttl"><br>
Jenis Kelamin : <input type="radio" name="sex" value="l">Laki Laki &nbsp; <input type="radio" name="sex" value="p"> Perempuan &nbsp; <br>
Usia : <input type="text" name="usia"> <br>
<input type="submit" name="submit" value="submit">
</form>
';

if(isset($_POST['submit'])){
    echo $_POST['nama']. "<br>";
    echo $_POST['alamat']. "<br>";
    echo $_POST['ttl']. "<br>";
    echo $_POST['sex']. "<br>";
    echo $_POST['usia']. "<br>";
}
?>