<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Subscribe | CarHub</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width-device-width, initial scale = 1.0">

	<script src = "https://code.jquery.com/jquery-2.1.3.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	  <link rel="stylesheet" href="A.assets,,_royalslider,,_royalslider.css+assets,,_royalslider,,_skins,,_default,,_rs-default.css+assets,,_royalslider,,_skins,,_minimal-white,,_rs-minimal-white.css+css,,_bootstrap.min.css+css,,_normalize.css+css,,_jquery-ui.css,Mcc.y-DhrddGnN.css.pagespeed.cf.Hfy0poW2iH.css"/>


	<link rel="stylesheet" href="style.css">
  </head>

   <body style="color:#fff">
		 <?php
	 	include('includes/nav.php');
	 	 ?>
		<div class="container-fluid" >


		<div style="background:#545;padding:30px">
		 <h1 style="font-weight:bold">Sell My Car </h1>
   <div class ="firstparagraph">
   <p style="float:left">Carhub is also mindful that you might want to exchange your old car for a new car from us. That is why we go the extra mile and try to work out a deal that is great for you. Please fill out the form below to allow us to evaluate the car you are willing to sale. Please note that the value of your car is subject to manufacturer, model, model year, mileage, repair and maintenance history, package and trim level , valuation of original and replacement car parts, Hybrid battery cell health and other applicable car attributes.</p>
   </div>

  <h4 style="font-weight:bold">Car Info</h4>


   <div class = "secondform">
   <div class="container">
      <div class="row justify-content-right">
        <div class="col-md-12">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
			<h6>


              <label>Make</label>
              <input type="text" name="Make" value="" placeholder="Make" class="form-control" required />
            </div>
			<h6>
            <div class="form-group mb-3">
              <label>Model</label>
              <input type="text" name="model" value="" placeholder="Enter your car model" class="form-control" required />
            </div>
			<h6>
            <div class="form-group mb-3">
              <label>Mileage</label>
              <input type="Phone" name="Mileage" value="" placeholder="Mileage" class="form-control" required />
            </div>

			</h6>
			</h6>
			</h6>


			<h5>Serivice history  : </h5>



			<p>

			 Full Service History-><input type ="radio" name  ="status">
			Part Service History-><input type ="radio" name  ="status">
			First Service Not Due-><input type ="radio" name  ="status">
			No Service History-><input type ="radio" name  ="status">
			 </p>


			<h5>Vehicle Condition : </h5>



			<p>

			 Excellent-><input type ="radio" name  ="status">
			Good-><input type ="radio" name  ="status">
			Average-><input type ="radio" name  ="status">
			Below average-><input type ="radio" name  ="status">
			Poor-><input type ="radio" name  ="status">
			 </p>


          </form>
        </div>
      </div>
    </div>
	</div>
	</div>














  <body>


	<div style="background:#212;padding:30px">
 <h4 style="font-weight:bold">Customer Info:</h4>
 <h6>
 <div class = "firstform">
    <div class="container">
      <div class="row justify-content-right">
        <div class="col-md-12">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
              <label>First Name</label>
              <input type="text" name="name" value="" placeholder="Enter your first name" class="form-control" required />
            </div>
			<div class="form-group mb-3">
              <label>Last Name</label>
              <input type="text" name="name" value="" placeholder="Enter your last name" class="form-control" required />
            </div>
            <div class="form-group mb-3">
              <label>Email</label>
              <input type="email" name="email" value="" placeholder="Enter your email" class="form-control" required />
            </div>
            <div class="form-group mb-3">
              <label>Phone</label>
              <input type="Phone" name="phone" value="" placeholder="Enter your phone number" class="form-control" required />
            </div>
			 <div class="form-group mb-3">
              <label>Comments</label>
              <textarea type="message" name="comments" placeholder="Type your comments  here" class="form-control"></textarea>
            </div>



            <div class="form-group mb-3" >
              <input type="submit" name="submit" value="Submit" class="btn btn-success" />
            </div>
          </form>
        </div>
      </div>
    </div>
	</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</h6>
</div>
</div>
  </body>
	<?php
  include('includes/footer.php');
   ?>
