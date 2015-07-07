<?php
set_time_limit(0);
if (!isset($_SESSION))
{
    session_start();
    $_SESSION["search_shop"];
}
include_once ('../db.php');
$html = "";
$txtshop   = $_POST['txtshop'];
$_SESSION["search_shop"]= $txtshop;
if($txtshop!=""){
    $query1 ="SELECT DISTINCT Shop_id, shop_name FROM shop WHERE shop_name LIKE '".$txtshop."%%' OR shop_name LIKE '%".$txtshop."%' OR shop_name LIKE '%%".$txtshop."' order by shop_name";
    $result1 = $conn->query($query1);
    $num_rows = $result1->num_rows;
    if($num_rows!=0){
    while ($row = $result1->fetch_assoc())
    {
        $html .= '

        <div class= "shop_list" id="'.$row["Shop_id"].'">'.$row["shop_name"].'</div>

        ';

    }
    }
    else{
        $html .= '';
    }




}

echo $html;
//echo $txtshop;
die;


?>