<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TITLE</title>
    <meta name="description" content="DESCRIPTION">
   <link rel="stylesheet" href="PATH">

    <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
  <?php
  $server   = "localhost";
  $username = "root";
  $pass     = "";
  $db       = "kuliah";
  $conn     = new mysqli($server, $username, $pass, $db);
  if($conn){
    $id   = $_GET['id'];
    $sql  = "SELECT * FROM webdasar WHERE id = $id";
    if ($conn->query($sql)){
      $result = $conn->query($sql);
      $row    = $result->fetch_assoc();
    }
    else
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  else{
    echo "Error connecting";
  }
  ?>
 <form action="index.php?id=<?=$row['id']?>" method="post">
   <input type="text" name="nama" placeholder="Nama" value="<?=$row['nama']?>"/><br>
   <input type="text" name="nim"  placeholder="Nim"  value="<?=$row['nim']?>"/><br>
   <input type="text" name="umur" placeholder="Umur" value="<?=$row['email']?>"/><br>
   <input type="submit" name="simpan"/><br>
 </form>
</body>

</html>
