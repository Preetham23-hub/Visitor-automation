

<html>
<head>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
<body>
	<div class="main">
		<div class="header" >
			<h1><a href="../">Apartment Visitor Managemen</a> Login Here..!</h1>
		</div>
		<p>Apartment Visitor Management Software is a perfect and smart solution to manage and track Visitors  </p>
			<form method="post">
				<ul class="left-form">
					<h2>Login Here:</h2>
					
					<li>
						<input type="email" name='email'  placeholder="Email" required/>
					
						<div class="clear"> </div>
					</li> 
					
					<li>
						<input type="password" name='pass'  placeholder="password" required/>
						
						<div class="clear"> </div>
					</li> 
					<br>
					<h4><a href="forgot.php">I forgot my Password!</a></h4>
				<br>
					<input type="submit"  value="Login" name="log">
						<div class="clear"> </div>
				</ul>
					</form>
						<form method="post">
				<ul class="left-form">
					
					<div>
						
					</div>
					<div class="clear"> </div>
				</ul>
				<div class="clear"> </div>
					
			</form>
			
		</div>
			<!-----start-copyright---->
   					<div class="copy-right">
						
					</div>
				<!-----//end-copyright---->

	
</body>
</html>


<?php
include("config.php");
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['log'])) 
	{
		$email=$_POST['email'];
$pass=$_POST['pass'];

$sel = mysql_query("SELECT * FROM owner_personal WHERE email='$email' and pass='$pass'");


if(mysql_num_rows($sel)!=0)
{
	session_start();
	$r=mysql_fetch_array($sel);
	 $_SESSION['uid']=$r[0];
	 $date = date('Y-m-d H:i:s');
	mysql_query("insert into logdet values(DEFAULT,'$r[0]','$date')");
		echo "<script> window.location.assign('../main/'); </script>"; 
	
}
else
{
	echo "<script language='JavaScript' type='text/javascript'>
		alert('Failed');
		</script>";
		echo "<script> window.location.assign('index.php'); </script>"; 
}

	}