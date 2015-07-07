<?php
$html="";
if(!isset($_SESSION))
{
    session_start();
}

if(isset($_POST['pradip']))
{
    $test = $_POST['pradip'];
    session_unset();
//    $_SESSION["search_shop"]= $test;
}

else{
if(isset($_POST['txtSearch'])){
$val = $_POST['txtSearch'];

$_SESSION["search_shop"]= $val;
    $html = $_SESSION["search_shop"];

    }
}
echo $html;
die;
?>