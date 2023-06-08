<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db_name = "db_web2";

$koneksi = new mysqli($host, $user, $pass, $db_name);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    echo("Koneksi ke database gagal: " . $koneksi->connect_error);
}else{
    echo"Koneksi ke database sukses <br>";
}

// Memilih database
if (!$koneksi->select_db($db_name)) {
    echo("Gagal memilih database: " . $koneksi->error);
}else{
    echo"Berhasil memilih database";
}

?>