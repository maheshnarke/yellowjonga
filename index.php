<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
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

  <!-- slider -->  
  <link href="css/jquery.bxslider.css" rel="stylesheet">
  
  <script src="js/jquery-latest.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script> 


  <!--<script-->
  <!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
  
  
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">
  <script type="text/javascript">
  $(document).ready(function(){
    $('.slider1').bxSlider({
      slideWidth: 300,
      minSlides: 1,
      maxSlides: 4,
      slideMargin: 10
    });
  });

  </script>

</head>
<body data-spy="scroll">
  <header>   
    <div id="hero">           
      <!-- <img class="heroshot wow bounceInUp"  src="img/clothings-main.jpg"  id="img1" >  
      <img class="heroshot wow bounceInUp"  src="img/accessories_main.jpg"  id="img2" style="display:none"> -->  
      <img class="heroshot wow bounceInUp"  src="img/restaurant_main.jpg"  id="img3">            
      <!-- <img class="heroshot wow bounceInUp"  src="img/healthnWorkout_main.jpg"  id="img4" style="display:none"> -->  
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">

      <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#">
        <span class="brandicon icon-grid"></span>
        <span class="brandname">Loot On Sale</span>
        <p><span class="brandname_tagline">Dont just buy,buy it on sale </span></p><!-- or Cost next to nothing -->
      </a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="btnicon icon-user"></span>Login</a></li>
        <li><a href="#"><span class="btnicon icon-user"></span>Signup</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>
<div id="clients">
 <div class="container">
   <ul>
     <li> <img src="img/cloths.jpg" alt="Clothings" class="clients_Categories"></li>
     <li> <img src="img/acc.jpg" alt="Accessories" class="clients_Categories"></li>
     <li><img src="img/rest.jpg" alt="Restaurants" class="clients_Categories"></li>
     <li><img src="img/health.jpg" alt="Fitness & Beauty" class="clients_Categories"></li>                     
   </ul>
 </div>
 <hr>
</div>

<!--Trending now  -->
<div id="portfolio" >
  <div class="portfolio_header" >
    <h3>Trending now</h3>
    <hr class="separetor">            
  </div>  
  <!-- PORTFOLIO ITEMS START -->
  <div class="portfolioitems">
    <div class="slider1">
      <div class="slide"> 
        <div id="shotsByPlayerId">
          <li>
            <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
            <h3><a href="#"></a>Prozone mall</h3>
            <div class="likecount">
             <a href="#">
               <span class="icon-heart"></span> 14</a>
             </div>
             <div class="commentcount">
              <a href="#">
                <span class="icon-bubbles"></span> 8</a>
              </div>
            </li>
          </div>
        </div>
        
        <div class="slide"> 
          <div id="shotsByPlayerId">
            <li>
              <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
              <h3><a href="#"></a>Prozone mall</h3>
              <div class="likecount">
               <a href="#">
                 <span class="icon-heart"></span> 14</a>
               </div>
               <div class="commentcount">
                <a href="#">
                  <span class="icon-bubbles"></span> 8</a>
                </div>
              </li>
            </div>
          </div>

          <div class="slide"> 
            <div id="shotsByPlayerId">
              <li>
                <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                <h3><a href="#"></a>Prozone mall</h3>
                <div class="likecount">
                 <a href="#">
                   <span class="icon-heart"></span> 14</a>
                 </div>
                 <div class="commentcount">
                  <a href="#">
                    <span class="icon-bubbles"></span> 8</a>
                  </div>
                </li>
              </div>
            </div>

            <div class="slide"> 
              <div id="shotsByPlayerId">
                <li>
                  <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                  <h3><a href="#"></a>Prozone mall</h3>
                  <div class="likecount">
                   <a href="#">
                     <span class="icon-heart"></span> 14</a>
                   </div>
                   <div class="commentcount">
                    <a href="#">
                      <span class="icon-bubbles"></span> 8</a>
                    </div>
                  </li>
                </div>
              </div>


            </div>
          </div><!-- PORTFOLIO ITEMS END -->
        </div>



        <!-- Popular offers -->

        <div id="portfolio" >
          <div class="portfolio_header" >
            <h3>Popular Offers</h3>
            <hr class="separetor">            
          </div>  
          <!-- PORTFOLIO ITEMS START -->
          <div class="portfolioitems">
            <div class="slider1">
              <div class="slide"> 
                <div id="shotsByPlayerId">
                  <li>
                    <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                    <h3><a href="#"></a>Prozone mall</h3>
                    <div class="likecount">
                     <a href="#">
                       <span class="icon-heart"></span> 14</a>
                     </div>
                     <div class="commentcount">
                      <a href="#">
                        <span class="icon-bubbles"></span> 8</a>
                      </div>
                    </li>
                  </div>
                </div>
                
                <div class="slide"> 
                  <div id="shotsByPlayerId">
                    <li>
                      <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                      <h3><a href="#"></a>Prozone mall</h3>
                      <div class="likecount">
                       <a href="#">
                         <span class="icon-heart"></span> 14</a>
                       </div>
                       <div class="commentcount">
                        <a href="#">
                          <span class="icon-bubbles"></span> 8</a>
                        </div>
                      </li>
                    </div>
                  </div>
                  
                  <div class="slide"> 
                    <div id="shotsByPlayerId">
                      <li>
                        <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                        <h3><a href="#"></a>Prozone mall</h3>
                        <div class="likecount">
                         <a href="#">
                           <span class="icon-heart"></span> 14</a>
                         </div>
                         <div class="commentcount">
                          <a href="#">
                            <span class="icon-bubbles"></span> 8</a>
                          </div>
                        </li>
                      </div>
                    </div>
                    
                    <div class="slide"> 
                      <div id="shotsByPlayerId">
                        <li>
                          <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                          <h3><a href="#"></a>Prozone mall</h3>
                          <div class="likecount">
                           <a href="#">
                             <span class="icon-heart"></span> 14</a>
                           </div>
                           <div class="commentcount">
                            <a href="#">
                              <span class="icon-bubbles"></span> 8</a>
                            </div>
                          </li>
                        </div>
                      </div>
                      

                    </div>
                  </div><!-- PORTFOLIO ITEMS END -->
                </div>


                <!-- Latest offer -->
                <div id="portfolio" >
                  <div class="portfolio_header" >
                    <h3>Latest Offers</h3>
                    <hr class="separetor">            
                  </div>  
                  <!-- PORTFOLIO ITEMS START -->
                  <div class="portfolioitems">
                    <div class="slider1">
                      <div class="slide"> 
                        <div id="shotsByPlayerId">
                          <li>
                            <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                            <h3><a href="#"></a>Prozone mall</h3>
                            <div class="likecount">
                             <a href="#">
                               <span class="icon-heart"></span> 14</a>
                             </div>
                             <div class="commentcount">
                              <a href="#">
                                <span class="icon-bubbles"></span> 8</a>
                              </div>
                            </li>
                          </div>
                        </div>
                        
                        <div class="slide"> 
                          <div id="shotsByPlayerId">
                            <li>
                              <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                              <h3><a href="#"></a>Prozone mall</h3>
                              <div class="likecount">
                               <a href="#">
                                 <span class="icon-heart"></span> 14</a>
                               </div>
                               <div class="commentcount">
                                <a href="#">
                                  <span class="icon-bubbles"></span> 8</a>
                                </div>
                              </li>
                            </div>
                          </div>
                          
                          <div class="slide"> 
                            <div id="shotsByPlayerId">
                              <li>
                                <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                                <h3><a href="#"></a>Prozone mall</h3>
                                <div class="likecount">
                                 <a href="#">
                                   <span class="icon-heart"></span> 14</a>
                                 </div>
                                 <div class="commentcount">
                                  <a href="#">
                                    <span class="icon-bubbles"></span> 8</a>
                                  </div>
                                </li>
                              </div>
                            </div>
                            
                            <div class="slide"> 
                              <div id="shotsByPlayerId">
                                <li>
                                  <a href="#"><img alt="img alt" src="img/cloth.jpg"></a>
                                  <h3><a href="#"></a>Prozone mall</h3>
                                  <div class="likecount">
                                   <a href="#">
                                     <span class="icon-heart"></span> 14</a>
                                   </div>
                                   <div class="commentcount">
                                    <a href="#">
                                      <span class="icon-bubbles"></span> 8</a>
                                    </div>
                                  </li>
                                </div>
                              </div>
                              

                            </div>
                          </div><!-- PORTFOLIO ITEMS END -->
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

</body>

</html>