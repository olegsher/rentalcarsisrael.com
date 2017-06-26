<?php 
if(isset($_POST['submit'])){
    $to = "rentcargroup@privateisrael.com"; // this is your Email address
    $reqemail = "rentcargroup@privateisrael.com";

    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
    $phone = $_POST['phone'];    
    $car_select = $_POST['car-select'];
    $message = $_POST['message'];
   

    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['car-select'] . " " . "rentalcarsisrael.com";    
            $message = '<html lang="en"><body>';
            $message .= '<hr />';
            $message .= 'Rental cars Israel http://www.rentalcarsisrael.com +972-58-7710101';
            $message .= '<hr />';
$message .= '<img src="http://www.rentalcarsisrael.com/images/Thrifty-Israel.jpg" alt="Rental cars Israel +972-58-7710101" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Car Category:</strong> </td><td>" . strip_tags($_POST['car-select']) . "</td></tr>";
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
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Hire Mazda3, 18$, car rental israel,car hire israel,cheap car rental israel,car rental israel cheap,hire car israel,car hire israel compare,luxury car rental israel" />
        <meta  name="description"  content="Hire Mazda 3 in Israel starting 18$. Minivans and Luxury cars for rent in Israel, economy and compact car classes for book online" />
        <meta property="fb:app_id" content="1322511981092474" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en" />
        <meta property="og:url" content="http://www.rentalcarsisrael.com" />
        <meta property="og:image" content="http://www.rentalcarsisrael.com/images/thankyoucar.png"/>
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="640" />
        <meta property="og:image:height" content="320" />
        <meta property="og:title" content="Hire Mazda 3 in Israel starting 18$, Minivans and Luxury cars for rent in Israel, economy and compact classes for book online" />
        <meta property="og:description" content="Hire Mazda 3 in Israel starting 18$/day,car rental israel,car hire israel,cheap car rental israel,car rental israel cheap,hire car israel,car hire israel compare,luxury car rental israel"/>
  <title>Hire Mazda 3 in Israel starting 18$</title>
        
        
        
        
        
        
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
        
 
<link rel="shortcut icon" href="favicon.ico">
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
        <div class="container">
            
            
        <div class="container-fluid">
              <h1>Hire Mazda 3 in Israel starting 18$</h1>
              <div class="row">
                <div class="col-sm-6 biseller-column" >
<!--                  <a href="single.html">	-->
                    <img src="images/i.png" alt="Hire Mazda 3 in Israel starting 18$" class="img-responsive"/>
                    <span class="price">WhatsApp/Viber +972-58-7710101</span>
<!--                  </a>-->
                </div>
                <div class="col-sm-6 ad-info">
                  <h2>Rental Car Category: I(SDAR) 
                      <br>Mazda 3 or Similar</h2>
                    <img src="images/blue_star_20px.png" alt="Hire Mazda 3 in Israel starting 18$" />Air Conditioning 
                    <img src="images/blue_star_20px.png" alt="Hire Mazda 3 in Israel starting 18$" />Automatic Transmission<br>
                    Hyundai i35, Subaru Impreza, Renault Megan, Skoda Roomster, 
                    Toyota Corolla, Ford Focus, Kia Forte, Mitsubishi Lancer, Hyundai i30, Kia Ceed, Citroen C-Elysee or similar
                    <br>Car models are for guidance only and similar car models may be supplied
                    <br>Minimum age required is 23 + D.L. valid for at least one year.

                <h5 style="color:red;">No credit card fees
                    <br>No amendment fees
                    <br>24/7 phone support

 </h5>

                  <h4>Available for rent in following branches in Israel: </h4>
                  Ben Gurion Int'l Airport, Tel Aviv, Eilat, Jerusalem, Kfar Saba, Natanya, Ashdod, Bnei Brak, 
                            Rehovot, Herzliya, Petach Tikva, Holon, Rishon LeTsiyon
                
                
                <h4>Fill the form and our representative will contact you soon</h4>
                <form action="#" method="post" name="car-select-form" id="car-select-form">
                    
                    <input type="text" name="First_name" required class="form-control" placeholder="First and Last Name">  
                    <input type="hidden" name="car-select" value="Category I">  
                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required id="email" class="form-control" placeholder="Email address">  
                      <input type="text" name="phone" required class="form-control" placeholder="Phone/WhatsApp/Viber" >  
                      <input type="text" name="message" class="form-control" placeholder="message">      
                    <div class="clearfix"></div>
                    <input type="submit" class="submit" name="submit" value="Send Form" id="checkoutModalLabel">
                  </form>           
                <h5>or message us by Whatsapp/Viber +972-58-771-0101</h5>
                
                
                </div>
              </div>
        </div>
<h4>Rental Conditions</h4>
<br>VAT: Israeli passport holders are subject to pay VAT by law including dual citizenship passport holders. 
<br>Only tourists with B2 or B3 visa class permits are waived. 
<br>Important: The Visa Permit must be presented at the rental desk for VAT to be waived. 
<br>Airport Fee: One time charge of $39.00 will apply for Pickup or Return of vehicle at the Ben Gurion Airport location. 
<br>One Way Rentals are available FREE within all locations except for rentals To/From Eilat. One way fee for rentals To/From Eilat will apply as follows: 
<br>1-2 Day Rentals: $200.00 
<br>3 Days and over: FREE 
<br>Loss Damage Waiver & Theft Protection (CDW/LDW & TP) cover damages caused to the vehicle, except the minimum Excess Charges based on car group. 
<br>An Excess Charge of $500.00-$1,000.00 will apply in case of damage according to vehicle type. CDW/LDW does not cover damage caused to the Tires, Windscreen, Rooftop and underbody damage to the vehicle that will be charged accordingly. 
<br>Super CDW is optional and will reduce the renter’s responsibility to Zero in case of damage to the vehicle. Can be purchased only in conjunction with CDW/LDW & TP. 
<br>SCDW does not cover damage caused to the Tires, Windscreen and Rooftop. 
<br>Super TP is optional and will reduce the renter’s responsibility to Zero in case of theft of the rental vehicle. Can be purchased only in conjunction with CDW/LDW & TP. 
<br>3PLC (Limited Coverage) - Mandatory for customers that decline CDW/LDW & TP, provided these are covered by the credit card company. 
<br>To decline CDW/LDW & TP, the renter must have a US issued World Master Card or Canadian issued Gold/Platinum Visa/Master Card or Visa Premier and provide written proof the credit card has relevant coverage for car rentals in Israel. 
<br>The 3PLC coverage is mandatory in Israel as a minimum coverage if CDW/LDW & TP are declined. Required to cover items that are not covered by the credit card company such as blowout’s, tire/trim damage not caused by theft, vandalism or is not a result of vehicle collision and third party damage. 
<br>CDW/LDW & TP protection coverage’s must be purchased if sufficient coverage by the credit card company is not supplied for rentals in Israel. 
<br>Only US issued World Master Card or Canadian issued Gold/Platinum Visa/Master Card and Visa Premier can be used to waive CDW/LDW & TP. 
<br>Maximum security deposit is up to the full value of the vehicle if the CDW/LDW & TP protection coverage’s are declined. 
<br>Protection Coverage’s offered by Third Party websites will NOT be accepted. Travel Guard coverage is NOT accepted. 
<br>Valid for rentals of maximum 28 consecutive days. 
<br>Delivery & Collection is available on request and requires confirmation. 
<br>Up to 15 KM from Pickup location: $15.00 
<br>Up to 30 KM from Pickup location: $25.00 
<br>Up to 50 KM and over from Pickup location: $40.00 
<br>Car models are for guidance only and similar car models may be supplied. 
<br>Minimum charge per rental day is 24 hours. Late returns of 1 hour and over will be charged at 1/3 of the daily rate. 
<br>Late returns of 3 hours and over will be calculated as one extra day. 
<br>Use of vehicle will be at full responsibility of renter as shown on rental agreement. Every additional driver must be registered on the rental agreement as well. 
<br>Crossing and exiting Israel borders and/or the Palestinian Authority Territories with the rental vehicle is strictly forbidden. 
<br>Fuel: Supplied with a full tank and recommended to return full. Vehicles returned with missing fuel will be charged an additional service fee of 30%. 
<br>Early return of vehicle prior to the original return date will be charged according to the relevant rental period rate (Daily, Weekly, Monthly, Etc). 
<br>Parking tickets, Traffic violations & Toll roads: An additional service fee of ILS 50.00 will apply for unpaid tickets ticket violations and toll road fees.  
<br>Free Sell applies for the following car groups: B(EBMR), C(ECAR), D(CCAR), E(CDAR, F(IDAR), I(SDAR), H(FDAR), M(PDAR). All other car groups require specific confirmation. Cancellations must be sent by 24 hours prior to Pickup Time. Cancellations for 7-8-9 seat vehicles must be sent 48 hours prior to Pickup. 1 day charge will apply for No Shows. 
<br>Minimum Rental Age of driver is 21 based on car group and requirements as shown below: 
<br>Groups B(EBMR), Q(MBAR), C(ECAR), D(CCAR), E(CDAR): Minimum age required is 21 (Additional fee applies) + Drivers License valid for at least one year. 
<br>Groups F(IDAR), I(SDAR), IW(IWAR), H(FDAR), M(PDAR), MH(SXAH), J(IFAR), T(CVMR): Minimum age required is 23 + D.L. valid for at least one year. 
<br>Groups R(LDAR), G(IVAR), U(PWAR), V(MVAR), V8(SVAR), S(PVMR), Y(PVMR), Z(PVAR): Minimum age is 25 + D. L. valid for at least two years (Group R minimum 3 years). 
<br>Group P(XDAR), W(WXAR): Minimum age required is 28 + Drivers License valid for at least five years. 
<br>Underage Driver: An additional fee of $10.00 per day applies for drivers 21-23 years of age (maximum charge $75.00). 
<br>Additional Driver: $2.00 per day (maximum charge $50.00). 
<br>Child Seat: $5.00 per day (maximum charge $50.00). 
<br>Navigation System (GPS): $10.00 per day (maximum charge $75.00). 
<br>Roadsafe Assistance: $4.00 per day (maximum charge $100.00). 
<br>Express assistance for the following services: Keys locked in the car, lost or broken, Flat tire assistance, Out of fuel or Battery failure? We'll send assistance to get your vehicle started quickly. 
<br>Payment Methods: Major credit cards are accepted to cover rental costs and additional charges: Visa, MasterCard, Amex, Diners. 
<br>Credit Card must be on renter's name.         
            
            
            
            
        </div>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
    </body>
</html>
