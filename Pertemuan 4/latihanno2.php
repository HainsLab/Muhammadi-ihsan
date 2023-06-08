<!DOCTYPE html>
<html>
    <head>
        <title>Latihan no 2 Menentukan apakah Bilangan Positif, Negatif atau nol</title>
    </head>
    <body>
            <?php
            $bilangan=10;
            echo"bilagan bernilai = ",$bilangan;echo"<br>"; 
            if ($bilangan == 0) {
                echo "karena nilai bilangan = ",$bilangan," Maka bilangan bernilai nol (0) ";
            } else if ($bilangan > 0) {
                echo "karena nilai bilangan = ",$bilangan," Maka Bilangan merupakan bilangan positif";
            } else if ($bilangan < 0) {
                echo "karena nilai bilangan = ",$bilangan," Maka Bilangan merupakan bilangan negatif";
            }
            ?>
    </body>
</html>