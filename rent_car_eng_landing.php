<?php 
if(isset($_POST['submit'])){
   $to = "rentcargroup@privateisrael.com"; // this is your Email address
	$reqemail = "rentcargroup@privateisrael.com";
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
    $phone = $_POST['phone'];    
    $message = $_POST['message'];
    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['car-select'] . " " . "rentalcarsisrael.com";    
            $message = '<html lang="en"><body>';
            $message .= '<hr />';
            $message .= 'Rental car Israel http://www.rentalcarsisrael.com +972-58-7710101';
            $message .= '<hr />';
$message .= '<img src="http://www.rentalcarsisrael.com/images/europcar.jpg" alt="Rental car Israel +972-58-7710101" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr><td><strong>message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


     mail($to,$subject,$message,$headers);
    
    $subject2 = "Rent car in Israel http://www.rentalcarsisrael.com +972-58-7710101";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: office@vastama.com\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
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
<meta name="wot-verification" content="3e0d04601064490e9042"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <link rel="stylesheet" href="css/font-awesome.min.css" />
<style> 
option {
    font-weight: normal;
    display: block;
    white-space: pre;
    min-height: 1.2em;
    padding: 0px 2px 1px;
}    
    
@media (max-width: 1200px)
form .styled-select-car select {
    font-size: 21px;
}
form .styled-select-car select {
    border: none;
    font-size: 24px;
    font-weight: bold;
    width: 100%;
    background-image: none;
    background: #fff;
    -webkit-appearance: none;
    padding: 9px 10px;
    height: 51px;
    outline: none;
}  
.ad-info h5 {
    text-align: left;
    font-size: 17px;
    color: #000;
    margin: 5px 5px 10px;
    line-height: 20px;
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
.biseller-column:hover div.ad-info h5 {
	color:#f3c500;
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
.ad-info span {
    display: block;
    text-align: left;
    line-height: 16px;
    color: #CECDCD;
	margin-left:5px;
}
span.price {
    background-color: rgba(89, 194, 175, 0.79);
    color: #FFF;
    display: block;
    font-size: 16px;
    padding: 7px 15px;
    position: absolute;
    right: 10px;
    text-align: right;
    top: 5px;
    z-index: 2;
    line-height: 1;
	letter-spacing: 3px;
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
.biseller-column:hover span.price{
	background:rgba(243, 197, 0, 0.79);
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
span.price:after {
    position: absolute;
    right: 0;
    top: 50%;
    content: " ";
    margin-top: 14px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 5px 5px 0 0;
    border-color: rgba(89, 194, 175, 0.79) transparent transparent transparent;
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
.biseller-column:hover span.price:after {
    border-color: rgba(243, 197, 0, 0.79) transparent transparent transparent;	
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
</style>  
</head>
<body>
<div class="container">
            
            
        <div class="container-fluid">
              <h1>Ford Focus SW from 20$/day</h1>
              <div class="row">
                <div class="col-sm-6 biseller-column" >
                  <a href="single.html">	
                    <img src="dev/images/iw.png" alt="Ford Focus SW or Similar" class="img-responsive"/>
                    <span class="price">Starting &#36;20</span>
                  </a>
                </div>
                <div class="col-sm-6 ad-info">
                  <h2>Rental Car Category: IW(IWAR) 
                      <br>Ford Focus SW or Similar<br>Automatic, SW</h2>
                    <h3>
                    Rate:
                    <br>20$/Day, 126$/Week, 820$/Month                                                                                        
                    <br>Unlimited km (3-29 days)
                    </h3>
                  <br>Available for rent in following branches in Israel: 
                  <br>Ben Gurion Int'l Airport, Tel Aviv, Eilat, Jerusalem, Kfar Saba, Natanya, Ashdod, Bnei Brak, 
                            Rehovot, Herzliya, Petach Tikva, Holon, Rishon LeTsiyon
                
                
                <br><h4>Fill the form and our representative will contact you soon</h4>
                <form action="#" method="post" name="car-select-form" id="car-select-form">
                    
                    <input type="text" name="First_name" required class="form-control" placeholder="First and Last Name">  
<!--                     <input type="text" name="Last_name" required class="form-control" placeholder="Last Name">  -->
                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required id="email" class="form-control" placeholder="Email address">  
                      <input type="text" name="phone" required class="form-control" placeholder="Phone/WhatsApp/Viber" >  
                      <input type="text" name="message" class="form-control" placeholder="message">      
                    <div class="clearfix"></div>
                    <input type="submit" class="submit" name="submit" value="Send Form" id="checkoutModalLabel">
                  </form>           
                
                
                
                </div>
              </div>
        </div>
            
            
            
            
            
        </div>
    </body>
</html>

