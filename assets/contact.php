<?php

// Email address verification
function isEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if($_POST) {

    // Enter the email where you want to receive the message
    $emailTo = 'atendimento@carchange.com';

    $name = addslashes(trim($_POST['name']));
    $clientEmail = addslashes(trim($_POST['email']));
    $subject = addslashes(trim($_POST['subject']));
    $message = addslashes(trim($_POST['message']));

    $array = array('nameMessage' => '', 'emailMessage' => '', 'subjectMessage' => '', 'messageMessage' => '');

    if($name == '') {
    	$array['nameMessage'] = 'O nome está em branco!';
    }
    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Email inválido!';
    }
    if($subject == '') {
        $array['subjectMessage'] = 'O assunto está em branco!';
    }
    if($message == '') {
        $array['messageMessage'] = 'A mensagem está em branco!';
    }
    if($name != '' && isEmail($clientEmail) && $subject != '' && $message != '') {		
		// Send email
		$message = "Message from: " . $name . "\r\n" . $message;
		$headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
		mail($emailTo, $subject . " (contact form template)", $message, $headers);
    }

    echo json_encode($array);

}

?>