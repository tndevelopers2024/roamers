<?php
session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/security.php';
if (!empty($_POST)) { $_POST = clean_input($_POST); }
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/*Email Template Render*/
function render_email($email, $data)
{
	ob_start();
	include "contact-us-mail.phtml";
	return ob_get_contents();
}

if ($_POST) {
	$data['aug4'] = isset($_POST['aug4']) ? 'yes' : 'no';
	$data['aug18'] = isset($_POST['aug18']) ? 'yes' : 'no';
	$data['sep8'] = isset($_POST['sep8']) ? 'yes' : 'no';
	$data['sep22'] = isset($_POST['sep22']) ? 'yes' : 'no';
	$data['numberInput'] = isset($_POST['numberInput']) ? $_POST['numberInput'] : '';
	$data['numberInput1'] = isset($_POST['numberInput1']) ? $_POST['numberInput1'] : '';
	$data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
	$data['contact'] = isset($_POST['contact']) ? $_POST['contact'] : '';
	$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
	$data['message'] = isset($_POST['message']) ? $_POST['message'] : '';
	$body = render_email('email', $data);

	$subject = "You have a message from your client from contact us";

	// $to = "webdeveloper.precise3dm@gmail.com";
	$to = "info@roamers.in";
	//$to = "prasannakanthan@gmail.com";
	$from = "arunkumarddd12@gmail.com";

	//PHPMailer Object
	$mail = new PHPMailer\PHPMailer\PHPMailer(); //Argument true in constructor enables exceptions

	// $mail->SMTPDebug = 3;  
	$mail->SMTPDebug = false;
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();
	//Set SMTP host name                          
	$mail->Host = $smtp_configs['default']['host'];
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;
	//Provide username and password     
	$mail->Username = $smtp_configs['default']['user'];
	$mail->Password = $smtp_configs['default']['pass'];
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = $smtp_configs['default']['secure'];
	//Set TCP port to connect to
	$mail->Port = $smtp_configs['default']['port'];

	//From email address and name
	$mail->From = $from;
	$mail->FromName = "contact us details";

	//To address and name
	//$mail->addAddress("limtion.digital@gmail.com", "Limtion Site");
	$mail->addAddress($to); //Recipient name is optional

	//Address to which recipient will reply
	// $mail->addReplyTo("aaranrims@yourdomain.com", "Reply");

	//CC and BCC
	//$mail->addCC("aaranrims@gmail.com");
	//$mail->addBCC("bcc@example.com");

	//Send HTML or Plain Text email
	$mail->isHTML(true);

	$mail->Subject = $subject;
	$mail->Body = $body;


	try {
		$mail->send();
		echo "sent";
		$_SESSION['status'] = "success";
	} catch (Exception $e) {
		print_r(error_get_last());
		echo "Error: Message not accepted";
		$_SESSION['status'] = "failure";
	}

}
header("Location: index.php");
//header("Location: ". $_SERVER['HTTP_REFERER']);
exit;
?>