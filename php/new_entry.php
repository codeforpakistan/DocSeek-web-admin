<?php
header('Content-Type: application/json; charset=UTF-8');
// NEW Entry
$conn= mysql_connect('localhost','root','');
if(!$conn)
   die ("failed to connect:".mysql_error());
	
$sel = mysql_select_db('kpit',$conn);
if(!$sel)
   die("failed to select:".mysql_error());

	$empid=$_POST['empid'];
	$cnic_no=$_POST['cnic_no'];
	$nomenclature=$_POST['Nomenclature'];
	$fullname = $_POST['FullName'];
	$service_status = $_POST['Service_status'];
	$fathername = $_POST['FatherName'];
	$gender = $_POST['Gender'];
	$dob = $_POST['DOB'];
	$domicile = $_POST['Domicile'];
	$cadre = $_POST['Cadre'];
	$place_cp = $_POST['PlaceofCurrentPosting'];
	$date_cp = $_POST['DateofCurrentPosting'];
	$status = $_POST['Status'];
	$bps = $_POST['BPS'];
	$remarks = $_POST['Remarks'];
    $mistake = $_POST['mistake'];
    $personal_no = $_POST['Personal_No'];
    $facilityname = $_POST['FacilityName'];

	if ($empid==NULL || $cnic_no==NULL ||$nomenclature==NULL ||$fullname==NULL ||$service_status==NULL ||$fathername==NULL ||$gender==NULL ||$dob==NULL ||$domicile==NULL || $cadre==NULL ||$place_cp==NULL ||$date_cp==NULL ||$status==NULL ||$bps==NULL ||$remarks==NULL ||$mistake==NULL ||$personal_no==NULL ||$facilityname==NULL)
	{
		$response = "Please Fill out the Field.";
	}
	 else
	{
		$entry=mysql_query(" INSERT INTO personnel(EMP_ID,CNIC_No,Nomenclature,FullName,Service_status,FatherName,Gender,DOB,Domicile,Cadre,PlaceofCurrentPosting,DateofCurrentPosting,Status,BPS,Remarks,mistake,Personal_No,FacilityName) VALUES('$empid','$cnic_no','$nomenclature','$fullname','$service_status','$fathername','$gender','$dob','$domicile','$cadre','$place_cp','$date_cp','$status','$bps','$remarks','$mistake','$personal_no','$facilityname')");
		if(!$entry)
			$response="Failed to Enter.";
		
		$response="The Database has been Updated.";
	}
	echo json_encode($response);
	mysql_close($conn);
	?>