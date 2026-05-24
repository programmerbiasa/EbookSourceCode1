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

// Untuk method POST
// Memastikan bahwa hanya parameter $_POST['msg']
// dan $_POST['ok'] saja yang boleh dikirim
if (!valid(array['msg', 'ok'], $_POST)) {
  exit('Bad POST parameters detected');
else {
  echo pursuant with we specify.';
}
// Contoh: POST dengan parameter berikut akan dicegah 
// $_POST['msg'] dan $_POST['ok']'
?>
