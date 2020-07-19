<?php
include("config.php");
$id=$_GET['id'];
if(mysql_query("DELETE FROM `visitor_arrival` WHERE `id`='$id'"))
					{
						echo "<script language='JavaScript' type='text/javascript'>
		alert('Successfully Deleted');
		</script>";
	echo "<script> window.location.assign('vvist.php'); </script>"; 
					}
					else
					{
						echo "<script language='JavaScript' type='text/javascript'>
		alert('Failed');
		</script>";
		echo "<script> window.location.assign('vvist.php'); </script>"; 
					}

?>