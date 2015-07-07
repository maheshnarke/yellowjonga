<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
set_time_limit(0);
if(!isset($_SESSION))
{
    session_start();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Loot On Sale</title>

    <link rel="icon" href="img/favicon.png">
    <!-- web page icon on the Apple iPhone, iPod Touch, and iPad. -->
<!--    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />-->
<!--    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />-->
<!--    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />-->
<!--    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />-->

    <!--link-->
<!--    <link rel="stylesheet" media="all and (device-width: 768px) and (device-height: 1024px) and (orientation:landscape)" href="css/apple.css" />-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/pradip1.css">
    <link rel="stylesheet" href="css/stylefilter.css" media="screen">
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
    <script src="js/bootstrap-select.js"></script>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">
</head>
<body>
<header>
    <div id="hero" >
<!--        style="background-image: url('img/topimage2.png')"-->

<!--home Page search-->
        <form method="post" action="page2.php" name="myForm1" id="myForm1">
        <input type="hidden" id="hisearchShop" name="hisearchShop" value=""/>
        <div class="searchShop">
            <div class="d1">
            <input type="text" id="textsearchShop" class="txtsearchShop" placeholder="Type Your Shop Name Here.." value="<?php echo $_SESSION["search_shop"]?>">
            <div class="dropSearchShop" id="dropSearchShop"></div>
            </div>
            <div class="d2">
            <button type="submit" class="btnsearchShop" id="btnsearchShop">Search</button>
            </div>
        </div>
            </form>

<!--home Page search ends-->


        <!-- <img class="heroshot wow bounceInUp"  src="img/clothings-main.jpg"  id="img1" >
        <img class="heroshot wow bounceInUp"  src="img/accessories_main.jpg"  id="img2" style="display:none"> -->
<!--        <img class="heroshot wow bounceInUp"  src="img/topimage2.png"  id="img3">-->

        <!-- <img class="heroshot wow bounceInUp"  src="img/healthnWorkout_main.jpg"  id="img4" style="display:none"> -->
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navebar1" role="navigation">
        <div class="container" style="display: flex">

            <div class="navbar-header" style="width: 42%">
<!--                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                </button>-->
                <a class="navbar-brand" href="index.php">
                    <span class="brandicon icon-grid"></span>
                    <span class="brandname">Loot On Sale</span>
                    <p><span class="brandname_tagline">Dont just buy,buy it on sale </span></p><!-- or Cost next to nothing -->
                </a>
            </div>
            

<!--            <div class="sboxmain">
                <div class="stext">I am in</div>
                <div class="sicon">
                    <a class="aicon"><img src="img/location_icon.png"></a>
                </div>
                <select class="sbox" name="selCity" id="selCity">
                    <option value="1">Mumbai</option>
                    <option value="2">Nashik</option>
                    <option value="3">Pune</option>
                    <option value="4">Akola</option>
                    <option value="5">Navimumbai</option>
                    <option value="6">Goa</option>
                    <option value="7">Nagar</option>
                </select>

            </div>                       -->
            
            <!--Atul-->


        <div class="dropmain1">
             <div class="stext" style="margin-top: 18px;color: white">I am in</div>
                <form name="searchForm" action="searchResult.php" method="post">
                    <input class="searchcity_input" type="text" readonly name="searchCity" id="searchCity" value="Pune" placeholder="Pune" autocomplete="off"
                        style="min-height: 32px;width: 25vw;margin-top: 16px;background-image: url('img/location_icon.png');background-position:right;
                        background-size: 20px 20px;background-repeat: no-repeat;border-top-left-radius: 5px;border-top-right-radius: 5px;border-radius: 5px"/>
                    <div id="divCity" style="height:150px !important; display: none"></div>
                    <div id="citySuggestion" style="margin-left: 23%;margin-top: -10px"></div>
                </form>
            <div class="collapse navbar-collapse">

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
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

             </div>

                <!--Atul-->

                    <!--            <div id="citySuggestion" style="margin-left: 23%;margin-top: -10px"></div>-->
        </div>


    </nav>
</header>
<div id="clients">
<!--    <div class="container">-->
        <form method="post" action="page2.php" name="myForm" id="myForm" style="margin: auto">
            <input type="hidden" id="searchCityId" name="searchCityId" value=""/>


            <ul id="redio" style="llist-style: none;">
                <li style="cursor: pointer; border:none">
                    <input style="display: none;" type="radio" class="category" value="1" name="radio-1-set" id="radio-1-1" />
                    <label for="radio-1-1"><img style="cursor: pointer" src="img/cloths.jpg" alt="Clothings" class="clients_Categories"></label>
                </li>

            

                <li style="cursor: pointer; border:none">
                    <input style="display: none" type="radio" class="category" value="2" name="radio-2-set" id="radio-1-2"/>
                    <label for="radio-1-2"><img style="cursor: pointer" src="img/acc.jpg" alt="Accessories" class="clients_Categories"></label>
                </li>



                <li style="cursor: pointer; border:none">
                    <input style="display: none" type="radio" class="category" value="3" name="radio-3-set" id="radio-1-3"/>
                    <label for="radio-1-3"><img style="cursor: pointer" src="img/rest.jpg" alt="Restaurants" class="clients_Categories"></label>
                </li>

                
                <li style="cursor: pointer; border:none">
                    <input style="display: none" type="radio" class="category" value="4" name="radio-4-set" id="radio-1-4"/>
                    <label for="radio-1-4"><img style="cursor: pointer" src="img/health.jpg" alt="Fitness & Beauty" class="clients_Categories"></label>
                </li>
            </ul>
        </form>

<!--    </div>-->
<!--    <hr>-->
</div>

<!--Trending now  -->
<div id="portfolio" >
    <div class="portfolio_header" >
        <h3>Trending now</h3>
        <hr class="separetor">
    </div>
    <!-- PORTFOLIO ITEMS START-->
    <form action="page3.php" method="get" id="form4">
        <input type="hidden" name="shop" id="shop" value=""/>
    <div class="portfolioitems">
        <div class="slider1">




        <?php

        include('db.php');
        //                    echo $query5;
        //show records
        $query ="SELECT s.Shop_id, s.shop_name, s.address1, s.address2, s.image_path, ss.sale_per, r.stars, s.category, s.shop_offer FROM shop AS s INNER JOIN sale AS ss ON ss.shop_id = s.shop_id INNER JOIN rating AS r ON r.shop_id = s.shop_id LIMIT 1,4";
        $result = $conn->query($query);





        while ($row = $result->fetch_assoc()) {

            if(isset($_SESSION['user']['username']))
                {
                    $divClass = "getOnlyCode";
                }
                else
                {
                    $divClass = "getCode";
                }
        echo'<div class="mainout" style="margin: 5px;max-width: 291px">'
        ?>
            <div class="newtop" id="<?php echo $row["Shop_id"]?>" style="cursor:pointer;background-image:url('img/<?php echo $row["image_path"] ?>');height: 120px">
                <?php

                if($row["shop_offer"]!= "0"){
                    $bott1css='';
                    $bott2css='';

                }
                else{
                    $bott1css=' style="border-right:solid white 2px;" ';;
                    $bott2css=' style="visibility: hidden;" ';
                }

                echo'<div class="shopname">'.$row["shop_name"].'</div></div>';
                echo'<div class="newbott"><div class="newbott1" '.$bott1css.'><div class="text1" style="font-size: 10px">';
                echo'<img src="img/location_icon.png" style="float: left;margin-top: 6px">'.$row["address1"].'</p></div>';
                echo'<div class="text2" style="font-size: 11px;margin-top: -10px">'.$row["sale_per"].'% OFF on Men’s Clothing</div>';
                echo'<div class="text3"style="font-size:10px;height: 40px">Rating -<img src="img/'.$row["stars"].'-Star.png" style="display:inline-block"></div></div>';
                echo'<div class="newbott2"'.$bott2css.'><div class="text4" style="font-size: 10px">EXTRA '.$row["shop_offer"].' % OFF</div>';
                echo'<div class="text5" style="font-size: 10px"><button type="button" id="'.$row['Shop_id'].'" class="'.$divClass.'" name="click" value="1" style="height:30px;width:80px">Get Code</button>';
                echo'</div></div></div></div>';
                }
                ?>
    </div>

</div>
        </form>
<!--PORTFOLIO ITEMS END -->
<!-- Popular offers -->

<div id="portfolio" >
    <div class="portfolio_header" >
        <h3>Popular Offers</h3>
        <hr class="separetor">
    </div>


    <!--
    Anjan Cookie

    -->
    <?php
//    if($_COOKIE['email'] && $_COOKIE['username'])
//
//        $_SESSION['user']['username']   =  $_COOKIE['username'];
//        $_SESSION['user']['email']      = $_COOKIE['email'];

        ?>

    <!--
    -->




    <!--PORTFOLIO ITEMS START-->
    <div class="portfolioitems">
        <div class="slider1">

        <?php
        //show records
        $query ="SELECT s.Shop_id, s.shop_name, s.address1, s.address2, s.image_path, ss.sale_per, r.stars, s.category, s.shop_offer FROM shop AS s INNER JOIN sale AS ss ON ss.shop_id = s.shop_id INNER JOIN rating AS r ON r.shop_id = s.shop_id LIMIT 5,7";
        $result = $conn->query($query);
        while ($row = $result->fetch_assoc()) {
            if(isset($_SESSION['user']['username']))
                {
                    $divClass = "getOnlyCode";
                }
                else
                {
                    $divClass = "getCode";
                }
        echo'<div class="mainout" style="margin: 5px;max-width: 291px">'
        ?>
            <div class="newtop" id="<?php echo $row["Shop_id"]?>" style="cursor:pointer;background-image:url('img/<?php echo $row["image_path"] ?>');height: 120px">
                <?php

                if($row["shop_offer"]!= "0"){
                    $bott1css='';
                    $bott2css='';

                }
                else{
                    $bott1css=' style="border-right:solid white 2px;" ';;
                    $bott2css=' style="visibility: hidden;" ';
                }

                echo'<div class="shopname">'.$row["shop_name"].'</div></div>';
                echo'<div class="newbott"><div class="newbott1" '.$bott1css.'><div class="text1" style="font-size: 10px">';
                echo'<img src="img/location_icon.png" style="float: left;margin-top: 6px">'.$row["address1"].'</p></div>';
                echo'<div class="text2" style="font-size: 11px;margin-top: -10px">'.$row["sale_per"].'% OFF on Men’s Clothing</div>';
                echo'<div class="text3"style="font-size:10px;height: 40px">Rating -<img src="img/'.$row["stars"].'-Star.png" style="display:inline-block"></div></div>';
                echo'<div class="newbott2"'.$bott2css.'><div class="text4" style="font-size: 10px">EXTRA '.$row["shop_offer"].' % OFF</div>';
                echo'<div class="text5" style="font-size: 10px"><button type="button" id="'.$row['Shop_id'].'" class="'.$divClass.'" name="click" value="1" style="height:30px;width:80px">Get Code</button>';
                echo'</div></div></div></div>';
                }
                ?>
    </div>
</div>

    <!--PORTFOLIO ITEMS END -->
<!-- Latest offer -->
<div id="portfolio">
    <div class="portfolio_header">
        <h3>Latest Offers</h3>
        <hr class="separetor">
    </div>
    <!--PORTFOLIO ITEMS START-->
    <div class="portfolioitems">
       <div class="slider1">
            <?php
            //show records
            $query ="SELECT s.Shop_id, s.shop_name, s.address1, s.address2, s.image_path, ss.sale_per, r.stars, s.category, s.shop_offer FROM shop AS s INNER JOIN sale AS ss ON ss.shop_id = s.shop_id INNER JOIN rating AS r ON r.shop_id = s.shop_id LIMIT 9,8";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                if(isset($_SESSION['user']['username']))
                {
                    $divClass = "getOnlyCode";
                }
                else
                {
                    $divClass = "getCode";
                }
            echo'<div class="mainout" style="margin: 5px;max-width: 291px">'
            ?>
           <div class="newtop" id="<?php echo $row["Shop_id"]?>" style="cursor:pointer;background-image:url('img/<?php echo $row["image_path"] ?>');height: 120px">
               <?php

               if($row["shop_offer"]!= "0"){
                   $bott1css='';
                   $bott2css='';

               }
               else{
                   $bott1css=' style="border-right:solid white 2px;" ';;
                   $bott2css=' style="visibility: hidden;" ';
               }

               echo'<div class="shopname">'.$row["shop_name"].'</div></div>';
               echo'<div class="newbott"><div class="newbott1" '.$bott1css.'><div class="text1" style="font-size: 10px">';
               echo'<img src="img/location_icon.png" style="float: left;margin-top: 6px">'.$row["address1"].'</p></div>';
               echo'<div class="text2" style="font-size: 11px;margin-top: -10px">'.$row["sale_per"].'% OFF on Men’s Clothing</div>';
               echo'<div class="text3"style="font-size:10px;height: 40px">Rating -<img src="img/'.$row["stars"].'-Star.png" style="display:inline-block"></div></div>';
               echo'<div class="newbott2"'.$bott2css.'><div class="text4" style="font-size: 10px">EXTRA '.$row["shop_offer"].' % OFF</div>';
               echo'<div class="text5" style="font-size: 10px"><button type="button" id="'.$row['Shop_id'].'" class="'.$divClass.'" name="click" value="1" style="height:30px;width:80px">Get Code</button>';
               echo'</div></div></div></div>';
            }
            ?>
        </div>
    </div>

<!--PORTFOLIO ITEMS END-->

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
</footer><!-- FOOTER END -->
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
    <input type="hidden" name="shopId" id="shopId" value=""/>
    <div class="modal fade" id="dialogGetCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
    <div class="modal fade" id="dialogGetLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
    <div class="modal fade" id="dialogGetSingup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
    <div class="modal fade" id="dialogGetCodeMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
    <input type="hidden" id="clickEventNameLogin" name="clickEventNameLogin" val=""/>
    <input type="hidden" id="clickEventNameSignup" name="clickEventNameSignup" val=""/>
</body>


</html>
