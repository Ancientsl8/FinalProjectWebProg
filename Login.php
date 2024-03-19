<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login | TCC</title>
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
					<li class="nav-item"><a href="Product.php" class="nav-link">Products</a></li>
					<li class="nav-item"><a href="<?php echo $b?>" class="nav-link"><?php echo $a ?></a></li>
					<li class="nav-item"><a href="Cart.php" class="nav-link">Cart</a></li>
				</ul>
				

			</div>
		</div>
	</nav>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="img/logo.jpg"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Welcome to the Kitchen</h4>
                      </div>
      
                      <form action="loginprocess.php" method="POST">
                        <p>Please login to your account</p>
      
                        <div class="form-outline mb-4">
                          <input type="text" id="username" class="form-control" name="uname"
                            placeholder="Username" />
                          <label class="form-label" for="username">Username</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="password" name="upassword" class="form-control" />
                          <label class="form-label" for="password">Password</label>
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <input type="submit" value="Login" name="sub" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                          <a class="text-muted" href="#!">Forgot password?</a>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Don't have an account?</p>
                          <a href="SignUp.php" class="btn btn-outline-danger btn-lg">Create an Account</a>
                        </div>

                        <?php 
                        if(isset($_REQUEST["err"]))
	                    $msg="Invalid username or Password";
                        ?>
                        <p style="color:red;">
                        <?php if(isset($msg))
                        {
                                
                        echo $msg;
                        }
                        ?>

                        </p>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We are more than just a company</h4>
                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>