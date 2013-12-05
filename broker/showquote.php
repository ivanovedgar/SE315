<?php

$userID = $_POST[quotationNumber];
$email = $_POST[email];

$getQuoteURL = "http://192.168.1.2:3000/users/$userID/getquote.json";
$quote = curl_get($getQuoteURL);

function curl_get($url) //retrieves quote for the user that was created
{
	$ch = curl_init();
	
	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLINFO_HEADER_OUT, true);
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	
	// grab URL and pass it to the browser
	$response =  curl_exec($ch);
	
	// close cURL resource, and free up system resources
	curl_close($ch);
	return $response;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Vehicle Insurance</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>

<body id="main_body" >
		
<div id="menu">
<ul>
	<li><a href="index.php" title="Will open home page">Home</a></li>
	<li><a href="retrievequote.php" title="Will open page to retrive quotation">Retrieve Quotation</a></li>
</ul>
</div>

	<img id="top" src="top.png" alt="">
	
	<div id="form_container">
	
		<h1><a>Quote</a></h1>
		
		<p>Retrieved quote premium is <?php echo "$quote"; ?>&pound;</p >
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
