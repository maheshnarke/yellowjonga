<?php
/**
 * Created by PhpStorm.
 * User: pradip
 * Date: 10-06-2015
 * Time: 13:47
 */
include_once ('db.php');

$query="SELECT * FROM review WHERE user_name = 'pradip' AND shop_id = '23'";

 $result = $conn->query($query);

$num_rows = $result->num_rows;
echo $num_rows;
//while ($row = $result->fetch_assoc()) {
//    echo length($row['review_id']);
//    echo $row['review_id'];
//    echo "<br>";
//
//}


?>