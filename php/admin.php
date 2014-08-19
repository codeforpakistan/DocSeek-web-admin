<?php
session_start();
// Admin Login
$conn= mysql_connect('localhost','root','');
if(!$conn)
   die ("failed to connect:".mysql_error());
	
$sel = mysql_select_db('kpit',$conn);
if(!$sel)
   die("failed to select:".mysql_error());

	$name=$_POST['name'];
	$pass = $_POST['pass'];
	if ($name!= NULL && $pass != NULL)
	{
		$entry = mysql_query("SELECT * FROM admin");
		while($row= mysql_fetch_array($entry))
		{
			if($row['email']== $name && $row['password']== $pass)
			{
                $_SESSION['admin']= $row['name'];
                
			}
			else{
				$_SESSION['adminresponse'] = "Access denied. Invalid username or password.";
				header('Location:../admin.php');
			}
			
		}
	}
	header('Location:../index.php');
	mysql_close($conn);
	?>