<html>
<body>
<form action="#"method="get">
    Nama : <input type="text" name="tnama" /><br>
    Umur : <input type="text" name="tumur" /><br>
    <input type="radio" value="Laki-Laki" name="_gender">Laki-Laki
    <input type="radio" value="Permpuan" name="_gender" >Perempuan<br />

    <input type="submit" name="bok" value="OK"/>
</form>
<?php
if(isset($_GET['bok'])){
    echo $_GET['tnama']."<br>";
    echo $_GET['tumur'];
}
?>
</body>
</html>