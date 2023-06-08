<!DOCTYPE html>
<html>
<head>
	<title>no 3 uts</title>
</head>
<body>
    <form method="post">
        <label for="name">Nama :</label>
        <input type="text" id="name" name="name" required><br>

        <label for="jenis_aksi">Jenis aksi : </label>
        <input type="radio" name="jenis_aksi" value="melangkah" />melangkah
        <input type="radio" name="jenis_aksi" value="melompat" />melompat<br>

        <label for="jumlah_aksi">Jumlah aksi : </label>
        <input type="text" id="jumlah_aksi" name="jumlah_aksi" required><br>

        <input type="submit" value="Submit">
    </form>
    <?php
        if (isset($_POST["name"]) && isset($_POST["jenis_aksi"]) && isset($_POST["jumlah_aksi"])) {
            $nama = $_POST["name"];
            $jenis_aksi = $_POST["jenis_aksi"];
            $jumlah_aksi = $_POST["jumlah_aksi"];
            if ($jumlah_aksi > 0) {
                for ($i = 1; $i <= $jumlah_aksi; $i++) {
                    echo $nama, " ", $jenis_aksi, " ", $i, " kali<br>";
                }
            }
    
            echo $nama, " ", "berhenti ", $jenis_aksi;
        }
    ?>
</body>
</html>
