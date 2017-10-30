<?php	
	if(empty($_POST['patient_name']) && strlen($_POST['patient_name']) == 0 || empty($_POST['patient_phone']) && strlen($_POST['patient_phone']) == 0 || empty($_POST['patient_email']) && strlen($_POST['patient_email']) == 0)
	{
		return false;
	}
	
	$patient_name = $_POST['patient_name'];
	$patient_phone = $_POST['patient_phone'];
	$patient_email = $_POST['patient_email'];
	
	$to = 'info@oncsolved.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from OncSolved";
	$email_body = "You have received a new message. \n\n".
				  "Patient_Name: $patient_name \nPatient_Phone: $patient_phone \nPatient_Email: $patient_email \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: info@oncsolved.com\n";
	$headers .= "Reply-To: $patient_email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>