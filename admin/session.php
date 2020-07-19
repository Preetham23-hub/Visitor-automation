<?php
session_start();



include("config.php");
if(!isset($_SESSION["id"]))
{
	header("Location: index.php");

}
?>