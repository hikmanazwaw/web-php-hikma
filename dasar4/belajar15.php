<?php
print "<h2>Percabangan SWITCH</h2>";

$harike = 3;

switch($harike){
    case 1:
        echo "SENIN";
        break;
    case 2:
        echo "SELASA";
        break;
    case 3:
        echo "RABU";
        break;
    case 4:
        echo "KAMIS";
        break;
    case 5:
        echo "JUMAT";
        break;
    case 6:
        echo "SABTU";
        break;
    case 7:
        echo "MINGGU";
        break;
    default:
    echo "Maaf, kode hari salah!";
}
?>