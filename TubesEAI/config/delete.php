<?php

require '../config/connector.php';

    $id_pesanan = $_GET['id'];
    $mysql = mysqli_query($connector, "DELETE from pesanan WHERE id_pesanan='$id_pesanan'");

if ($mysql) {
    header("location: ../pages/webadmin.php?pesan=delete");
    } else {
    echo "Error";
    }

    