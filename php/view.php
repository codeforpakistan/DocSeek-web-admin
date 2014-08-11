<?php

// View Database
$conn= mysql_connect('localhost','root','');
if(!$conn)
   die ("failed to connect:".mysql_error());
	
$sel = mysql_select_db('kpit',$conn);
if(!$sel)
   die("failed to select:".mysql_error());
   
   $emp_id = $_POST['id'];

      $id = NULL;
      $cnic = NULL;
      $nomenclature = NULL;
      $fullname  = NULL;
      $service_status = NULL;
      $fathername = NULL;
      $gender = NULL;
      $dob = NULL;
      $domicile = NULL;
      $cadre = NULL;
      $place_cp = NULL;
      $date_cp = NULL;
      $status = NULL;
      $bps = NULL;
      $remarks = NULL;
      $mistake = NULL;
      $personal_no = NULL;
      $facilityname = NULL;
if($emp_id != NULL)
{
    	$entry=mysql_query("SELECT * FROM personnel WHERE EMP_ID=$emp_id");
		if(!$entry)
		 $res="Failed to display the Database.";
		while($row=mysql_fetch_array($entry))
		{
			$id = $row['EMP_ID'];
			$cnic = $row['CNIC_No'];
			$nomenclature = $row['Nomenclature'];
			$fullname  = $row['FullName'];
			$service_status = $row['Service_status'];
			$fathername = $row['FatherName'];
			$gender = $row['Gender'];
			$dob = $row['DOB'];
			$domicile = $row['Domicile'];
			$cadre = $row['Cadre'];
			$place_cp = $row['PlaceofCurrentPosting'];
			$date_cp = $row['DateofCurrentPosting'];
			$status = $row['Status'];
			$bps = $row['BPS'];
			$remarks = $row['Remarks'];
			$mistake = $row['mistake'];
			$personal_no = $row['Personal_No'];
			$facilityname = $row['FacilityName'];
		}

		}
	mysql_close($conn);
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
<link type="text/css" rel="stylesheet" href="..\assets/css/bootstrap.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="..\assets/css/bootstrap-responsive.css">
<link type="text/css" rel="stylesheet" href="..\assets/css/graha-pink.css">
<link type="text/css" id="main-style" rel="stylesheet" href="#">
<link type="text/css" rel="stylesheet" href="..\assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="..\assets/css/flexslider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="..\assets/css/jquery-ui.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="..\assets/css/toggles.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="..\assets/css/palette_switcher.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="..\assets/css/prettyPhoto.css" type="text/css" media="screen"/>

<!-- End CSS Link -->
<script type="text/javascript" src="..\assets/js/jquery.js"></script>
<script>
$(document).ready(function(){

    $('#btnyes').click(function (e) {
     e.preventDefault();
      $.post("delete.php", $('#deleteform').serialize(),function(res){
       $('#adelete').text(res);
      });
     return false;
    });
  })
</script>
<script>

$(document).ready(function(){

    $('#update').click(function (e) {
      e.preventDefault();
      $.post("update.php", $("#formupdate").serialize(),function(response){
         $('#aupdate').text(response);
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
							<a href="index.html"><img src="..\assets/img/docseek_logo.png" alt="logo"></a>
						</div>
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</a>
						<ul class="nav nav-collapse collapse">
							<li><a href="..\index.html">DocSeek</a>
                            </li>
							
							<li>
							<div class="home-logo">
								<div>
									<a href="..\index.html"><img src="..\assets/img/docseek_logo.png" alt="logo"></a>
								</div>
							</div>
							</li>
							<li><a href="..\contact.html">contact</a></li>
							
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
				<div class="span12">
					<div class="single-wrapper clearfix">
				   	<br><br>
                      <h2>DATABASE<h2>
                        <div class="form-bt">
                      	   <button class="btn btn-main ctr" data-toggle="modal" data-target="#editModal" style="width:180px">EDIT</button>
                           <button class="btn btn-inverse ctr" type="submit" data-toggle="modal" data-target="#deleteModal"
                            style="width:180px">DELETE</button>
                        </div>
                     <table class="table table-bordered">
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">EMP_ID</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $id;?></p>
                     		</td>
                     	</tr>
                       <tr>
                     		<td>
                     			<p style="font-size:18px">CNIC_No</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $cnic;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">Nomenclature</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $nomenclature;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">FullName</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $fullname;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">Service_status</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $service_status;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">FatherName</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $fathername;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">Gender</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $gender;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">DOB</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $dob;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">Domicile</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $domicile;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">Cadre</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $cadre;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">PlaceofCurrentPosting</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $place_cp;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">DateofCurrentPosting</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $date_cp;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">Status</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $status;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">BPS</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $bps;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">Remarks</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $remarks;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">Mistake</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $mistake;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">Personal_No</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $personal_no;?></p>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>
                     			<p style="font-size:18px">FacilityName</p>
                     		</td>
                     		<td>
                     			<p style="font-size:15px"><?php echo $facilityname;?></p>
                     		</td>
                     	</tr>	
                     </table>
                     
                 </div>
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
                   <form class="list-form" action="update.php" method="post" id="formupdate" > 
                     <a href="#" id="aupdate" style="font-size:18px;text-align:center"></a>
                     <br>
                     <input value="<?php echo $id; ?>" type="hidden" name="empid"  required>
                     <p style="font-size:18px;text-align:center">EMP_ID:<?php echo $id; ?></p>
                     <select name="fieldname" required>
                          <option value=""></option>
                          <option value="CNIC_No">CNIC_NO</option>
                          <option value="Nomenclature">Nomenclature</option>
                          <option value="FullName">FullName</option>
                          <option value="Service_status">Service_status</option>
                          <option value="FatherName">FatherName</option>
                          <option value="Gender">Gender</option>
                          <option value="DOB">DOB</option>
                          <option value="Domicile">Domicile</option>
                          <option value="PlaceofCurrentPosting">PlaceofCurrentPosting</option>
                          <option value="DateofCurrentPosting">DateofCurentPosting</option>
                          <option value="Status">Status</option>
                          <option value="BPS">BPS</option>
                          <option value="Remarks">Remarks</option>
                          <option value="mistake">mistake</option>
                          <option value="Personal_No">Personal_No</option>
                          <option value="FacilityName">FacilityName</option>
                     </select>
                            
                     <input  type="text" name="fieldvalue" placeholder="Enter the Field Value" required>
                     <button type="submit" id="update" style="width:180px" class="btn btn-main">UPDATE</button>
                  </form>
                  <button type="button" class="btn btn-inverse btn-md" style="text-align:center;width:100px" data-dismiss="modal">Cancel</button>
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
                   <form class="list-form" role="form" action="delete.php" id="deleteform">
                     <a href="#" id="adelete"></a>
                      <p style="font-size:18px">Are you Sure you want to delete this record.</p> 
                     <input type="hidden" name="empid" value="<?php echo $id; ?>" >
                     <button type="submit" id="btnyes" class="btn btn-main btn-md" style="text-align:center;width:100px">Yes</button>
                  </form>
                   <button type="button" class="btn btn-inverse btn-md" style="text-align:center;width:100px" data-dismiss="modal">NO</button>      
               </div>
             </div>
           </div>
         </div>
<!-- Delete Modal end -->    

	<section>
		<br><br><br><br>
		<br><br><br><br>
		<br><br><br>
	</section>
	<!--Footer   area   start-->
	<div class="footer-wrapper clearfix">
		<div class="container">
			<div class="row">
					<div class="footer">
						 &copy; 2014 DocSeekapp.com | All rights reserved.
					</div>
			</div>
		</div>
	</div>
	<!--Footer   area   End-->

	
	<!-- Start JS Link -->
	<script src="assets/js/modernizr.js"></script>
	<script type="text/javascript" src="..\assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="..\assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC_aOgBOH5a6C5rWkb9Sb2Q3IpVJD7DUiQ&amp;sensor=false"></script>
    <script type="text/javascript" src="..\assets/js/gmap3.infobox.min.js"></script>
    <script type="text/javascript" src="..\assets/js/gmap3.min.js"></script>
    <script type="text/javascript" src="..\assets/js/gmap3.clusterer.js"></script>
	<script src="..\assets/js/jquery-ui.js"></script>
	<script type="text/javascript" src="..\assets/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="..\assets/js/switcher.js"></script>
	<script defer src="..\assets/js/jquery.prettyPhoto.js"></script>
	<script defer src="..\assets/js/jquery.flexslider.js"></script>
	<script defer src="..\assets/js/custom.js"></script>
	<script defer src="..\assets/js/toggles.js"></script>
	<script src="..\assets/js/jquery.mCustomScrollbar.js"></script>
	<script type="text/javascript" src="..\assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="..\assets/js/jquery.panorama.js"></script>
	<script type="text/javascript" src="..\assets/js/retina.js"></script>
	<script>$('#widget').draggable();</script>
	<!-- End JS Link -->
	</body>
	</html>