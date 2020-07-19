<?php
include("config.php");
$id=$_GET['id'];
$v=$_GET['v'];
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
if($v=="a")
{
if(mysql_query("UPDATE `visitor_arrival` set `atime`='$date' WHERE `id`='$id'"))
					{
						echo "<script language='JavaScript' type='text/javascript'>
		alert('Updated');
		</script>";
	echo "<script> window.location.assign('oreq.php'); </script>"; 
					}
					else
					{
						echo "<script language='JavaScript' type='text/javascript'>
		alert('Failed');
		</script>";
		echo "<script> window.location.assign('oreq.php'); </script>"; 
					}
}
else
{
	if(mysql_query("UPDATE `visitor_arrival` set `etime`='$date',`status`='A' WHERE `id`='$id'"))
					{
						echo "<script language='JavaScript' type='text/javascript'>
		alert('Updated');
		</script>";
	echo "<script> window.location.assign('oreq.php'); </script>"; 
					}
					else
					{
						echo "<script language='JavaScript' type='text/javascript'>
		alert('Failed');
		</script>";
		echo "<script> window.location.assign('oreq.php'); </script>"; 
					}
}
?>