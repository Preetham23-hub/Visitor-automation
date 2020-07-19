<?php
require('textlocal.class.php');
include("session.php");

$textlocal = new Textlocal('sharath.snadig@gmail.com', 'Pp551995');
$sql1=mysql_query("select phone from alert");
while($b=mysql_fetch_array($sql1))
{
$numbers = array($b[0]);
$sender = 'TXTLCL';
$message = 'I am in Danger Come Fast to  block number'.$c[8].' and house no'.$c[7];


    $result = $textlocal->sendSms($numbers, $message, $sender);
  

}
echo "<script language='JavaScript' type='text/javascript'>
		alert('Alerted Help Will Be sent Soon');
		</script>";
		echo "<script> window.location.assign('index.php'); </script>"; 
?>