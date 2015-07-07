<?php
/**
 * @link: http://www.Awcore.com/dev
 */
 
 //   $db = @mysql_connect('localhost', 'root', 'lock1') or die(mysql_error());
   // @mysql_select_db('loot', $db) or die(mysql_error());



$servername = "50.62.209.46";
$username = "pradip";
$password = "*pradip#";
$dbname="loot";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{

//echo "Connected successfully <br> </br>";

}

function close(){
    global $conn;
    $conn->close();

//    echo'connection closed ';

}



?>
