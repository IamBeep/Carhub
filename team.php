<?php session_start(); ?>
<?php
$host="localhost";
$user="root";
$password="";
$db="carhub";

$link=mysqli_connect($host,$user,$password,$db);


$sql="SELECT * FROM team";
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
	<title>Team | CarHub</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width-device-width, initial scale = 1.0">

	<script src = "https://code.jquery.com/jquery-2.1.3.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	  <link rel="stylesheet" href="A.assets,,_royalslider,,_royalslider.css+assets,,_royalslider,,_skins,,_default,,_rs-default.css+assets,,_royalslider,,_skins,,_minimal-white,,_rs-minimal-white.css+css,,_bootstrap.min.css+css,,_normalize.css+css,,_jquery-ui.css,Mcc.y-DhrddGnN.css.pagespeed.cf.Hfy0poW2iH.css"/>


	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="./stars.css">
	<link rel="stylesheet" href="line1.css">



</head>
<body>
  <?php
	include('includes/nav.php');
	 ?>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

<section>
	<div class="container">
		<div class="row">
			<?php
				foreach($data as $row1){
			?>
			<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
		<div class="col-md-4" style="color: #ffffff; padding: 15px">
			<img src="<?php echo $row1["image_path"] ?>" height="350px" width="350px">
			<h2><?php echo $row1["name"] ?></h2>
			<p>ID: <?php echo $row1["aust_id"] ?></p>
		</div>
		<?php } ?>
	</div>
</div>
</section>

</body>

<?php
include('includes/footer.php');
 ?>
