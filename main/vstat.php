<?php
include("config.php");
$id=$_GET['id'];
$val=$_GET['val'];
if(mysql_query("UPDATE `visitor_arrival` set `status`='$val' WHERE `id`='$id'"))
					{
						echo "<script language='JavaScript' type='text/javascript'>
		alert('Updated');
		</script>";
	echo "<script> window.location.assign('uvist.php'); </script>"; 
					}
					else
					{
						echo "<script language='JavaScript' type='text/javascript'>
		alert('Updated');
		</script>";
		echo "<script> window.location.assign('uvist.php'); </script>"; 
					}

?>