<?php

$string = 'this is an example of a string';	

$string_shuffled = str_shuffle($string);
// str_reverse
// strlen
$half = substr($string_shuffled, 0, 10);
echo $string_shuffled. '<br>';
echo $half;
?>
