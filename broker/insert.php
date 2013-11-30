<?php
	$title = $_POST[title];
	$name = $_POST[name];
	$surname = $_POST[surname];
	$email = $_POST[email];
	$DOBm = $_POST[DOBm];
	$DOBd = $_POST[DOBd];
	$DOBy = $_POST[DOBy];
	$telephoneNumber = $_POST[telephoneNumber];
	
	$streetAddress = $_POST[streetAddress];
	$addressLine2 = $_POST[addressLine2];
	$city = $_POST[city];
	$stateProvinceRegion = $_POST[stateProvinceRegion];
	$postal = $_POST[postal];
	$country = $_POST[country];
	
	$currentLicenseType = $_POST[currentLicenseType];
	$licensePeriod = $_POST[licensePeriod];
	$occupation = $_POST[occupation];
	
	$vehicleRegistration = $_POST[vehicleRegistration];
	$estimatedAnnualMileage = $_POST[estimatedAnnualMileage];
	$estimatedVehicleValue = $_POST[estimatedVehicleValue];
	$typicalParkingLocation = $_POST[typicalParkingLocation];
	
	$policyStartDateM = $_POST[policyStartDateM];
	$policyStartDateD = $_POST[policyStartDateD];
	$policyStartDateY = $_POST[policyStartDateY];
	
	$numberOfIncidents = $_POST[numberOfIncidents];
	$policyExcess = $_POST[policyExcess];
	$breakdownCover = $_POST[breakdownCover];
	
	
	echo "Titile: $title Name: $name Surname: $surname Email: $email <br>";
	echo "DOB month, day, year is: $DOBm $DOBd $DOBy <br>";
	echo "Telephone number is $telephoneNumber <br>";
	echo "Street address: $streetAddress address Line2: $addressLine2 City: $city Stat: $stateProvinceRegion Postal: $postal Country: $country <br>";
	echo "Current License Type: $currentLicenseType License Period: $licensePeriod Occupation: $occupation <br>";
	echo "Vehicle Registration: $vehicleRegistration Estimated Annual Milage: $estimatedAnnualMileage Estimated Vehicle Value: $estimatedVehicleValue Typical parking location: $typicalParkingLocation <br>";
	echo "Policy  start month, day, year is: $policyStartDateM $policyStartDateD $policyStartDateY <br>";
	echo " Number of incindents: $numberOfIncidents Policy Excess: $policyExcess Breakdown Cover: $breakdownCover";
	

$data = array("title" => "$title","name" => "$name","surname" => "$surname", "email" => "$email", "DOB" => "$DOBy-$DOBm-$DOBd", 
"telephoneNumber" => "$telephoneNumber","address" => "$streetAddress","currentLicenseType" => "$currentLicenseType","licensePeriod" => "$licensePeriod",
"occupation" => "$occupation", "vehicleRegistration" => "$vehicleRegistration","estimatedAnnualMileage" => "$estimatedAnnualMileage",
"estimatedVehicleValue" => "$estimatedVehicleValue","typicalParkingLocation" => "$typicalParkingLocation",
"policyStartDate" => "$policyStartDateY-$policyStartDateM-$policyStartDateD","numberOfIncidents" => "$numberOfIncidents","policyExcess" => "$policyExcess",
"breakdownCover" => "$breakdownCover");


$data_string = json_encode($data); 
echo "Formed jason is: $data_string <br>\r\n" ;

$URL = "http://192.168.1.2:3000/users.json";

#echo 
$response = curl_request($URL, $data_string);
echo "Response is: $response";

function curl_request($url,  $postdata = false) //single custom cURL request.
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HEADER, TRUE); 
	curl_setopt($ch, CURLINFO_HEADER_OUT, true);
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	
	
	if ($postdata)
	{
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);  
		# curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded','Content-Length: '.strlen($bodyStr);
	}
	
	$response = curl_exec($ch);
	
	curl_close($ch);
	
	return $response;
}
?>