<?php
include("session.php");
$id=$_GET['id'];

if(mysql_query("DELETE FROM `alert` WHERE id='$id'"))
{
						echo "<script language='JavaScript' type='text/javascript'>
						alert('Successfully Deleted ');
						</script>";
						echo "<script> window.location.assign('secdet.php'); </script>";
}
else
{
						echo "<script language='JavaScript' type='text/javascript'>
						alert('Failed ');
						</script>";
						echo "<script> window.location.assign('secdet.php'); </script>";
}
?>