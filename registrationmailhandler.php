<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		
		$weight=$_POST['weight'];
		$contactno=$_POST['contactno'];
		
        $adress=$_POST['address'];
        $from = 'aditiw226@gmail.com';
        
		$to=$email; 
		$subject='registration';
		$message="Name :".$name."\n"."you are been registered";
		 $headers = "From:" . $from ;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>registration done Successfully and confirmation mail is been send to your mailid  Thank you</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>

