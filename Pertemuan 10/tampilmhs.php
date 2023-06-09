<?php
include "koneksi.php";

$q = "SELECT * FROM mhs";
$ex = mysqli_query($koneksi, $q);

echo "<a href='addmhs.php'>Tambah MHS</a>";
echo "<table border=1>";
echo "<tr>
        <th>NPM</th><th>Nama</th><th>Alamat</th>
        <th>No Telepon</th><th>Action</th>
      </tr>";

while ($r = mysqli_fetch_array($ex)) {
    echo "<tr>";
    echo "<td>" . $r['npm'] . "</td>";
    echo "<td>" . $r['nama'] . "</td>";
    echo "<td>" . $r['alamat'] . "</td>";
    echo "<td>" . $r['no_telp'] . "</td>";
    echo "<td>
            <a href='editmhs.php?n=" . $r['npm'] . "'>ubah</a>
            <a href='deletemhs.php?n=" . $r['npm'] . "'>hapus</a>
          </td>";
    echo "</tr>";
}

echo "</table>";
?>
