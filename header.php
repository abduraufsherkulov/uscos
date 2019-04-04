<?php 
if(isset($_POST['submit'])){
    $to = "abduraufsherkulov@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="theme-color" content="#e8293b"/>
	<meta name="HandheldFriendly" content="true" />
	<title>USCOS</title>
	<meta name="author" content="https://deadline.uz">
	<meta name="description" content="USCOS">
	<meta name="keywords" content="USCOS, distribution, distributor, wharehouse, retailer, retail, Uzbekistan, Tashkent">

	<!-- SOCIAL MEDIA META -->
	<meta property="og:description" content="USCOS">
	<meta property="og:site_name" content="USCOS">
	<meta property="og:title" content="USCOS">
	<meta property="og:type" content="website">
	<meta property="og:url" content="index.php">

	<!-- TWITTER META -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@USCOS">
	<meta name="twitter:creator" content="@USCOS">
	<meta name="twitter:title" content="USCOS">
	<meta name="twitter:description" content="USCOS">

	<!-- FAVICON FILES -->
<!-- 	<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
	<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
	<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
	<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon"> -->
	<link href="ico/favicon.png" rel="shortcut icon">

	<!-- CSS FILES -->
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/odometer.min.css">
	<link rel="stylesheet" href="css/fancybox.min.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="preloader">
		<div class="layer"></div>
		<div class="layer"></div>
		<div class="layer"></div>
		<div class="layer"></div>
		<div class="inner" data-tilt data-tilt-perspective="2000">
			<figure class="fadeInUp animated"> <img src="images/preloader.gif" alt="Image"> </figure>
			<span class="typewriter" id="typewriter"></span> </div>
			<!-- end inner --> 
		</div>
		<!-- end preloader -->
		<div class="transition-overlay">
			<div class="layer"></div>
			<div class="layer"></div>
			<div class="layer"></div>
			<div class="layer"></div>
		</div>
		<!-- end transition-overlay -->
		<div class="navigation-menu">
			<div class="bg-layers"> <span></span> <span></span> <span></span> <span></span> </div>
			<!-- end bg-layers -->
			<div class="inner" data-tilt data-tilt-perspective="2000">
				<div class="menu">
					<ul>
						<li><a href="index.php">HOME</a>
<!-- 							<ul>
								<li><a href="index-2.php">Slider</a></li>
								<li><a href="index-video.php">Video</a></li>
								<li><a href="index-particles.php">Particles</a></li>
								<li><a href="index-perspective.php">Perspective</a></li>
								<li><a href="news.php">NEWS</a></li>
							</ul> -->
						</li>
						<li><a href="services.php">SERVICES</a></li>
						<li><a href="about_us.php">ABOUT US</a></li>
						<li><a href="FAQs.php">FAQS</a></li>
						<li><a href="contact_us.php">CONTACT US</a></li>
					</ul>
				</div>
				<!-- end menu -->
				<!-- <blockquote>Let's create useful website for you ?</blockquote> -->
			</div>
			<!-- end inner --> 
		</div>
		<!-- end navigation-menu -->
		<nav class="navbar">
			<div class="left"> <a href="direction.php"></a> </div>
			<!-- end left -->
			<div class="logo"> <a href="index.php"><img src="images/logo.png" alt="Image"></a> </div>
			<!-- end logo -->
			<div class="right">
				<ul class="language">
					<li><a href="#">EN</a></li>
					<li><a href="#">RU</a></li>
				</ul>
				<div class="hamburger-menu"><b>MENU</b>
					<div class="hamburger" id="hamburger-menu"> <span></span> <span></span> <span></span> </div>
				</div>
				<!-- end hamburger-menu --> 
			</div>
			<!-- end right --> 
		</nav>
<!-- end navbar -->