<?php
    if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['mobile'];
		

		$to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Assetz';
		$message="Name :".$name."\n"."Phone :".$phone."\n";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
		
		
	}
	$basic  = new \Nexmo\Client\Credentials\Basic('4311bb5f', 'lDPkc7FqO79Lrk2g');
     $client = new \Nexmo\Client($basic);

     $message = $client->message()->send([
    'to' => '919071354854',
    'from' => 'Assetz',
    'text' => "Name :".$name."\n"."Phone :".$phone."\n"."Email :".$email."\n";
?>


