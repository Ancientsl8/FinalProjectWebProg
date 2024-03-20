<?php
session_start();
require_once('database/productdb.php');
$a = $_SESSION["user_id"];
$b = $_POST["subject"];
$c = $_POST["issue"];
$query = "INSERT INTO `customersupport` (`Ticket_Number`, `User_ID`, `Topic`, `Description`) VALUES (NULL, '$a', '$b', '$c');";
$rs = mysqli_query($con, $query);
if ($rs){
    echo "Successful Insert";
    header("location:index.php");
}
?>