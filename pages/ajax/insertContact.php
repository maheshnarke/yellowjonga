<?php
include_once ('../db.php');
define('SITEEMAIL','support@ultimategroups.com');

$name       = $_POST['name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$message    = $_POST['message'];

$query = 'INSERT INTO contact_us (name, email, phone, message) 
             VALUES ("'.$name.'","'.$email.'", "'.$phone.'","'.$message.'")';

$result = $conn->query($query);

$subject = "Contact Me";
$body = "Name";   
$additionalheaders = "From: <".SITEEMAIL.">\r\n";
$additionalheaders .= "Reply-To: ".SITEEMAIL."";
mail("support@ultimategroups.com", $subject, $body, $additionalheaders);   
echo 'success';
die;
