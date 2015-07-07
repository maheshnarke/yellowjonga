<?php
session_start();
include_once ('../db.php');
define('SITEEMAIL','support@ultimategroups.com');

if($_POST['email']!='noemail')
    $to = $_POST['email'];
else
    $to = $_SESSION['user']['email'];

$shopId     = $_POST['shopId'];
$subject    = "Offer For You";


$query ="SELECT shop_name FROM shop WHERE shop_id=".$shopId." ";
$result = $conn->query($query);
$shop_name = "";
while ($row = $result->fetch_assoc()) 
{    
    $shop_name = $row['shop_name'];
}

$body = "Your Offer";
$additionalheaders = "From: <".SITEEMAIL.">\r\n";
$additionalheaders .= "Reply-To: ".SITEEMAIL."";
mail($to, $subject, $body, $additionalheaders);

echo 'success';
die;

