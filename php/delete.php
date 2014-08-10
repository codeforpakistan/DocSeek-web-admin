<?php
header('Content-Type: application/json; charset=UTF-8');
// Delete Entry
$conn= mysql_connect('localhost','root','');
if(!$conn)
   die ("failed to connect:".mysql_error());
	
$sel = mysql_select_db('kpit',$conn);
if(!$sel)
   die("failed to select:".mysql_error());

	$empid=$_POST['empid'];
	if ($empid==NULL)
	{
		$res = "Please Fill out the Field.";
	}
	 else if ( $empid!=NULL)
	{
		$entry=mysql_query("DELETE from personnel where EMP_ID=$empid");
		if(!$entry)
			$res="Failed to Delete.";
		
		$res="The entry has been deleted.";
	}
	echo json_encode($res);
	mysql_close($conn);
	?>