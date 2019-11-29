<?php
    if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$phone=$_POST['mobile'];
	    $to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Assetz';
		$message="ProjectName :"."Assertz Marq 2.0"."\n"."Email :".$email."\n"."Phone :".$phone."\n";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you, We will contact you shortly!</h1>";
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1-q78u4kZ20jzAK0xLiOsORgOs3-coaiy">Click here to download Brochure</a><h3>';
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1GwUm4pSQygJcefm9JXOcTv46UM6fbkNt">Click here to download Cost Sheet</a><h3>';
		}
		else{
			echo "Something went wrong!";
		}
	
	}
	
?>


