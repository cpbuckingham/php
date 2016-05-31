<?php

//extensible markup language

$xml = simplexml_load_file('xml.xml');
echo $xml->producer[0]->name.' is '.$xml->producer[0]->age;

foreach ($xml->producer as $producer) {
  echo $producer->name.' is '.$producer->age.'<br>';
  //echo $producer->show->showname
  foreach ($producer-> show as $show){
    echo $show->showname;
  }
}

//xml - everything is case sensitive
?>
