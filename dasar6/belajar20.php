<?php
//membuat array kosong
$siswa=array();
$kelas=[];

//membuat array sekaligus mengisinya
$siswa=array("Ani", "Anton", "Sigit", "Budi", "Caca");
$kelas=[10, 12, 10, 11, 12];

//membuat array dengan mengisi indeks tertentu
$siswa[0]="Ani";
$siswa[1]="Anton";
$siswa[2]="Sigit";
$siswa[3]="Budi";
$siswa[4]="Caca";   

var_dump($siswa);
echo "<br>";
var_dump($kelas);
?>