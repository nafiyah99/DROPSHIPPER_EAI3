<?php

require '../config/connector.php';

$id_pesanan = $_POST['id'];
$nama = $_POST['nama'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$size = $_POST['size'];
$nomor = $_POST['nomor'];
$status = $_POST['status'];


    $sql = "UPDATE pesanan SET nama = '$nama', email = '$email', alamat = '$alamat', jenis = '$jenis', size = '$size', nomor = '$nomor', status = '$status' WHERE id_pesanan = '$id_pesanan'";
    if (mysqli_query($connector, $sql)) {
      header("location: ../pages/webadmin.php");
    } else {
      echo "Error";
    }
