<?php

$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];
require_once( $path_to_wp.'/wp-load.php' );

$to = trim(str_replace("§","@",$_POST['sendto']));


//Language Options
$contact_labelmailhead = __('Quick Contact Email', 'averis');
$contact_labelmailsubject = __('Quick Contact Email', 'averis');
$contact_labelname = __('Name', 'averis');
$contact_labelemail = __('Email', 'averis');
$contact_labeladdress = __('Address', 'averis');
$contact_labelmessage = __('Message', 'averis');

$name = trim($_POST['name']);
$email = trim($_POST['email']);
if(isset($_POST['message']))
	$message = str_replace(chr(10), "<br>", $_POST['message']);
else $message="";



$body = "<html><head><title>$contact_labelmailhead</title></head><body><br>";
$body .= "$contact_labelname <b>" . $name . "</b><br>";
$body .= "$contact_labelemail <b>" . $email . "</b><br>";
$body .= "$contact_labelmessage<br><hr><br><b>" . $message . "</b><br>";
$body .= "<br></body></html>";
	
$subject = $contact_labelmailsubject.' ' . $name;
$header = "From: $to\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=utf-8\n";

mail($to, $subject, $body, $header);

?>