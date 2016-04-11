<?php
//comments
/* comments
until the
cows
come home
*/
echo 'hello';

//error
//go to php.ini for error handling
echo $var = "alex";
$var2 = "Billy";

// e_all handles run time errors, if you make changes in .ini
// restart servers before you run
error_reporting(e_all);
ini_set('error_reporting', e_strict);
?>
