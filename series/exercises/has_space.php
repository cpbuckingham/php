<?php
function has_space($string){
  if (preg_match('/ /', $string)){
    return true;
  }else{
  return false;
  }
}

$phrase = 'thisdoesh avespace';

  if (has_space($phrase)){
    echo 'has a space';
  }else{
      echo  'no space';
    }
 ?>
