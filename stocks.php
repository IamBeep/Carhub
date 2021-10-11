<?php session_start(); ?>
<?php
$host="localhost";
$user="root";
$password="";
$db="carhub";

$link=mysqli_connect($host,$user,$password,$db);

if(!empty($_GET["page"])){
$page=$_GET["page"];
}
else {
  $page="";
}
if($page=="" || $page==1)
{
  $page1=0;
}
else {
  $page1=($page*9)-9;
}
$sql="";
if (isset($_SESSION["username"]))
{
 $sql="SELECT * FROM cars limit $page1,9";
 $result=mysqli_query($link,$sql) or die(mysqli_error($link));
 $data=array();
 $noOfRows=mysqli_num_rows($result);
 if($noOfRows){
   while($row=mysqli_fetch_assoc($result)){

       /*echo "<pre>";
       print_r($row);*/
       array_push($data,$row);
       //echo "</pre>";

   }
 }
 $sql='SELECT * FROM cars';
 $result=mysqli_query($link,$sql) or die(mysqli_error($link));
 $noOfRows=mysqli_num_rows($result);
 $a=$noOfRows/9;
 $a=ceil($a);
}
else {
  $sql="SELECT * FROM cars where status=0 limit $page1,9";
  $result=mysqli_query($link,$sql) or die(mysqli_error($link));
  $data=array();
  $noOfRows=mysqli_num_rows($result);
  if($noOfRows){
    while($row=mysqli_fetch_assoc($result)){
      if($row['status']==0)
      {
        /*echo "<pre>";
        print_r($row);*/
        array_push($data,$row);
        //echo "</pre>";
      }
    }
  }
  $sql='SELECT * FROM cars where status=0';
  $result=mysqli_query($link,$sql) or die(mysqli_error($link));
  $noOfRows=mysqli_num_rows($result);
  $a=$noOfRows/9;
  $a=ceil($a);
}


?>

<!DOCTYPE html>
<html>
<head>
		<title>Stocks | CarHub</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial scale = 1.0">
		<script src = "https://code.jquery.com/jquery-2.1.3.min.js"></script>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	  <link rel="stylesheet" href="A.assets,,_royalslider,,_royalslider.css+assets,,_royalslider,,_skins,,_default,,_rs-default.css+assets,,_royalslider,,_skins,,_minimal-white,,_rs-minimal-white.css+css,,_bootstrap.min.css+css,,_normalize.css+css,,_jquery-ui.css,Mcc.y-DhrddGnN.css.pagespeed.cf.Hfy0poW2iH.css"/>
		<link rel="stylesheet" href="style.css">



		<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="/path/to/bootstrap.min.css" />
<!-- Bootstrap JS -->
<script src="/path/to/jquery.min.js"></script>
<script src="/path/to/bootstrap.min.js"></script>
<!-- <a href="https://www.jqueryscript.net/tags.php?/Carousel/">Carousel</a> Extension -->
<script src="carousel.js"></script>
<style>
.center {
  text-align: center;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>


<body>
  <?php
	include('includes/nav.php');
	 ?>
  <div style="background:#FFFFFF">


	<div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                  <aside>
                      <div id="searchbox">
                          <form method="GET" action="listings.php" name="searchform" id="searchform">
                              <div id="searchbox-inner">
                                  <div class="subti">Vehicle Search</div>
                                  <h3>Make</h3>
                                      <select name="make" class="form-control" id="make">
                                          <option value="any">Select Make</option>

                                          <option value="Mercedes-Benz">Mercedes-Benz</option>
                                          <option value="Porsche">Porsche</option>
                                          <option value="Land-Rover">Land-Rover</option>
                                          <option value="Audi">Audi</option>
                                          <option value="BMW">BMW</option>
                                          <option value="Jaguar ">Jaguar </option>
                                          <option value="Volkswagen">Volkswagen</option>
                                          <option value="MINI ">MINI </option>
                                          <option value="Volvo ">Volvo </option>
                                          <option value="Tesla">Tesla</option>
                                          <option value="Bently">Bently</option>
                                          <option value="Aston Martin">Aston Martin</option>
                                          <option value="Alfa Romeo">Alfa Romeo</option>
                                          <option value="Rolls Royce">Rolls Royce</option>
                                          <option value="Bentley">Bentley</option>
                                          <option value="Maserati">Maserati</option>
                                      </select>
                                  <h3>Model</h3>
                                      <select name="model" class="form-control" id="model">
                                          <option value="any">Select Model</option>
                                      </select>
                                  <span id="cashminmax">
                                      <select name="minprice" id="minprice" class="minPrice count usedsearch">
                                          <option value="any">Min Price</option>
                                          <option value="100000">100,000</option>
                                          <option value="125000">125,000</option>
                                          <option value="150000">150,000</option>
                                      </select>
                                      <select name="maxprice" id="maxprice" class="maxPrice count usedsearch">
                                          <option value="any">Max Price</option>
                                          <option value="100000">100,000</option>
                                          <option value="125000">125,000</option>
                                          <option value="150000">150,000</option>
                                      </select>
                                  </span>
                                  <span id="monthlyminmax" class="none">
                                      <select name="MinPayment" id="minPayment" class="minPrice count usedsearch">
                                          <option value="any">Min Monthly</option>
                                          <option value="1000">1,000</option>
                                          <option value="1250">1,250</option>
                                          <option value="1500">1,500</option>
                                          <option value="1750">1,750</option>
                                          <option value="2000">2,000</option>
                                          <option value="2250">2,250</option>
                                          <option value="2500">2,500</option>
                                          <option value="2750">2,750</option>
                                          <option value="3000">3,000</option>
                                      </select>
                                      <select name="MaxPayment" id="maxPayment" class="maxPrice count usedsearch">
                                          <option value="any">Max Monthly</option>
                                          <option value="1000">1,000</option>
                                          <option value="1250">1,250</option>
                                          <option value="1500">1,500</option>
                                          <option value="1750">1,750</option>
                                          <option value="2000">2,000</option>
                                          <option value="2250">2,250</option>
                                          <option value="2500">2,500</option>
                                          <option value="2750">2,750</option>
                                          <option value="3000">3,000</option>
                                      </select>
                                  </span>
                                  <input type="text" name="description" id="description" value="" class="count usedsearch" placeholder="keywords">
                                  <div class="checks">
                                      <label><input type="checkbox" name="seat" id="seat" value="7" class="count"> 7 Seats</label><br>
                                      <label><input type="checkbox" name="drive" id="drive" value="L" class="count"> <span class="long">Left Hand Drive</span><span class="short">LHD</span></label><br>
                                      <label><input type="checkbox" name="vatq" id="vatq" value="1" class="count"> VAT Qual<span class="long">ifying</span></label>
                                  </div>

                                  <div class="checks checks-r">
                                      <label><input type="checkbox" name="specialist" id="specialist" value="1" class="carsect count" onclick="searchCheckSects();"> Specialist<span class="long"> Cars</span></label><br>
                                      <label><input type="checkbox" name="bespoke" id="bespoke" value="L" class="carsect count" onclick="searchCheckSects();"> Bespoke<span class="long"> Vehicles</span></label><br>
                                      <label><input type="checkbox" name="export" id="export" value="1" class="carsect count" onclick="searchCheckSects();"> Export<span class="long"> Sales</span><span class="short">s</span></label>
                                  </div>
                                  <div class="clearfix"></div>

                                  <script>function searchCheckSects(){if($('#searchbox .carsect:checked').length>0){$('#searchbox .carsect:not(:checked)').attr("disabled",true);}else{$('#searchbox .carsect').attr("disabled",false);}}searchCheckSects();</script>
                                  <button type="submit" name="search" id="form-submit">Search Now</button>
                                  <div id="counter"><span></span></div>
                              </div>
                              <ul id="advanced">
                                  <li>
                                      <div class="ttl">Mileage<span>&#x25BE;</span></div>
                                      <div class="area none">
                                          <select name="maxmileage" id="maxmileage" class="count" onchange="SearchCars();">
                                              <option value="any">Max Mileage (any)</option>
                                              <option value="5000">up to 5,000 miles</option>
                                              <option value="10000">up to 10,000 miles</option>
                                              <option value="15000">up to 15,000 miles</option>
                                              <option value="20000">up to 20,000 miles</option>
                                              <option value="40000">up to 40,000 miles</option>
                                              <option value="60000">up to 60,000 miles</option>
                                              <option value="80000">up to 80,000 miles</option>
                                              <option value="100000">up to 100,000 miles</option>
                                          </select>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="ttl">Year<span>&#x25BE;</span></div>
                                      <div class="area none">
                                          <select name="yearfrom" id="yearfrom" class="count" onchange="SearchCars();">
                                              <option value="any">Year From</option>
                                              <option value="2018">2018</option>
                                              <option value="2017">2017</option>
                                              <option value="2016">2016</option>
                                              <option value="2015">2015</option>

                                          </select>
                                          <select name="yearto" id="yearto" class="count" onchange="SearchCars();">
                                              <option value="any">Year To</option>
                                              <option value="2018">2018</option>
                                              <option value="2017">2017</option>
                                              <option value="2016">2016</option>
                                              <option value="2015">2015</option>

                                          </select>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="ttl">Colour<span>&#x25BE;</span></div>
                                      <div class="area none">
                                          <div class="colours">
                                            <label class="colour-white" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="white" class="count">White</label>
                                            <label class="colour-black" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="black" class="count">Black</label>
                                            <label class="colour-silver" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="silver" class="count">Silver</label>
                                            <label class="colour-red" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="red" class="count">Red</label>
                                            <label class="colour-blue" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="blue" class="count">Blue</label>
                                            <label class="colour-green" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="green" class="count">Green</label>
                                            <label class="colour-bronze" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="bronze" class="count">Bronze</label>
                                            <label class="colour-brown" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="brown" class="count">Brown</label>
                                            <label class="colour-gold" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="gold" class="count">Gold</label>
                                            <label class="colour-grey" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="grey" class="count">Grey</label>
                                            <label class="colour-orange" onclick="SearchCars();"><input type="checkbox" name="colour[]" value="orange" class="count">Orange</label>
                                        </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="ttl">Fuel Type<span>&#x25BE;</span></div>
                                      <div class="area none">
                                          <select name="fuel" id="fuel" class="count" onchange="SearchCars();">
                                              <option value="any">Fuel Type (any)</option>
                                              <option value="DIESEL">Diesel</option>
                                              <option value="ELECTRIC">Electric</option>
                                              <option value="HYBRID">Hybrid</option>
                                              <option value="PETROL">Petrol</option>
                                          </select>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="ttl">Gearbox<span>&#x25BE;</span></div>
                                      <div class="area none">
                                          <select name="transmission" id="transmission" class="count" onchange="SearchCars();">
                                              <option value="any">Gearbox (any)</option>
                                              <option value="AUTOMATIC">Automatic (525)</option>
                                              <option value="MANUAL">Manual (11)</option>
                                              <option value="SEMI AUTO">Semi Auto (21)</option>
                                          </select>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="ttl">Bodystyle<span>&#x25BE;</span></div>
                                      <div class="area none">
                                          <select name="body" id="body" class="count" onchange="SearchCars();">
                                              <option value="any">Bodystyle (any)</option>
                                              <option value="CONVERTIBLE">Convertible</option>
                                              <option value="COUPE">Coupe</option>
                                              <option value="SPORTS">Sports</option>
                                              <option value="SUV">SUV</option>
                                          </select>
                                      </div>
                                  </li>
                              </ul>
                          </form>
                      </div>
                  </aside>
                        </div>

      <div class="col-md-9">
        <div class="container">
          <div class="row">
            <div class="center">
            <div class="pagination" style="padding: 10px">
              <?php
              if($page>=2)
              {
                ?><a href="stocks.php?page=<?php echo $page-1; ?>">&laquo;</a>
                <?php
              }
              ?>
          <?php
            $c=0;
            for($b=1; $b<=$a; $b++)
            {
              if($b==$page)
              {

                ?><a  class="active" href="stocks.php?page=<?php echo $b; ?>" style="text-decoration: none"><?php echo $b," "; ?></a><?php
              }
              else if($page=="" && $c==0)
              {
                ?><a  class="active" href="stocks.php?page=<?php echo $b; ?>" style="text-decoration: none"><?php echo $b," "; ?></a><?php
                $c=1;
              }
              else {
                ?><a href="stocks.php?page=<?php echo $b; ?>" style="text-decoration: none"><?php echo $b," "; ?></a><?php
              }
            }

             ?>
             <?php
             if($page<$a)
             {
               ?><a href="stocks.php?page=<?php echo $page+1; ?>">&raquo;</a>
               <?php
             }
             ?>

           </div>
          </div>

          </div>

        </div>
        <div class="container">
          <div class="row">

        <?php

                foreach($data as $row1){
                ?>


                  <div onclick="location.href='car.php?car=<?php echo $row1['car_id']?>';" class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" style="text-align: center;cursor: pointer;">

                      <div class="card  bg-light" >
                        <h6 style="font-weight: bold;padding: 10px"><?php echo $row1['car_name'];?></h6>

                      <div class="grid-image">
                        <img style="width: 100%;height: 15vw;object-fit: cover;"class="card-img card-img-bottom img-fluid" src="<?php echo $row1['car_image'];?>" alt="alt" >
                        </div>
                          <p style="color:#AAAAAA; font-size: 12px"><?php echo $row1['car_details'];?></p>
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <p style="font-weight: bold;font-size: 12px; ">Build: <?php echo $row1['car_build'];?></p>
                              </div>
                              <div class="col">
                                <p style="font-weight: bold;font-size: 12px">Seats: <?php echo $row1['car_seats'];?></p>
                              </div>
                            </div>
                          </div>

                    </div>
                  </div>

              <?php } ?>

            </div>
            </div>
            </div>

        </div>
        </div>

      </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>



    <?php
    include('includes/footer.php');
     ?>
