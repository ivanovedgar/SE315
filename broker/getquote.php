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