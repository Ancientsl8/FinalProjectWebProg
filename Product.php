<?php
require_once('database/productdb.php');
$query = "select * from products";
$result = mysqli_query($con, $query);
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
					<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="" class="nav-link">About Us</a></li>
					<li class="nav-item"><a href="Product.php" class="nav-link active">Products</a></li>
					<li class="nav-item"><a href="Login.html" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="Cart.html" class="nav-link">Cart</a></li>
				</ul>
				

			</div>
		</div>
	</nav>
    <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                <?php

                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <div class="card">
                <img src="<?php echo $row["itemimage"] ?>"
                  class="card-img-top" alt="Laptop" />
                <div class="card-body">
      
                  <div class="d-flex justify-content-between mb-3">
                    <h5 class="mb-0"><?php echo $row['itemname']  ?></h5>
                    <h5 class="text-dark mb-0"><?php echo $row['price']  ?></h5>
                  </div>
      
                  <div class="d-flex justify-content-between mb-2">
                    <p class="text-muted mb-0">Available: <span class="fw-bold"><?php echo $row['quantity']  ?></span></p>
                  </div>
                </div>
              </div>
                <?php
                }
                ?> 
            </div>
          </div>
        </div>
      </section>
</body>
