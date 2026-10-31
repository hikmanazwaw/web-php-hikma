<?php
//membuat array
$barang = ["Buku", "Penghapus", "Pensil"];

//menampilkan is array
echo "<h3>Dengan nomer index</h3>";
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

//menampilkan dengan perulangan foreach
echo "<h3>Dengan Foreach</h3>";
foreach($barang as $item); {
    echo $item."<br>";
}
//menghapus pensil
unset($barang[2]);

//menampilkan dengan perulangan
echo "<h3>Data setelah dihapus</h3>";
foreach($barang as $item){
    echo $item."<br>";
}

//menambahkan pensil pada i2
$barang[2]="Pensil";
//menambahkan penggaris di i akhir
$barang[]="Penggaris";

echo "<h3>Data setelah ditambah</h3>";
foreach ($barang as $item) {
    echo $item."<br>";
}
?>