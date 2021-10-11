<?php session_start(); ?>
<?php

$host="localhost";
$user="root";
$password="";
$db="carhub";
$link=mysqli_connect($host,$user,$password,$db);
date_default_timezone_set("Asia/Dhaka");
$datetime = '';
    if(isset($_REQUEST['submit']))
     {
			 $datetime=date('Y-m-d H:i:s');
			 $user_email=$_POST["email"];
			 $user_name=$_POST["name"];
			 $user_phone=$_POST["phone"];
			 $user_address=$_POST["address"];
			 $user_password=md5($_POST["password"]);
			 $sqlCheck='select * from user where email="'.$user_email.'"';
			 $result=mysqli_query($link,$sqlCheck);
			 $noOfRows=mysqli_num_rows($result);
			 if($noOfRows)
			 {
				 while($row=mysqli_fetch_assoc($result)){
			     if($row['status']==2)
			     {
						echo '<script language="javascript">';
	 					echo 'alert("Please Confirm your Email!!")';
	 					echo '</script>';
			     }
					 else {
						 echo '<script language="javascript">';
 	 					echo 'alert("Already Registered!!")';
 	 					echo '</script>';
					 }
			   }
			 }
			 else {
         $target_dir="";
         if(!isset($_FILES['file_upload']) || $_FILES['file_upload']['error'] == UPLOAD_ERR_NO_FILE)
         {
           $target_dir="images/users/default-image.jpg";
         }
         else{
           $userFileName='user_pic_'.$user_email;
  	       $imageType=strtolower(pathinfo($_FILES['file_upload']['name'], PATHINFO_EXTENSION));
  	       $target_dir="images/users/".$userFileName.".".$imageType;
  	       $target_file=$target_dir;
  	       $temp_file=$_FILES['file_upload']['tmp_name'];
  	       move_uploaded_file($temp_file, $target_file);
         }

				 $sqlInsert='insert into user(name,email,phone,address,password,image,status,created_date,updated_date)
				 values("'.$user_name.'","'.$user_email.'","'.$user_phone.'","'.$user_address.'","'.$user_password.'","'.$target_dir.'",2,"'.$datetime.'","'.$datetime.'")';
				 $resultInsert=mysqli_query($link, $sqlInsert);

				 echo '<script language="javascript">';
				echo 'alert("Successfully Registered!!")';
				echo '</script>';
			 }
    }
 ?>


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



  <section class="container-fluid bg2">
    	<section class="row justify-content-right">
    		<section class="col-12 col-sm-6 col-md-3">
    			<form class="form-container" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
              <h2><b>Sign Up</b></h2>
              <label>Name</label>
              <input type="text" name="name" value="" placeholder="Enter your name" class="form-control" required />
            </div>
            <div class="form-group mb-3">
              <label>Email</label>
              <input type="email" name="email" value="" placeholder="Enter your email (must be unique)" class="form-control" required />
            </div>
            <div class="form-group mb-3">
              <label>Phone</label>
              <input type="Phone" name="phone" value="" placeholder="Enter your phone number" class="form-control" required />
            </div>
            <div class="form-group mb-3">
              <label>Address</label>
              <textarea type="message" name="address" placeholder="Type your address here" class="form-control" required></textarea>
            </div>
            <div class="form-group mb-3">
              <label>Password</label>
              <input type="password" id="password"  name="password" value="" placeholder="Enter your password" class="form-control" required />
            </div>
            <div class="form-group mb-3">
              <label>Confirm Password</label>
              <input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Retype Password" class="form-control" required />
              <span id='message'></span>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
            $('#password, #confirm_password').on('keyup', function () {
              if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
              } else
                $('#message').html('Not Matching').css('color', 'red');
            });
            </script>
            <div class="form-group mb-3">
              <label>Upload Profile Picture</label>
              <input type="file" name="file_upload" class="form-control"/>
            </div>
    			  <div class="form-check">
    			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    			    <label class="form-check-label" for="exampleCheck1">By creating an account you agree <br>to our <a href="#" style="color:black">Terms & Policy</a></label>
    			  </div>



    			  <button type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary btn-block submit2">Submit</button>
						<a href="login.php" style="float: right">Not New?</a>

    			</form>
    					</section>
    	</section>
    </section>

</body>


<?php
include('includes/footer.php');
 ?>
