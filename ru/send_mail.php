<?php
if(isset($_POST['submit'])){
    $to = "rentcargroup@privateisrael.com"; // this is your Email address
    #$to = "rentcar@vastama.com"; // this is your Email address
    $reqemail = "rentcargroup@privateisrael.com";
    #    $reqemail = "admin@sher.biz";
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
    $last_name = $_POST['Last_name'];
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
    $GPS = $_POST['GPS'];
    $addDriver = $_POST['addDriver'];
    $RoadSafe = $_POST['RoadSafe'];
    $Tour = $_POST['tour'];
    
    $message = $_POST['message'];
    
    //    $headers = "From:" . $from;
    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    //    $headers = "Return-path: " . strip_tags($reqemail) . "\r\n";
    //    $headers .= "CC: admin@vastama.com\r\n";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['Last_name'] . " " . $_POST['car-select'] . " " . "rentalcarsisrael.com";
    $message = '<html lang="ru"><body>';
    $message .= '<hr />';
    $message .= 'Бронирование автомобиля в Израиле на http://www.rentalcarsisrael.com +972-58-7710101';
    $message .= '<hr />';
    $message .= '<img src="http://www.rentalcarsisrael.com/images/europcar.jpg" alt="Бронирование автомобиля в Израиле +972-58-7710101" />';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['Last_name']) . "</td></tr>";
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
    $message .= "<tr><td><strong>Tour:</strong> </td><td>" . strip_tags($_POST['tour']) . "</td></tr>";
    $message .= "<tr><td><strong>message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
    
    
    mail($to,$subject,$message,$headers);
    
    $subject2 = "Ваше бронирование автомобиля в Израиле на http://www.rentalcarsisrael.com +972-58-7710101";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: office@vastama.com\r\n";
    //    $headers2 = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
    // $message2 = "test";
    mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender
    header('Location: http://www.rentalcarsisrael.com/ru/thankyou.php');
}
?>