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
<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<style>
   	.r{
   		font-family: bold;
   		font-size: 30px;
   		text-align: center;
   		color: dark;
   	}
   </style>
</head>
<body>
<?php
	include('../nav1.html');
?>
<div class="r">
	<?php
 
if(isset($_SESSION['sname']))
{
 echo "Welcome ". $_SESSION['sname'];
}
else
{
	echo "<h1>You are not login</h1>";
}
?>
</div>

 <div class="container">

<a href="vc/log1.php"><button type="button" class="btn btn-primary">Manik Kirana Store</button></a>
<a href="vc/log2.php"><button type="button" class="btn btn-primary">Bhagat Kirana Store</button></a>
<a href="vc/log3.php"><button type="button" class="btn btn-primary">Rajudada Kirana Store</button></a>
</tr>
</table>
</form>


