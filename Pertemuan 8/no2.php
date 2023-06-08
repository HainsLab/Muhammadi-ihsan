<?php
cetakSlipGaji("Gus Samsudin",4500000,10);

function cetakSlipGaji($nama, $gaji,$terlambat){
    $potonganKeterlambatan = $terlambat * 15000;
    $totalDiterima=$gaji-$potonganKeterlambatan;
    
    echo "Besaran Honor yang didapat oleh ",$nama, " adalah : <br>";
    echo "Gaji : ",$gaji,"<br>";
    echo "Potongan Keterlambatan : ",$potonganKeterlambatan,"<br>";
    echo "Total Diterima : ",$totalDiterima,"<br>";
}
?>