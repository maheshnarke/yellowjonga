<?php
/**
 * Created by PhpStorm.
 * User: pradip
 * Date: 12-04-2015
 * Time: 21:29
 */


$servername = "50.62.209.46";
$username = "pradip";
$password = "*pradip#";
$dbname="loot";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
function get_connect(){
    global $conn;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    /*
echo "Connected successfully <br> </br>";
    */
}
}

function close(){
    global $conn;
    $conn->close();
    /*
    echo'connection closed ';
    */
}


function setvalues(){
    global $conn;
    get_connect();

    $sql = "SELECT shop_id, shop_name, tagline, address, sale, shop_image, shop_rating FROM shop";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

       // echo $result->num_rows."<br></br>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
/*
            echo "id: " . $row["shop_id"]. "<br></br> Shop Name: " . $row["shop_name"]. "<br></br>Tagline: " . $row["tagline"]. "<br></br>Address: " . $row["address"]. "<br></br>Sale: " . $row["sale"]."<br></br>";
            $name=$row["shop_name"];
*/

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



        }
    } else {
        echo "0 results";
    }
    close();
}

?>

