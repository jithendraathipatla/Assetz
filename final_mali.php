<?php
    $username="Jithendra";

	
	$password="Jithendra@18";
	

	$message1="Property_Name :".$subject."\n"."Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
	
	
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
							
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			//Enter your login username 

		}
		
	}

?>


