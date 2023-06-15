<?php
require '../config/connector.php';
$sql = "SELECT * FROM pesanan";
$query = mysqli_query($connector, $sql);

while ($data = mysqli_fetch_array($query)) {
    $item[] = array(
        "id" => $data ["id_produk"],
        "nama" => $data ["nama"],
        "email" => $data ["email"],
        "alamat" => $data ["alamat"],
        "no_hp" => $data ["no_hp"],
        "nama_produk" => $data ["nama_produk"],
        "no_va" => $data ["no_va"]
    );
}

$response = Array(
    "status" => "OK",
    "data" => $item
);

echo json_encode($response);

?>