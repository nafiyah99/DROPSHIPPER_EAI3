<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TubesEAI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
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
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>
    <section id="form"></section>
        <div class="pt-5">
                    <div class="container pt-5">
                        <div class="card pb-4">
                            <div class="row">
                                <div class="col-md-5 d-flex justify-content-center">
                                        <img class="m-auto p-3"src="https://www.logolynx.com/images/logolynx/e6/e6813ea978758ef1a44054c729e68e0e.gif"  height="250px" width="250px">
                                </div>
                                <div class="mb-3 col-md-6 row g-3">
                                    <form action="../config/create.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group mt-2">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" placeholder="Masukkan Nama Anda" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="no_hp">Nomor HP</label>
                                            <input type="number" class="form-control" placeholder="Masukkan Nomor Anda" id="no_hp" aria-describedby="nomor" name="no_hp">
                                        </div>  
                                        <div class="form-group mt-3">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Email Anda" id="email" aria-describedby="email" name="email" required>
                                        </div>
                                        <div class="form-gruop mt-3">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" placeholder="Masukkan Alamat Anda" id="alamat" name='alamat' required></textarea>
                                        </div>
                                          
                                        <div class="form-group mt-2">
                                            <label for="nama_produk">Nama Produk</label>
                                            <input type="text" class="form-control" id="nama_produk" aria-describedby="nama_produk" name="nama_produk" placeholder="Masukkan Nama Produk yang Dipesan" required>
                                        </div>                                    
                                        <div class="form-group mt-3">
                                            <label for="no_va">Virtual Account Number</label>
                                            <input type="number" class="form-control" id="no_va" aria-describedby="VA" name="no_va" required>
                                        </div>
                                        <div class="form-group mt-3 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-dark w-100">Pesan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>