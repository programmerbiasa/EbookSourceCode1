<?php
// passing variable $str by reference
function setHtmlTag (&$str. $tag = '<b>') {
  $str = "<$tag>$str</$tag>";
)

$myStr = 'Hello';

// Men-set tag bold
setHtmlTag($myStr);
echo $myStr;

// Men-set tag h1
setHtmlTag($myStr);
echo $myStr;
?>
