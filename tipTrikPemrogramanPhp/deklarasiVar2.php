<?php

$a = "Hello";
// variable variables
$$a = "world";

// Memanggil variabel dinamis
echo "${$a}";
// ekuivalen dengan berikut
echo "$Hello";
// ekuivalen dengan berikut
echo "{$$a}";
// Memanggil semua (kedua variabel)
echo "$a $Hello"; // Mencetak Hello World

?>
