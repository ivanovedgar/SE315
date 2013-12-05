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
	
		<h1><a>Retrieve quote</a></h1>
		<form id="form_755123" class="appnitro"  method="post" action="showquote.php">
					<div class="form_description">
			<h2>Retrieve quote</h2>
			<p>On this page you can retrieve quote premium that was calculated before.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Quotation number </label>
		<div>
			<input id="element_1" name="quotationNumber" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Please enter your unique quotation number.</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Email </label>
		<div>
			<input id="element_2" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="755123" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Retrieve quote premium" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>