<?php

//extensible markup language

$xml = simplexml_load_file('xml.xml');
echo $xml->producer[0]->name.' is '.$xml->producer[0]->age;

foreach ($xml->producer as $producer) {
  echo $producer->name.' is '.$producer->age.'<br>';
}

//xml - everything is case sensitive
?>
