<?php

 //initiate / open session

include_once("page2.php");

$xyz = pradip();

// Make the script run only if there is a page number posted to this script
if(isset($_POST['pn'])){

    $rpp = preg_replace('#[^0-9]#', '', $_POST['rpp']);
    $last = preg_replace('#[^0-9]#', '', $_POST['last']);
    $pn = preg_replace('#[^0-9]#', '', $_POST['pn']);
    // This makes sure the page number isn't below 1, or more than our $last page
    if ($pn < 1) {
        $pn = 1;
    } else if ($pn > $last) {
        $pn = $last;
    }
    // Connect to our database here
    include_once("mysqli_connection.php");
    // This sets the range of rows to query for the chosen $pn
    $limit = 'LIMIT ' .($pn - 1) * $rpp .',' .$rpp;
    // This is your query again, it is for grabbing just one page worth of rows by applying $limit
   $sql = "SELECT shop_name, tagline, address, sale, shop_image, shop_rating FROM shop $xyz ORDER BY shop_id DESC $limit";
    $query = mysqli_query($db_conx, $sql);
    $dataString = '';
    while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        $shop_name = $row["shop_name"];
        $tagline = $row["tagline"];
        $address = $row["address"];
        $sale = $row["sale"];
        $shop_image = $row["shop_image"];
        $shop_rating = $row["shop_rating"];

        $dataString .= $shop_name.'|'.$tagline.'|'.$address.'|'.$sale.'|'.$shop_image.'|'.$shop_rating.'||';
    }
    // Close your database connection
    mysqli_close($db_conx);
    // Echo the results back to Ajax
    echo $dataString;
    exit();
}
?>