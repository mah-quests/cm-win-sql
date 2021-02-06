<?php

	ini_set('display_errirs', 1 );
	error_reporting ( E_ALL );

	$from = "notification@app.sanaccsf.org.za";
	$to = $agent_email;

	$subject = "Welcome to Communities Matter Web Application";
	$email_message="Dear ".$agent_name;
	$email_message .="

Thank you for registering as a Communities Matter mobiliser.

> South African National Aids Council - Civil Society Forum - Our Actions Count!


If you encounter any technical difficulties or technical support related issues, log a call by clicking on this link:
https://support.sanaccsf.org.za/app/index.php?a=add


For training on how to fill in a survey, click on this link:
https://drive.google.com/file/d/1hcUCBcYU7gV65y8yqvnWWMY97cNbc9DA/view?usp=sharing


Kind Regards,
Communities Matter Support Team
support@app.sanaccsf.org.za
";
	$headers = "From: " . $from;

	mail ($to, $subject, $email_message, $headers);


?>


