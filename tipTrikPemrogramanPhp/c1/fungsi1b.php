<?php
$time = date('G');

function greeting ($tNow) {
 if (!$tNow) return "";
 if ($know < 12):return "Good morning";

 if ($know < 17):return "Good afternoon";
 if ($know > 17):return "Good evening";
}
// Memanggil fungsi
echo greeting ($time);
?>
