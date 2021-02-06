<?php

	ini_set('display_errirs', 1 );
	error_reporting ( E_ALL );

	$from = "notification@app.sanaccsf.org.za";
	$to = $system_email;

	$subject = "Communities Matter Survey Completed Successfully";
	$email_message="Dear ".$participants_name;
	$email_message .="

Thank you for participating on our Communities Matter Survey .

> South African National Aids Council - Civil Society Forum - Our Actions Count!


If you encounter any technical difficulties or technical support related issues, log a call by clicking on this link:
https://support.sanaccsf.org.za/app/index.php?a=add

Kind Regards,
Communities Matter Support Team
support@app.sanaccsf.org.za
";
	$headers = "From: " . $from;

	mail ($to, $subject, $email_message, $headers);


?>


