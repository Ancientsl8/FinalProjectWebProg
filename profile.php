<?php 
require_once('database/productdb.php');
session_start ();
if(isset($_SESSION["login"])) {
	$a = "Profile";
	$b = "profile.php";
    $user_id = $_SESSION["user_id"];
}
if(!isset($_SESSION["login"]))
	header("location:Login.php");
?>
<DOCTYPE html>
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
<?php
$query = "SELECT * FROM `profile` WHERE `user_id` = $user_id";
$rs = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($rs);
?>
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
					<li class="nav-item"><a href="<?php echo $b?>" class="nav-link active"><?php echo $a ?></a></li>
					<li class="nav-item"><a href="Cart.php" class="nav-link">Cart</a></li>
				</ul>
			</div>
		</div>
	</nav>
    <section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5><?php echo $row["username"] ?></h5>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $row["email"]?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted"><?php echo $row["mobile"]?></p>
                    <button onclick= "location.href='logout.php'">Logout</button>
                  </div>
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
