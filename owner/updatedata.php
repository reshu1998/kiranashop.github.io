<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	
	$rollnum=$_POST['number'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcont=$_POST['pcont'];
	$std=$_POST['std'];
	$id = $_POST['sid'];
	$imagename =$_FILES['img']['name'];
	$tempimg =$_FILES['img']['tmp_name'];
	move_uploaded_file($tempimg,"../dataimg/$imagename");

	$sql="UPDATE `student` SET  `rollno`='$rollnum' ,`name`='$name' ,
	`city`='$city',`pcont`='$pcont',`standerd`='$std',`image`='$imagename' WHERE `id`='$id'";
	
	$run=mysqli_query($con,$sql);
	if($run == TRUE)
	{
		?>
		<script>
		alert('data update succesfully');
		
		window.open('updateform.php?sid=<?php echo $id; ?>', '_self');
		</script>
	<?php
	}
}

?>