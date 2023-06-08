<!DOCTYPE html>
<html>
    <head>
        <title>Latihan no 3 Menentukan apakah Bilangan merupakan bilangan ganjil atau genap</title>
    </head>
    <body>
            <?php
            $bilangan=10;
            echo"Angka yang diinput bernilai ",$bilangan;echo"<br>";
            if ($bilangan % 2 == 0) {
                echo "Angka = ",$bilangan," merupakan bilangan genap ";
            } else  {
                echo "Angka = ",$bilangan," merupakan bilangan ganjil ";
            } 
            ?>
    </body>
</html>