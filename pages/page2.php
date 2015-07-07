
<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
set_time_limit(0);
if (!isset($_SESSION))
{

    session_start();
//    $_SESSION["search_shop"]="test";
    $likeVal="";
    $keyword='display: none';
    if(isset($_SESSION["search_shop"])&& ($_SESSION["search_shop"]!="")){
        $likeVal = $_SESSION["search_shop"];
        $keyword="";
      }
    else{
    $likeVal = "";
    $keyword='display: none';
    }
//    if((isset($_POST["hisearchShop"]) && (isset($_SESSION["search_shop"])) && ($_SESSION["search_shop"]!= $_POST["hisearchShop"]))){
//        $_SESSION["search_shop"] = $_POST["hisearchShop"];
//        $likeVal=$_SESSION["search_shop"];
//    }
//    else{
//
//        $likeVal=$_SESSION["search_shop"];
//    }


}
?>
<div id="dontknow" ></div>
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
<header>
    <div id="hero">

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
<!--        <img class="heroshot wow bounceInUp"  src="img/topimage.jpg"  id="img3">-->
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

<div class="container1">
    <!-- <header>
         <h1 class="title">
             John Doe
         </h1>
     </header>
     -->
    <div class="page2nav">


        <?php

        $set1="" ;$set2="" ;$set3=""; $set4=""; $set5="";$set6="";$set7="";$order="";
        
        if (isset($_POST["radio-1-set"]))
        {
            $set1 = "checked";
        }
        else
        {
            $set1 ="";
        }
        
        if (isset($_POST["radio-2-set"]))
        {
            $set2 = "checked";
        }
        else
        {
            $set2 ="";
        }
        
        if (isset($_POST["radio-3-set"]))
        {
            $set3 = "checked";
        }
        else
        {
            $set3 ="";
        }
        
        if (isset($_POST["radio-4-set"]))
        {
            $set4 = "checked";
        }
        else
        {
            $set4 ="";
        }

        if(isset($_POST["fancySelect"])){

            $check = explode('|', $_POST['fancySelect']);
            switch ($check[1]) {
                case "1":
                    $set5 = "selected";
                    break;
                case "2":
                    $set6 = "selected";
                    $order = " ORDER BY ss.sale_per DESC";
                    break;
                case "3":
                    $set7 = "selected";
                    $order = " ORDER BY ss.sale_per";
                    break;
                default:
            }
        }
        ?>

        <form class="form1" method="post" name="test" action="page2.php">
            <?php
                $selCity = isset($_POST['selectedCity'])?$_POST['selectedCity']:'';
                $city= '';
                if(!empty($selCity))
                    $city = $selCity;
                else
                    $city = isset($_POST['selCity'])?$_POST['selCity']:1;
            ?>           
            <input type="hidden" id="searchCityId" name="searchCityId" value=""/>
            <h1 class="clear_heared" style="<?php echo $keyword?>" id="clear_heared">keyword</h1>
            <div class="clearbox" style="<?php echo $keyword?>">
            <p class="clearvalue" ><?php echo $_SESSION["search_shop"]?></p>
            <p class="btnclear">Clear</p>
            </div>
            <h1>Sort By</h1>
            <div id="page">
                   <select id="select" onchange="form.submit()" name="fancySelect" class="makeMeFancy">

                        <!-- Notice the HTML5 data attributes -->

                        <!-- <option value="0" selected="selected" data-skip="1">Choose Your Product</option>-->

                        <option value="Popularity|1"<?php echo $set5 ?>>Popularity</option>
                        <option value=" ORDER BY ss.sale_per DESC|2" name="sale-high-to-low"<?php echo $set6 ?>>Sale-High To Low</option>
                        <option value=" ORDER BY ss.sale_per|3" name="sale-low-to-high"<?php echo $set7 ?>>Sale-Low To High</option>
                       <!-- <option value="4">Cost-High To Low</option>
                        <option value="5">Cost-Low To High</option>-->
                    </select>
            </div>
            <!--
            <div id="xx">
            <h1 id="xxxx">Location</h1>

            <ul id="xxx">
                <li id="ccc">Mumbai</li>
                <li id="ccc">Pune</li>
                <li id="ccc">Nashik</li>
                <li id="ccc">Ahmednagar</li>
                <li id="ccc" style="border-bottom: solid lightsteelblue 1px ;">Goa</li>
            </ul>
            </div>
            -->
            <!--Redio--->

            <h1>Category</h1>


            <ul id="redio" style="list-style: none">
                <li style="text-decoration: none">
                    <input type="checkbox" id="radio-1-1" onchange="form.submit()" value="1" name="radio-1-set" class="regular-radio" <?php echo $set1?>/><label for="radio-1-1"></label>
                    <span>Clothings</span>

                </li>

                <li>
                    <input type="checkbox" id="radio-1-2" onchange="form.submit()" value="2" name="radio-2-set" class="regular-radio" <?php echo $set2?>/><label for="radio-1-2"></label>
                    <span>Accessories</span>
                </li>
                <li>
                    <input type="checkbox" id="radio-1-3" onchange="form.submit()" value="3" name="radio-3-set" class="regular-radio" <?php echo $set3?>/><label for="radio-1-3"></label>
                    <span>Restaurents</span>
                </li>
                <li>
                    <input type="checkbox" id="radio-1-4" onchange="form.submit()" value="4" name="radio-4-set" class="regular-radio" <?php echo $set4?>/><label for="radio-1-4"></label>
                    <span>Fitness & Beauty</span>
                </li>

            </ul>                                    

        </form>

        <?php

        $counter=0;
        $query5="";

        if (isset($_POST["radio-1-set"])){

            $or1= $_POST["radio-1-set"];

            if($counter==0){
                $query5="WHERE (s.category =".$or1;
            }

            else{
                $query5=$query5." OR s.category =".$or1;
            }
            $counter ++;
        }
        else{
            $or1="";
        }

        if (isset($_POST["radio-2-set"])){

            $or2= $_POST["radio-2-set"];

            if($counter==0){
                $query5="WHERE (s.category =".$or2;
            }

            else{
                $query5=$query5." OR s.category =".$or2;
            }
            $counter ++;
        }
        else{
            $or2="";
        }

        if (isset($_POST["radio-3-set"])){

            $or3= $_POST["radio-3-set"];

            if($counter==0){
                $query5="WHERE (s.category =".$or3;
            }

            else{
                $query5=$query5." OR s.category =".$or3;
            }
            $counter ++;
        }
        else{
            $or3="";
        }

        if (isset($_POST["radio-4-set"])){

            $or4= "".$_POST["radio-4-set"];

            if($counter==0){
                $query5="WHERE s.category =".$or4;
            }

            else{
                $query5=$query5." OR s.category =".$or4;
            }
            $counter ++;
        }
        else{
            $or4="";
        }


        //echo $query
        ?>


    </div>
<!-- ***End of sorting and Start of new Box block****-->



    <div class="work">
        <form action="page3.php" method="get" id="form4">
            <input type="hidden" name="shop" id="shop" value=""/>

            <div class="xn9">


                <div class="clearing"></div>


                <ul class="pagination3" style="list-style: none ; display: inline-block">


                    <?php



//                    $order=" ORDER BY sale";
                    /**
                     * @link: http://www.Awcore.com/dev
                     */
                    //connect to the database
                    include_once ('db.php');
                    //get the function

                   // SELECTs.Shop_id,s.name,s.address1,s.address2,s.image_path,ss.sale_per,r.stars,s.categoryFROM shop AS sINNER JOIN sale AS ss ON ss.shop_id = s.shop_idINNER JOIN rating AS r ON r.shop_id = s.shop_id WHERE s.category = 'Restaurants' OR s.category = 'Clothing' OR s.category = 'Accessories' OR s.category = 'Fitness & Beauty' ORDER BY Shop_id,sale_per
                    //to make pagination

                    //{$statement}{$order}
                    if($query5!=""){
                        $query5=$query5.")";
                    }
                    $statement = $query5;
                    //likeval


                    if(isset($likeVal)){
//                        $likeVal=$_POST["hisearchShop"];
                    $like = " AND (s.shop_name LIKE '".$likeVal."%%' OR s.shop_name LIKE '%".$likeVal."%' OR s.shop_name LIKE '%%".$likeVal."')";
                    }
                    else{
                        $like="";
                    }
//                    echo $query5;
                    //show records
                    $query ="SELECT s.Shop_id,
                            s.shop_name,
                            s.address1,
                            s.address2,
                            s.image_path,
                            ss.sale_per,
                            r.stars,
                            s.category,
                            s.shop_offer
                     FROM shop AS s
                     INNER JOIN sale AS ss ON ss.shop_id = s.shop_id
                     INNER JOIN rating AS r ON r.shop_id = s.shop_id {$statement}{$like}{$order}";
                    $result = $conn->query($query);
                    $num_rows = $result->num_rows;
                    if($num_rows!=0){
                    while ($row = $result->fetch_assoc()) {

                    if (isset($_SESSION['user']['username'])) {
                        $divClass = "getOnlyCode";
                    } else {
                        $divClass = "getCode";
                    }


                    /*

                    echo '<li> <div class="outer" style="float: left">';
                    echo'<div class="topout">';
                    echo'<a>';
                    echo'<!-- <div class="left-top">#1</div> -->';
                    echo'<div class="left-bottom">';
                    echo'<span class="topouts1">'.$row["shop_name"].'</span> <br>';
                    echo'<span class="topouts2"></span>';
                    echo'</div>';
                    echo'<!--<div class="right-top"> ';
                    echo'<span></span>';
                    echo'</div> -->';
                    echo'<!-- <div class="right-bottom"></div> -->';
                    echo'<img src="img/'.$row["image_path"].'" alt="yellow"/>';
                    echo'<div class="down">';
                    echo'<span id="down1">'.$row["address1"].'</span><br>';
                    echo'<span id="down2">'.$row["sale_per"].'% Sale..!<button type="button" id="'.$row['Shop_id'].'" class="'.$divClass.'" name="click" value="1">Get Code</button></span>';
                    echo'<span id="down3">Rating:<img src="img/'.$row["stars"].'-Star.png" style="width:auto;margin-bottom: 3px"></span>';
                    echo'</div>';
                    echo'</a>';
                    echo'</div>';
                    echo'</div> </li>';
*/
                    echo '<li><div  class="mainout" style="cursor: pointer" id="mainout">'
                    ?>
                    <div class="newtop" id="<?php echo $row["Shop_id"] ?>"
                         style="background-image:url('img/<?php echo $row["image_path"] ?>')">
                        <?php
                        $bott1Css = "";
                        if ($row["shop_offer"] != "0") {
                            $bott1Css = ' style="border-right:solid white 2px;" ';
                            $bott2 = '<div class="newbott2"><div class="text4">EXTRA ' . $row["shop_offer"] . ' % OFF</div>
                            <div class="text5"><button type="button" id="' . $row['Shop_id'] . '" class="' . $divClass . '" name="click" value="1">Get Code</button></div></div>';
                        } else {
                            $bott2 = '<div class="newbott2"  style="visibility: hidden;"><div class="text4">EXTRA ' . $row["shop_offer"] . ' % OFF</div>
                            <div class="text5"><button type="button" id="' . $row['Shop_id'] . '" class="' . $divClass . '" name="click" value="1">Get Code</button></div></div>';
                        }
                        echo '<div class="shopname">' . $row["shop_name"] . '</div></div>';
                        echo '<div class="newbott"><div class="newbott1" ' . $bott1Css . '><div class="text1">';
                        echo '<img src="img/location_icon.png">' . $row["address1"] . '</div>';
                        echo '<div class="text2">' . $row["sale_per"] . '% OFF on Men’s Clothing</div>';
                        echo '<div class="text3">Rating -<img src="img/' . $row["stars"] . '-Star.png"></div></div>';
                        echo $bott2;
                        echo '</div></div></li>';


                        }
                        }
                        else{
                            echo"no Result";
                        }



                    ?>
                </ul>
                <div class="clearing"></div>


            </div>
        </form>

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
<input type="hidden" id="clickEventNameLogin" name="clickEventNameLogin" val=""/>
<input type="hidden" id="clickEventNameSignup" name="clickEventNameSignup" val=""/>
<?php // ATul Pop Up COde END ==========================================================================================?>
</body>

</html>