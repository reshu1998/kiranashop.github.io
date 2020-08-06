<?php

session_start();
if($_SESSION['uid'])
{
	//echo $_SESSION['uid'];
}
else
{
	header('location:../owlogin.php');
}
?>
<html>

<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
include('../nav1.html');
	?>

 <div class="col-lg-6 m-auto">
 
 <form method="POST" enctype="multipart/form-data">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  ADD ITEMS </h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> Price: </label>
 <input type="number" name="price" class="form-control"> <br>


 <label>Image: </label>
<input type="file" name="img" class="form-control"  required></br><br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>






<?php



	
if(isset($_POST['submit']))
{
	include('../database.php');
	
	
	$name=$_POST['name'];
	$price=$_POST['price'];
	
	$imagename =$_FILES['img']['name'];
	$tempimg =$_FILES['img']['tmp_name'];
	move_uploaded_file($tempimg,"../dataimg/$imagename");

	$query="INSERT INTO `data`( `Name`, `prize`, `image`) VALUES ('$name','$price','$imagename')";

	
	$run=mysqli_query($con,$query);
	if($run == TRUE)
	{
		?>
		<script>
		alert('data inserted succesfully');
		</script>
	<?php
	}
}

?>