<?php session_start(); ?>
<?php

if (isset($_POST["submit"])) {
  $connection = mysqli_connect("localhost","root","","carhub");
  if (!isset($_SESSION["username"]))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    date_default_timezone_set("Asia/Dhaka");
    $datetime = '';
    $datetime=date('Y-m-d H:i:s');
    $query="insert into contact(name,email,phone,message,date) values ('$name','$email','$phone','$message','$datetime')";
    $query_run=mysqli_query($connection, $query);
    if($query_run)
    {
      $_SESSION['success']="Message Sent";
      header('Location: contactus.php');
    }
    else {
      $_SESSION['success']="Sent Failed";
      header('Location: contactus.php');
    }
  }
  else {
    $email=$_SESSION['username'];

    $sql="SELECT * FROM user where email='$email'";
    $result=mysqli_query($connection,$sql);
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
    foreach($data as $row){
      $name=$row['name'];
      $phone=$row['phone'];
    }
    $message=$_POST['message'];
    date_default_timezone_set("Asia/Dhaka");
    $datetime = '';
    $datetime=date('Y-m-d H:i:s');
    $query="insert into contact(name,email,phone,message,date) values ('$name','$email','$phone','$message','$datetime')";
    $query_run=mysqli_query($connection, $query);
    if($query_run)
    {
      $_SESSION['success']="Message Sent";
      header('Location: contactus.php');
    }
    else {
      $_SESSION['success']="Sent Failed";
      header('Location: contactus.php');
    }
  }


}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us | CarHub</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src = "https://code.jquery.com/jquery-2.1.3.min.js"></script>

  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="A.assets,,_royalslider,,_royalslider.css+assets,,_royalslider,,_skins,,_default,,_rs-default.css+assets,,_royalslider,,_skins,,_minimal-white,,_rs-minimal-white.css+css,,_bootstrap.min.css+css,,_normalize.css+css,,_jquery-ui.css,Mcc.y-DhrddGnN.css.pagespeed.cf.Hfy0poW2iH.css"/>


	<link rel="stylesheet" href="style.css">

  </head>

   <body>
     <?php
   	include('includes/nav.php');
   	 ?>

     <div class="gmap_canvas" style="margin:0 auto;">
       <iframe height="400px" width="100%"  id="gmap_canvas" src="https://maps.google.com/maps?q=ahsanullah%20university%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
     </div>

    <div class="container-fluid" >
      <div class="row">
        <div class="col-md-6" style="color: #000;background-image: url('assets/call.jpg');background-size: cover;">
            <h1>CONTACT US</h1>
            <p>Ahsanullah University of science and technology</p>
            <p>141 & 142, Love Road, Dhaka 1208</p>
            <h6>Phone no :- 019919494048</h6>
            <h6>Email :- ahsanullah@gmail.com</h6>
        </div>
        <div class="col-md-6" style="margin: 5px,5px,5px,5px;  background:#6C6D6D; padding:10px; font-weight:bold">
          <form action="contactus.php" method="POST" enctype="multipart/form-data">
            <?php if (!isset($_SESSION["username"])) {

         		$message= '<div class="form-group mb-3" >
              <label>Name</label>
              <input type="text" name="name" value="" placeholder="Enter your name" class="form-control" required />
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
           <label>Message</label>
           <textarea type="message" name="message" placeholder="Type your message here" class="form-control" required></textarea>
         </div>';
     			}
     			else {
     				$message='<div class="form-group mb-3">
           <label>Message</label>
           <textarea type="message" name="message" placeholder="Type your message here" class="form-control" required></textarea>
         </div>';
     			}

     				echo ($message);?>

            <div class="form-group mb-3" >
              <input type="submit" name="submit" value="Submit" class="btn btn-success" />
            </div>
          </form>
        </div>
      </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  <?php
  include('includes/footer.php');
   ?>
