<?php
require('textlocal.class.php');

$textlocal = new Textlocal('sharath.snadig@gmail.com', 'Pp551995');

$numbers = array($phone,$phnum);
$sender = 'TXTLCL';
$message = 'This is a OTP, Present While Entering '.$value;;


    $result = $textlocal->sendSms($numbers, $message, $sender);
  


?>