<html>
<body >
<center>

</body>
</html>


<form action="update.php" method= "POST">
<table>
<tr>



<th>enter product name</th>
<td><input type="text" name="name" placeholder="enter name" required></td>

<td><input type="submit" name="submit" value="submit"></td>
</tr>

</table>
</form>
<table border=1 align="center" width="80%">
<tr>
<th>No</th>
<th>image</th>
<th>Name</th>
<th>price</th>
<th>Edit</th>

</tr>
<?php


if(isset($_POST['submit']))
{
	include('../database.php');

	$names=$_POST['name'];
	$sql= "SELECT * FROM `data` WHERE `Name` LIKE '%$names%'";
	$run= mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='5'>record not found</td></tr>";
	}
	else
	{ 
$count=0;
		while($values=mysqli_fetch_assoc($run))
		{
			$count++;
			
			 ?>
			<tr>
			<td><?php echo $count; ?></td>
			<td> <image src="../dataimg/<?php echo $values['image']; ?>" style="max-width:50px;"> </td>
			<td><?php echo $values['Name']; ?></td>
			<td><?php echo $values['prize']; ?></td>
			<td><a href="updateform.php?sid=<?php echo $values['id']; ?>">Edit</a></td>	
			</tr>
			

			
			
			<?php
			
		}
		?>
		</table>
		<?php
	}
	
	
}




?>




