
<!DOCTYPE html>
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
</body>

 <div class="col-lg-6 m-auto">
 
 <form method="POST">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Login for veiw custemer </h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> Password: </label>
 <input type="password" name="pass" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>
<?php

include('../../database.php');

if(isset($_POST['done']))
{
  $username=$_POST['name'];
  $password=$_POST['pass'];
  $query="SELECT * FROM `otable` WHERE `sname`='$username' AND `password`='$password'";
  $run=mysqli_query($con,$query);
  $row=mysqli_num_rows($run);
  if($row <1)
  {
    ?>
    <script>
    alert('username or password doesnt match');
    //window.open('owlogin.php','_self');
    </script>
    <?php
  }
  else
  {
    
    header('location:c2.php');
    
  }
  
}

?>