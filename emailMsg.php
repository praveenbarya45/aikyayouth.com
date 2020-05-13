<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$sub=$_POST['subject'];
		$msg=$_POST['msg'];

		$to='aakash.ratha2000@gmail.com'; // Receiver Email ID
		$subject="Subject: ".$sub;
		$message="Name :".$name." Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>