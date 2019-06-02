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
if(isset($_POST['search'])){

if(isset($_POST['s'])){
  $val=  $_POST['s'];

  $sql_x="SELECT * FROM `product` WHERE `name`='$val'";
     $res=mysqli_query($conn ,$sql_x);
     if(mysqli_num_rows($res) > 0){header("Location: loadint.php"); }
    else{
     $message = "the item that you entered is not available   ";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}}



?>
<style>
.btn-light {
    color: rgb(82, 64, 179);
    background-color: #ffffff;
    border-color: #ffffff;
}
.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea47;
border-color: #dae0e540;}
</style>

<nav class="navbar navbar-expand-lg navbar-light" style="
    box-shadow: 1px 2px 1px 0px #ccc;
    position: sticky;
    top: 0;
    z-index: 1000;
    background-color: white;
">
		<div class="container"> <a class="navbar-brand" href="mainint.php" style="font-family: serif;color: #bfa928;"><i class="fas fa-chess-rook mr-2" style="color: #5240b382;"></i>CM</a>
		<div class="d-flex ml-auto">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		</div>
		<div class="collapse navbar-collapse" id="globalNavbar">
		<form class="form-inline form-navbar my-2 my-lg-0 order-2" action="<?php $_PHP_SELF ?>" method="POST">
		<input class="form-control" name="s" type="text" placeholder="Search">
		<button type="submit" name="search" id="search"class="btn btn-light" style="
    margin-left: 5px;
"><i class="fas fa-search"></i></button>
		</form>
		<ul class="navbar-nav mr-auto order-1">
		</ul>
		<ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
		<li class="nav-item"><a class="nav-link" href="int1.php">Sign in</a></li>
		<li class="nav-item"><a class="nav-link" href="int2.php">Sign up</a></li>
		</ul>
		
                                                    </div>
                    </div>
                </nav>
