<?php
include("security.php");

if (isset($_POST["login"])) {
    $email_login=$_POST['email'];
    $password_login=md5($_POST['password']);
    $query="select * from user where email='$email_login' and password='$password_login'";
    $connection = mysqli_connect("localhost","root","","carhub");
    $query_run=mysqli_query($connection, $query);
    $data=array();
    $noOfRows=mysqli_num_rows($query_run);
    $id=0;
    if(mysqli_num_rows($query_run) > 0)
    {
      $flag=0;
      while($row=mysqli_fetch_assoc($query_run)){
        if($row['status']==1)
        {
          $id=$row['customer_id'];
          /*echo "<pre>";
          print_r($row);*/
          array_push($data,$row);
          $flag=1;
          //echo "</pre>";

        }
        else if ($row['status']==2) {
          $flag=2;
        }
      }
      if($flag==1)
      {
        $_SESSION['username']=$email_login;
        header('Location: profile.php');
      }
      else if($flag==2)
      {
        $_SESSION['status']="Confirm your Email!";
        header('Location: login.php');
      }
      else {
        $_SESSION['status']="Email id / Password is invalid";
        header('Location: login.php');
      }
    }
    else {
      $_SESSION['status']="Email id / Password is invalid";
      header('Location: login.php');
    }

  }

?>
