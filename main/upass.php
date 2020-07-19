<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Apartment Visitor Management</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Plantation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script src="js/responsiveslides.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script src="js/easyResponsiveTabs.js"></script>

</head>
<body>
<!--header-->
<!-- header -->
	<div class="header wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
		<div class="container">
			<div class="logo">
				<h1><a href="index.php"><i><img src="images/logo.png" alt="" /></i>Apartment <span>Visitor Management</span></a></h1>
			</div>
			<div class="header-left">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						
						<nav class="link-effect-9" id="link-effect-9">
							<ul class="nav navbar-nav">
								<li ><a class="hvr-bounce-to-bottom" href="index.php">Home</a></li>
								<li  class="dropdown">
									<a href="codes.html" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Visitors <b class="caret"></b></a>
									 <ul class="dropdown-menu">
										<li><a href="avis.php">Add Visitors</a></li>
										<li><a href="vvist.php">View Visitors</a></li>
										
										<li><a href="rep.php">Report</a></li>
									<li><a href="uvist.php">Visitor Request</a></li>
									
									</ul>
							    </li>
									
								<li ><a class="hvr-bounce-to-bottom" href="alert.php">Emergency Alert</a></li>
								
								
								<li class="dropdown">
									<a href="codes.html" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Welcome <?php echo  $usr_name ?> <b class="caret"></b></a>
									 <ul class="dropdown-menu">
										<li><a href="logdet.php">Activity Log</a></li>
										<li><a href="addf.php">Family Member</a></li>
									<li><a href="feedback.php">Feedback</a></li>
										<li><a href="upass.php">Update Password</a></li>
									<li><a href="logout.php" >Log Out</a></li>
									</ul>
							    </li>

								
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
<div class="banner page_head">
	
</div>
<!-- //banner -->
<!-- contact -->
<div class="contact">
	<div class="container">
		<h3>Update Password</h3>
		<div class="col-md-3">
		</div>
			<div class="col-md-6">
			<form method="post">
			<input type="password" name="opass" placeholder="Old Password" class="form-control" />
			<br>
			<input type="password" name="npass" placeholder="New Password"  class="form-control" />
			<br>
		
			<input type="submit" name="add" value="Update" class="btn btn-primary" />
			</form>
			<?php 
			if(isset($_POST['add']))
			{
				$opass=$_POST['opass'];
				$npass=$_POST['npass'];
				
				$acheck=mysql_query("select * from owner_personal where pass='$opass' and id='$usr_id'");

	
	if(mysql_num_rows($acheck)!=0)
	{
				if(mysql_query("UPDATE `owner_personal` SET `pass`='$npass' WHERE `pass`='$opass' and id='$usr_id'"))
					{
						
						echo "<script language='JavaScript' type='text/javascript'>
						alert('Updated Successfully');
						</script>";
					echo "<script> window.location.assign('upass.php'); </script>";
					}
					else
					{
						echo "<script language='JavaScript' type='text/javascript'>
						alert('Failed ');
						</script>";
						echo "<script> window.location.assign('upass.php'); </script>";
					
					
					}
		
	
	}
	
	else
	{
		echo "<script language='JavaScript' type='text/javascript'>
alert('Password Wrong');
</script>";
echo "<script> window.location.assign('upass.php'); </script>";
	}
			}
			?>
			
			
			</div>
			<div class="col-md-3">
		</div>
		<br><br><br><br><br><br>
		<div class="col-md-4">
		</div>
		
			
			<!--Plug-in Initialisation-->
			<script type="text/javascript">
			$(document).ready(function() {
				//Horizontal Tab
				$('#parentHorizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					tabidentify: 'hor_1', // The tab groups identifier
					activate: function(event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#nested-tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});

				// Child Tab
				$('#ChildVerticalTab_1').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true,
					tabidentify: 'ver_1', // The tab groups identifier
					activetab_bg: '#fff', // background color for active tabs in this group
					inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
					active_border_color: '#c1c1c1', // border color for active tabs heads in this group
					active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
				});

				//Vertical Tab
				$('#parentVerticalTab').easyResponsiveTabs({
					type: 'vertical', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					tabidentify: 'hor_1', // The tab groups identifier
					activate: function(event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#nested-tabInfo2');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
			});
		</script>
			
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->
<!-- footer -->

<!-- //footer -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>