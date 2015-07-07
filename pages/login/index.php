<?php require('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(isset($title)){ echo $title; }?></title>

    <link rel="icon" href="img/favicon.png">
    <!-- web page icon on the Apple iPhone, iPod Touch, and iPad. -->
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />

    <!--link-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/simple-line-icons.css">

    <link rel="stylesheet" href="../css/stylefilter.css" media="screen">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/styles1.css" />
    <script src="../js/filter.js"></script>
    <!-- slider -->
    <link href="../css/jquery.bxslider.css" rel="stylesheet">
    <script src="../js/jquery-latest.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.bxslider.min.js"></script>


    <!--<script-->
    <!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->


    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">
    <script type="text/javascript">
        $(document).ready(function(){

            $("#citySuggestion").hide();

            $('.slider1').bxSlider({
                slideWidth: 300,
                minSlides: 1,
                maxSlides: 4,
                slideMargin: 10
            });
//          Atul
            $('body').on('change','#selCity',function(){
                $('#selectedCity').val($(this).val());
            });

            $('body').on('click','.category',function(){
//                alert('hi');
                var city = $("#selectedCity").val();
                if(city != "")
                {
                    $("#myForm").submit();
                }
            });
//          Atul

        });

    </script>

</head>
<body data-spy="scroll">
<header>
    <div id="hero">
        <!-- <img class="heroshot wow bounceInUp"  src="img/clothings-main.jpg"  id="img1" >
        <img class="heroshot wow bounceInUp"  src="img/accessories_main.jpg"  id="img2" style="display:none"> -->
        <img class="heroshot wow bounceInUp"  src="../img/topimage.jpg"  id="img3">
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
                <a class="navbar-brand" href="../index.php">
                    <span class="brandicon icon-grid"></span>
                    <span class="brandname">Loot On Sale</span>
                    <p><span class="brandname_tagline">Dont just buy,buy it on sale </span></p><!-- or Cost next to nothing -->
                </a>
            </div>


            <div class="sboxmain">
                <div class="stext">I am in    </div>
                <div class="sicon">
                    <a class="aicon"><img src="../img/location_icon.png"></a>
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
            </div>
            <!--Atul-->
            <!--            <div style="display: inline">

                        <form name="searchForm" action="searchResult.php" method="post">
                            <input type="hidden" id="searchCityId" name="searchCityId" value="" />
                            <input style="width: 300px;margin-top: 16px" type="text" name="searchCity" id="searchCity" value="" placeholder="Search City" autocomplete="off">
                            <input type="submit" name="btnSearch" id="btnSearch" value="Search" style="width: 120px"/>

                        </form>

                        </div>-->
            <!--Atul-->
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right" style="font-size: 15px;margin-top:-60px">
<!--                    <li><a href="http://nikhil.ultimategroups.com/login/login.php"><span class="btnicon icon-user"></span>Login</a></li>-->
<!--                    <li><a href="http://nikhil.ultimategroups.com/login/"><span class="btnicon icon-user"></span>Signup</a></li>-->
                </ul>
            </div>
            <div id="citySuggestion" style="margin-left: 23%;margin-top: -10px"></div>

        </div>
    </nav>
</header>

<!--Start of main login form -->
<?php

//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: memberpage.php'); } 

//if form has been submitted process it
if(isset($_POST['submit'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}
			
	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'Email provided is already in use.';
		}
			
	}


	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = md5(uniqid(rand(),true));

		try {

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email,active) VALUES (:username, :password, :email, :active)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion
			));
			$id = $db->lastInsertId('memberID');

			//send email
			$to = $_POST['email'];
			$subject = "Registration Confirmation";
			$body = "Thank you for registering at demo site.\n\n To activate your account, please click on this link:\n\n ".DIR."activate.php?x=$id&y=$activasion\n\n Regards Site Admin \n\n";
			$additionalheaders = "From: <".SITEEMAIL.">\r\n";
			$additionalheaders .= "Reply-To: ".SITEEMAIL."";
			mail($to, $subject, $body, $additionalheaders);

			//redirect to index page
			header('Location: index.php?action=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Sing Up';

//include header template
//require('layout/header.php');
?>


<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Please Sign Up</h2>
				<p>Already a member? <a href='login.php'>Login</a></p>
				<hr>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'joined'){
					echo "<h2 class='bg-success'>Registration successful, please check your email to activate your account.</h2>";
				}
				?>

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="2">
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="4">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
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


<?php 
//include header template
//require('layout/footer.php');
?>

