<?php
include "koneksi.php";
$npm = $_GET['n'];
$q = "SELECT * FROM mhs WHERE npm = '$npm'";
$ex = mysqli_query($koneksi, $q);
$r = mysqli_fetch_array($ex);
?>

<form action="#" method="post">
    NPM : <input type="text" name="tnpm" value="<?php echo $r['npm']; ?>"/><br/>
    Nama : <input type="text" name="tnama" value="<?php echo $r['nama']; ?>"/><br/>
    Alamat : <input type="text" name="talamat" value="<?php echo $r['alamat']; ?>"/><br/>
    No Telepon : <input type="text" name="tnotelp" value="<?php echo $r['no_telp']; ?>"/><br/>
    <input type="submit" name="bok" value="Ubah Data"/>
</form>
<a href="tampilmhs.php">Kembali</a>

<?php
if(isset($_POST['bok'])){
    $npm = $_POST['tnpm'];
    $nama = $_POST['tnama'];
    $alamat = $_POST['talamat'];
    $notelp = $_POST['tnotelp'];

    $q = "UPDATE mhs SET nama='$nama', alamat='$alamat', no_telp='$notelp' ";
    $q .= "WHERE npm='$npm'";

    if(mysqli_query($koneksi, $q)){
        echo "Data berhasil diubah";
    } else {
        echo "Gagal mengubah data: " . mysqli_error($koneksi);
    }
}
?>
