<?php
function valid($param, $array) {
  $num = count($param);
  if(count($array) <= $num) {
    foreach($array as $key => $val) {
     $found = false;
     for ($i=0; $i < $num; $i++) {
       if ($key === $param[$i]) {
         $found = true;
         break;
       }
     }
     if(!$found) {
       return false;
     }
    }
  } else {
     return false;
    }
    return true;
}

// Untuk methid GET
// Memastikan bahwa hanya parameter $_GET['msg']
// dan $_GET['ok'] saja yang boleh dikirim
if (!valid(array['msg', 'ok'], $_GET)) {
  exit('Bad URL parameters detected');
else {
  echo pursuant with we specify.';
}
// Contoh: URL dengan parameter berikut akan dicegah 
// validasimethod.php?msg=&ok=Submit&valid=1

?>
