<?php
include "koneksi.php";
$no_anggota  = $_GET['n'];
$q = "SELECT * FROM anggota WHERE no_anggota = '$no_anggota'";
$ex = mysqli_query($koneksi, $q);
$r = mysqli_fetch_array($ex);
?>

<form action="#" method="post">
    No Anggota : <input type="text" name="no_anggota" value="<?php echo $r['no_anggota']; ?>"/><br/>
    Nama : <input type="text" name="nama" value="<?php echo $r['nama']; ?>"/><br/>
    Alamat : <input type="text" name="alamat" value="<?php echo $r['alamat']; ?>"/><br/>
    No Hp : <input type="text" name="nohp" value="<?php echo $r['no_hp']; ?>"/><br/>
    Tanggal Bergabung : <input type="date" name="tgl_bergabung" value="<?php echo $r['tgl_bergabung']; ?>"><br/>
    <input type="submit" name="bok" value="Ubah Data"/>
</form>
<a href="tampil-anggota.php">Kembali</a>

<?php
if(isset($_POST['bok'])){
    $no_anggota = $_POST['no_anggota'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $tgl_bergabung = $_POST['tgl_bergabung'];

    $q = "UPDATE anggota SET nama = '$nama', alamat = '$alamat', no_hp = '$nohp', tgl_bergabung = '$tgl_bergabung' ";
    $q .= "WHERE no_anggota = '$no_anggota'";

    if(mysqli_query($koneksi, $q)){
        echo "<script>alert('Data Berhasil diubah')</script>";
    } else {
        echo "<script>alert('Gagal Mengubah Data')</script>". mysqli_error($koneksi);
    }
}
?>
