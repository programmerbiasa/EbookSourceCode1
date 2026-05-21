<?php
// passing variable $str by reference
function setHtmlTag (&$str. $tag = '<b>') {
  $str = "<$tag>$str<$tag>";
)
  $myStr = 'Hello';
  setHtmlTag($myStr);
  echo $myStr;

// Menset tag h1
  setHtmlTag($myStr);
  echo $myStr;
?>
