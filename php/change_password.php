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
	$pass_C= $_POST['pass_C'];
    $pass_N = $_POST['pass_N'];
    
    if($name != NULL && $email != NULL && $pass_C != NULL && $pass_N!=NULL)
    {
        $entry = mysql_query("SELECT * FROM admin");
        while($row=mysql_fetch_array($entry))
        {
            if($row['email']== $email && $row['password']==$pass_C)
            {
                $enter = $row['ID'];
            }
        }
        //echo $enter;
        $update = mysql_query("UPDATE admin SET password='$pass_N' WHERE ID= '$enter'");
        $_SESSION['adminresponse']= "Password changed!";
        header('Location:../admin.php');
    }
    
	
	mysql_close($conn);
	?>