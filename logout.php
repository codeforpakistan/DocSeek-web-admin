<?php
session_start();
$_SESSION['admin']= NULL;
header('location:index.php');
?>