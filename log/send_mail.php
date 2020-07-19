<?php
    $mailto = $_POST['email'];
    $mailSub = "Your Password";
	include("config.php");
	
	$sql=mysql_query("select pass from owner_personal where email='$mailto' ");
	if(mysql_num_rows($sql)==0)
	{
		echo "<script language='JavaScript' type='text/javascript'>
		alert('Email Not found...');
		</script>";
		exit(0);
		echo "<script> window.location.assign('index.php'); </script>"; 
	}
	$r=mysql_fetch_array($sql);
	$pass=$r[0];
    $mailMsg = "Your Password of ".$mailto." : ".$pass;
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "vmangementsrnmce@gmail.com";
   $mail ->Password = "pavanraghu";
   $mail ->SetFrom("vmangementsrnmce@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
      echo "<script language='JavaScript' type='text/javascript'>
	  alert('Sorry Try after sometime...');
	
		</script>";
		echo "<script> window.location.assign('index.php'); </script>"; 
   }
   else
   {
       echo "<script language='JavaScript' type='text/javascript'>
			alert('Your Mail Has Been Sent...');
		</script>";
		echo "<script> window.location.assign('index.php'); </script>"; 
   }





   

