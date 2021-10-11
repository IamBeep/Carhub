<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | CarHub</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width-device-width, initial scale = 1.0">

	<script src = "https://code.jquery.com/jquery-2.1.3.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	  <link rel="stylesheet" href="A.assets,,_royalslider,,_royalslider.css+assets,,_royalslider,,_skins,,_default,,_rs-default.css+assets,,_royalslider,,_skins,,_minimal-white,,_rs-minimal-white.css+css,,_bootstrap.min.css+css,,_normalize.css+css,,_jquery-ui.css,Mcc.y-DhrddGnN.css.pagespeed.cf.Hfy0poW2iH.css"/>


	<link rel="stylesheet" href="style.css">

	<style media="screen">

	#stock-featured {
			display: block;
			width: 100%;
			margin: 0 auto;
			padding: 60px 0 80px;
			margin: 0 0 1px 0;
			text-align: center;
	}

	.row1
							{
									padding-left: 20px;
									display: inline-flex;
									margin: 10px 10px 10px 10px;
									padding: 10px 10px 10px 10px;
							}



	.bg{
			background: url('assets/giphy.gif');
			width: 100%;
			height: 100vh;
			background-size: 100%;
			font-color:#fff;

	}

	.form-container{
			position: absolute;
			top:15px;
			background:#329fb1;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #000;
			margin-top: 100px;
	}

	.btn-block{
			padding: 10px;
			margin-top: 15px;
			width: 100px;

	}

	.sign-up{
			margin-left:15px;
			background-color: green;
	}

	.sign-up:hover{
			box-shadow: inset 300px 0 0 0 #454B1B;
	}

	.form-group{
			padding-bottom: 10px;
	}

	@media only screen and (max-width: 678px){
			.bg{
					background-size: 300%;
			}
	}

	.bg2{
			background: url('assets/giphy2.gif');
			width: 100%;
			height: 100vh;
			background-size: 100%;
			font-color:#fff;

	}

	.submit2:hover{
			box-shadow:inset 300px 0 0 0 green;
	}

	@media only screen and (max-width: 678px){
			.bg2{
					background-size: 300%;
			}
	}


	.header h2{
			margin-top: 25px;
	}

	.manage-account{
			color: #c0c0c0;
			padding: 25px;
			margin-top: 25px;
			margin-bottom: 25px;
			box-shadow: 0px 0px 10px 0px #329fb1;
	}

	.header h2{
			text-align: left;
			margin-left: 100px;
			margin-top: 50px;
	}

	.logout{
			text-align: right;
			margin-left: 1135px;
	}

	.log-out{
			margin-left:15px;
			background-color:#329fb1 ;
	}

	.log-out:hover{
			box-shadow: inset 300px 0 0 0 red;
	}

	.dealer{
			text-align: right;
			margin-left: 1080px;
			margin-top: 0px;
	}

	.dealership{
			margin-left:15px;
			background-color:#329fb1;
			width: 150px;
	}

	.dealership:hover{
			box-shadow: inset 300px 0 0 0 green;
	}

	.order-table-div{
			width: 100%;
			color: #c0c0c0;
			border:20px #329fb1;
			box-shadow: 0px 0px 10px 0px #329fb1;
			margin-top: 55px;
			margin-bottom: 70px;

	}

	.order-table{
			width: inherit;
	}

	.order-table th{
			background: #329fb1;
	}

	.order-table td{
			background: black;
	}

	.order-table th td{
			padding: 15px;
	}



	.user-rating{
			width: 100%;
			margin-left: 100px;
	}

	.user-rating h2{
			color: #329fb1;

	}


	.checked{
			color: #fff;
	}

	</style>

</head>

<body>
	<?php
	include('includes/nav.php');
	 ?>


<section class="container-fluid bg">
	<section class="row justify-content-center">
		<section class="col-12 col-sm-6 col-md-3">
			<form class="form-container" action="code.php" method="POST">
  				<div class="form-group">
  					<h2><b>Login</b></h2>
						<?php

								if(isset($_SESSION['status']) && $_SESSION['status'] !='')
								{
										echo '<h6 class="bg-danger text-white"> '.$_SESSION['status'].' </h6>';
										unset($_SESSION['status']);
								}
						?>
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Remember me</label>
			  </div>
			  <button type="submit" name="login" class="btn btn-primary btn-block submit">Submit</button>
			  <a type="submit" href="subscribe.php" name="signup" class="btn btn-primary btn-block sign-up">Sign Up</a>

			</form>

					</section>
	</section>

</section>

</body>

<?php
include('includes/footer.php');
 ?>
