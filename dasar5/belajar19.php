<?php
$daftar_siswa = [
    "Andi",
    "Budi",
    "Caca",
    "Dedi",
    "Eka"
];

echo "<h3>Daftar Nama Siswa</h3>";
echo "<ul>";

foreach($daftar_siswa as $siswa){
    echo "<li>$siswa</li>";
}
echo "</ul>";
?>