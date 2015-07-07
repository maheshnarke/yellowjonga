<?php session_start();?>
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

    <link rel="stylesheet" href="css/stylefilter.css" media="screen">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>



    <!--<script type="text/javascript" src="js/jquery.js"></script>-->
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery.quick.pagination.min.js"></script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/styles1.css" />
   <link rel="stylesheet" href="css/pradip.css">

    <link rel="stylesheet" type="text/css" href="css/styles5.css">
    <link rel="stylesheet" href="css/stylefilter.css" media="screen">


    <!-- slider -->


    <!--<script-->
    <!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->

    <!-- scripts for pop up -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">
    <script type="text/javascript" src="js/loot.js"></script>
</head>
<body data-spy="scroll" onload="init()">
<header>
    <!DOCTYPE html>
    <div id="hero">
        <!-- <img class="heroshot wow bounceInUp"  src="img/clothings-main.jpg"  id="img1" >
        <img class="heroshot wow bounceInUp"  src="img/accessories_main.jpg"  id="img2" style="display:none"> -->
        <img class="heroshot wow bounceInUp"  src="img/topimage.jpg"  id="img3">
        <!-- <img class="heroshot wow bounceInUp"  src="img/healthnWorkout_main.jpg"  id="img4" style="display:none"> -->
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
            <div class="sboxmain">
                <div class="stext">I am in    </div>
                <div class="sicon">
                    <a class="aicon"><img src="img/location_icon.png"></a>
                </div>
                <select class="sbox" name="">
                    <option value="1" <?php if(isset($_POST['selCity']) && $_POST['selCity']==1)echo'selected';?><?php if(isset($_POST['selectedCity']) && $_POST['selectedCity']==1) echo 'selected';?> > Mumbai </option>
                    <option value="2" <?php if(isset($_POST['selCity']) && $_POST['selCity']==2)echo'selected';?><?php if(isset($_POST['selectedCity']) && $_POST['selectedCity']==2) echo 'selected';?> >Nashik</option>
                    <option value="3" <?php if(isset($_POST['selCity']) && $_POST['selCity']==3)echo'selected';?><?php if(isset($_POST['selectedCity']) && $_POST['selectedCity']==3) echo 'selected';?> >Pune</option>
                    <option value="4" <?php if(isset($_POST['selCity']) && $_POST['selCity']==4)echo'selected';?><?php if(isset($_POST['selectedCity']) && $_POST['selectedCity']==4) echo 'selected';?> >Akola</option>
                    <option value="5" <?php if(isset($_POST['selCity']) && $_POST['selCity']==5)echo'selected';?><?php if(isset($_POST['selectedCity']) && $_POST['selectedCity']==5) echo 'selected';?> >Navimumbai</option>
                    <option value="6" <?php if(isset($_POST['selCity']) && $_POST['selCity']==6)echo'selected';?><?php if(isset($_POST['selectedCity']) && $_POST['selectedCity']==6) echo 'selected';?> >Goa</option>
                    <option value="7" <?php if(isset($_POST['selCity']) && $_POST['selCity']==7)echo'selected';?><?php if(isset($_POST['selectedCity']) && $_POST['selectedCity']==7) echo 'selected';?> >Nagar</option>
                </select>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="margin-top: -50px;font-size: 15px">
                    <?php if(isset($_SESSION['user']['username'])){?>
                        <li id="listLogin"><a id="linkLogin"><span class="btnicon icon-user"></span><span id="spanLoginText">Logout</span></a></li>
                        <li id="listUsername"><a id="linkUsername"><span class="btnicon icon-user"></span><span id="spanUserameText"><?php echo $_SESSION['user']['username'];?></span></a></li>
                    <?php } else {?>
                        <li id="listLogin"><a id="linkLogin"><span class="btnicon icon-user"></span><span id="spanLoginText">Login</span></a></li>
                        <li id="listSignup"><a id="linkSignup"><span class="btnicon icon-user"></span><span id="spanSignupText">Signup</span></a></li>
                    <?php }?>
                </ul>
            </div>
            <input type="hidden" id="clickEventNameLogin" name="clickEventNameLogin" val=""/>
            <input type="hidden" id="clickEventNameSignup" name="clickEventNameSignup" val=""/>
        </div>
    </div>



</header>
<div class="newcn">
    <div class="mainout">
            <div class="newtop">
            <div class="shopname">
                Shop Name
            </div>
            </div>
            <div class="newbott">
                <div class="newbott1">
                    <div class="text1">
                        <img src="img/location_icon.png">
                        Shop no 21, Kasarwadi, Pune
                    </div>
                    <div class="text2">
                        50% OFF on Men’s Clothing
                    </div>
                    <div class="text3">
                        Rating -
                        <img src="img/3-Star.png">
                    </div>
                </div>
                <div class="newbott2">
                    <div class="text4">
                        EXTRA 10 % OFF
                    </div>
                    <div class="text5">
                        <button>pradip</button>
                    </div>
                </div>
            </div>
    </div>

    <div class="mainout">
        <div class="newtop">
            <div class="shopname">
                Shop Name
            </div>
        </div>
        <div class="newbott">
            <div class="newbott1">
                <div class="text1">
                    <img src="img/location_icon.png">
                    Shop no 21, Kasarwadi, Pune
                </div>
                <div class="text2">
                    50% OFF on Men’s Clothing
                </div>
                <div class="text3">
                    Rating -
                    <img src="img/3-Star.png">
                </div>
            </div>
            <div class="newbott2">
                <div class="text4">
                    EXTRA 10 % OFF
                </div>
                <div class="text5">
                    <button>pradip</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mainout">
        <div class="newtop">
            <div class="shopname">
                Shop Name
            </div>
        </div>
        <div class="newbott">
            <div class="newbott1">
                <div class="text1">
                    <img src="img/location_icon.png">
                    Shop no 21, Kasarwadi, Pune
                </div>
                <div class="text2">
                    50% OFF on Men’s Clothing
                </div>
                <div class="text3">
                    Rating -
                    <img src="img/3-Star.png">
                </div>
            </div>
            <div class="newbott2">
                <div class="text4">
                    EXTRA 10 % OFF
                </div>
                <div class="text5">
                    <button>pradip</button>
                </div>
            </div>
        </div>
    </div>

</div>





<!--FOOTER START-->
<footer>
    <div class="container">

        <div class="footerlinks">\
            <span class="bigicon icon-speedometer "></span>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Contact</a></li>
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
</body>

</html>