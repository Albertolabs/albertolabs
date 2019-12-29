<?php

require '../../vendor/autoload.php';

$ret = array('STATUS' => 'ERROR', 'MSSG' => 'INIT');

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
        $telegram = new Telegram('YOUR TELEGRAM TOKEN HERE');
        $chat_id = $telegram->ChatID();

        $mssg = str_replace("<p>", "\n", $message);
        $mssg = strip_tags($mssg);

        $content = array(
            'chat_id' => $chat_id,
            'text' => $mssg
        );

        $telegram->sendMessage($content);

        $ret['STATUS'] = "OK";
    }
    catch(Exception $e)
    {
        $ret = array('STATUS' => 'ERROR', 'ERROR' => $e->getMessage());
    }
}

echo json_encode($ret);