<?php

// echo 'hello';
// exit();
// echo 'world';
//scraps everything on the page
//used when you are connecting to a DB and cannot connect

@mysql_connect('localhost', 'root', 'password')||die('could not connect');
//@ symbol takes away stack trace - die and exit are the same
echo 'connected!';

?>
