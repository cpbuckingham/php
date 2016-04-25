<?php

$cat = array('healthy'=>
                array('salad', 'pasta', 'veggies'),
            'unhealthy'=>
                array('pizza'));

foreach($cat as $element => $inner_array){
  echo $element.'<br>';
  foreach($inner_array as $item)
  echo $item.'<br>';
}

//element is healthy or unhealthy
//item is items in the array
?>
