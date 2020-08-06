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
<?php



include('../database.php');
$sid = (isset($_GET['sid']) ? $_GET['sid'] : '');
$sql="SELECT * FROM `data` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$values= mysqli_fetch_assoc($run);


?>

<html>
<body style="background-color:orange">







<form method="POST"  action="updatedata.php"  enctype="multipart/form-data">
<table border=1 align="center" style="width:70%" style="background-color:lime">



<tr>
<td>NAME</td>
<td><input type="text" name="name" value = "<?php echo $values['Name']; ?>" ></td>
</tr>



<tr>
<td>Price</td>
<td><input type="number" name="price" value = "<?php echo $values['prize']; ?>" required></td>
</tr>

<tr>
<td>image</td>
<td><input type="file" name="img" required></td>
</tr >

<tr>
<input type="hidden" name="sid" value="<?php echo $values['id'];  ?>" />
<td colspan="2" align="center"><input type="submit" name="submit" value="submit"   required></td>
</tr>


</table>
</form>

</body>
</html>


