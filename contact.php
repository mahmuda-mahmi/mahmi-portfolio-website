<?php
$field_fname = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'mahmudapakter@gmail.com';
$subject = 'Message from a Mahmi Site and its from: '.$field_fname;

$body_message = 'From: '.$field_fname."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to mahmudapakter@gmail.com');
		window.location = 'contact.html';
	</script>
<?php
}
?>