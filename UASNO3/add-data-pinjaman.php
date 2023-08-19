<?php
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        $no_pinjaman = $_POST['no_pinjaman'];
        $no_anggota = $_POST['no_anggota'];
        $tgl = $_POST['tgl_pinjaman'];
        $nominal = $_POST['nominal'];
        $tenor = $_POST['tenor'];

        $max_peminjaman = 0;

        switch ($tenor) {
            case 1:
                $max_peminjaman = 1500000;
                break;
            case 2:
                $max_peminjaman = 4500000;
                break;
            case 3:
                $max_peminjaman = 9000000;
                break;
            default:
                echo "Tenor tidak valid";
                return;
        }

        if ($nominal <= $max_peminjaman) {
            $q = "INSERT INTO pinjaman (no_pinjaman, no_anggota, tgl_pinjaman, nominal, tenor) ";
            $q .= "VALUES ('$no_pinjaman', '$no_anggota', '$tgl', '$nominal', '$tenor')";

            if (mysqli_query($koneksi, $q)) {
                echo "Tenor $tenor dapat Meminjam maksimal $max_peminjaman";
            } else {
                echo "Gagal menyimpan data: " . mysqli_error($koneksi);
            }
        } else {
            echo "Nominal Salah";
        }
    }
    ?>

    <form method="post" action="">
        <table border="0">
            <tr>
                <td>No Pinjaman</td><td>:</td>
                <td><input type="text" name="no_pinjaman"></td>
            </tr>
            <tr>
                <td>No Anggota</td><td>:</td>
                <td><input type="text" name="no_anggota"></td>
            </tr>
            <tr>
                <td>Tanggal</td><td>:</td>
                <td><input type="date" name="tgl_pinjaman"></td>
            </tr>
            <tr>
                <td>Nominal</td><td>:</td>
                <td><input type="text" name="nominal"></td>
            </tr>
            <tr>
                <td>Tenor</td><td>:</td>
                <td>
                    <select name="tenor">
                        <option value="3">3 Bulan</option>
                        <option value="9">9 Bulan</option>
                        <option value="15">15 Bulan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
            
        </table>
    </form>
