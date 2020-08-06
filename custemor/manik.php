
<?php


 
    include('../database.php');
 
 
  if(isset($_POST['submit']))
{
  $username=$_POST['name'];
  $password=$_POST['pass'];
  
  $query = "SELECT * FROM `ctable` WHERE `Name`='$username' AND `password`='$password'";
  $run=mysqli_query($con,$query);
  $row=mysqli_num_rows($run);
  if($row ==0)
  {
    ?>
    <script>
    alert('username or password doesnt match');
    window.open('view.php','_self');
    </script>
    <?php
  }
  else
  {

    $data=mysqli_fetch_assoc($run);
    $id=$data['id'];
    session_start();
    $_SESSION['uid']=$id;
      $date=$_POST['date'];
         
    
    $quer="INSERT INTO `seldata`( `Name`, `Total`,`Date`) VALUES ('$username','$total','$date')";

  
  
    $run=mysqli_query($con,$quer);
  
    if($run == TRUE)
      {
        ?>
        <script>
        alert('data inserted succesfully');

        </script>
        <?php
        header('location:pdf/mail2.php');

    
        }
  }
}




?>




  


