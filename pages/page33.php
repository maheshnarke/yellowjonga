<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
//session_destroy();
set_time_limit(0);

$shop = isset($_GET["shop"])?$_GET["shop"]:'';

if (!isset($_SESSION))
{

    session_start();
//    $_SESSION["shop"] = $shop;
//
//    $_SESSION["shop_name"] = $_GET["shop"];
}

if ($shop==''){
    header("Location:page2.php");
}
if ($shop==''){
    header("Location:page2.php");
}




//echo '<br><br><br><pre>';
//print_r($_SESSION);
$shopname="";
$shopimage="";
$shop_add1="";
$shop_add2="";
$offer_desc="";
$offer_off="";
$shop_speciality="";
$divClass = "";
$commentbox = "";




if(!isset($_SESSION['user']['username'])){
    $commentbox = '';
}
else{
    include_once ('db.php');
    $query2 = 'SELECT * FROM review WHERE user_name = "'.$_SESSION['user']['username'].'" AND shop_id = '.$shop;
    $result = $conn->query($query2);
    if ($result){
        $num_rows = $result->num_rows;
        if($num_rows == 0){
            $commentbox = "";
        }
        else{
            $commentbox = 'style="display: none"';
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Loot On Sale</title>

    <link rel="icon" href="img/favicon.png">
    <!-- web page icon on the Apple iPhone, iPod Touch, and iPad. -->
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />

    <!--link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/styles5.css">
    <link rel="stylesheet" href="css/pradip1.css">
    <link rel="stylesheet" href="css/stylefilter.css" media="screen">
    <link rel="stylesheet" href="css/style_page3.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/jquery.quick.pagination.min.js"></script>
    <script type="text/javascript" src="js/loot.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles1.css" />
<!--    <script src="js/filter.js"></script>-->
    <!-- slider -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>


    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">
</head>
<body>


<?php


include_once ('db.php');

if(isset($_SESSION['user']['username']))
{
    $divClass = "getOnlyCode";
}
else
{
    $divClass = "getCode";
}


$show = $shop;

$query ="SELECT s.Shop_id,
                            s.shop_name,
                            s.address1,
                            s.address2,
                            s.image_path,
                            ss.sale_per,
                            ss.sale_description,
                            r.stars,
                            s.category,
                            s.shop_offer,
                            s.speciality
                     FROM shop AS s
                     INNER JOIN sale AS ss ON ss.shop_id = s.shop_id
                     INNER JOIN rating AS r ON r.shop_id = s.shop_id WHERE s.Shop_id = $show
                     ";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {



    $shopname = $row["shop_name"];
    $shopimage = $row["image_path"];
    $shop_add1=$row["address1"];
    $shop_add2=$row["address2"];
    $offer_desc=$row["sale_description"];
    $offer_off=$row["shop_offer"];
    $shop_speciality=$row["speciality"];

}


?>

<header>
    <div id="p3hero" <?php echo 'style="background-image: url(img/'.$shopimage.');background-size: cover;position:relative;height: 550px;background-repeat: no-repeat"'?>>
<!--        <div style="margin-top: 300px">paacakhbkabch</div>-->
<!--        <a><img class="p3heroshot wow bounceInUp"  src="img/main_img.jpg"  id="img3">-->
            <div class="p3left_block">
                <div class="d1">
                    <?php echo $shopname?>
                </div>
                <div class="d2" style="background-size: ">
                    <?php echo $shop_add1?>
                </div>
                <div class="d3" style="margin-bottom: 20px">
                    <?php echo $shop_add2?>
                </div>
<!--                <div class="d4">-->
<!--                    Canada-->
<!--                </div>-->
                <div class="d5">
                    <?php echo $shop_speciality?>
                </div>
                <div class="d6">
                    Reviews
                </div>
            </div>
        <div class="p3right_block">
            <div class="d1">
                <div class="name"> Loot On Sale
                    <div class="offer">Special Offer* </div>
                </div>
<!--                <div class="offer">Special Offer* </div>-->
            </div>
            <div class="d2">
                <?php echo $offer_off?>% OFF
            </div>
            <div class="d3">
                <button class="button1" name="Review">Submit a Review</button>
                <?php echo '  <button type="button" id="'.$show.'" class="'.$divClass.'"  name="click" value="1">Get Code</button> '?>

            </div>
        </div>

    </div>


    <div class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <span class="brandicon icon-grid"></span>
                    <span class="brandname">Loot On Sale</span>
                    <p><span class="brandname_tagline">Dont just buy,buy it on sale </span></p><!-- or Cost next to nothing -->
                </a>
            </div>
            <div class="dropmain1">
                <div class="stext" style="margin-top: 18px;color: white">I am in</div>
                <form name="searchForm" action="searchResult.php" method="post">
                    <input type="text" readonly name="searchCity" id="searchCity" value="Pune" placeholder="Pune" autocomplete="off"
                           style="min-height: 32px;width: 300px;margin-top: 16px;background-image: url('img/location_icon.png');background-position:right;
                        background-size: 20px 20px;background-repeat: no-repeat;border-top-left-radius: 5px;border-top-right-radius: 5px;border-radius: 5px"/>
                    <div id="divCity" style="height:150px !important;"></div>
                    <div id="citySuggestion" style="margin-left: 23%;margin-top: -10px"></div>
                </form>

                <div class="collapse navbar-collapse" style="margin-left:22%">

                    <ul class="nav navbar-nav navbar-right" style="font-size: 15px;">
                        <?php if(isset($_SESSION['user']['username'])){?>
                            <li id="listUsername" style="cursor: pointer"><a id="linkUsername"><span class="btnicon icon-user"></span><span id="spanUserameText"><?php echo "Hi ".ucfirst($_SESSION['user']['username']);?></span></a></li>
                            <li id="listLogin" style="cursor: pointer"><a id="linkLogin"><span class="btnicon icon-user"></span><span id="spanLoginText">Logout</span></a></li>
                        <?php } else {?>
                            <li id="listSignup" style="cursor: pointer"><a id="linkSignup"><span class="btnicon icon-user"></span><span id="spanSignupText">Sign Up</span></a></li>
                            <li id="listLogin" style="cursor: pointer"><a id="linkLogin"><span class="btnicon icon-user"></span><span id="spanLoginText">Login</span></a></li>
                        <?php }?>
                    </ul>
                </div>

            </div>
            <input type="hidden" id="clickEventNameLogin" name="clickEventNameLogin" val=""/>
            <input type="hidden" id="clickEventNameSignup" name="clickEventNameSignup" val=""/>
        </div>
    </div>
</header>
<div class="p3wrap">
    <div class="p3topD1">
        <div class="d1">
            <div class="d11">
                Sale Details
            </div>
            <div class="d12">


            </div>
        </div>
        <div class="d2">
            <div class="d21">
                Special Offer Details
            </div>
            <div class="d22">

                <?php echo '  <button type="button" id="'.$show.'" class="'.$divClass.'"  name="click" value="1">Get Code</button> '?>
            </div>
        </div>
    </div>
    <div class="p3topD2">
        <div class="d1">
            <div class="p3_phpto">
                <div class="d1">
                    Photos
                </div>
                <div class="d2" id="main_image_box">
                    <img src="img/back3.jpg">
                </div>
                <div class="d3">
                    <div class="simagebox" id="img1"><img src="img/back1.jpg"></div>
                    <div class="simagebox" id="img2"><img src="img/back3.jpg"></div>
                    <div class="simagebox" id="img3"><img src="img/back2.jpg"></div>
                    <div class="simagebox" id="img4"><img src="img/back1.jpg"></div>
                    <div class="simagebox" id="img5"><img src="img/back1.jpg"></div>

                </div>
            </div>
        </div>
        <div class="d2">
            <div class="d1">
                Address
            </div>
            <div class="addr">
                <?php echo $shop_add1?>
                <br>
                <?php echo $shop_add2?>
                <br>
                9820748807
                <br>
                shop@gmail.com
            </div>
            <div class="location">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.605698259853!2d73.06639369577034!3d19.03708893396889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c215b8d549a3%3A0xc6280d82ef8e129c!2sKendriya+Vihar+Bus+Stop!5e0!3m2!1sen!2sin!4v1432472047355" width="100%" height="300px" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </div>
    <div class="p3container">


            <div class="mainbox">
<!--                <div class="p3_phpto">-->
<!--                    <div class="d1">-->
<!--                        Photos-->
<!--                    </div>-->
<!--                    <div class="d2" id="main_image_box">-->
<!--                        <img src="img/back3.jpg">-->
<!--                    </div>-->
<!--                    <div class="d3">-->
<!--                        <div class="simagebox" id="img1"><img src="img/back1.jpg"></div>-->
<!--                        <div class="simagebox" id="img2"><img src="img/back3.jpg"></div>-->
<!--                        <div class="simagebox" id="img3"><img src="img/back2.jpg"></div>-->
<!--                        <div class="simagebox" id="img4"><img src="img/back1.jpg"></div>-->
<!--                        <div class="simagebox" id="img5"><img src="img/back1.jpg"></div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="p3_address">-->
<!--                    <div class="d1">-->
<!--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.605698259853!2d73.06639369577034!3d19.03708893396889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c215b8d549a3%3A0xc6280d82ef8e129c!2sKendriya+Vihar+Bus+Stop!5e0!3m2!1sen!2sin!4v1432472047355" width="100%" height="280" frameborder="0" style="border:0"></iframe>-->
<!--                    </div>-->
<!--                    <div class="d2">-->
<!--                        --><?php //echo $shop_add1?>
<!--                        <br>-->
<!--                        --><?php //echo $shop_add2?>
<!--                        <br>-->
<!--                        9820748807-->
<!--                        <br>-->
<!--                        shop@gmail.com-->
<!--                    </div>-->
<!--                </div>-->

                <div class="p3_comment" <?php echo $commentbox?>>Write A Review
                    <form id="form6" name="form6" method="post">
                        <input type="hidden" name="hidShopId" id="hidShopId" value="<?php echo $shop;?>"/>
                        <textarea rows="4" cols="50" class="comment_input" name="textComment" id="textComment"></textarea>
                        <br>
                        <?php
                        if(isset($_SESSION['user']['username']))
                        {
                            $divClass = "comment_button";
                        }
                        else
                        {
                            $divClass = "comment_button_login";
                        }
                        ?>
                        <button type="button" name="comment_button" id="<?php echo $divClass; ?>" class="comment_button">Publish Review</button>
                    </form>
                </div>
                <div id="divReviews">
                    
                </div>
            </div>
            <div class="sidebox">
                <div class="block1">
                    <div class="d1">
                        Special Offer Details
                    </div>
                    <div class="d2">
                        <?php echo $offer_off?> %OFF
                    </div>
                    <div class="d3">
                        <?php echo $offer_desc?>
                    </div>
                </div>
                <div class="block2">
                    block2
                </div>
                        <!--        <div class="block3">clock3</div>-->
            </div>

    </div>
</div>


<!--FOOTER START-->
<footer>
    <div class="container">

        <div class="footerlinks">\
            <span class="bigicon icon-speedometer "></span>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="page4.php">About</a></li>
                <li><a href="page5.php">Terms & Conditions</a></li>
                <li><a href="page6.php">Contact</a></li>
            </ul>
        </div>

        <div class="footersocial wow fadeInUp" data-wow-duration="3s">
            <h4>we are social</h4>
            <ul>
                <li><a href="http://facebook.com"><span class="icon-social-facebook"></span></a></li>
                <li><a href="http://twitter.com"><span class="icon-social-twitter"></span></a></li>
                <li><a href="http://youtube.com"><span class="icon-social-youtube"></span></a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- FOOTER END -->
<!--<script type="text/javascript">
  function hoverEvent(index){
    switch (index) {
      case 1:
      jQuery('#img2,#img3,#img4,#img5').hide();
      jQuery("#img1").show();
      break;
      case 2:
      jQuery('#img1,#img3,#img4,#img5').hide();
      jQuery("#img2").show();
      break;
      case 3:
      jQuery('#img1,#img2,#img4,#img5').hide();
      jQuery("#img3").show();
      break;
      case 4:
      jQuery('#img1,#img2,#img3,#img5').hide();
      jQuery("#img4").show();
      break;
      default:
      jQuery('#img2,#img3,#img4,#img5').hide();
      jQuery("#img1").show();
    }
  }
-->
<script type="text/javascript" src="js/test.js"></script>
<?php // ATul Pop Up COde Start ==========================================================================================?>
<input type="hidden" name="shopId" id="shopId" value=""/>
<div class="modal fade" id="dialogGetCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
<div class="modal fade" id="dialogGetLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
<div class="modal fade" id="dialogGetSingup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
<div class="modal fade" id="dialogGetCodeMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
<!--<input type="hidden" id="clickEventNameLogin" name="clickEventNameLogin" val=""/>
<input type="hidden" id="clickEventNameSignup" name="clickEventNameSignup" val=""/>-->
<?php // ATul Pop Up COde END ==========================================================================================?>
</body>

</html>