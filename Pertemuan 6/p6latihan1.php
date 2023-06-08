<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body>
	<form method="post">
		<label for="first_name">First Name:</label>
		<input type="text" id="first_name" name="first_name" required><br>

		<label>Gender:</label><br>
		<input type="radio" id="male" name="gender" value="male" required>
		<label for="male">Laki-laki</label><br>
		<input type="radio" id="female" name="gender" value="female" required>
		<label for="female">Perempuan</label><br>

        <label>Hobby:</label><br>
        <input type="radio" id="hobby1" name="hobby" value="korespondensi">
        <label for="hobby1">Korespondensi</label><br>
        <input type="radio" id="hobby2" name="hobby" value="traveling">
        <label for="hobby2">Traveling</label><br>
        <input type="radio" id="hobby3" name="hobby" value="shopping">
        <label for="hobby3">Shopping</label><br>

		<label for="pendidikan">Pendidikan:</label>
		<select id="pendidikan" name="pendidikan">
			<option value="sd">SD</option>
			<option value="smp">SMP</option>
			<option value="sma">SMA</option>
		</select><br>

		<label for="alamat">Alamat:</label><br>
		<textarea id="alamat" name="alamat" rows="4" cols="50"></textarea><br>

		<input type="submit" value="Simpan">
	</form>
    <?php
        echo"<h2> Biodata anda </h2>";
    if (isset($_POST["first_name"]) && isset($_POST["gender"]) && isset($_POST["hobby"]) && isset($_POST["pendidikan"]) && isset($_POST["alamat"])) {
        echo "Nama       : ",$_POST["first_name"] . "<br>";
        echo "Gender     : ",$_POST["gender"] . "<br>";
        echo "Hobby      : ",$_POST["hobby"] . "<br>";
        echo "Pendidikan : ",$_POST["pendidikan"] . "<br>";
        echo "Alamat     : ",$_POST["alamat"] . "<br>";
    }
    
    ?>
</body>
</html>
