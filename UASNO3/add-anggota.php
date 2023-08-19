<?php
include "koneksi.php";

if(isset($_POST['bok'])){
    $no_anggota = $_POST['no_anggota'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $tgl_bergabung = $_POST['tgl_bergabung'];

    $q = "INSERT INTO anggota (no_anggota, nama, alamat, no_hp, tgl_bergabung) ";
    $q .= "VALUES ('$no_anggota', '$nama', '$alamat', '$nohp', '$tgl_bergabung')";

    if(mysqli_query($koneksi, $q)){
        echo "<script>alert('Data Tersimpan')</script>";
    } else {
        echo "<script>alert('Data Gagal disimpan')</script>" . mysqli_error($koneksi);
    }
}
?>

<form action="#" method="post">
    No Anggota : <input type="text" name="no_anggota" required/><br/>
    Nama : <input type="text" name="nama" required/><br/>
    Alamat : <input type="text" name="alamat" required/><br/>
    No Hp : <input type="text" name="nohp" required/><br/>
    Tanggal Bergabung : <input type="date" name="tgl_bergabung" required><br/>
    <input type="submit" name="bok" value="Simpan"/>
</form>
<a href="tampil-anggota.php">Kembali</a>
