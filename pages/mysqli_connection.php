<?php
/**
 * Created by PhpStorm.
 * User: pradip
 * Date: 17-04-2015
 * Time: 03:24
 */







$servername = "50.62.209.46:3306";
$username = "pradip";
$password = "*pradip#";
$dbname="loot";
// Create connection
$db_conx = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$db_conx) {
    die("Connection failed: " . mysqli_connect_error());
}



?>