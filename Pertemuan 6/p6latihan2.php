<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body>
    <?php
    if (isset($_POST["name"]) && isset($_POST["no_telp"]) && isset($_POST["jenis_tiket"]) && isset($_POST["jumlah_tiket"])) {
        $nama=$_POST["name"];
        $no_Telp=$_POST["no_telp"];
        $jenis_tiket=$_POST["jenis_tiket"];
        $jumlah_tiket=$_POST["jumlah_tiket"];
        $harga = 500000;
        $total = $jumlah_tiket * $harga;

        echo "<h2> DATA PEMESANAN TIKET BOLA SEAGAMES 2018 </h2>";
        echo "<h2> Indonesia Vs Malaysia </h2>"b;
        echo "<h2> PUKUL 15.00 </h2>";
        echo "<p> Nama : $nama </p>";
        echo "<p> No telp : $no_Telp </p>";
        echo "<p> Jenis tiket : $jenis_tiket</p>";
        echo "<p> Harga Tiket : $harga</p>";
        echo "<p> Banyaknya tiket: $jumlah_tiket </p>";
        echo "<p> -----------------------------------</p>";
        echo "<p> Total bayar : $total </p>";
    } else {
    ?>
        <h2><center>FORM TIKET BOLA SEAGAMES 2019</h2></center>
        <h2><center>INDONESIA VS MALAYSIA</h2></center>
        <h2><center>PUKUL 15.00 WIB</h2></center>
        <form method="post">
            <label for="name">Nama Pemesanan = </label>
            <input type="text" id="name" name="name" required><br>

            <label for="no_telp">No telp = </label>
            <input type="text" id="no_telp" name="no_telp" required><br>

            <label for="jenis_tiket">Jenis Tiket = </label>
            <select id="jenis_tiket" name="jenis_tiket">
                <option value="VIP">VIP</option>
                <option value="Reguler">Reguler</option>
            </select><br>

            <label for="jumlah_tiket">jumlah tiket = </label>
            <input type="text" id="jumlah_tiket" name="jumlah_tiket" required>  lembar <br>

            <input type="submit" value="Submit">
        </form>
    <?php
    }
    ?>
</body>
</html>
