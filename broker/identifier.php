<!-- This page just displays unique quote identifier  -->
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
		<p>Below is your unique quotation number, please take a not of it if you wold like to retrieve your quote premium in the future.</p>
		<p>Your unique quotation number is: <?php echo $_POST[identifier]; ?></p >
		

		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
