<?php 
require_once('database/productdb.php');
session_start ();
if(!isset($_SESSION["login"]))
	header("location:Login.php");
    if(isset($_REQUEST['add_to_cart']))
    {
    $a = $_POST['hidden_id'];
    $b = $_SESSION['user_id'];
    $c = $_POST['quantity'];
    }

    $quantityquery = "SELECT * FROM `products` WHERE `item_id` = $a";

    $qrs = mysqli_query($con, $quantityquery);

    $row2 = mysqli_fetch_assoc($qrs);

    if ($qrs){
        if ($c <= $row2["quantity"] && $c != 0){
            $query = "INSERT INTO `cart` (`order_id`, `user_id`, `item_id`, `quantity`) VALUES (NULL, '$b', '$a', '$c')";

            $rs = mysqli_query($con, $query);

            if ($rs){
                header("location:Cart.php");
            }
        }
        else{
            header("location:Product.php?err=1");
        }
    }  
?>



