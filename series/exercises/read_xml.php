<?php

//extensible markup language

$xml = simplexml_load_file('xml.xml');
echo $xml->producer[0]->name.' '$xml->producer[0]->age;

//xml - everything is case sensitive
?>
