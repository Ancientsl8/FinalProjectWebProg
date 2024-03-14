<?php 
session_start ();
if(!isset($_SESSION["login"]))
	header("location:Login.php");


?>
<DOCTYPE html>
    <head>
        <title>Profile</title>
</head>
<body>
    <p> <?php echo $_SESSION["username"] ?> </p>
    <button onclick= "location.href='logout.php'">Logout</button>
</body>
