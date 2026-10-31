<?php
print "<h2>Percabangan IF</h2>";

$total_belanja = 150000;
if($total_belanja > 100000) {
    echo "Anda dapat diskon!";
} else {
    echo "Anda tidak dapat diskon!";
}
?>