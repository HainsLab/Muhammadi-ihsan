<?php
//deklarasi
$panjangDinding = 3; 
$lebarDinding = 4; 
$panjangPintu = 1; 
$lebarPintu = 2; 
$panjangJendela = 1; 
$lebarJendela = 1; 
$biayaCatPerMeterPersegi = 25000; 

$luasDinding = ($panjangDinding * $lebarDinding) - ($panjangPintu * $lebarPintu) - ($panjangJendela * $lebarJendela);
$biayaKeseluruhan = $luasDinding * $biayaCatPerMeterPersegi;

echo "Luas dinding yang diberi cat: " . $luasDinding . " meter persegi","<br>";
echo "Biaya keseluruhan untuk pengecatan dinding: Rp. " . $biayaKeseluruhan;
?>
