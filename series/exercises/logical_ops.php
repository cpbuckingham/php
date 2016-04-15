<?php

$number1 = 555;

$upper = 1000;
$lower = 500;

if ($number1>=$lower && $number1<=$upper){
  // or can be used with 2 pipes '||'
  // not can be used with a bang '!'
echo 'OK';
}else{
  echo 'Number must be between' .$upper. ' and' .$lower;
}


?>
