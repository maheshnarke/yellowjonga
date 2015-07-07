<?php
$city_id = $_POST['city_id'];
session_start();
$_SESSION['city_id'] = $city_id;
echo $_SESSION['city_id'];
die;
?>