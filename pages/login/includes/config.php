<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials

define('DBHOST','50.62.209.46:3306');
define('DBUSER','pradip');
define('DBPASS','*pradip#');
define('DBNAME','loot');
/*
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','lock1');
define('DBNAME','login');
*/
//application address
define('DIR','http://nikhil.ultimategroups.com/login/');
define('SITEEMAIL','support@ultimategroups.com');

try {

	//create PDO connection 
	$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
$user = new User($db); 
?>
