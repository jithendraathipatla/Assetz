<?php
    if(isset($_POST['submit'])){
		$name=$_POST['client_name'];
		$email=$_POST['client_mail_id'];
		$phone=$_POST['client_phone_number'];
	
		$to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Assetz';
		$message="ProjectName :"."Assertz Marq 2.0"."\n"."Name :".$name."\n"."Phone :".$phone."\n"."Email :".$email."\n";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1 style=\"text-align:center\">Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1-q78u4kZ20jzAK0xLiOsORgOs3-coaiy">Click here to download Brochure</a><h3>';
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1GwUm4pSQygJcefm9JXOcTv46UM6fbkNt">Click here to download Cost Sheet</a><h3>';
		}
		else{
			echo "Something went wrong!";
		}
	}
?>


