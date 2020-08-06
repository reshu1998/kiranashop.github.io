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
<?php
include('access.php');
?>    
 

    
 <!DOCTYPE html>  
 <html>  
      <head>  
             
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<!-- jQuery library -->

      </head>  
      <body> 
        <?php
      include('../nav2.html'); 
      
      ?>
<div class="bg-light float-right" style="font-size: 20px">
 <?php
if(isset($_SESSION['Uname']))
{
 ?>
<strong><div class=""><?php echo "Welcome ". $_SESSION['Uname']; ?></div></strong>
 <?php
}
else
{
  echo "<h1>You are not login</h1>";

  }
  ?>
</div>

<br>
<form method="POST">
<table>
<tr style="font-size: 20px">

<th>Enter Product Name</th>
<td><input type="text" name="name" placeholder="Enter Name" required></td>



<td><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form>
<br><br>
<div class="container-fluid" style="width:900px;">  
    <?php  
    if(isset($_POST['submit']))
      {
                $names = $_POST['name'];
                $query="SELECT * FROM `data` WHERE  `Name` LIKE '%$names%'";
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                  
                     while($row = mysqli_fetch_array($result))  
                     { 
                     
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="selectdata.php?action=add&id=<?php echo $row['id']; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center" style="width: 400px">  
                               <img src="../dataimg/<?php echo $row['image']; ?>" class="img-responsive" style="height:200px;"/><br />  
                               <h4 class="text-info"><?php echo $row['Name']; ?></h4>  
                               <h4 class="text-danger"><?php echo $row['prize']; ?> RS</h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo 
                               $row['Name']; ?>" >  
                               <input type="hidden" name="hidden_price" value="<?php echo $row['prize']; ?>" >  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" >  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                 
              }
            }
                ?>  
            
                  
           </div>  
           <br />  
    
 
</body>
</html>           