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
    <div class="container mt-5 mb-5">
      <div class="row mb-5">
        <div class="col-12">
        <a href="./" class="card-link"><h1>Artikelku.com</h1></a>
        <a href="./index.php" class="btn btn-danger mt-3">Kembali</a>
        </div>
      </div>
      <div class="row">
        <div class="col-10">
          <div class="card">
            <div class="card-body">
              <?php 
                require_once('./config/db.php');
                $koneksi = connect();

                $id = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM article WHERE id='". $id . "'");
        
                if(mysqli_num_rows($query) > 0 ) {
                  $data = mysqli_fetch_array($query);
              ?>
                  <h4 class="card-title mb-4"><?= $data['title']; ?></h4>
                  <p class="card-text"><?= $data['content']; ?></p>
              <?php 
                } else {
                  header('location: index.php');
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-6">
          <h3>Komentar</h3>
          <?php 
            $querycomment = mysqli_query($koneksi, "SELECT * FROM comment WHERE articleid='". $id . "'");
            
            if(mysqli_num_rows($querycomment) > 0 ) {
              while($row = mysqli_fetch_array($querycomment)){
          ?>
          <div class="card mt-3">
            <div class="card-body">
              <h5 class="card-title"><?= $row['title']; ?></h5>
              <p class="card-text"><?= $row['content']; ?></p>
            </div>
          </div>
          <?php 
              }
            }
          ?>
          <div class="card mt-3">
            <form action="model/comment.php?add=true" method="post" class="p-3">
              <h4 class="card-title">Berikan Komentar</h4>
              <div class="form-group">
                <input type="hidden" name="id-article" value="<?= $id ?>" />
                <input
                  type="text"
                  class="form-control mb-2"
                  id="title-comment"
                  name="title-comment"
                  placeholder="Judul Komentar disini.."
                />
                <textarea
                  class="form-control"
                  id="content-comment"
                  name="content-comment"
                  rows="3"
                  placeholder="Tulis komentar disini..."
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-1">Kirim</button>
            </form>
          </div>
        </div>
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
  </body>
</html>
