<?php
$connector = new mysqli("127.0.0.1". ":" . "3306", "root", "", "tubes_eai");

if (!$connector) {
  die("Koneksi Error: " . $connector->connect_error);
}
