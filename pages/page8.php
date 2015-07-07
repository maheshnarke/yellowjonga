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

<div class="new_header">
    <div class="d1" >
<!--        <p class="p5">Loot On Sale</p>-->
<!--        <p class="p4">pradip</p>-->
        <a class="navbar-brand" href="index.php">
            <span class="brandicon icon-grid"></span>
            <span class="brandname">Loot On Sale</span>
            <p><span class="brandname_tagline">Dont just buy,buy it on sale </span></p><!-- or Cost next to nothing -->
        </a>
    </div>
    <div class="d2">
        serch
    </div>
    <div class="d3">
        login
    </div>

</div>
<div class="new_homeimage">
    <div class="d1">ascca</div>


    <img class="d2" src="img/topimage4.jpg">
</div>








<div style="width: 100%;height: 300px;text-align: center;font-weight: bolder;margin-left: auto;margin-right: auto;font-size: 30px;padding: 20px">
    About
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
