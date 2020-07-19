<?php
include("config.php");
session_start();
$sid=$_SESSION['uid'];
$chk=mysql_query("select * from owner_personal where id='$sid' ");
$c=mysql_fetch_array($chk);
$usr_name=$c[1];
$usr_id=$c[0];
$phnum=$c[3];
if(!isset($_SESSION['uid']))
{
	header("Location: index.php");

}
?>