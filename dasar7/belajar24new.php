<?php
//membuat fungsi
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Hikma</br>";
}
function kenalan($nama,$asal){
    echo "<h3>Halo nama saya $nama</h3>";
    echo "Saya dari $asal <br>";
}
//manggil function salam
salam();

$siswa="Hikma";
$asal="Kediri";

//memanggil function kenalan
kenalan($siswa,$asal);
?>