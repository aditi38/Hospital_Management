<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contactno=$_POST['contactno'];
		$appointmentdate=$_POST['date'];
        $Disease=$_POST['Disease'];
        $from = 'aditiw226@gmail.com';
        
		$to=$email; 
		$subject='Appointment booked';
		$message="Name :".$name."\n"."contact no. :".$contactno."\n"."Appointment date  :"."\n\n".$appointmentdate;
		 $headers = "From:" . $from ;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Appointment booked Successfully and confirmation mail is been send to your mailid  Thank you</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>

