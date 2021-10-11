<?php
include("security.php");
?>
<?php
$host="localhost";
$user="root";
$password="";
$db="carhub";

$link=mysqli_connect($host,$user,$password,$db);
$email=$_SESSION['username'];

$sql="SELECT * FROM user where email='$email'";
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
	<title></title>
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

<section>
	<div class="row header">
		<h2><b>Manage My Account</b></h2>
	</div>
</section>

<section>
	<div class="container manage-account">
	<div class="row account">
		<?php
			foreach($data as $row){
		?>
		<div class="col-lg-6 col-md-6 col-sm-6">
				<h3>Personal Details</h3>
				<h4>Name:  <?php echo $row['name']?></h4>
				<h4>Email: <?php echo $row['email']?></h4>
				<h4>Cell: <?php echo $row['phone']?></h4>
				<p><a href="#">Subscribe to our newsletter</a></p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img style="float:right" src="<?php echo $row["image"] ?>" height="200px" width="200px">
			</div>
			<?php
		}
			?>
			</div>
		</div>
	</div>





	</section>


	<section>
		<div class="container order-table-div">
			<table class="order-table">
				<tr>
					<th>Order #</th>
					<th>Order Date</th>
					<th>Product</th>
					<th>Price</th>
					<th>State</th>
				</tr>
			</table>

		</div>
	</section>


<section>
	<div class="container">


		<div class="row">
			<div class="col-sm-12 col-md-12">
        <form action="logout.php" method="POST" style="float:right">

          <button type="submit" name="logout_btn" class="btn btn-primary btn-block log-out">Logout</button>

        </form>
		</div>
	</div>
	</div>
	</section>


</body>


<?php
include('includes/footer.php');
 ?>
