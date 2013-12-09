<!-- This is a home page for the web site, contains form which neds to be fille din by the user  -->
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
	
		<h1><a>Vehicle Insurance</a></h1>
		<form id="form_751279" action="getquote.php" class="appnitro"  method="post" >
					<div class="form_description">
			<h2>Vehicle Insurance</h2>
			<p>Please enter details to get quotation.</p>
		</div>						
			<ul >
			
					<li class="section_break">
			<h3>About You</h3>
			<p></p>
		</li>		<li id="li_17" >
		<label class="description" for="element_17">Title </label>
		<div>
		<select class="element select medium" id="title" name="title"> 
			<option value="" selected="selected"></option>
<option value="Mr" >Mr</option>
<option value="Ms" >Ms</option>
<option value="Miss" >Miss</option>
<option value="Mrs" >Mrs</option>

		</select>
		</div> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Name/Surname </label>
		<span>
			<input id="name" name= "name" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="surname" name= "surname" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Email </label>
		<div>
			<input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Date of birth </label>
		<span>
			<input id="element_3_1" name="DOBm" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_1">MM</label>
		</span>
		<span>
			<input id="element_3_2" name="DOBd" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_2">DD</label>
		</span>
		<span>
	 		<input id="element_3_3" name="DOBy" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_3_3">YYYY</label>
		</span>
	
		<span id="calendar_3">
			<img id="cal_img_3" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_3_3",
			baseField    : "element_3",
			displayArea  : "calendar_3",
			button		 : "cal_img_3",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Telephone Number  </label>
		<div>
			<input id="element_4" name="telephoneNumber" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Address </label>
		
		<div>
			<input id="element_5_1" name="streetAddress" class="element text large" value="" type="text">
			<label for="element_5_1">Street Address</label>
		</div>
	
		<div>
			<input id="element_5_2" name="addressLine2" class="element text large" value="" type="text">
			<label for="element_5_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="element_5_3" name="city" class="element text medium" value="" type="text">
			<label for="element_5_3">City</label>
		</div>
	
		<div class="right">
			<input id="element_5_4" name="stateProvinceRegion" class="element text medium" value="" type="text">
			<label for="element_5_4">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="element_5_5" name="postal" class="element text medium" maxlength="15" value="" type="text">
			<label for="element_5_5">Postal / Zip Code</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="element_5_6" name="country"> 
			<option value="" selected="selected"></option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
	
			</select>
		<label for="element_5_6">Country</label>
	</div> 
		</li>		<li id="li_18" >
		<label class="description" for="element_18">Current License Type </label>
		<div>
		<select class="element select medium" id="element_18" name="currentLicenseType"> 
			<option value="" selected="selected"></option>
<option value="Full" >Full</option>
<option value="Provisional" >Provisional</option>

		</select>
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">License Period </label>
		<div>
			<input id="element_6" name="licensePeriod" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_19" >
		<label class="description" for="element_19">Occupation </label>
		<div>
		<select class="element select medium" id="element_19" name="occupation"> 
			<option value="" selected="selected"></option>
<option value="Occupation 1" >Occupation 1</option>
<option value="Occupation 2" >Occupation 2</option>
<option value="Occupation 3" >Occupation 3</option>

		</select>
		</div> 
		</li>		<li class="section_break">
			<h3>Vehicle</h3>
			<p></p>
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Vehicle Registration </label>
		<div>
			<input id="element_9" name="vehicleRegistration" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="element_10">Estimated Annual Mileage </label>
		<div>
			<input id="element_10" name="estimatedAnnualMileage" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Estimated Vehicle Value </label>
		<div>
			<input id="element_11" name="estimatedVehicleValue" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_20" >
		<label class="description" for="element_20">Typical Parking Location </label>
		<div>
		<select class="element select medium" id="element_20" name="typicalParkingLocation"> 
			<option value="" selected="selected"></option>
<option value="In a Garage" >In a Garage</option>
<option value="On Driveway" >On Driveway</option>
<option value="On Street" >On Street</option>

		</select>
		</div> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">Policy Start Date </label>
		<span>
			<input id="element_12_1" name="policyStartDateM" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_12_1">MM</label>
		</span>
		<span>
			<input id="element_12_2" name="policyStartDateD" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_12_2">DD</label>
		</span>
		<span>
	 		<input id="element_12_3" name="policyStartDateY" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_12_3">YYYY</label>
		</span>
	
		<span id="calendar_12">
			<img id="cal_img_12" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_12_3",
			baseField    : "element_12",
			displayArea  : "calendar_12",
			button		 : "cal_img_12",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li class="section_break">
			<h3>Driver History</h3>
			<p></p>
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Number of incidents that have resulted in claim in the last three years </label>
		<div>
			<input id="element_14" name="numberOfIncidents" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Desired Policy Features</h3>
			<p></p>
		</li>		<li id="li_16" >
		<label class="description" for="element_16">Policy Excess </label>
		<div>
			<input id="element_16" name="policyExcess" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_21" >
		<label class="description" for="element_21">Breakdown Cover </label>
		<div>
		<select class="element select medium" id="element_21" name="breakdownCover"> 
			<option value="" selected="selected"></option>
<option value="At Home" >At Home</option>
<option value="Roadside" >Roadside</option>
<option value="European" >European</option>

		</select>
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="751279" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Request quote premium" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>