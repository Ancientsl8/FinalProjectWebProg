<?php

session_start ();
include("config.php"); 

if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['uname'];
$b = $_REQUEST['upassword'];

$con = mysqli_connect('localhost', 'root', '','online_store');

$res = mysqli_query($con,"select* from profile where username='$a'and password='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:index.php");
}
else	
{
	header("location:login.php?err=1");
	
}
}
?>