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
$message .= '<img src="http://www.rentalcarsisrael.com/test_lp/logo.png" alt="Rental cars Israel +972-58-7710101" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
//$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
//$message .= "<tr style='background: #eee;'><td><strong>Car Category:</strong> </td><td>" . strip_tags($_POST['car-select']) . "</td></tr>";
//$message .= "<tr><td><strong>message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
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
header('Location: http://www.rentalcarsisrael.com');
    }
?>





<!DOCTYPE html>
<!--[if IE 7 ]><body class="ie ie7"><![endif]-->
<!--[if IE 8 ]><body class="ie ie8"><![endif]-->
<!--[if IE 9 ]><body class="ie ie9"><![endif]-->
<html class='no-js' lang="ru">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	
	<title>Rent cars Israel | rentalcarsisrael.com</title>
        <meta name="keywords" content="" />
        <meta  name="description"  content="" />
        <meta property="fb:app_id" content="1322511981092474" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en" />       
        <meta property="og:url" content="http://www.rentalcarsisrael.com/test_lp/lp_en_rental.php" />
        <meta property="og:image" content="http://www.rentalcarsisrael.com/images/car_key_vastama.jpeg"/>
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="640" />
        <meta property="og:image:height" content="320" />
        <meta property="og:title" content=""/>
        <meta property="og:description" content=""/>
  

	<link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="bootstrap.min-ver.css" media="all">
	<link rel="stylesheet" href="main.css" media="all">
	<link rel="stylesheet" href="responsive.css" media="all">

	<script src="jquery-1.10.1.min.js" ></script>
	<script src="bootstrap.min.js" ></script>
	<script src="modernizr.js" defer></script>
	<script src="jquery.bxslider.min.js" defer></script>
	<script src="jquery.selectbox.js" defer></script>
	<script src="jquery.validate.min.js" defer></script>
	<script src="jquery.colorbox-min.js" defer></script>
	<script src="jquery.BlackAndWhite.js" defer></script>
	<script src="jquery.nivo.slider.pack.js" defer></script>
	<script src="custom.js" defer></script>
	<!-- file loader -->
	<script src="loader.js" defer></script>



<link rel="shortcut icon" href="../favicon.ico">
</head>
<body>
    <?php include("../seo_stat"); ?>
<!--===========================-->
<!--==========Header===========-->
<div class="main-holder">
<header class='main-wrapper header'>
	<div class="container apex">
		<span class="contact-header pull-left small_font">
			+972 58 771 0101 (WhatsApp,Viber)
		</span>

		<ul class='social-transform unstyled pull-right'>
			<li>
				<div class='social-link'>
					<a href='#' target='blank' class='front facebook'></a>
					<a href='#' target='blank' class='back facebook'></a>
				</div>
			</li>
			<li>
				<div class='social-link'>
					<a href='#' target='blank' class='front twitter'></a>
					<a href='#' target='blank' class='back twitter'></a>
				</div>
			</li>
			<li>
				<div class='social-link'>
					<a href='#' target='blank' class='front google'></a>
					<a href='#' target='blank' class='back google'></a>
				</div>
			</li>
			<li>
				<div class='social-link'>
					<a href='#' target='blank' class='front vk'></a>
					<a href='#' target='blank' class='back vk'></a>
				</div>
			</li>
		</ul>
	</div>

	<div class="container end-header">
		<div class="logo pull-left">
			<a href="http://www.rentalcarsisrael.com" class='pull-left'>
				<img src="logo.png" alt="Vastama" title="Vastama">
			</a>
			<h1 class="description-logo">
				Rental cars Israel
			</h1>
		</div>


	</div>
	<div class="shadow"></div>
</header>



<!--===========================-->
<!--==========Content==========-->
<section class='main-wrapper content'>
	<div class="relative">
		<div id="form_slider" class='software_slider' data-anchor="form_slider">
				<ul class="form-bxslider unstyled">
					<li>
						<div class="list-forstart fin_1">
							<h2 style="color:red; font-weight: bolder ;" class="text-center"><abbr title="Suzuki Alto 10$">8 days only - Suzuki Alto $10/day</abbr>(regular price $25.4/day)</h2>
							<ul class='ul-list-slider Open-sansR'>                                                                
								<li>Booking Period: July 18th 2017 – Jul 26th 2017</li>								
								<li>Pickup Period: July 18th – Aug 26th 2017</li>
								<li>Minimum rental days required: 3 days with a maximum of 29 days per rental</li>
                                                                
							</ul>
						</div>
						<div class="img-slider slide-man1 fin_2">
							<img src="slider_man1.png" class="img-responsive" alt="Бюджетные автомобили начиная от 10USD в день">
						</div>
					</li>
					<li>
						<div class="list-forstart fin_1">
							<h2 style="color:red; font-weight: bolder ;" class="text-center"><abbr title="Mazda 3 18$">8 days only - Mazda 3 $18/day</abbr>(regular price $36.95/day)</h2>
							<ul class='ul-list-slider Open-sansR'>                                                                
								<li>Booking Period: July 18th 2017 – Jul 26th 2017</li>								
								<li>Pickup Period: July 18th – Aug 26th 2017</li>
								<li>Minimum rental days required: 3 days with a maximum of 29 days per rental</li>
                                                                
							</ul>
						</div>
						<div class="img-slider slide-man2 fin_2">
							<img src="slider_man2.png" class="img-responsive" alt="Минивены 7+ мест начиная от 35USD в день">
						</div>
					</li>
					<li>
						<div class="list-forstart fin_1">
							<h2 style="color:red; font-weight: bolder ;" class="text-center"><abbr title="Mazda 6 31$">8 days only - Mazda 6 $31/day</abbr>(regular price $53.6/day)</h2>
							<ul class='ul-list-slider Open-sansR'>                                                                
								<li>Booking Period: July 18th 2017 – Jul 26th 2017</li>								
								<li>Pickup Period: July 18th – Aug 26th 2017</li>
								<li>Minimum rental days required: 3 days with a maximum of 29 days per rental</li>
                                                                
							</ul>
						</div>
						<div class="img-slider slide-man3 fin_2">
							<img src="slider_man3.png" class="img-responsive" alt="Люкс класс начиная от 65USD в день">
						</div>
					</li>
				</ul>
				<div class="bx-controls bx-has-pager bx-has-controls-direction" id='dafault_pager'>
					<div class="bx-pager bx-default-pager">
						<div class="bx-pager-item">
							<a class="bx-pager-link pager-Ico1" data-slide-index="0" href=""><span></span></a>
						</div>

						<div class="bx-pager-item">
							<a class="bx-pager-link pager-Ico2 active" data-slide-index="1" href=""><span></span></a>
						</div>

						<div class="bx-pager-item lastItem">
							<a class="bx-pager-link pager-Ico3" data-slide-index="2" href=""><span></span></a>
						</div>
					</div>
				</div>
		</div>

		<div class="container">
			<div class="container relative fin_3 non-come" id='elem-portable'>
				<div class="reg-now">
					<h2 class='medium-h text-center'>Ask for our best prices</h2>
<!--					<h3 class='xsmall-h text-center'>Форма обратной связи</h3>-->
										<form class='reg-now-visible' id='formIndex' method=post >
						<div class="form-control">
							<input type="text" class="form-control" name="First_name" placeholder='Name' value="" data-required>
						</div>
<!--						<div class='control-group'>
							<input type="text" class="form-control" name="input_name[1]" placeholder='Enter your mail' value="" data-required data-pattern="^[-a-z0-9!#$%&'*+/=?^_`{|}~]+(\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*@([a-z0-9]([-a-z0-9]{0,61}[a-z0-9])?\.)*(aero|arpa|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|[a-z][a-z])$">
						</div>-->
						<div class='control-group'>
							<input type="text" class="form-control" name="phone" placeholder='Phone\WhatsApp\Viber' value="" data-required data-pattern="^[0-9]+$">
						</div>



						 <button type="submit" value="Register Now" class='btn submit' name="submit"><i class="icon-success"></i>Send</button>
					</form>
                                        
									</div>
			</div>
<!--                    <h4 class="text-center">Арендуете машину? Хотите путешествовать по  Израилю с профессиональным гидом? тогда наша акция для Вас </h4>
                        <h2 style="color:red; font-weight: bolder ;" class="text-center">Индивидуальные экскурсии по Израилю от лучших гидов за 250$</h2>
                        <p style="color: grey; font-weight: lighter ;" class="text-center">Без посредников, согласование экскурсии и оплата напрямую гиду. 
                            Только лицензионные гиды с огромным опытом и рекомендациями - не упустите ваш шанс</p>
                        <p style="color:red; font-weight: bolder ;" class="text-center">Тел\WhatsApp\Viber\Telegram +972-58-771-0101</p>
                        -->
                    
                    
                    

		<div class="clearfix"></div>
		<div class="spacer1"></div>
		<div class="div-shadow offsetY-1"></div>
	</div>



	<div class="container">
		<h2 class='text-center xxh-Bold'>Special Online prices</h2>
		<h3 class='text-center xmedium-h'>Pickup Period: Aug 26th – Dec 19th 2017</h3>

		<div class='auto-x'>
			<div class="span3 noR-border">
				<table class='table package-services not-favorable table-responsive'>
					<caption class='noR-border'>Suzuki Alto(30 days)</caption>
					 <thead>
						<tr class="bg-primary">
							<td style="background-color: #427121 !important;"><b>$610</b>.00</td>
						</tr>
					 </thead>
					<tbody>
						<tr>
							<td>4500 km included</td>
						</tr>
<!--						<tr>
							<td>Обязательные страховки включены</td>
						</tr>
						<tr>
							<td>Оплата по возвращению машины</td>
						</tr>-->
                                                <tr>
<!--							<td><img src="24.png" class="img-responsive" alt=""/></td>-->
                                        
						</tr>
<!--						<tr class='lastTr'>
							<td><a class='btn buy-now' href='#'>Заполнить форму</a></td>
						</tr>-->
					</tbody>
				</table>
			</div>

			<div class="span3 profitable">
				<table class='table package-services table-responsive'>
					<caption>SUV cars(one day)</caption>
					 <thead>
						<tr>
							<td style="background-color: #fd6103 !important;"><b>$42</b>.00</td>
						</tr>
					 </thead>
					<tbody>
						<tr>
							<td>250 km included</td>
						</tr>
<!--						<tr>
							<td>Обязательные страховки включены</td>
						</tr>						
						<tr>
							<td>Оплата по возвращению машины</td>
						</tr>-->
                                                <tr>
<!--							<td><img src="37.png" class="img-responsive" alt=""/></td>-->
                                        
						</tr>
<!--						<tr class='lastTr'>
							<td><a class='btn buy-now offsetY-5' href='#'>Заполнить форму</a></td>
						</tr>-->
					</tbody>
				</table>
			</div>

			<div class='span3 noL-border'>
				<table class='table package-services not-favorable table-responsive'>
					<caption class='noL-border'>MiniVan 9 seats, aut(one day)</caption>
					 <thead>
						<tr>
							<td style="background-color: #c0272d !important;"><b>$95</b>.00</td>
						</tr>
					 </thead>
					<tbody>
						<tr>
							<td>250 km included</td>
						</tr>
<!--						<tr>
							<td>Обязательные страховки включены</td>
						</tr>
						
						<tr>
							<td>Оплата по возвращению машины</td>
						</tr>-->
                                                <tr>
<!--							<td><img src="40.png" class="img-responsive" alt=""/></td>-->
                                        
						</tr>
<!--						<tr class='lastTr'>
							<td><a class='btn buy-now offsetY-6' href='#'>Заполнить форму</a></td>
						</tr>-->
					</tbody>
				</table>
			</div>
		</div>

		<div class="clearfix"></div>
		<div class="spacer3"></div>
                Important: The Visa Permit must be presented at the rental desk for VAT to be waived.
  
<br>Car models are for guidance only and similar car models may be supplied.  

<hr/>
	</div>





</div>
</section>

<!--===========================-->
<!--=========Footer============-->
<footer class='main-wrapper footer'>



</footer>
	

</div>
<!--<div class="container">
	
Техническая информация о работе сайта: 
<br />Количество посетителей на сайте: 
<?php
echo rand(5, 25);
?>
<br />Доступность сайта: 98.76%
<br />Наши поисковые запросы: 
<p style="color:tear; font-weight: lighter;" >прокат автомобиля в израиле, аренда прокат авто аэропорт, аренда прокат авто бен гурион, аренда прокат авто нетания, прокат авто тель авив, прокат авто тель авив, аренда авто израиль, аренда авто в иерусалиме, прокат авто в эйлате, 
аренда автомобиля в Тель Авиве, аренда автомобиля в Эйлате, аренда автомобиля в Израиле, машина прокат, машина прокат Израиле, аренда машины Израиль, 
avto prokat, prokat mashin, auto arenda, прокат аренда машин, где можно взять машину напрокат, заказать машину, аренда иномарок, arenda avto, 
стоимость аренды машины, израиль прокат автомобилей, съем машины Израиле, аренда авто, прокат машины, сьем автомобиля,автомобиль,  машина Израиле, дешевый прокат автомобиля  
<hr />-->
<p>&copy; 2014-<?php echo date("Y") ?> Vastama Ltd . All Rights Reserved | Design by  <a href="http://www.vastama.com/" target="_blank">Vastama Ltd</a> </p>

</div>
</body>
</html>