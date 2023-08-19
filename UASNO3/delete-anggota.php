<?php
include "koneksi.php";
$no_anggota  = $_GET['n'];
$q = "DELETE FROM anggota WHERE no_anggota='$no_anggota '";

if(mysqli_query($koneksi, $q)){
   echo "<script>alert('Data Terhapus')</script>";
} else {
    echo "<script>alert('Gagal Menghapus data')</script>" . mysqli_error($koneksi);
}

echo "<a href='tampil-anggota.php'>Kembali</a>";
?>
