<?php
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
    <link rel="stylesheet" href="css/pradip1.css">
    <link rel="stylesheet" href="css/stylefilter.css" media="screen">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/jquery.quick.pagination.min.js"></script>
    <script type="text/javascript" src="js/loot.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles1.css" />
    <script src="js/filter.js"></script>
    <!-- slider -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap-select.js"></script>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">
</head>
<body>
<header>
    <div id="p3hero" style="background-image: url(img/contact.png);background-size: 100% 100%;background-position: center;background-clip: border-box;margin-top: 4%; position:relative;height: 450px;background-repeat: no-repeat">
        <!-- <img class="heroshot wow bounceInUp"  src="img/clothings-main.jpg"  id="img1" >
        <img class="heroshot wow bounceInUp"  src="img/accessories_main.jpg"  id="img2" style="display:none"> -->
        <!--        <img class="heroshot wow bounceInUp"  src="img/contact.png"  id="img3">-->
        <!-- <img class="heroshot wow bounceInUp"  src="img/healthnWorkout_main.jpg"  id="img4" style="display:none"> -->
        <div class="contheader">Contact us!</div>
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                    <input type="text" readonly name="searchCity" id="searchCity" value="--Select City--" placeholder="--Select City--" autocomplete="off"
                           style="width: 300px;margin-top: 16px;background-image: url('img/location_icon.png');background-position:right;
                    background-size: 20px 20px;background-repeat: no-repeat;border-top-left-radius: 5px;border-top-right-radius: 5px;border-radius: 5px"/>
                    <div id="divCity" style="height:150px !important; display: none"></div>
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
            <!--Atul-->

            <!--            <div id="citySuggestion" style="margin-left: 23%;margin-top: -10px"></div>-->

        </div>
    </nav>
</header>
<div class="contwrap">
    <!--    CONTACT-->
    <div class="contmain">
        <input class="continput" type="text" name="textName" id="textName" placeholder="Name"/>

        <input class="continput" type="text" name="textEmail" id="textEmail" placeholder="Email"/>

        <input class="continput" type="text" name="textPhone" id="textPhone" placeholder="Phone number (optional)" maxlength="10"/>

        <textarea rows="4" class="continput" name="textMessage" id="textMessage" placeholder="Massage" style="height: 170px"></textarea>
        <div class="contbutton">
            <input type="button"  name="btnContact" id="btnContact" value="Submit" />
        </div>
    </div>
    <div class="contside">
        <div class="d1">
            Advertise with us
        </div>
        <div class="d2">
            want to sell your product? See how you can get the most out of loot on sale.
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

<script>

</script>
</html>
