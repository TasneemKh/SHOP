<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['Signin'])){

if(isset($_POST['inputEmail']) && isset($_POST['inputPassword'])){
  $val=  $_POST['inputEmail'];
    $val2=  $_POST['inputPassword'];
  $sql_x="SELECT * FROM user  WHERE email='$val' and pass='$val2'";
     $res=mysqli_query($conn ,$sql_x);
     if(mysqli_num_rows($res) > 0){
	$row = mysqli_fetch_assoc($res);  
		setcookie("userEmail", $val  , time()+3600, "/");
	
		setcookie("firstname", $row["firstName"], time()+3600, "/"); 
		 setcookie("lastname", $row["lastName"], time()+3600, "/"); 
	  header('Location: mainint.php');  
    }
    else{
     $message = "incorrect data make sure that data you have entered is correct  ";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}}
?>
<! DOCTYPE html>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Album example for Bootstrap</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <style>
  #signin{    display: block;
    
    color: #d2bb33;
    background-color: #5240B3;
    border-radius: 2.8rem;}
	.focusOutline:focus {
    color: #495057;
    background-color: #fff;
    border-color: #5240b36b;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(82, 64, 179, 0.23);
}
.navbar-light .navbar-nav .nav-link {
    color: rgb(82, 64, 179);
}
</style>
  </head>

  <body>
 <?php  include("headerint.php"); ?>

	  <form action="<?php $_PHP_SELF ?>" method="POST" class="form-signin container my-5 py-5"   style="   background-color: #F9F4F4;">
 <div class="row">
 <div class="col-md-4 col-sm-3"></div>
 <div class="col-md-4 col-sm-6">
  <h1 class="h3 mb-5 font-weight-normal text-center"style="   font-family: cursive;    color: #bfa928;">LOG IN</h1>
  <label for="inputEmail" class=""> Email:</label>
  <input type="email" id="inputEmail" name="inputEmail" class="form-control focusOutline" required="" autofocus="">
  <label for="inputPassword" class="mt-3">Password</label>
  <input type="password" id="inputPassword" name="inputPassword"class="form-control focusOutline"  required="">
  <div class="row">
  <div class="col-md-3 col-sm-2"></div>
   <div class="col-md-6 col-sm-8  text-center">
  <button class="btn btn-lg btn-primary mt-5 "style="display: inline-block;" id="Signin"  name="Signin"type="submit" style="">log in</button>
  </div>
    <div class="col-md-3 col-sm-2"></div>
   </div>
   <div class=" text-center">
  <a class="mt-2 mb-3 d-block"style="   color: #5240b3;" href="#">Forget my password</a>
  <br>
  <small class="mt-5"> you have an account <a href="#" style="   color: #5240b3;">Register</a></small>
  </div>
  </div>
   <div class="col-md-4 col-sm-3"></div>
   
   
  </div>
</form>
<footer class="page-footer font-small mdb-color lighten-3 pt-4"style="background-color: #5240b342;">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="l1.png" class="img-fluid" alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="l2.png" class="img-fluid" alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="l3.png" class="img-fluid" alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="l4.png" class="img-fluid" alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="l5.png" class="img-fluid" alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="l6.png" class="img-fluid" alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
   <?php  include("footerint.html"); ?>

</footer>
</body>
</html>