<?php

$one = "hello there I am ned";
$two = "hello there Ned";

//preg_match($one, $two);
// does not work^^ have to use a if/else
//exp. matching is matching patterns inside of a str

if(preg_match('/there/', $one)){
  echo 'match found';
}else{
    echo 'no match';
  }

//first params is matcher, and second is var

?>
