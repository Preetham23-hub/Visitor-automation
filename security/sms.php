<?php
require('textlocal.class.php');

$textlocal = new Textlocal('sharath.snadig@gmail.com', 'Pp551995');

$numbers = array($o_phone);
$sender = 'TXTLCL';
$message = 'New Visitor At gate Plese Confirm ...';


    $result = $textlocal->sendSms($numbers, $message, $sender);
  
$fam=mysql_query("select * from family where uid='$uid' ");

while($or=mysql_fetch_array($fam))
{
	$numbers = array($or[3]);
$sender = 'TXTLCL';
$message = 'New Visitor At gate Plese Confirm ...';


    $result = $textlocal->sendSms($numbers, $message, $sender);
  

}

?>