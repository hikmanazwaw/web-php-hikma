<?php
//membuat fungsi hitung umur
function hitungUmur($tahun_lahir,$tahun_sekarang){
    $umur=$tahun_sekarang - $tahun_lahir;
    return $umur;
}
echo "Umur saya adalah ". hitungUmur(2001,2026)." tahun";
?>