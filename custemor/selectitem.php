<?php

session_start();
if($_SESSION['uid'])
{
	//echo $_SESSION['uid'];
}
else
{
	header('location:clogin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include('../nav1.html');
?>
<br><br>
	<div class="container-fluid">
			<div class="row">
			<div class="col-lg-4  col-md-4 col-sm-12 col-12">
				<div class="card border-light" style="width: 300px">
				<img src="../img/dali.jpeg" class="img-fluid card-img" style="height:300px;" >
				<div class="card-body  text-center">
					<h4 class="card-title text-center">home product</h4>
					<p class="card-text text-center" >you can all dal product with adorable rate</p>
					<a href="selectdata.php" class="btn btn-danger text-center">SELECT</a>
					
					
				</div>
				</div>

			</div>
			<div class="col-lg-4  col-md-4 col-sm-12 col-12">
				<div class="card border-light" style="width: 300px">
				<img src="../img/nataych.jpg" class="img-fluid card-img" style="height:300px;">
				<div class="card-body  text-center">
					<h4 class="card-title text-center">JWELLERY</h4>
					<p class="card-text text-center" >different modern jwelleries buy only here</p>
					<a href="selectdata.php" class="btn btn-danger text-center">SELECT</a>
					
					
				</div>
			</div>
				</div>
			<div class="col-lg-4  col-md-4 col-sm-4 col-12">

				<div class="col-lg-4  col-md-4 col-sm-12 col-12">
				<div class="card border-light" style="width: 300px ">
				<img src="../img/beuaty.jpg" class="img-fluid card-img" style="height:300px;" >
				<div class="card-body  text-center">
					<h4 class="card-title text-center">COSMETICS</h4>
					<p class="card-text text-center" >all cosmetics product woth all brands</p>
					<a href="selectdata.php" class="btn btn-danger text-center">SELECT</a>
					
					
				
			</div>
			</div>
		</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
			<div class="col-lg-4  col-md-4 col-sm-12 col-12">
				<div class="card border-light" style="width: 300px">
				<img src="../img/sabann.jfif" class="img-fluid card-img" style="height:300px;" >
				<div class="card-body  text-center">
					<h4 class="card-title text-center">clening products</h4>
					<p class="card-text text-center" >buy soaps , brush anything only here</p>
					<a href="selectdata.php" class="btn btn-danger text-center">SELECT</a>
					
					
				</div>
				</div>

			</div>
			<div class="col-lg-4  col-md-4 col-sm-12 col-12">
				<div class="card border-light" style="width: 300px">
				<img src="../img/cold.jpg" class="img-fluid card-img" style="height:300px;">
				<div class="card-body  text-center">
					<h4 class="card-title text-center">COLDRINKS</h4>
					<p class="card-text text-center" >Lets see our services and consultancy</p>
					<a href="selectdata.php" class="btn btn-danger text-center">SELECT</a>
					
					
				</div>
			</div>
				</div>
			<div class="col-lg-4  col-md-4 col-sm-4 col-12">

				<div class="col-lg-4  col-md-4 col-sm-12 col-12">
				<div class="card border-light" style="width: 300px ">
				<img src="../img/beuaty.jpg" class="img-fluid card-img" style="height:300px;" >
				<div class="card-body  text-center">
					<h4 class="card-title text-center">Profile</h4>
					<p class="card-text text-center" >Lets see our services and consultancy</p>
					<a href="selectdata.php" class="btn btn-danger text-center">SELECT</a>
					
					
				
			</div>
			</div>
		</div>
</div>
</div>
</body>
</html>