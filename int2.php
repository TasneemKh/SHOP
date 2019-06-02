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
if(isset($_POST['signUp'])){
        $fname1=$_POST['firstName'];
        $lname1=$_POST['lastName'];   
        $username=$_POST['username'];     
        $email=$_POST['email'];  
        $address=$_POST['address'];  
		 $pass1=$_POST['Password'];  
        $pass2=$_POST['Password1']; 
        $phoneNo=$_POST['phoneNo']; 
      
    $sql_e="SELECT * FROM user WHERE email='$email'";
    $res_e=mysqli_query($conn ,$sql_e);
    if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 
        echo "<script type='text/javascript'>alert('$email_error');</script>";
    }else{
    if($pass1==$pass2){
             $sql="INSERT INTO `user` (`firstName`, `lastName`, `userName`, `email`, `pass`, `address`, `phone`, `id`) VALUES ('$fname1', '$lname1', '$username', '$email', '$pass1', '$address', '$phoneNo', NULL)";

  	  $done = "Done"; 
        echo "<script type='text/javascript'>alert('$$done');</script>";
            if ($conn->query($sql) === TRUE) {
                setcookie("userEmail", $email  , time()+3600, "/");
               
                setcookie("firstname", $fname1, time()+3600, "/"); 
                setcookie("lastname", $lname1, time()+3600, "/"); 
                header('Location: mainint.php');   
             }
     }else{$message = "You have entered a different passward ";
echo "<script type='text/javascript'>alert('$message');</script>";}


    }

}

?>
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
 <div class="container">
 <div class="row">
  <div class="col-md-2 "></div>
 <div class="col-md-8 p-5">
          <h4 class="mb-3 text-center" style="
    font-family: cursive;
">Sign up</h4>
          <form class="-" name="" action="<?php $_PHP_SELF ?>" method="POST" >
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address"  name ="address"placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
			<div class="mb-3">
               <label for="inputPassword" class="mt-3">Password</label>
				<input type="password"name="Password" id="inputPassword" class="form-control focusOutline"  required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="mb-3">
               <label for="inputPassword1" class="mt-3">confirm Password</label>
				<input type="password" name="Password1" id="inputPassword1" class="form-control focusOutline"  required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            

            <div class="mb-3">
               <label for="phoneNo" class="mt-3">Phone Number</label>
				<input type="text" id="phoneNo" name="phoneNo" class="form-control focusOutline"  required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

           
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="signUp">Continue  </button>
          </form>
        </div>
<div class="col-md-2 "></div>
		</div>
</div>
<footer class="page-footer font-small mdb-color lighten-3 pt-4"style="">

  
   <?php  include("footerint.html"); ?>

</footer>
</body>
</html> 