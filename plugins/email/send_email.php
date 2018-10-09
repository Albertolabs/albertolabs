<?php 

	require '../../vendor/autoload.php';

	$ret = array('STATUS' => 'ERROR');

	if( ! empty($_POST))
	{
		$field['name'] 		= filter_var($_POST['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$field['email']		= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_LOW);
		$field['phone']		= filter_var($_POST['phone'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$field['subject']	= filter_var($_POST['subject'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$field['message'] 	= filter_var($_POST['message'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

		$email_subject = "New message from Albertolabs contact form";
		$message = "<h2>" . $email_subject . ":</h2>";

		foreach($field as $field_name => $field_value)
		{
			$message .= "<p>" . $field_name . ": " . $field_value . "</p>";
		}

		date_default_timezone_set ("Europe/Madrid");
		$message .= "<p>Date: " . date("d/m/Y H:i:s") . "</p>";

		// send message to slack
		try
		{
			$slackMssg = str_replace("<p>", "\n", $message);
			$slackMssg = strip_tags($slackMssg);

			$client = new Maknz\Slack\Client("https://hooks.slack.com/...");
			$client->send($slackMssg);
		}
		catch(Exception $e)
		{

		}

		// sends email
		$para = 'viher_3@hotmail.com';
		$remitente = "contact@albertolabs.com";
		 
		//Cabecera de la funcion mail()
		$headers = "From: ".$remitente." \r\n";
		$headers .= "Reply-To: ".$remitente."\r\n"; //La dirección por defecto si se responde el email enviado.
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n"; //La codificación del email.
		 
		//Mandamos el email.
		$email_result = mail($para, $email_subject, $message, $headers);

		if($email_result)
		{
			$ret['STATUS'] = "OK";
		}
	}

	echo json_encode($ret);