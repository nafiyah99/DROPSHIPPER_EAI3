<?php
require '../config/connector.php';

$foto = $_FILES['foto']['name'];

$path = "../asset/image/";

if (move_uploaded_file($_FILES['foto']['tmp_name'], $path . $foto)) {
    $addquery = "INSERT INTO foto (foto) VALUES ('$foto')";
    if (mysqli_query($connector, $addquery)) {
      header("location: ../pages/webadmin.php?pesan=succes");
    } else {
      header("location: ../pages/webadmin.php.php?pesan=failed");
    }
  } else {
    header("location: ../pages/webadmin.php.php?pesan=failed");
  }
  