<?php
session_start();
if(isset($_SESSION['adminresponse']))
{
    $reply=$_SESSION['adminresponse'];
} 
else
{
	$reply=NULL;
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<!-- META TAGS -->
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Title -->
<title>Doc Seek</title>
<!-- Font CSS Link -->
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<!-- Font CSS Link -->
<!-- Start CSS Link -->
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.css">
<link type="text/css" rel="stylesheet" href="assets/css/graha-pink.css">
<link type="text/css" id="main-style" rel="stylesheet" href="#">
<link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/jquery-ui.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/palette_switcher.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/toggles.css" type="text/css" media="screen"/>
<!-- End CSS Link -->
<script type="text/javascript" src="assets/js/jquery.js"></script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53604114-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!--Menu wrapper Start-->
<div id="menu-wrapper">
		<div class="container">
			<div class="menu-container">
				<div class="top-menu navbar">
					<div class="navbar-inner">
						<div class="moblogo visible-phone visible-tablet">
							<a href="#"><img src="assets/img/docseek_logo.png" alt="logo"></a>
						</div>
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</a>
						<ul class="nav nav-collapse collapse">
							<li>
							<div class="home-logo">
								<div>
									<a href="#"><img src="assets/img/docseek_logo.png" alt="logo"></a>
								</div>
							</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--Menu wrapper End-->

<div id="content-wrapper">
	<!--Home content start-->
	<div class="container">
		<div id="single-content">
			<div class="row">
				<div class="span1"></div>
				<div class="span10">
					<div class="heading-area">
						<h2>Admin Panel</h2>
					</div>
					<div class="single-wrapper clearfix " style="text-align:center">
						<form class="horizontal-form" action="php/admin.php" method="post" id="admin"> 
							<label class="span7" style="font-size:20px">Please log in to operate further.</label>
							<br><br>
							<p style="font-size:18px;text-align:center"><?php echo $reply;?></p>
                            <input class="span7" type="text" name="name" placeholder="Username" required>
                            <input class="span7" type="password" name="pass" placeholder="Password" required><br>
                            <a data-toggle="modal" href="#myModal" class="pull-left"style="padding-left:125px;font-size:15px">Change Password</a><br>
							<button type="submit" id="login" style="width:180px;text-align:center" class="btn btn-main">LOG IN</button>    
						</form>
						<p style="font-size:20px;text-align:center">OR</p>
						<form class="horizontal-form" action="account.php">
						<button style="width:180px;text-align:center;" class="btn btn-inverse" target="account.html">CREATE ACCOUNT</button>
					</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--Home content end-->
</div>

<section>
	<br>
	<br>
	<br><br><br><br><br>
	<br></br></br>
	</section>
		<!-- change password Modal start -->
			<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
			      </div>
			      <div class="modal-body"  style="text-align:center">
			      	 <form class="list-form" role="form" action="php/change_password.php" method="post">
			      	 	<input class="span5" type="text" name="name" required placeholder="Name">
			      	 	<input class="span5" type="text" name="email" required placeholder="Email ID">
						<input class="span5" type="password" name="pass_C" required placeholder="Current password">
						<input class="span5" type="password" name="pass_N" required placeholder="New password">
                        <button type="submit" class="btn btn-main btn-md" style="text-align:center;width:180px">Change</button>
			         </form>
		
			      </div>
			    </div>
			  </div>
			</div>
<!--  Modal end -->
<!--Footer   area   start-->
<div class="footer-wrapper clearfix">
	<div class="container">
		<div class="row">
			<div class="span10">
				<div class="footer">
					 &copy; 2014 DocSeekapp.com | All rights reserved.
				</div>
			</div>
		</div>
	</div>
</div>

			
<!-- Start JS Link -->
<script src="assets/js/modernizr.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC_aOgBOH5a6C5rWkb9Sb2Q3IpVJD7DUiQ&amp;sensor=false"></script>
<script type="text/javascript" src="assets/js/gmap3.infobox.min.js"></script>
<script type="text/javascript" src="assets/js/gmap3.min.js"></script>
<script type="text/javascript" src="assets/js/gmap3.clusterer.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/jquery.cookie.js"></script>
<script type="text/javascript" src="assets/js/switcher.js"></script>
<script defer src="assets/js/jquery.prettyPhoto.js"></script>
<script defer src="assets/js/jquery.flexslider.js"></script>
<script defer src="assets/js/custom.js"></script>
<script defer src="assets/js/toggles.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.panorama.js"></script>
<script>$('#widget').draggable();</script>
<!-- End JS Link -->

</body>
</html>