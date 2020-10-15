<style>
body{margin-top:20px;}

.comment-wrapper .panel-body {
    max-height:650px;
    overflow:auto;
}

.comment-wrapper .media-list .media img {
    width:64px;
    height:64px;
    border:2px solid #e5e7e8;
}

.comment-wrapper .media-list .media {
    border-bottom:1px dashed #efefef;
    margin-bottom:25px;
}
</style>
<?php
    $id = $_GET['id'];
    ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="add_comment.php?idartikel=<?=$id?>" method="post">
                <input type="text" name="judul" placeholder="Judul Komentar" class="form-control">
                <textarea class="form-control" name="komentar" placeholder="Isi komentar" rows="3"></textarea>
                <br>
                <button type="submit" class="btn btn-info pull-right">Post</button>
            </form>
            <div class="page-header">
                <h1><small class="pull-right">0 comments</small> </h1>
            </div> 
<?php
    $id = $_GET['id'];
    //mengambil komentar dari tabel komentar, untuk artikel yang sedang tayang
    $sql = "SELECT * 
            FROM komentar
            WHERE idartikel = $id";
    //  echo $sql;
    $query     = mysqli_query($conn, $sql);     
    while ($row = mysqli_fetch_assoc($query)) {
    //bebas menampilkan komentar dengan template sesuai selera anda
?>            
            <div class="comments-list">
                <div class="media">
                           <!-- <p class="pull-right"><small>5 days ago</small></p> -->
                    <a class="media-left" href="#">
                        <img src="../uploads/no_image.jpg" class="rounded-circle" 
                        width=50 height=50>
                    </a>
                    <div class="media-body">                                
                        <h4 class="media-heading user_name"><?=$row['judul']?></h4>
                        <?=$row['komentar']?>                              
                        <p><small><a href="">Like</a> - <a href="">Share</a></small></p>
                    </div>
                </div>                                            
            </div>               
        
        <?php
        }
        ?>
        </div>
    </div>
</div>