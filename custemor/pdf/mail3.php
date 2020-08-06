<?php

session_start();
if($_SESSION['uid'])
{
	//echo $_SESSION['uid'];
}
else
{
	header('location:../clogin.php');
}
?>

<?php

//index.php

    
 
    include('../../nav3.html'); 
include('../access.php');

$message = '';

include('../../database.php');

function fetch_customer_data($connect)
{


	$output = '
	<div class="table-responsive">  
                     <table class="table table-bordered">

                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>
                            
                                 
                          </tr> 
	';


                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          
		$output .= '
			<tr>  
                               <td>'.$values["item_name"].'</td>  
                               <td>'.$values["item_quantity"].'</td>  
                               <td>'.$values["item_price"].'rs</td>  
                               <td>'.number_format($values["item_quantity"] * 
                               $values["item_price"], 2).'rs</td>
                               
                          </tr> 
                          ';

                          
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          
             $output .= '              
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="left" class="text-danger">'.$total.'RS</td>  
                               
                          </tr>   
                      ';

                       
			if(isset($_SESSION['Uname']))
				{
                       $output .= '              
                          <tr>   
                               <td colspan="4" align="center" class="text-info">Name :'.$_SESSION['Uname'].'</td>
                                 
                               
                          </tr>   
                      ';
                      
                      if(isset($_SESSION['Uname']))
				{
                       $output .= '              
                          <tr>   
                             
                               <td colspan="4" align="center" class="text-warning">Address :'.$_SESSION['Uadd'].'</td>  
                               
                          </tr>   
                      ';
                  }
                  }
              }
                       
	

          
                          
	$output .= '
	 		</table>
	</div>
	';
	return $output;
}
?>
<html>
<body>
<div class="container" style="font-size: 20px">
			<form method="POST" action="">
			Sender EmailId:<input type="email" name="email">
			<br>
			
			
			
			</div>
			</body>
			</html>
<?Php 
if(isset($_POST["action"]))
{
	include('pdf.php');
	$file_name = md5(rand()) . '.pdf';
	$html_code = '<link rel="stylesheet" href="bootstrap.min.css">';
	$html_code .= fetch_customer_data($connect);
	$pdf = new Pdf();
	$pdf->load_html($html_code);
	$pdf->render();
	$file = $pdf->output();
	file_put_contents($file_name, $file);
	
	require 'class/class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();								//Sets Mailer to send message using SMTP
	$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	$mail->Port = '587';								//Sets the default SMTP server port
	$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
	$mail->Username = 'reshmanikam1998@gmail.com';					//Sets SMTP username
	$mail->Password = 'pryeoujkmzuephrg';					//Sets SMTP password
	$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"


	$email=$_POST['email'];
	$mail->From = '$email';			//Sets the From email address for the message
	$mail->FromName = 'reshma nikam';			//Sets the From name of the message
        
   
   	$mail->AddAddress('bhagatkirana1998@gmail.com', 'sarika');		//Adds a "To" address
	$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	$mail->IsHTML(true);							//Sets message type to HTML				
	$mail->AddAttachment($file_name);     				//Adds an attachment from a path on the filesystem
	$mail->Subject = 'Customer Details';			//Sets the Subject of the message
	$mail->Body = 'Please Find Customer details in attach PDF File.';				//An HTML or plain text message body
	if($mail->Send())								//Send an Email. Return true on success or false on error
	{
		$message = '<label class="text-success">Customer Details has been send successfully...</label>';
	}
	unlink($file_name);
       
       
			  
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>orderdetails</title>
		<script src="jquery.min.js"></script>
		<link rel="stylesheet" href="bootstrap.min.css" />
		<script src="bootstrap.min.js"></script>
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
		<br />
		<div class="container">
			<h3 align="center">Final Order Details</h3>
			<br />
			<form method="post" action=" ">
				<input type="submit" name="action" class="btn btn-danger" value="PDF Send" /><?php echo $message; ?>

			</form>
			<br />
			<?php
			echo fetch_customer_data($connect);
			?>			
		</div>
		<br />
		<br />
	</body>
</html>





