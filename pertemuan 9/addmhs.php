<?php
include "koneksi.php";

if(isset($_POST['bok'])){
    $npm = $_POST['tnpm'];
    $nama = $_POST['tnama'];
    $alamat = $_POST['talamat'];
    $notelp = $_POST['tnotelp'];

    $q = "INSERT INTO mhs (npm, nama, alamat, no_telp) ";
    $q .= "VALUES ('$npm', '$nama', '$alamat', '$notelp')";

    if(mysqli_query($koneksi, $q)){
        echo "Data tersimpan";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>

<form action="#" method="post">
    NPM : <input type="text" name="tnpm"/><br/>
    Nama : <input type="text" name="tnama"/><br/>
    Alamat : <input type="text" name="talamat"/><br/>
    No Telepon : <input type="text" name="tnotelp"/><br/>
    <input type="submit" name="bok" value="simpan"/>
</form>
<a href="tampilmhs.php">Kembali</a>
