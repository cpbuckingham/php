<?php

if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && ($_POST['contact_text'])) {
  echo $contact_name = $_POST['contact_name'];
  echo $contact_email = $_POST['contact_email'];
  echo $contact_text = $_POST['contact_text'];

  if(!empty($contact_name)&&!empty($contact_email)&&!empty($contact_text)){

      if(strleng($contact_name)>25 || strlen($contact_text)>50 || strlen(contact_text)>1000){
        else{
      }

      $to= 'cam@galvanize.com';
      $subject='contact form submitted';
      $body=$contact_name."\n".$contact_text;
      $headers='From:'.$contact_email;

      if (mail($to, $subject, $body, $headers)){
        echo 'Thanks for contact us. We\'ll be in touch soon';
      }else{
        echo 'Sorry an error occured, please try again later';
      }
    }
  }else{
    echo 'all fields are required '
  }
}


?>

<form action="index.php" method="POST">
  Name:<br><input type = "text" name="contact_name" maxlength="25"><br><br>
  Email:<br><input type = "text" name="contact_email" maxlength="50"><br><br>
  Message:<br>
  <textarea name="contact_text" rows="6" cols="30" maxlength="1000"></textarea><br><br>
  <input type="submit" value="Send">
</form>
