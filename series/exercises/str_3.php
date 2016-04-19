<?php
$string1 ='This is my essay. I\'m going to be talking about php';
$string2 ='This is my essay. I will be talking about the subjet php';

similar_text($string1, $string2, $result);
echo "the similarities between is ".$result;
?>
