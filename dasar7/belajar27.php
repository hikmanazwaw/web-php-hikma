<?php
print "<h2>Fungsi Rekursif</h2>";

function faktorial($angka){
    if($angka<2){
        return 1;
    } else{
        //manggil dirinya sendiri
        return($angka * faktorial($angka-1));
    }
}
//manggil fungsi
echo "faktorial 7 adalah ".faktorial(7);
?>