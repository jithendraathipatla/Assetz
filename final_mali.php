<?php
    if(isset($_POST['submit'])){
		$name=$_POST['client_name'];
		$email=$_POST['client_mail_id'];
		$phone=$_POST['client_phone_number'];
		$msg=$_POST['client_message'];

		$to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Assetz';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;


		if(mail($to, $subject, $message, $headers)){
			
		$username="Jithendra";

		//Enter your login password 
		$password="Jithendra@18";
		
		//Enter your text message 
		$message="Property_Name :".$subject."\n"."Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		
		//Enter your Sender ID
		$sender="TestID";
		
		//Enter your receiver mobile number
		$mobile_number="+919071352854";
		
		//Don't change below code use as it is
		$url="https://www.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&
		mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');
		
		$ch = curl_init($url);
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$curl_scraped_page = curl_exec($ch);
		
		curl_close($ch);
				
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			//Enter your login username 

		}
		else{
			echo "Something went wrong!";
		}
		 


	}
	
?>


