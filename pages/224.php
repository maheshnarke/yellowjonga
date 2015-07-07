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
    <!--<script type="text/javascript" src="js/jquery.js"></script>-->
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-latest.min.js"></script>

    <script src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/jquery.quick.pagination.min.js"></script>

    <link href="css/pradip1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles5_2.css">
    <link rel="stylesheet" type="text/css" href="css/styles1_2.css" />
    <link rel="stylesheet" href="css/stylefilter_2.css" media="screen">

    <link rel="stylesheet" href="css/bootstrap.min_2.css">
    <link rel="stylesheet" href="css/style_2.css">
    <link rel="stylesheet" href="css/responsive_2.css">
    <link rel="stylesheet" href="css/simple-line-icons_2.css">
    <link href="css/jquery.bxslider_2.css" rel="stylesheet">
    <!-- slider -->


    <!--<script-->
    <!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->

    <!-- scripts for pop up -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">
    <script type="text/javascript">
        $(document).ready(function(){

            $('body').on('change','.sbox',function()
            {
                $("#selCity").val($(this).val());
            });

            $('body').on('click','.getCode',function()
            {
                var shop_id =$(this).attr('id');
                $("#shopId").val(shop_id);
                $( "#dialog1" ).dialog({
                    modal:true,
                    height:408,
                    width:408,
                    padding:0

                });
            });

            $('body').on('click','#btnLogin1',function()
            {
                $( "#dialog1" ).dialog('close');
                $( "#dialog2" ).dialog({
                    modal:true,
                    height:300,
                    width:300
                });
            });

            $('body').on('click','#btnSignup1',function()
            {
                $( "#dialog1" ).dialog('close');
                $( "#dialog3" ).dialog({
                    modal:true,
                    height:300,
                    width:300
                });
            });

            $('body').on('click','#btnLogin2',function()
            {
                var email = $("#txtEmail1").val();
                var password = $("#txtPassword").val();
                var shopId = $("#shopId").val();
                if(email!="" && password!="")
                {
                    $.ajax({
                        url:'ajax/checkValidUser.php',
                        type:'POST',
                        data: {email:email,password:password},
                        dataType: 'html',
                        success : function(data)
                        {
                            if(data=='success')
                            {
                                alert('successfull!');
                                $( "#dialog2" ).dialog('close');
                                $.ajax({
                                    url:'ajax/sendCode.php',
                                    type:'POST',
                                    data: {email:email,shopId:shopId},
                                    dataType: 'html',
                                    success : function(data)
                                    {
                                        if(data=='success')
                                        {
                                            alert('Code has been sent to your Email Id');
                                        }
                                    }
                                });
                            }
                            else
                            {
                                alert('email or password is wrong!');
                            }
                        }
                    });
                }
                else
                {
                    alert('email and password is mandatory!');
                }
            });

            $('body').on('click','#btnSignup2',function()
            {
                var shopId          = $("#shopId").val();
                var username        = $("#txtName").val();
                var email           = $("#txtEmail2").val();
                var txtPassword     = $("#txtPasswordN").val();
                var txtConfPassword = $("#txtConfPassword").val();
                var txtMobile       = $("#txtMobile").val();

                if(txtPassword != txtConfPassword)
                {
                    alert(txtPassword+'<>'+txtConfPassword);
                    alert('Password and Confirm Password should be same.');
                    return false;
                }

                if(email!="" && username!="" && txtPassword!=="" && txtConfPassword!="")
                {
                    $.ajax({
                        url:'ajax/userSignup.php',
                        type:'POST',
                        data: {email:email,password:txtPassword,confPassword:txtConfPassword,username:username,mobile:txtMobile},
                        dataType: 'html',
                        success : function(data)
                        {
                            if(data=='success')
                            {
                                $( "#dialog3" ).dialog('close');
                                $.ajax({
                                    url:'ajax/sendCode.php',
                                    type:'POST',
                                    data: {email:email,shopId:shopId},
                                    dataType: 'html',
                                    success : function(data)
                                    {
                                        if(data=='success')
                                        {
                                            alert('Code has been sent to your Email Id');
                                        }
                                    }
                                });
                            }
                            else
                            {
                                alert('email is mandatory!');
                            }
                        }
                    });
                }
            });


            $('.slider1').bxSlider({
                slideWidth: 300,
                minSlides: 1,
                maxSlides: 4,
                slideMargin: 10
            });
//            $("ul.pagination1").quickPagination();
//            $("ul.pagination2").quickPagination({pagerLocation:"both"});
            $("ul.pagination3").quickPagination({pagerLocation:"both",pageSize:"10"});
        });

    </script>
    <!--
        <script type="text/javascript">
            $(document).ready(function() {
                $("ul.pagination1").quickPagination();
                $("ul.pagination2").quickPagination({pagerLocation:"both"});
                $("ul.pagination3").quickPagination({pagerLocation:"both",pageSize:"4"});
            });
        </script>
        -->

</head>
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
                    <li><a href="login/login.php"><span class="btnicon icon-user"></span>Login</a></li>
                    <li><a href="login/index.php"><span class="btnicon icon-user"></span>Signup</a></li>
                </ul>
            </div>
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
    <nav>


        <?php

        $set1="" ;$set2="" ;$set3=""; $set4=""; $set5="";$set6="";$set7="";$order="";
        if (isset($_POST["radio-1-set"])){
            $set1 = "checked";
        }
        else{
            $set1 ="";
        }
        if (isset($_POST["radio-2-set"])){
            $set2 = "checked";
        }
        else{
            $set2 ="";
        }
        if (isset($_POST["radio-3-set"])){
            $set3 = "checked";
        }
        else{
            $set3 ="";
        }
        if (isset($_POST["radio-4-set"])){
            $set4 = "checked";
        }
        else{
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

            <input type="hidden" name="selCity" id="selCity" value="<?php echo $city?>" />

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


            <?php // ATul Pop Up COde Start ==========================================================================================?>
            <input type="hidden" name="shopId" id="shopId" value=""/>
            <div id="dialog1" title="LootOnSale" style="display:none; background-color:white ;  border: solid steelblue 4px;padding: 0">

                <div style="display:block;background-color: white;width: 100%;height: 70% ;padding: 50px">
                    Login or Signup to avail exciting offers.
                </div>
                <div style="display:block;background-color: white;width: 100%;height: 30%;padding: 30px;border-top: solid steelblue 2px;padding-top:28px;padding-left: 15px;padding-right: 15px">

                    <input type="button" name="btnLogin1" id="btnLogin1" value="Login" style="width: 160px;height: 50px;color: white;background-color: #00aacc;border: solid darkslategray 4px;outline: none;border-radius: 2px"/>
                    <input type="button" name="btnSignup1" id="btnSignup1" value="SignUp" style="width: 160px;height: 50px;margin-left: 30px;color: white;background-color: #00aacc;border: solid darkslategray 4px;outline: none;border-radius: 2px"/>
                </div>

            </div>

            <div id="dialog2" title="Login" style="display:none;">
                <div id="divLogin" style="float:left">
                    <table>
                        <tr>
                            <td>Email:-</td>
                            <td><input type="text" name="txtEmail1" id="txtEmail1"/></td>
                        </tr>
                        <tr>
                            <td>Password:-</td>
                            <td><input type="password" name="txtPassword" id="txtPassword"/></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="button" name="btnLogin2" id="btnLogin2" value="Login"/></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="dialog3" title="Singup" style="display:none;">
                <div id="divSignUp" style="float:right">
                    <p>Signup</p>
                    <table>
                        <tr>
                            <td>User Name:-</td>
                            <td><input type="text" name="txtName" id="txtName"/></td>
                        </tr>
                        <tr>
                            <td>Email:-</td>
                            <td><input type="text" name="txtEmail2" id="txtEmail2"/></td>
                        </tr>
                        <tr>
                            <td>Password:-</td>
                            <td><input type="password" name="txtPasswordN" id="txtPasswordN"/></td>
                        </tr>
                        <tr>
                            <td>Confirm Password:-</td>
                            <td><input type="password" name="txtConfPassword" id="txtConfPassword"/></td>
                        </tr>
                        <tr>
                            <td>Mobile:-</td>
                            <td><input type="text" name="txtMobile" id="txtMobile" maxlength="10"/></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="button" name="btnSignup2" id="btnSignup2" value="SignUp"/></td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php // ATul Pop Up COde END ==========================================================================================?>

        </form>

        <?php

        $counter=0;
        $query5="";

        if (isset($_POST["radio-1-set"])){

            $or1= $_POST["radio-1-set"];

            if($counter==0){
                $query5="WHERE s.category =".$or1;
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
                $query5="WHERE s.category =".$or2;
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
                $query5="WHERE s.category =".$or3;
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


    </nav>
    <!-- ***End of sorting and Start of new Box block****-->



    <section class="work">

        <div class="xn9">


            <div class="clearing"></div>


            <ul class="pagination3" style="list-style: none ; display: inline-block;outline: none">


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

                $statement = $query5;
                //                    echo $query5;
                //show records
                $query ="SELECT s.Shop_id, s.shop_name, s.address1, s.address2, s.image_path, ss.sale_per, r.stars, s.category FROM shop AS s INNER JOIN sale AS ss ON ss.shop_id = s.shop_id INNER JOIN rating AS r ON r.shop_id = s.shop_id {$statement}{$order}";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {



                /*
                  echo' <li> <div class="mainout"><div class="newtop"><div class="shopname">Shop Name pradip</div>';
               echo' </div><div class="newbott"><div class="newbott1"><div class="text1">';
               echo' <img src="img/location_icon.png">Shop no 21, Kasarwadi, Pune</div>';
               echo' <div class="text2">50% OFF on Men’s Clothing</div>';
               echo' <div class="text3">Rating -<img src="img/3-Star.png"></div></div>';
               echo' <div class="newbott2"><div class="text4">EXTRA 10 % OFF</div>';
               echo' <div class="text5"><button>pradip</button>';
               echo' </div></div></div></div></div></li> ';
                */



?>




                    <li>
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
                                            Shop no 21, Kasarwadi, Pune kbkacs aohhccao ohacooa ii
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
                                            <button>Get Code</button>
                                        </div>

                                </div>


                            </div>

                        </div>




<!--                        <div style="height: 300px;min-width: 400px;background-color: seagreen;margin: 4px"></div>-->
                        <!--
                    <div class="outer">
                    <div class="topout">
                    <a>

                    <div class="left-bottom">
                    <span class="topouts1">pradip</span> <br>
                    <span class="topouts2"></span>
                    </div>

                    <img src="img/back2.jpg" alt="yellow"/>
                    <div class="down">
                    <span id="down1">address</span><br>
                    <span id="down2">50% Sale..!<button type="button" class="getCode" name="click" value="1">Get Code</button></span>
                    <span id="down3">Rating:<img src="img/4-Star.png" style="width:auto;margin-bottom: 3px"></span>
                    </div>
                    </a>
                    </div>
                    </div>
                    -->

                    </li>



                <?php

                }



                ?>
            </ul>
            <div class="clearing"></div>
        </div>
    </section>


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