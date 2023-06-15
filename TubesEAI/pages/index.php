<?php
$sumber = 'https://tokotelu05.000webhostapp.com/get-api.php';
$konten = file_get_contents($sumber);
$isi = json_decode($konten, true);
// var_dump($data);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tubes EAI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/web.css">


  </head>
  <body>
  <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TokoCina</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pesanan.php">Pesanan</a>
        </li>
    </div>
  </div>
</nav>

<section id="card" class="d-flex align-items-center">
  <div class="container">
    <center><h1>TUBES EAI</h1></center>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($isi ['dataa'] as $row) {
                
                
            ?>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3><?php echo $row['nama_produk'] ?></h3>
                        <p class="card-text"><?php echo $row['deskripsi_produk'] ?></p>
                        <a href="../pages/beli.php" class="btn btn-dark" style="width:100px">Pesan</a>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                    </div>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
    </div>

  </div>

</section>
    

    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Attention</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              
             <div class="mb-3">
                  <form action="../config/create.php" method="POST" enctype="multipart/form-data">
                       <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" name="namaproduk">
                       </div>
                            <div class="form-group">
                                <label for="negara">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-group">
                                <label for="nama">Nama Pemesan</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-group">
                                <label for="alamat">Nomer Hp</label>
                                <input type="text" class="form-control" name="no_hp">  
                            </div>
                                   
                       <div class="form-group">
                            <label for="no_hp">Virtual Account Number</label>
                            <input type="text" class="form-control" name="no_va" >
                       </div><br>
                    </form>
                              </div>
                              <div class="modal-footer">
                                <center>
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Pesan</button>
                                </center>
                              </div>
                            </div>
                          </div>
                        </div>   -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  </body>
</html>