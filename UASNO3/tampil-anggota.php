<?php
include "koneksi.php";

$q = "SELECT * FROM anggota";
$ex = mysqli_query($koneksi, $q);

echo "<table border=1>";
echo "<tr>
        <th>No Anggota</th><th>Nama Anggota</th><th>Alamat</th><th>No Hp</th>
        <th>Tanggal Bergabung</th><th>Action</th>
      </tr>";

while ($r = mysqli_fetch_array($ex)) {
    echo "<tr>";
    echo "<td>" . $r['no_anggota'] . "</td>";
    echo "<td>" . $r['nama'] . "</td>";
    echo "<td>" . $r['alamat'] . "</td>";
    echo "<td>" . $r['no_hp'] . "</td>";
    echo "<td>" . $r['tgl_bergabung'] . "</td>";
    echo "<td>
            <a href='edit-anggota.php?n=" . $r['no_anggota'] . "'>ubah</a>
            <a href='delete-anggota.php?n=" . $r['no_anggota'] . "'>hapus</a>
          </td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href='add-anggota.php'>Tambah Anggota</a>";
?>
