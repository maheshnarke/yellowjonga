<?php
//include_once ('../db.php');

//$query ="SELECT city_id, city_name FROM cities ORDER BY city_name";
////WHERE city_name LIKE '%".$text."%'
//$result = $conn->query($query);
//$html = "<ul class='dropul' id='dropul'>
//        <li class='liCity ' id='0' value='0' text='--Select City--'>--Select City--</li> ";
//while ($row = $result->fetch_assoc())
//{
//    $html.= "<li class='liCity' id='".$row['city_id']."' value='".$row['city_id']."' text='".$row['city_name']."'>".$row['city_name']."</li>";
//}
//$html .= "</ul>";
//echo $html;
//die;


$html = "<ul class='dropul' id='dropul'>
         <li class='liCity ' aria-selected='true' id='0' value='0' text='Pune'>Pune</li> ";

$html.= "<li class='liCity' id='1' value='1' text='Mumbai'>Mumbai</li>";
$html.= "<li class='liCity' id='2' value='2' text='Aurangabad'>Aurangabad</li>";
$html.= "<li class='liCity' id='3' value='3' text='Nagpur'>Nagpur</li>";
$html.= "<li class='liCity' id='4' value='4' text='Nashik'>Nashik</li>";
$html .= "</ul>";

echo $html;
die;


?>