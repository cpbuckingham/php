<?php

if(isset($_GET['user_name'])&&!empty($_GET['user_name'])){
  $user_name = $_GET['user_name'];
  $user_name_lc = strtolower($user_name);

  if($user_name_lc =='cam'){
    echo 'you are the best '.$user_name;
  }else{
    echo 'you arent cam :(';
  }
}

  ?>

<form action=program.php method="GET">
  Name: <input type="test" name="user_name"><br><br>
  <input type = "submit" value ="Submit">
</form>
