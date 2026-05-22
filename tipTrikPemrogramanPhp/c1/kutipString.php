<?php
// tanda kutip pada String
$thn = date("Y");

echo "Tahun $thn sekarang";
// Hasil: Tahun 2006 sekarang
echo "Tahun {$thn} sekarang";
// Hasil: Tahun 2006 sekarang
echo 'Tahun $thn sekarang';
// Hasil: Tahun $thn sekarang
echo 'Tahun '.$thn.' sekarang';
// Hasil: Tahun 2006 sekarang
?>
