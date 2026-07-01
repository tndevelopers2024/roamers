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
	include "ooty-contact.phtml";
	return ob_get_contents();
}

if ($_POST) {
	$data['traval-date'] = isset($_POST['traval-date']) ? $_POST['traval-date'] : '';
	$data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
	$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
	$data['contact'] = isset($_POST['contact']) ? $_POST['contact'] : '';
	$data['date'] = isset($_POST['date']) ? $_POST['date'] : '';
	$data['gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';
	$data['sharing'] = isset($_POST['sharing']) ? $_POST['sharing'] : '';
	$data['pickdrop'] = isset($_POST['pickdrop']) ? $_POST['pickdrop'] : '';
	$data['count'] = isset($_POST['count']) ? $_POST['count'] : '';
	$data['address1'] = isset($_POST['address1']) ? $_POST['address1'] : '';
	$data['address2'] = isset($_POST['address2']) ? $_POST['address2'] : '';
	$data['city'] = isset($_POST['city']) ? $_POST['city'] : '';
	$data['pincode'] = isset($_POST['pincode']) ? $_POST['pincode'] : '';
	$data['upload_link'] = '';

		$uploaded_url = secure_upload_resume($_FILES['Resume']);
	if ($uploaded_url !== false) {
		$data['upload_link'] = $uploaded_url;
	}

	$body = render_email('email', $data);

	$subject = "You have a message from your client from contact us";

	//  $to = "arunduraideveloper@gmail.com";
	$to = "info@roamers.in";
	//$to = "prasannakanthan@gmail.com";
	$from = "info@roamers.in";

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
