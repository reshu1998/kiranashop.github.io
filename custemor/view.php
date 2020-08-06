<?php

session_start();
if($_SESSION['uid'])
{
  //echo $_SESSION['uid'];
}
else
{
  echo "you are not login"; 
  header('location:clogin.php');
}
?>
<?php
include('access.php');
?>
    
<!DOCTYPE html>
<html>
<head>
  <title></title>
  
             
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
  include('../nav2.html');
  ?>
  <form method="POST" action="">
  <h3 align="center">Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td><?php echo $values["item_price"]; ?>rs</td>  
                               <td><?php echo number_format($values["item_quantity"] * 
                               $values["item_price"], 2); ?>rs</td>  
                               <td><a href="selectdata.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  

                          </tr>  
                          <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><?php echo number_format($total, 2); ?> RS</td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?> 


                     </table><br>
                     
<div class="container">
                   
                   
     <table>              
 <form method="POST" action="">
    <label for="Name" >NAME:</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name" required style="width: 200px;">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control"  placeholder="Enter password" name="pass" required  style="width: 200px;">
    <label for="date">DATE:</label>
    <input type="date" class="form-control" placeholder="Enter date" name="date" required style="width: 200px;">

<br>
 <!--  <label for="address">ADDRESS:</label><br>
    <input type="text" placeholder="plz Enter addrees" name="address" id="address" required style="width: 200px;">-->

    <br>
    
    <button class="bg-danger text-dark"> <input type="submit"  name="submit" value="ORDER FROM MANIK STORE"></button>
    <button class="bg-danger text-dark"> <input type="submit"  name="submit1" value="ORDER FROM BHAGAT STORE"></button>
    <button class="bg-danger text-dark"> <input type="submit"  name="submit2" value="ORDER FROM RAJUDADA STORE"></button>
    


    <br>
   </form>
</table>
  </div>
</div>





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
   
    $_SESSION['uid']=$id;
      $date=$_POST['date'];
         
    
    $quer="INSERT INTO `seldata`(`Name`, `Total`,`Date`) VALUES ('$username','$total','$date')";

  
  
    $run=mysqli_query($con,$quer);
  
    if($run == TRUE)
      {
        ?>
        <script>
        alert('data inserted succesfully');
        window.open('pdf/mail2.php');
        </script>
        <?php


    
        }
  }
}

if(isset($_POST['submit1']))
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

    $_SESSION['uid']=$id;
      $date=$_POST['date'];
         
    
    $quer="INSERT INTO `bhagat`(`Name`, `Total`,`Date`) VALUES ('$username','$total','$date')";

  
  
    $run=mysqli_query($con,$quer);
  
    if($run == TRUE)
      {
        ?>
        <script>
        alert('data inserted succesfully');
window.open('pdf/mail3.php');
        </script>
        <?php
        

    
        }
  }
}

if(isset($_POST['submit2']))
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
   // session_start();
    $_SESSION['uid']=$id;
      $date=$_POST['date'];
         
    
    $quer="INSERT INTO `rajudada`(`Name`, `Total`,`Date`) VALUES ('$username','$total','$date')";

  
  
    $run=mysqli_query($con,$quer);
  
    if($run == TRUE)
      {
        ?>
        <script>
        alert('data inserted succesfully');
window.open('pdf/mail4.php');
        </script>
        <?php
        

    
        }
  }
}



?>




  



</body>
</html>
                