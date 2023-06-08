<?php
include "koneksi.php";
$npm = $_GET['n'];
$q = "DELETE FROM mhs WHERE npm='$npm'";

if(mysqli_query($koneksi, $q)){
    echo "Data terhapus\n";
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}

echo "<a href='tampilmhs.php'>Kembali</a>";
?>
