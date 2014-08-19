<?php
session_start();
// Account Creation
$conn= mysql_connect('localhost','root','');
if(!$conn)
   die ("failed to connect:".mysql_error());
	
$sel = mysql_select_db('kpit',$conn);
if(!$sel)
   die("failed to select:".mysql_error());

	$name=$_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
    
    if($name != NULL && $email != NULL && $pass != NULL)

    {
    	$entry = mysql_query("INSERT INTO admin(name,email,password) VALUES('$name','$email','$pass')");
    	if(!$entry)
    	{
    		$_SESSION['Account'] ="Server is failed to create your account";
    		
    	}
    	else
    	{
    		$_SESSION['Account'] = "Account created successfully!";
    		
    	}
    }
	//header('location:../account.php');
	mysql_close($conn);
	?>