<?php
function prima($num)
{
  if ($num <= 1) {
    return false;
  }

  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }

  return true;
}

$deret = "";
if (isset($_POST['n'])) { 
  $n = $_POST["n"];
  // proses perhitungan deret bilangan prima
  for ($i = 2; $i <= $n; $i++) {
    if (prima($i)) {
      $deret .= $i . " ";
    }
  }
}
?>
<form method="post" action="">
  Masukkan batas bilangan prima : <input type="number" name="n">
  <input type="submit" value="Submit">
</form>

<?php
if (!empty($deret)) {
  echo "Deret bilangan prima adalah: " . $deret;
}
?>
