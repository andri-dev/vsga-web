<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />

    <title>Artikelku.com</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row mb-5">
        <div class="col-12">
          <a href="./" class="card-link"><h1>Artikelku.com</h1></a>
          <a href="./addarticle.php" class="btn btn-primary mt-3">Tambah Artikel</a>
        </div>
      </div>
      <div class="row">
        <?php 
            require_once('./config/db.php');
            $koneksi = connect();

            $query = mysqli_query($koneksi, "SELECT * FROM article");
        
            if(mysqli_num_rows($query) > 0 ) {
                while($data = mysqli_fetch_array($query)){
        ?>
        <div class="col-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title font-weight-bold mb-3"><?= $data['title']; ?></h5>
              <p class="card-text"><?= $data['content']; ?></p>
              <a href="detail.php?id=<?= $data['id']?>" class="card-link btn btn-primary mt-3">Detail</a>
              <a href="editarticle.php?id=<?= $data['id']?>" class="card-link btn btn-warning mt-3">Edit</a>
              <a href="#" onclick="confirmDeleteArticle(<?= $data['id'] ?>)" class="card-link btn btn-danger mt-3">Hapus</a>
            </div>
          </div>
        </div>
        <?php 
                }
            }
        ?>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <script src="./js/confirm.js"></script>
  </body>
</html>
