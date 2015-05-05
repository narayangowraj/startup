

<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="Transfers - Private Transport and Car Hire HTML Template" />
	<meta name="description" content="Transfers - Private Transport and Car Hire HTML Template">
	<meta name="author" content="themeenergy.com">
	
	<title>Transfers - Right sidebar page</title>
	
	<link rel="stylesheet" href="css/theme-pink.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700">
	<link rel="shortcut icon" href="images/favicon.ico">
	
	<!-- pop up -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
  	
    <!-- Header -->
	<header class="header" role="banner">
		<div class="wrap">
			<!-- Logo -->
			<div class="logo">
				<a href="index.html" title="Transfers"><img src="images/transfers.jpg" alt="Transfers" /></a>
			</div>
			<!-- //Logo -->
			
			<!-- Main Nav -->
			<nav role="navigation" class="main-nav">
				<ul>
					<li class="active"><a href="index.html" title="Home">Home</a></li>
						<li><a href="destination-single.html" title="List Your Vehicle">List Your Vehicle</a></li>
						<li><a href="tailor-made.html" title="Dashboard">Dashboard</a></li>
						<li><a href="#" title="Learn More">Learn More</a>
							<ul>
								<li><a href="about.html" title="About Us">About Us</a></li>
								<li><a href="faq.html" title="FAQ">FAQ</a></li>
								<li><a href="contact.html" title="Contact Us">Contact Us</a></li>
							</ul>
						</li>
						<li><a href="left-sidebar-page.html" title="Your Car">Your Car</a></li>
						<li></li><li></li><li></li>
						<li><a href="login.html" title="Login"><B>Login</B></a>/<a href="register.html" title="Register"><B>Register</B></a></li>
				</ul>
			</nav>
			<!-- //Main Nav -->
		</div>
	</header>
	<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Welcome</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
						
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		
		
		<div class="wrap">
			<div class="row">				
				<!--- Content -->
				<div class="three-fourth content">
					<!-- Post -->
					<article class="single hentry">
						<div class="entry-featured">
							<img src="http://placehold.it/1024x768" alt="Video here" />
						</div>
						<div class="entry-content">
							<h2>Welcome To Ridengine</h2>
							<p>Please activate your account. Enter the validation code sent to your email address</p><br>
							<input type="submit" value="Activate" class="alert">
   								 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="submit_form">
   									 <input type="hidden" id="activation" name="activation">
    							</form>
    
   							 <script>
        						$(document).on("click", ".alert", function(e) {
           							 bootbox.prompt("Enter Your Activation Code", function(result) {                
  								if (result === null) {                                                                          
  								} else {
    			    				document.getElementById("activation").value = result;
    								document.getElementById("submit_form").submit();                   
  								}
							});
        				});
    						</script>
							<p></p>
							<p></p>
							<p></p>
							<p></p>
							<p></p>
							<p></p>
							
						</div>
					</article>
					<!-- //Post -->
				</div>
				<!--- //Content -->
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					
					<!-- //Widget -->
					
					<!-- Widget -->
					<div class="widget">
						<h4>Why book with us?</h4>
						<div class="textwidget">
							<h5>Reliable and Safe</h5>
							
							<h5>No hidden fees</h5>
							
							<h5>We’re Always Here</h5>
							
						</div>
					</div>
					<!-- //Widget -->
					
					<!-- Widget -->
					<div class="widget">
						<h4>Advertisment</h4>
						<a href="#"><img src="http://placehold.it/800x600" alt="" /></a>
					</div>
					<!-- //Widget -->
					
					<!-- Widget -->
					<div class="widget">
						<h4>Need help booking?</h4>
						<div class="textwidget">
							<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
							<p class="contact-data"><span class="ico phone black"></span> +1 555 555 555</p>
						</div>
					</div>
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
			</div>
		</div>
	</main>
	<!-- //Main -->
	
	<!-- Footer -->
	<footer class="footer black" role="contentinfo">
		<div class="wrap">
			<div class="row">
				<!-- Column -->
				<article class="one-half">
					<h6>About us</h6>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Need help?</h6>
					<p>Contact us via phone or email:</p>
					<p class="contact-data"><span class="ico phone"></span> +1 555 555 555</p>
					<p class="contact-data"><span class="ico email"></span> <a href="mailto:help@transfers.com">help@transfers.com</a></p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Follow us</h6>
					<ul class="social">
						<li class="facebook"><a href="#" title="facebook">facebook</a></li>
						<li class="twitter"><a href="#" title="twitter">twitter</a></li>
						<li class="gplus"><a href="#" title="gplus">google plus</a></li>
						<li class="linkedin"><a href="#" title="linkedin">linkedin</a></li>
						<li class="vimeo"><a href="#" title="vimeo">vimeo</a></li>
						<li class="pinterest"><a href="#" title="pinterest">pinterest</a></li>
					</ul>
				</article>
				<!-- //Column -->
			</div>
			
			<div class="copy">
				<p>Copyright 2014, Themeenergy. All rights reserved. </p>
				
				<nav role="navigation" class="foot-nav">
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="Blog">Blog</a></li>
						<li><a href="#" title="About us">About us</a></li>
						<li><a href="#" title="Contact us">Contact us</a></li>
						<li><a href="#" title="Terms of use">Terms of use</a></li>
						<li><a href="#" title="Help">Help</a></li>
						<li><a href="#" title="For partners">For partners</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
	<!-- //Footer -->
	
	<!-- Preloader -->
	
	<!-- //Preloader -->

    <!-- jQuery -->
    
	
  </body>
</html>
  
  
<?php


error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['submit_form']))
{

include 'smtp/Send_Mail.php';


$first_name = addslashes($_POST['fname']);
$last_name = addslashes($_POST['lname']);
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);



$salt = bin2hex(openssl_random_pseudo_bytes(16));
$activation_code = bin2hex(openssl_random_pseudo_bytes(10));
$pwd_hash = hash('sha256', $password.$salt);
$time_now = date("Y-m-d H:i:s");

include 'config/db_config.php';

// configuration

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "ridengine";

// Create connection
$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (first_name, last_name, username, password,salt,dt,activation_code)
VALUES ('$first_name', '$last_name', '$username','$pwd_hash','$salt','$time_now','$activation_code')";


if (mysqli_query($conn, $sql)) {

    echo '<script>
        $(document).ready(function(e) {
            bootbox.alert("User Registration Successful", function() {
            });
        });
    </script>';

	// Send Email
	include 'classes/library.php'; // include the library file
	include "classes/class.phpmailer.php"; // include the class name
	$email = $username;
	$mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail -> SMTPAuth = true;  //Whether to use SMTP authentication
	$mail -> SMTPSecure = "tls";
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587 
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("ridengine@gmail.com", "Reply name"); //reply-to address
	$mail->SetFrom("ridengine@gmail.com", "Ridengine"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = "User Registration-Ridengine"; //Subject od your mail
	$mail->AddAddress($email, "Asif18"); //To address who will receive this email
	$mail->MsgHTML("<b>Welcome To Ridengine. Your Activation Code: ".$activation_code); //Put your body of the message you can place html code here
	$send = $mail->Send(); //Send the mails

} 
else {
    echo '<script>
        $(document).ready(function(e) {
            bootbox.alert("Registration Unsuccessful", function() {
            });
        });
    </script>';
}

mysqli_close($conn);


}
?>

<?php
if (isset($_POST['activation']))
{
    $code = htmlspecialchars($_POST["activation"]);
    echo $code;
    if($code == "1234")
    {
    	echo '<script>
        $(document).ready(function(e) {
            bootbox.alert("Account Activated", function() {
            });
        });
    	</script>';
    }
    else
    {
    	echo '<script>
        $(document).ready(function(e) {
            bootbox.alert("Incorrent Activation Code", function() {
            });
        });
    	</script>';
    }
}
    
?>