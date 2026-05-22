<?php
// Tanpa menggunakan fungsi

/* Mendapatkan jam dari sistem dengan format 0-23 */
$time = date('G');
if ($time < 12){
  $Say = "Good morning";
} elseif ($time < 17) {
  $say = "Good Afternoon";
} else {
  $say = "Good evening";
}
echo $say;
?>
