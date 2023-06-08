<!DOCTYPE html>   
<html>
    <head>
        <title>Latihan no 1 konversi nilai angka ke nilai huruf </title>
    </head>
    <body>
            <?php
            $nilai1=84;
            echo"Nilai = ",$nilai1;echo"<br>";
            echo"Maka grade nilai yang didapat sesuai dengan range di soal latihan adalah ";echo"<br>";
            if ($nilai1>=85 and $nilai1<=100){
                echo" Grade A";
            }
            else if($nilai1>= 70 and $nilai1<=84){
                echo"Grade B";
            }
            else if($nilai1>= 60 and $nilai1<70){
                echo"Grade C";
            }
            else if($nilai1>= 50 and $nilai1<60){
                echo"Grade D";
            }
            else if($nilai1<50 ){
                echo"Grade E";
            }
            ?>
<br>
</body>