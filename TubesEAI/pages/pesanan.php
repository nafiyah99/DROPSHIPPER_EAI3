<!doctype html>
<html lang="en">
<style type="text/css">
.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 70%;
    border: 1px solid #f2f5f7;
    margin-left: 18em;
    margin-top: 3em;
}
 
.table1 tr th{
    background: #000;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
#awikwok{
    margin-top: 160px;
}



	</style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tubes EAI</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/webstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
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

      <section id="awikwok">
            <div class="batas">
            <center><h1>Order Status</h1></center>
            
            <table class="table1 d-flex justify-content-between align-middle">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No_HP</th>
                    <th scope="col">Nama_Produk</th>
                    <th scope="col">Nomor VA</th>
                    
                </tr>
                <?php
             require '../config/connector.php';
               $query  = mysqli_query($connector, "SELECT * FROM pesanan");
               if($query){
               while($select = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                             
                <td><?= $select['nama']?></td>
                <td><?= $select['email']?></td>
                <td><?= $select['alamat']?></td>
                <td><?= $select['no_hp']?></td>
                <td><?= $select['nama_produk']?></td>
                <td><?= $select['no_va']?></td>

            </tr>
                <?php
                }
            }
            ?>
 
            </table>
        </div>	
    </section>
  </body>
</html>