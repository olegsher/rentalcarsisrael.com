<?php 
if(isset($_POST['submit'])){
    $to = "rentcargroup@privateisrael.com"; // this is your Email address
#$to = "rentcar@vastama.com"; // this is your Email address    
$reqemail = "rentcargroup@privateisrael.com";
#    $reqemail = "admin@sher.biz";
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
//    $last_name = $_POST['Last_name'];
    $phone = $_POST['phone'];
    
    $car_select = $_POST['car-select'];
    $pickup_location = $_POST['pickup-location'];
    $pickup_date = $_POST['pickup-date'];
    $pickup_time = $_POST['pickup-time'];
    $dropoff_location = $_POST['dropoff-location'];
    $dropoff_date = $_POST['dropoff-date'];    
    $dropoff_time = $_POST['dropoff-time'];
    
    $age = $_POST['age'];
    $DriverExperience = $_POST['DriverExperience'];
    
    $SuperCDW = $_POST['SuperCDW'];
    $SuperTP = $_POST['SuperTP'];
    $childseat = $_POST['childseat'];
//    $GPS = $_POST['GPS'];
    $addDriver = $_POST['addDriver'];
//    $RoadSafe = $_POST['RoadSafe'];    
//    $Tour = $_POST['tour'];
    
    $message = $_POST['message'];
   
//    $headers = "From:" . $from;
    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
//    $headers = "Return-path: " . strip_tags($reqemail) . "\r\n";
//    $headers .= "CC: admin@vastama.com\r\n";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['car-select'] . " " . "rentalcarsisrael.com";    
            $message = '<html lang="en"><body>';
            $message .= '<hr />';
            $message .= 'Rental car Israel http://www.rentalcarsisrael.com +972-58-7710101';
            $message .= '<hr />';
$message .= '<img src="http://www.rentalcarsisrael.com/images/Thrifty-Israel.jpg" alt="Rental car Israel +972-58-7710101" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
//$message .= "<tr style='background: #eee;'><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['Last_name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Car Category:</strong> </td><td>" . strip_tags($_POST['car-select']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Pickup location:</strong> </td><td>" . strip_tags($_POST['pickup-location']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Pickup date:</strong> </td><td>" . strip_tags($_POST['pickup-date']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Pickup time:</strong> </td><td>" . strip_tags($_POST['pickup-time']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Dropoff location:</strong> </td><td>" . strip_tags($_POST['dropoff-location']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Dropoff date:</strong> </td><td>" . strip_tags($_POST['dropoff-date']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Dropoff time:</strong> </td><td>" . strip_tags($_POST['dropoff-time']) . "</td></tr>";
$message .= "<tr><td><strong>Age:</strong> </td><td>" . strip_tags($_POST['age']) . "</td></tr>";
$message .= "<tr><td><strong>Driver Experience:</strong> </td><td>" . strip_tags($_POST['DriverExperience']) . "</td></tr>";
$message .= "<tr><td><strong>SuperCDW:</strong> </td><td>" . strip_tags($_POST['SuperCDW']) . "</td></tr>";
$message .= "<tr><td><strong>SuperTP:</strong> </td><td>" . strip_tags($_POST['SuperTP']) . "</td></tr>";
$message .= "<tr><td><strong>Children seat:</strong> </td><td>" . strip_tags($_POST['childseat']) . "</td></tr>";
// $message .= "<tr><td><strong>GPS:</strong> </td><td>" . strip_tags($_POST['GPS']) . "</td></tr>";
// $message .= "<tr><td><strong>Roadsafe:</strong> </td><td>" . strip_tags($_POST['RoadSafe']) . "</td></tr>";
$message .= "<tr><td><strong>Additional driver:</strong> </td><td>" . strip_tags($_POST['addDriver']) . "</td></tr>";
//$message .= "<tr><td><strong>Tour:</strong> </td><td>" . strip_tags($_POST['tour']) . "</td></tr>";
$message .= "<tr><td><strong>message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


     mail($to,$subject,$message,$headers);
    
    $subject2 = "Rent car in Israel http://www.rentalcarsisrael.com +972-58-7710101";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: office@vastama.com\r\n";
//    $headers2 = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
    // $message2 = "test";
   mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender  
//header('Location: http://www.rentalcarsisrael.com/thankyou.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Rental Cars Israel by Vastama Ltd</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="car rental israel,car hire israel,cheap car rental israel,car rental israel cheap,hire car israel,car hire israel compare,luxury car rental israel" />
<meta  name="description"  content="Minivans and Luxury cars for rent in Israel, economy and compact car classes for book online" />
<meta property="fb:app_id" content="1322511981092474" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="en" />
<meta property="og:url" content="http://www.rentalcarsisrael.com/en" />
<meta property="og:image" content="http://www.rentalcarsisrael.com/images/thankyoucar.png"/>
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="640" />
<meta property="og:image:height" content="320" />
<meta property="og:title" content="Minivans and Luxury cars for rent in Israel, economy and compact classes for book online" />
<meta property="og:description" content="car rental israel,car hire israel,cheap car rental israel,car rental israel cheap,hire car israel,car hire israel compare,luxury car rental israel"/>

<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link rel="shortcut icon" href="favicon.ico">
<!--<link href="css/datepicker.css" rel="stylesheet">-->
  <!-- Main Styles -->
<!--  <link href="../css/styles-red.css" rel="stylesheet">-->
  <script src="js/bootstrap.min.js"></script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>-->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
<body>
<script type="application/ld+json"> { 
"@context" : "http://schema.org",
"@type" : "TravelAgency", 
"name":"Vastama Ltd",
"url":"http://www.rentalcarsisrael.com",
"email":"admin@vastama.com",
"telephone":"972587710101",
"openingHours": [ 
"Su-Sa 09:00-18:00"], 
"aggregateRating":{
"@type":"AggregateRating",
"ratingValue":"5",
"reviewCount":"5"},
"priceRange":"2",
"paymentAccepted":"Visa, Master Card, Amex"
} </script>   
      
    <?php include("index.html"); ?>
    <?php include("book.html"); ?>
    <?php include("pricelist.html"); ?>
    <?php include("branches.html"); ?>    
    <?php include("rentalconditions.html"); ?> 


<!-- footer -->
<!--	<div class="footer animated wow bounceInDown" data-wow-delay="600ms">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid footer-grid1">
					<h3>Follow Us</h3>
					<ul class="social-nav model-8 social-nav1">
						<li><a href="#" class="facebook"><i></i></a></li>
						<li><a href="#" class="twitter"><i> </i></a></li>
						<li><a href="#" class="g"><i></i></a></li>
						<li><a href="#" class="p"><i></i></a></li>
					</ul>
					<p>To take a trivial example, which of us ever undertakes laborious 
						physical exercise, except to obtain some advantage from it.</p>
				</div>
				<div class="col-md-3 footer-grid footer-grid1">
					<h3>Navigation</h3>
					<ul class="footer-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="#about" class="scroll">About</a></li>
						<li><a href="#services" class="scroll">Services</a></li>
						<li><a href="#gallery" class="scroll">Photo Gallery</a></li>
						<li><a href="#mail" class="scroll">Mail Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid footer-grid1">
					<h3>Newsletter</h3>
					<form>
						<input type="email" value="Enter Your Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email...';}" required="">
						<input type="submit" value="Send" >
					</form>
					<p>Join our newsletter to keep be informed about new templates.</p>
				</div>
				<div class="col-md-3 footer-grid">
				
				</div>
				<div class="clearfix"> </div>
				<div class="footer-grid2-pos animated wow bounceIn" data-wow-delay="800ms">
					<img src="images/2.png" alt=" " class="img-responsive" />
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copy animated wow bounceInUp" data-wow-delay="600ms">
		<div class="container">
			<p>&copy 2016 Vastama Ltd. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>-->
<!-- //footer -->
<div class="footer-copy animated wow bounceInUp" data-wow-delay="600ms">
		<div class="container">
			<p>&copy 2014-2017 Vastama Ltd. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>

</body>
</html>






