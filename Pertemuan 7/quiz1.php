<form method="post" action="">
<label for = "ganjil ">Masukkan batas bilangan ganjil</label> : <input type="number" name="n">
<input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['n'])) {
  $n = $_POST["n"];

  echo "Deret bilangan ganjil dari 1 sampai " . $n . " adalah:<br>";
  for ($i = 1; $i <= $n; $i += 2) {
    echo $i . " ";
  }
}
?>
