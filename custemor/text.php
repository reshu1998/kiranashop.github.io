<?php
include('access.php');
if (isset($_POST['ok'])) {

	$num='91'.$_POST['number'];
	$msg=$_POST['message'];
$apiKey = urlencode('Oa8itDFWUOU-w9Y7K019orFg2g0v72PmkmmhFqjOiI');
$numbers = array($num);
$sender = urlencode('TXTLCL');
$message = rawurlencode('$msg');
 
$numbers = implode(',', $numbers);
 
// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;
}
?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <form method="POST">
  <div class="form-group">
  <label for="usr">phone numbers:</label>
  <input type="number" class="form-control" id="usr" name="number">
</div>

    <div class="form-group">
      <label for="message">Message:</label>
      <textarea name="message" >
       </textarea>
    </div>

    <button type="submit" name="ok" class="btn btn-default">OK</button>
  </form>
</div>

</body>
</html>
