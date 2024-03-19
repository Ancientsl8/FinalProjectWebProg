<!DOCTYPE html>
<html lang="en">
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
session_start ();
if(isset($_SESSION["login"])) {
	$a = "Profile";
	$b = "profile.php";
}

else if(!isset($_SESSION["login"])){
	$a = "Login";
	$b = "Login.php";
}
?>
	<!-- Navigation -->
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
					<li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
					<li class="nav-item"><a href="AboutUs.php" class="nav-link">About Us</a></li>
					<li class="nav-item"><a href="Product.php" class="nav-link">Products</a></li>
					<li class="nav-item"><a href="<?php echo $b?>" class="nav-link"><?php echo $a ?></a></li>
					<li class="nav-item"><a href="Cart.php" class="nav-link">Cart</a></li>
				</ul>
				

			</div>
		</div>
	</nav>
	<!-- End Navigation -->


	<!-- Image Carousel -->

	<div id="carousel" class="carousel slide" data-ride="carousel"
	 data-interval="6500">

		<!-- Carousel Content -->
		<div class="carousel-inner">

			<div class="carousel-item active">
				<img src="img/carousel/Overview.jpg" alt="" class="w-100">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-8 bg-custom d-none d-lg-block py-3 mx-0">
								<h1>Trading Card Cooks</h1>
								<div class="border-top border-primary w-50 mx-auto my-3"></div>
								<h3>Cooking up Decks since 20XX</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/carousel/Deck.jpg" alt="" class="w-100">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-8 bg-custom d-none d-lg-block py-3 mx-0">
								<h1>Trading Card Cooks</h1>
								<div class="border-top border-primary w-50 mx-auto my-3"></div>
								<h3>Cooking up Decks since 20XX</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/carousel/Sealed.jpg" alt="" class="w-100">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-8 bg-custom d-none d-lg-block py-3 mx-0">
								<h1>Trading Card Cooks</h1>
								<div class="border-top border-primary w-50 mx-auto my-3"></div>
								<h3>Cooking up Decks since 20XX</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	
		<!-- End Carousel Content -->


		<!-- Previous & Next Buttons -->
		<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="fa-solid fa-chevron-left fa-2x"></span>
		</a>

		<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
			<span class="fa-solid fa-chevron-right fa-2x"></span>
		</a>
		<!-- End Previous & Next Buttons -->

	</div>
	<!-- End Image Carousel -->


	<!-- Main Page Heading -->
		<div class="col-12 text-center mt-5">
			<h1 class="text-dark pt-4">Cooking the foundation</h1>
			<div class="border-top border-primary w-25 mx-auto my-3"></div>
			<p class="lead">Decks made with love and fun</p>
		</div>

	<!-- Three Column Section -->

	<div class="container">
		<div class="row my-5">
			<div class="col-md-4 my-4">
				<img src="img/Single.jpg" alt="" class="w-100 ">
				<h4 class="my-4">The Legend of TCC</h4>
				<p>Made by collectors, for the players</p>
				<a href="AboutUs.php" class="btn btn-outline-dark btn-md">About Us</a>
			</div>

			<div class="col-md-4 my-4">
				<img src="img/Bulk.jpg" alt="" class="w-100 ">
				<h4 class="my-4">Our Products</h4>
				<p>Quality Guaranteed</p>
				<a href="Product.php" class="btn btn-outline-dark btn-md">Products</a>
			</div>

			<div class="col-md-4 my-4">
				<img src="img/3Card.jpg" alt="" class="w-100">
				<h4 class="my-4">Looking for something?</h4>
				<p>Use "Quick search" to contact us!</p>
				<a href="CustomerSupport.php" class="btn btn-outline-dark btn-md">Customer Support</a>
			</div>
		</div>
	</div>

	<!-- End Three Column Section -->

	<div class="container my-5"></div>


	<!-- Script Source Files -->

	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/a7562e615a.js" crossorigin="anonymous"></script>

	<!-- End Script Source Files -->
</body>
</html>