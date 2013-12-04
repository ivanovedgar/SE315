<?php
$userDataFromForm = det_data_and_form_array();
$data_json = json_encode($userDataFromForm); //encodes array as a json.
#echo "Formed jason is: $data_string <br>\r\n" ;

$createUserURL = "http://192.168.1.2:3000/users.json";
$userID = curl_post($createUserURL, $data_json); //used as unique ID to retrive quotation at a later time.
//echo "User ID is: $userID";

$getQuoteURL = "http://192.168.1.2:3000/users/$userID/getquote.json";
$quote = curl_get($getQuoteURL);
//echo "Quote is: $quote";

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

function curl_post($url,  $postdata = false) //single custom cURL request.
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HEADER, FALSE); 
	curl_setopt($ch, CURLINFO_HEADER_OUT, true);
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		
	if ($postdata)
	{
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);  
	}
	
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}

function det_data_and_form_array() //gets, forms and returns array with the data from the form.
{
	$title = $_POST[title];
	$name = $_POST[name];
	$surname = $_POST[surname];
	$email = $_POST[email];
	$DOBm = $_POST[DOBm]; //Date of birth, retrieved as three separate values for year, month and day.
	$DOBd = $_POST[DOBd];
	$DOBy = $_POST[DOBy];
	$telephoneNumber = $_POST[telephoneNumber];
	
	$streetAddress = $_POST[streetAddress];
	$addressLine2 = $_POST[addressLine2];
	$city = $_POST[city];
	$stateProvinceRegion = $_POST[stateProvinceRegion];
	$postal = $_POST[postal];
	$country = $_POST[country];
	
	$address = "$streetAddress, $addressLine2, $city, $stateProvinceRegion, $postal, $country"; 
	
	$currentLicenseType = $_POST[currentLicenseType];
	$licensePeriod = $_POST[licensePeriod];
	$occupation = $_POST[occupation];
	
	$vehicleRegistration = $_POST[vehicleRegistration];
	$estimatedAnnualMileage = $_POST[estimatedAnnualMileage];
	$estimatedVehicleValue = $_POST[estimatedVehicleValue];
	$typicalParkingLocation = $_POST[typicalParkingLocation];
	
	$policyStartDateM = $_POST[policyStartDateM]; #Policy start date, retrieved as three separate values for year, month and day.
	$policyStartDateD = $_POST[policyStartDateD];
	$policyStartDateY = $_POST[policyStartDateY];
	
	$numberOfIncidents = $_POST[numberOfIncidents];
	$policyExcess = $_POST[policyExcess];
	$breakdownCover = $_POST[breakdownCover];
	
	#puts all data gathered from the form in to the array.	
	$formData = array("title" => "$title","name" => "$name","surname" => "$surname", "email" => "$email", "DOB" => "$DOBy-$DOBm-$DOBd", 
	"telephoneNumber" => "$telephoneNumber","address" => "$address","currentLicenseType" => "$currentLicenseType","licensePeriod" => "$licensePeriod",
	"occupation" => "$occupation", "vehicleRegistration" => "$vehicleRegistration","estimatedAnnualMileage" => "$estimatedAnnualMileage",
	"estimatedVehicleValue" => "$estimatedVehicleValue","typicalParkingLocation" => "$typicalParkingLocation",
	"policyStartDate" => "$policyStartDateY-$policyStartDateM-$policyStartDateD","numberOfIncidents" => "$numberOfIncidents","policyExcess" => "$policyExcess",
	"breakdownCover" => "$breakdownCover");
return $formData;
}
	
     #debugging
	/*echo "Titile: $title Name: $name Surname: $surname Email: $email <br>";
	echo "DOB month, day, year is: $DOBm $DOBd $DOBy <br>";
	echo "Telephone number is $telephoneNumber <br>";
	echo "Street address: $streetAddress address Line2: $addressLine2 City: $city Stat: $stateProvinceRegion Postal: $postal Country: $country <br>";
	echo "Current License Type: $currentLicenseType License Period: $licensePeriod Occupation: $occupation <br>";
	echo "Vehicle Registration: $vehicleRegistration Estimated Annual Milage: $estimatedAnnualMileage Estimated Vehicle Value: $estimatedVehicleValue Typical parking location: $typicalParkingLocation <br>";
	echo "Policy  start month, day, year is: $policyStartDateM $policyStartDateD $policyStartDateY <br>";
	echo " Number of incindents: $numberOfIncidents Policy Excess: $policyExcess Breakdown Cover: $breakdownCover";*/
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
	<li><a href="index.html" title="Will open home page">Home</a></li>
	<li><a href="retrivequote.html" title="Will open page to retrive quotation">Retrieve Quotation</a></li>
</ul>
</div>

	<img id="top" src="top.png" alt="">
	
	<div id="form_container">
	
		<h1><a>Quote</a></h1>
		
		<p>Quote premium is <?php echo "$quote"; ?></p >
		
		<form method="post" action="identifier.php">
		  
		   <?php
                    echo '<input type="hidden" name="identifier" value="' . htmlspecialchars($userID) . '" />'."\n";
?>
		   <input type="submit" value="Get quotation identifier" />
		</form>
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>