<?php session_start(); ?>
<?php
$host="localhost";
$user="root";
$password="";
$db="carhub";

$link=mysqli_connect($host,$user,$password,$db);


$sql="SELECT * FROM aboutus";
$result=mysqli_query($link,$sql);
$data=array();
$noOfRows=mysqli_num_rows($result);
if($noOfRows){
  while($row=mysqli_fetch_assoc($result)){
    if($row['status']==1)
    {
      /*echo "<pre>";
      print_r($row);*/
      array_push($data,$row);
      //echo "</pre>";
    }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us | CarHub</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width-device-width, initial scale = 1.0">

	<script src = "https://code.jquery.com/jquery-2.1.3.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	  <link rel="stylesheet" href="A.assets,,_royalslider,,_royalslider.css+assets,,_royalslider,,_skins,,_default,,_rs-default.css+assets,,_royalslider,,_skins,,_minimal-white,,_rs-minimal-white.css+css,,_bootstrap.min.css+css,,_normalize.css+css,,_jquery-ui.css,Mcc.y-DhrddGnN.css.pagespeed.cf.Hfy0poW2iH.css"/>


	<link rel="stylesheet" href="style2.css">



</head>
<body>
	<?php
 include('includes/nav.php');
	?>


	<div class="header about-us">
		<?php
			foreach($data as $row){
		?>
	<h1> <b>ABOUT US<b></h1>
        <div class="row img-row">

	       	   <img src="<?php echo $row['imagepath'];?>">

        </div>
		<p><?php echo $row['paragraph']; ?></p>
<?php } ?>
</div>

<section>
	<div class="container opening">
		<div class="row about-row">
		<div class="col-lg-6 col-md-8 col-sm-12 img">
			<div class="container opening-hours">
				<h2><b>OPENING HOURS</b></h2>
				<p>Saturday to Thursday: 9am to 11pm</p>
				<p>Friday: 8am to 10pm</p>
		</div>
	</div>

		<div class="col-lg-6 col-md-8 col-sm-12 img">
			<img src="assets/auto-show.gif">
		</div>

</div>
</div>
</section>


<section>
	<div class="container featured-brands">
                <h2>FEATURED BRANDS</h2>
                <div class="row brands-logo">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="#"><img src="assets/Audi.png"></a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="#"><img src="assets/BMW.png"></a>
					</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="#"><img src="assets/Land-Rover.png">
						</a>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6"><a href="#">	<img src="assets/Mercedes-Benz.png"></a></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="#">	<img src="assets/Porsche.png">
					</a>
				    </div>
					<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="#">	<img src="assets/Tesla.png"></div></a>

					</div>
				</div>
</div>

</section>



</body>

<?php
include('includes/footer.php');
 ?>
