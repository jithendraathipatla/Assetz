<?php
    if(isset($_POST['submit'])){
		$name=$_POST['client_name'];
		$email=$_POST['client_mail_id'];
		$phone=$_POST['client_phone_number'];
		$msg=$_POST['client_message'];

		$to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Assetz Marq 2.0';
		$message="Project_Name:"."Assetz Marq 2.0"."\n"."Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers)){
							
			echo "<h1  style=\"text-align:center\">Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";

			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1-q78u4kZ20jzAK0xLiOsORgOs3-coaiy">Click here to download Brochure</a><h3>';
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1GwUm4pSQygJcefm9JXOcTv46UM6fbkNt">Click here to download Cost Sheet</a><h3>';
			//Enter your login username 
			$username="Jithendra";

	
	        $password="Jithendra@18";
	

	       $message1="Property_Name :".$subject."\n"."Name :".$name."\n"."Phone :".$phone."\n"."Email :".$email."\n"."Wrote the following :"."\n\n".$msg;
	
	
	           $sender="TestID";
	
	
	          $mobile_number=9071352854;

	if($_POST['submitted']=='true')
         { 
		$url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($number)."&sender=".urlencode($sender)."&message=".urlencode($message1)."&type=".urlencode('3'); 
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		echo $curl_scraped_page = curl_exec($ch);
		curl_close($ch); 
}


		}
		
	}

?>


