<?php
session_start();
include_once ('../db.php');
include('../password.php'); 
$pass = new Password();


$password   = $_POST['password'];
$email      = $_POST['email'];

$query ="SELECT * FROM members WHERE email='".$email."' OR username='".$email."'";

$result = $conn->query($query);
$dbPassword = "";
$email1 = "";
while ($row = $result->fetch_assoc()) 
{    
    $dbPassword = $row['password'];
    $username   = $row['username'];
    $email1     = $row['email'];
}

if($pass->password_verify($password,$dbPassword) == 1)
{   
    $_SESSION['user']['username']   = $username;
    $_SESSION['user']['email']      = $email1;
    echo 'success|'.$email1.'|'.$username.'|'.$password;
    die;
}
else
{
    echo 'fail';
    die;
}
