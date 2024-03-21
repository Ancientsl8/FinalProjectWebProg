<?php 
session_start ();
require_once('database/productdb.php');
if(!isset($_SESSION["login"])){
  header("location:login.php");
}
$user = $_SESSION['user_id'];
$quantityofitems = 0;
$price = 0;
$order_id = 0;
	
  $query = "SELECT * FROM `cart` WHERE `user_id` = $user";
  $result = mysqli_query($con, $query);

  if(isset($_SESSION["login"])) {
    $a = "Profile";
    $b = "profile.php";
  }
  
  else if(!isset($_SESSION["login"])){
    $a = "Login";
    $b = "Login.php";
  }  
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Trading Card Cooks</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
  
  <nav class="navbar bg-dark navbar-dark navbar-expand-lg">
		<div class="container">
			<a href="index.html" class="navbar-brand"><img src="img/logo.jpg" alt="Logo" title="Logo"></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarResponsive">
				<span class="navbar-toggler-icon">

				</span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mr-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="AboutUs.php" class="nav-link">About Us</a></li>
					<li class="nav-item"><a href="Product.php" class="nav-link">Products</a></li>
          <li class="nav-item"><a href="CustomerSupport.php" class="nav-link">Customer Support</a></li>
					<li class="nav-item"><a href="<?php echo $b?>" class="nav-link"><?php echo $a ?></a></li>
					<li class="nav-item"><a href="Cart.php" class="nav-link active">Cart</a></li>
				</ul>
				

			</div>
		</div>
	</nav>
  <section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
      <div class="row quantityofitems-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="quantityofitems-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                      <h6 class="mb-0 text-muted"><?php echo $quantityofitems ?> items</h6>
                    </div>
                    <?php
             while($row = mysqli_fetch_assoc($result))
             {
              $b = $row['item_id']
                    ?>
                    <?php
                      $product_query = "SELECT * FROM `products` WHERE `item_id` = $b";
                      $product_result = mysqli_query($con, $product_query);
                      while ($row2 = mysqli_fetch_assoc($product_result)){
                        $quantityofitems = $quantityofitems + 1;
                        $price = $price + ($row2["price"] * $row["quantity"]);
                        $iPrice = ($row2["price"] * $row["quantity"]);
                    ?>

                      <hr class="my-4">
                        
                        <div class="row mb-4 quantityofitems-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                              src="<?php echo $row2["itemimage"] ?> "
                              class="img-fluid rounded-3" alt="Cotton T-shirt">
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted"><?php echo $row2["itemname"]?> </h6>
                            <h6 class="text-black mb-0"></h6>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 quantityofitems-flex">
                          <h6 class="mb-0"><?php echo $row["quantity"] ?></h6>
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0"><?php echo $iPrice ?> PHP</h6>
                          </div>
                          <form method="POST">

                            <button name="remove_from_cart">remove</button>
                            <input type="hidden" name="order_id" value="<?php echo $row["order_id"] ?>">
                      </form>
                          <?php
                          if(isset($_REQUEST['remove_from_cart'])){
                            $order_id = $_POST["order_id"];
                            $removequery = "DELETE FROM `cart` WHERE `cart`.`order_id` = $order_id";
                            $rs = mysqli_query($con, $removequery);
                            if ($rs){
                              header("location:Cart.php");
                          }
                          }
                          ?>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                          </div>
                        </div>
                    <?php
                    }
            }
                    ?>
  
                    <hr class="my-4">
  
                    <div class="pt-5">
                      <h6 class="mb-0"><a href="#!" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                  <form method="POST">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">
  
                    <div class="quantityofitems-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">items <?php echo $quantityofitems ?></h5>
                    </div>
  
                    <h5 class="text-uppercase mb-3">Shipping</h5>
  
                    <div class="mb-4 pb-2">
                      <select class="select" name="shipping">
                        <option value="150">Standard-Delivery - 150 PHP</option>
                        <option value="350">Express Delivery - 350 PHP</option>
                      </select>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="quantityofitems-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total price</h5>
                      <h5><?php echo $price ?> PHP</h5>
                    </div>
                    <input type="submit" class="btn btn-dark btn-block btn-lg"
                      data-mdb-ripple-color="dark" name="Checkout" value="Checkout">
                    </form>

                    <?php 
                     if (isset($_REQUEST["Checkout"])){
                      $DelQuery = "DELETE FROM cart WHERE `cart`.`user_id` = '$user'";
                      $Delrs = mysqli_query($con, $DelQuery);
                     }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>