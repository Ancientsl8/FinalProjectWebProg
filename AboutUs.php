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
					<li class="nav-item"><a href="AboutUs.php" class="nav-link active">About Us</a></li>
					<li class="nav-item"><a href="Product.php" class="nav-link">Products</a></li>
					<li class="nav-item"><a href="<?php echo $b?>" class="nav-link"><?php echo $a ?></a></li>
					<li class="nav-item"><a href="Cart.php" class="nav-link">Cart</a></li>
				</ul>
				

			</div>
		</div>
	</nav>
    <main role="main" class="container">

      <div class="starter-template">
        <h1>Trading Card Cooks</h1>
        <p class="lead">The idea is to let the pokemon trading card game be more accessible to new players by providing pre-built decks that are
a good start to learn the game. From some of the best decks to weird strategies not found anywhere else along with selling some
sealed products for players to upgrade their decks with.</p>
      </div>

    </main>
</body>