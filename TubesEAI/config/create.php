<?php
require '../config/connector.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$nama_produk = $_POST['nama_produk'];
$no_va = $_POST['no_va'];
 




  $addquery = "INSERT INTO pesanan (nama, email, alamat, no_hp,nama_produk, no_va) VALUES ('$nama', '$email', '$alamat', '$no_hp', '$nama_produk', '$no_va')";
  if (mysqli_query($connector, $addquery)) 
    header("location: ../pages/sukses.php?pesan=succes");
