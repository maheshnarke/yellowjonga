<?php
include_once ('../db.php');
define('SITEEMAIL','support@ultimategroups.com');
define('DIR','http://http://nikhil.ultimategroups.com/login/');
include('../password.php'); 
$pass = new Password();

if(strlen($username) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = 'SELECT username FROM members WHERE username ="'.$_POST['username'].'" ';
                $result = $conn->query($stmt);
                $username = "";
                while ($row = $result->fetch_assoc()) 
                {    
                    $username = $row['username'];
                }

		if(!empty($username)){
			$error[] = 'Username provided is already in use.';
		}
			
	}

        if(strlen($_POST['mobile']) < 10){
		$error[] = 'Mobile No. is too short.';
	}
        
	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['confPassword']) < 3){
		$error[] = 'Confirm password is too short.';
	}

	if($_POST['password'] != $_POST['confPassword']){
		$error[] = 'Passwords do not match.';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = 'SELECT email FROM members WHERE email = "'.$_POST['email'].'"';
		
                $result = $conn->query($stmt);
                $username = "";
                while ($row = $result->fetch_assoc()) 
                {    
                    $email = $row['email'];
                }
		if(!empty($email)){
			$error[] = 'Email provided is already in use.';
		}
			
	}


	//if no errors have been created carry on
        if(!isset($error)){

                //hash the password
                $hashedpassword = $pass->password_hash($_POST['password'], PASSWORD_BCRYPT);

                //create the activasion code
                $activasion = md5(uniqid(rand(),true));



                        //insert into database with a prepared statement
                        $stmt = 'INSERT INTO members (username,password,email,active) VALUES ("'.$_POST['username'].'", "'.$hashedpassword.'", "'.$_POST['email'].'", "'.$activasion.'")';
                        $result = $conn->query($stmt);
                        //send email
                        $to = $_POST['email'];
                        $id = $conn->insert_id;
                        $subject = "Registration Confirmation";
                        $body = "Thank you for registering at demo site.\n\n To activate your account, please click on this link:\n\n ".DIR."activate.php?x=$id&y=$activasion\n\n Regards Site Admin \n\n";
                        $additionalheaders = "From: <".SITEEMAIL.">\r\n";
                        $additionalheaders .= "Reply-To: ".SITEEMAIL."";
                        mail($to, $subject, $body, $additionalheaders);
                        
                        if($result)
                            echo 'success';
                        else                               
                            echo 'error';
                }       
        else
        {
            $error = implode('|',$error);
            echo $error;            
            die;
        }

