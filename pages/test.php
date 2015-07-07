<?php
/**
 * Created by PhpStorm.
 * User: pradip
 * Date: 14-04-2015
 * Time: 18:31
 */

$servername = "50.62.209.46";
$username = "pradip";
$password = "*pradip#";
$dbname="loot";
/*
$servername = "localhost";
$username = "root";
$password = "lock1";
$dbname="loot";
*/
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

//$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "SELECT shop_id, shop_name, tagline, address, sale, shop_image, shop_rating FROM shop";

$result = $conn->query($sql);

$rows = $result->num_rows;   //here is the total number of rows to display.

$page_rows = 10;



$last = ceil($rows/$page_rows);

// This makes sure $last cannot be less than 1
if($last < 1){
    $last = 1;
}

// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}

// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}

// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;


// This is your query again, it is for grabbing just one page worth of rows by applying $limit
$sql = "SELECT shop_id, shop_name, tagline, address, sale, shop_image, shop_rating FROM shop ORDER BY shop_id DESC $limit";

$query = $conn->query($sql);

// This shows the user what page they are on, and the total number of pages
$textline1 = "Testimonials (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';

// If there is more than 1 page worth of results
if($last != 1){
    /* First we check if we are on page one. If we are then we don't need a link to
       the previous page or the first page so we do nothing. If we aren't then we
       generate links to the first page, and to the previous page. */
    if ($pagenum > 1) {
        $previous = $pagenum - 1;
        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
        // Render clickable number links that should appear on the left of the target page number
        for($i = $pagenum-4; $i < $pagenum; $i++){
            if($i > 0){
                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
            }
        }
    }
    // Render the target page number, but without it being a link
    $paginationCtrls .= ''.$pagenum.' &nbsp; ';
    // Render clickable number links that should appear on the right of the target page number
    for($i = $pagenum+1; $i <= $last; $i++){
        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
        if($i >= $pagenum+4){
            break;
        }
    }
    // This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}
$list = '';
while($row = $query->fetch_assoc()){

    echo '<div class="outer" style="float: left">';
    echo'<div class="topout">';
    echo'<a>';
    echo'<!-- <div class="left-top">#1</div> -->';
    echo'<div class="left-bottom">';
    echo'<span class="topouts1">'.$row["shop_name"].'</span> <br>';
    echo'<span class="topouts2">'.$row["tagline"].'</span>';
    echo'</div>';
    echo'<div class="right-top">';
    echo'<span></span>';
    echo'</div>';
    echo'<!-- <div class="right-bottom"></div> -->';
    echo'<img src="img/'.$row["shop_image"].'" alt="yellow"/>';
    echo'<div class="down">';
    echo'<span id="down1">'.$row["address"].'</span><br>';
    echo'<span id="down2">'.$row["sale"].' Sale..!<button type="button" name="click" value="1">Quote</button></span>';
    echo'<span id="down3">Rating:<img src="img/'.$row["shop_rating"].'-Star.png" style="width:auto;margin-bottom: 3px"></span>';
    echo'</div>';
    echo'</a>';
    echo'</div>';
    echo'</div>';





    /*

        $id = $row["shop_id"];
        $firstname = $row["shop_name"];
        $lastname = $row["tagline"];
        $datemade = $row["address"];
        $datemade = strftime("%b %d, %Y", strtotime($datemade));
        $list .= '<p><a href="http://localhost:51338/paging/paging.php'.$id.'">'.$firstname.' '.$lastname.' Testimonial</a> - Click the link to view this testimonial<br>Written '.$datemade.'</p>';
    */}
//echo '<div class="paging">'.$paginationCtrls.'</div>' ;
close();

?>


