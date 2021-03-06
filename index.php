<?php
session_start();
if(!isset($_SESSION['admin']))
{
	if($_POST['back']==NULL)
	{
		$admin= NULL;
		header('location:admin.php');
	}
	else{
		$admin= $_POST['back'];
	}
}
else{
	$admin= $_SESSION['admin'];
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
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.css">
<link type="text/css" rel="stylesheet" href="assets/css/graha-pink.css">
<link type="text/css" id="main-style" rel="stylesheet" href="#">
<link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/jquery-ui.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/toggles.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/palette_switcher.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen"/>

<!-- End CSS Link -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script>
$(document).ready(function(){

    $('#btndelete').click(function (e) {
     e.preventDefault();
      $.post("php/delete.php", $('#deleteform').serialize(),function(res){
       $('#adelete').text(res);
       $('#btnreset').click(function (e){
       	$('#adelete').html(null);
       });
       
      });
     return false;
    });
    
  })
</script>

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
							<li><a href="#" ><?php echo $admin;?></a>
                            </li>
                            <li>
							<div class="home-logo">
								<div>
									<a href="#"><img src="assets/img/docseek_logo.png" alt="logo"></a>
								</div>
							</div>
							</li>
							<li><a href="logout.php">log out</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Menu wrapper End-->
<div id="content-wrapper">

	<!--Home content start-->
<section>
	<br><br><br><br>

</section>
	<div class="container">
		<div id="home-content">
			<div class="row">
				<div class="span1"></div>
				<div class="span10" style="text-align:center">
				   <div class="single-wrapper clearfix">
				   	<br><br>
                      <h2>Database Handler<h2>
                      	<form action="php/database.php" method="POST">
                      	<div class="span3">
                      		<button class='btn btn-main ' name="submit" type='submit' style='width:180px;text-align:center;font-size:18px'><i class="icon-file" style="font-size:20px;margin-right:10px"></i>VIEW</button>
							<br>
							<input type='hidden' name='admin' value='<?php echo $admin;?>'>	
                      	</div>
                      </form>
                      
                        <div class="span3">
                      		<button class='btn btn-main ' type='submit' style='width:180px;text-align:center;font-size:18px' data-toggle="modal" data-target="#editModal"><i class="icon-edit" style="font-size:20px;margin-right:10px"></i>EDIT</button>
							<br>	
                      	</div>
                      
                      
                      	<div class="span3">
                      		<button class='btn btn-inverse' type='submit' style='width:180px;text-align:center;font-size:18px' data-toggle="modal" data-target="#deleteModal"><i class="icon-remove-circle" style="font-size:20px;margin-right:10px"></i>DELETE</button>
							<br>	
                      	</div>
                      
                      	<br><br>
				   </div>
				   
			   </div>
		</div>
		<div class="row">
			<div class="span1"></div>
			   <div class="span6 single-wrapper clearfix">
                   <h3>Search a Doctor</h3>
                <form style="text-align:center" action="php/doc_search.php" method="post">
					<input type="text" class="span5"  name="alpha" placeholder="e.g. Cardiologist" required>
					<input type="hidden" name="admin" value="<?php echo $admin;?>">
					<div class="search-button">
						<button class=" btn btn-main ctr" style="margin:0 auto; width:140px;">Doctors</button>
					</div>
				</form>
			   </div>
			   <div class="span3 cont-sp single-wrapper clearfix">
					<h3>Contact Us</h3>
					<p>
						Email the DocSeek team <br>
						to share your experience <br>
						 with the WebApp.
					</p>
					<p class="email">
						Email:<a href="mailto:hina@labandroid.com">hina@labandroid.com</a>
					</p>		
				</div>
		</div>
	</div>
		<!--Home content end-->
	</div>

	<!-- Edit Modal start -->
			<div class="modal hide fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Edit Database</h4>
			      </div>
			      <div class="modal-body"  style="text-align:center">
			      	 <table class="table">
			          <tr>
			            <td style="border:none">
			        <form class="form-horizontal" role="form" style="text-align:center" action="Update.php" method="post">
			        	<p style="font-size:18px">Update the existing records.</p>
			        	<input type='hidden' name='admin' value='<?php echo $admin;?>'>
			      <button type="submit" class="btn btn-main btn-md" style="width:180px"><i class="icon-edit" style="margin-right:10px"></i>UPDATE</button>
		         
			    </form>
			  </td></tr>
			  <tr>
			  	<td style="border:none">
			  		  <p style="font-size:25px;text-align:center">OR</p>
			  		</td></tr>
			  <tr>
			    <td style="border:none">
			     <form class="form-horizontal" role="form" style="text-align:center" action="New_Entry.php" method="post">
			     	<p style="font-size:18px">Make a record for a new entry.</p>
			     	<input type='hidden' name='admin' value='<?php echo $admin;?>'>
			      <button type="submit" class="btn btn-inverse btn-md" style="width:180px"><i class="icon-edit" style="margin-right:10px"></i>NEW ENTRY</button>
			    </form>
			    </td></tr>
			    </table>
		
			      </div>
			    </div>
			  </div>
			</div>
<!-- Edit Modal end -->


	<!-- Delete Modal start -->
			<div class="modal hide fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Delete Entry</h4>
			      </div>
			      <div class="modal-body"  style="text-align:center">
			      	<a href="#" id="adelete"></a>
			      	 <form class="list-form" role="form" action="php/delete.php" id="deleteform">
			      	    <p style="font-size:18px">Delete an existing record.</p> 
						   <input class="span5" type="text" name="empid" required placeholder="EMP_ID">
						   <button type="reset" id="btnreset" class="btn btn-main btn-md" style="text-align:center;width:180px">Reset</button>
                        <button type="submit" id="btndelete" class="btn btn-inverse btn-md" style="text-align:center;width:180px"><i class="icon-remove-circle" style="margin-right:10px"></i>Delete</button>
			         </form>
		
			      </div>
			    </div>
			  </div>
			</div>
<!-- Delete Modal end -->
	<section>
		<br><br><br><br>
		<br><br><br><br>
	</section>
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

	<!--Footer   area   End-->

	
	<!-- Start JS Link -->
	<script src="assets/js/modernizr.js"></script>
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
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/url_parser.js"></script>
	<script>$('#widget').draggable();</script>

	<!-- End JS Link -->
	</body>
	</html>