<?php
header('Content-Type: application/json; charset=UTF-8');
// Update Entry
$conn= mysql_connect('localhost','root','');
if(!$conn)
   die ("failed to connect:".mysql_error());
	
$sel = mysql_select_db('kpit',$conn);
if(!$sel)
   die("failed to select:".mysql_error());

	$empid=$_POST['empid'];
	$fieldname=$_POST['fieldname'];
	$fieldvalue=$_POST['fieldvalue'];
	if ($empid==NULL || $fieldname==NULL ||$fieldvalue==NULL)
	{
		$res = "Please Fill out the Field.";
	}
	 else if ( $empid!=NULL || $fieldname!=NULL ||$fieldvalue!=NULL)
	{
		$entry=mysql_query("UPDATE personnel SET $fieldname='$fieldvalue' WHERE EMP_ID='$empid'");
		if(!$entry)
			$res="Failed to Update.";
		
		$res="The entry has been Updated.";
	}
	echo json_encode($res);
	mysql_close($conn);
	?>