<?php

if($_REQUEST['name'] == '' || $_REQUEST['email'] == '' || $_REQUEST['message'] == ''):
  return "error";
endif;

if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)):

 $to = 'coderpen@gmail.com';

      // prepare header
$header = 'From: '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
$header .= 'Reply-To:  '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";

$header .= 'X-Mailer: PHP/' . phpversion();

      // Contact subject
$subject = "Email Form Website Contact";

      // Contact Message
$message .= 'Name: ' . $_REQUEST['name'] . "\n";
$message .= 'Email: ' . $_REQUEST['email'] . "\n";
$message .= 'Message: '. $_REQUEST['message'];

      // Send contact information
$mail = mail( $to, $url , $message, $header );
echo $mail ? "success" : "error";
else:
  echo "error";

endif;
?>