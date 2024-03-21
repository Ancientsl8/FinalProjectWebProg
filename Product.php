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
					<li class="nav-item"><a href="Product.php" class="nav-link active">Products</a></li>
          <li class="nav-item"><a href="CustomerSupport.php" class="nav-link">Customer Support</a></li>
					<li class="nav-item"><a href="<?php echo $b?>" class="nav-link"><?php echo $a ?></a></li>
					<li class="nav-item"><a href="Cart.php" class="nav-link">Cart</a></li>
				</ul>
				

			</div>
		</div>
	</nav>
  <section style="background-color: #eee;">
  <div class="text-center container py-5">
    <h4 class="mt-4 mb-5"><strong>Products</strong></h4>
    <div class="row">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <div class="col-lg-4 col-md-12 mb-4">
                  <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                        data-mdb-ripple-color="light">
                        <img src="<?php echo $row["itemimage"] ?>"
                          class="w-100" />
                          <a href="#!">
                            <div class="mask">
                              <div class="d-flex justify-content-start align-items-end h-100">
                              </div>
                           </div>
                          <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                    </a>
                </div>
              <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3"><?php echo $row['itemname']  ?></h5>
            </a>
            <div class="d-flex justify-content-between mb-2">
                    <p class="text-muted mb-0">Available: <span class="fw-bold"><?php echo $row['quantity']?></span></p>
                    <form action="cartprocess.php" method="POST">
                    <input type="text" name="quantity" placeholder="Quantity" value="1">
                  </div>
            <h6 class="mb-3"><?php echo $row['price']?></h6>
            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
              <input type="hidden" name="hidden_id" value="<?php echo $row['item_id']?>">
              <button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</button>
              <?php 
                        if(isset($_REQUEST["err"]))
	                    $msg="Invalid Quantity!";
                        ?>
                        <p style="color:red;">
                        <?php if(isset($msg))
                        {
                                
                        echo $msg;
                        }
                        ?>
                </form>
            </div>
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
