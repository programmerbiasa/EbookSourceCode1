<?php
// passing variable $str by reference
function setHtmlTag ($str, $tag = '<b>') {
  return "<$tag>$str</$tag>";
)

$myStr = 'Hello';

// Men-set tag bold
$bold =& setHtmlTag($myStr);
echo $bold;

// Men-set tag h1
$head =& setHtmlTag($myStr);
echo $head;
?>
