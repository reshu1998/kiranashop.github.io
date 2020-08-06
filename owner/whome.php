
<?php

session_start();
if($_SESSION['uid'])
{
	//echo $_SESSION['uid'];
}
else
{
	header('location:owner/owlogin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>navbar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style >


.bg
{
	background-image: url("../img/reshu.jpg");
	height: 600px;
	width: 1000px;
}

	.container .btn-group {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.btn-group button {
  background-color: #4CAF50; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: black;
}


</style>
</head>
<body>
	<?php
	include('../nav1.html');
?>
<div class="container">
	<div class="bg">
    <div class="btn-group">
			<a href="addother.php"><button class="text-white">ADD ITEM</button></a>
		<a href="custemer.php"><button class="text-white">VIEW CUSTEMOR</button></a>
    <a href="display.php"><button class="text-white">UPDATE VALUE</button></a>
	</div>
	</div>
</div>

</body>
</html>