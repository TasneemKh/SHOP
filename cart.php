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




?>
<! DOCTYPE html>
<html>
	<head> 
		<title>
		</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel=“stylesheet” type=“text/css” href=“https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css”> 
   
 <style>
 
</style>
<script type="text/javascript">
   function jsFunction(){
	   document.getElementById("mod").style="display:block";
   }
</script>
 </head> 

  <body>
 

   <?php

    include("headerregint.php"); 
?>

<div class="container p-3" id="products">
<h1 class="text-center my-5">
YOUR CART
</h1>
</div>
<div class="container"  style="
    height: 353px;
"id="">
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">number</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  if(isset($_COOKIE["userEmail"])){ 
	$em=$_COOKIE["userEmail"];
	$sql_e="SELECT * FROM user WHERE email='$em'";
	$res_e=mysqli_query($conn ,$sql_e);
	$row = mysqli_fetch_assoc($res_e);
	$idu=$row["id"];
$sql="SELECT * FROM cart where userid='$idu'";
$result=$conn->query($sql);
if ($result->num_rows > 0) { 
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);  
 foreach( $posts as $post)
 {

$id=$post["id"];
$name=$post["name"];
$price=$post["price"];

?>
    <tr>
      <th scope="row"><?php echo $id;?></th>
      <td><?php echo $name;?></td>
      <td><?php echo $price;?></td>
    </tr>
 <?php } ?>  
  </tbody>
  <?php }} ?> 
</table>
</div>

<footer class="page-footer font-small mdb-color lighten-3 pt-4"style="">

     <?php  include("footerint.html"); ?>
  

</footer>

</body>
</html>
