<?php
    if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$phone=$_POST['mobile'];
	    $to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Assetz';
		$message="ProjectName :"."Assertz Marq 2.0"."\n"."Email :".$email."\n"."Phone :".$phone."\n";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
		$apiKey = urlencode("PC56D9fMjaQ-3gw9h0qV4d5KkwYZMpo5xr1McpRBYv");
		// Message details
		$numbers = array(918050933931);
		$sender = urlencode("TXTLCL");
		$message = rawurlencode("$message");

		$numbers = implode(",", $numbers);

		// Prepare data for POST request
		$data = array("apikey" => $apiKey, "numbers" => $numbers, "sender" => $sender, "message" => $message);
		// Send the POST request with cURL
		$ch = curl_init("https://api.textlocal.in/send/");
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		echo "<h1 style=\"text-align:center\">Sent Successfully! Thank you, We will contact you shortly!</h1>";
		echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1-q78u4kZ20jzAK0xLiOsORgOs3-coaiy">Click here to download Brochure</a><h3>';
		echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1GwUm4pSQygJcefm9JXOcTv46UM6fbkNt">Click here to download Cost Sheet</a><h3>';
		}
	}
	
?>


