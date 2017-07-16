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
//$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Car Category:</strong> </td><td>" . strip_tags($_POST['car-select']) . "</td></tr>";
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
header('Location: http://www.rentalcarsisrael.com/ru/');
    }
?>





<!DOCTYPE html>
<!--[if IE 7 ]><body class="ie ie7"><![endif]-->
<!--[if IE 8 ]><body class="ie ie8"><![endif]-->
<!--[if IE 9 ]><body class="ie ie9"><![endif]-->
<html class='no-js' lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Vastama</title>
	<title>Аренда прокат Hyundai i10 в Израиле | rentalcarsisrael.com</title>
        <meta name="keywords" content="машина прокат, машина прокат Израиле, аренда машины Израиль, avto prokat, prokat mashin, auto arenda, прокат аренда машин, где можно взять машину напрокат, заказать машину, аренда иномарок, 
      arenda avto, стоимость аренды машины, израиль прокат автомобилей, съем машины Израиле, аренда авто, прокат машины, 
      сьем автомобиля,автомобиль,  машина Израиле, дешевый прокат автомобиля" />
        <meta  name="description"  content="Аренда прокат в Израиле Hyundai_i10, Kia_Picanto, Peugeot_107, Skoda_Citigo, Toyota_Aygo и другие 
              автоматическая коробка передач начиная с 25$" />
        <meta property="fb:app_id" content="1322511981092474" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="ru_RU" />       
        <meta property="og:url" content="http://www.rentalcarsisrael.com/ru/catC_Hyundai_i10_4seats_automatic.php" />
        <meta property="og:image" content="http://www.rentalcarsisrael.com/images/car_key_vastama.jpeg"/><meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="640" />
        <meta property="og:image:height" content="320" />
        <meta property="og:title" content="Аренда прокат в Израиле Hyundai_i10, Kia_Picanto, Peugeot_107, Skoda_Citigo, Toyota_Aygo и другие 
              автомат, начиная с 25$. Бронируйте +972-58-7710101"/>
        <meta property="og:description" content="аренда прокат Hyundai i10 в Израиле, аренда прокат автомобиля в Израиле, эконом класс и семейные машины, микроавтобусы и минивэны 7-8-9 мест, машины Люкс класса"/>
  

	<link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="bootstrap.min-ver.css" media="all">
	<link rel="stylesheet" href="main.css" media="all">
	<link rel="stylesheet" href="responsive.css" media="all">

	<script src="jquery-1.10.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="modernizr.js"></script>
	<script src="jquery.bxslider.min.js"></script>
	<script src="jquery.selectbox.js"></script>
	<script src="jquery.validate.min.js"></script>
	<script src="jquery.colorbox-min.js"></script>
	<script src="jquery.BlackAndWhite.js"></script>
	<script src="jquery.nivo.slider.pack.js"></script>
	<script src="custom.js"></script>
	<!-- file loader -->
	<script src="loader.js"></script>




</head>
<body>
<!--===========================-->
<!--==========Header===========-->
<div class="main-holder">
<header class='main-wrapper header'>
	<div class="container apex">
		<span class="contact-header pull-left small_font">
			+972 58 771 0101 (WhatsApp,Viber,Telegram,Phone)
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
			<a href="#" class='pull-left'>
				<img src="logo.png" alt="Vastama" title="Vastama">
			</a>
			<h1 class="description-logo">
				Аренда прокат автомомобилей в Израиле
			</h1>
		</div>

<!--		<nav class='pull-right nav-menu main-nav trig-mob'>
			<div class="mob-ver-menu">
				<i class='nav-mob hide'></i>
			</div>
			<ul class='unstyled'>
				<li>
					<a href="#" data-scroll="information">
						<div class="inside">
							<div class="backside"> Information </div>
							<div class="frontside"> Information </div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" data-scroll="features">
						<div class="inside">
							<div class="backside"> Features </div>
							<div class="frontside"> Features </div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" data-scroll="testimonials">
					<div class="inside">
						<div class="backside"> Testimonials </div>
						<div class="frontside"> Testimonials </div>
					</div>
					</a>
				</li>
				<li>
					<a href="#" data-scroll="gallery">
						<div class="inside">
							<div class="backside"> Gallery </div>
							<div class="frontside"> Gallery </div>
						</div>
					</a>
				</li>
				<li>
					<a data-toggle="modal" role="button" href="#myModal">
						<div class="inside">
							<div class="backside"> Contact </div>
							<div class="frontside"> Contact </div>
						</div>
					</a>
				</li>
			</ul>
		</nav>-->
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
							<h2 class='h-Bold'>Бюджетные автомобили</h2>
							<ul class='ul-list-slider Open-sansR'>                                                                
								<li>Аренда начиная от 10USD в день</li>								
								<li>Безлимитный километраж(3-29 дней)</li>
								<li>Нет предоплаты, нет штрафов за перенос, отмену заказа</li>
                                                                
							</ul>
						</div>
						<div class="img-slider slide-man1 fin_2">
							<img src="slider_man1.png" alt="alt text...">
						</div>
					</li>
					<li>
						<div class="list-forstart fin_1">
							<h2 class='h-Bold'>Минивены 7+ мест</h2>
							<ul class='ul-list-slider Open-sansR'>
								<li>Аренда начиная от 60USD в день</li>								
								<li>Безлимитный километраж(3-29 дней)</li>
								<li>Нет предоплаты, нет штрафов за перенос, отмену заказа</li>
							</ul>
						</div>
						<div class="img-slider slide-man2 fin_2">
							<img src="slider_man2.png" alt="alt text...">
						</div>
					</li>
					<li>
						<div class="list-forstart fin_1">
							<h2 class='h-Bold'>Люкс класс</h2>
							<ul class='gray-list-slider Open-sansR'>
								<li>Аренда начиная от 84USD в день</li>								
								<li>Безлимитный километраж(3-29 дней)</li>
								<li>Нет предоплаты, нет штрафов за перенос, отмену заказа</li>
							</ul>
						</div>
						<div class="img-slider slide-man3 fin_2">
							<img src="slider_man3.png" alt="alt text...">
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
					<h2 class='medium-h text-center'>Бронирование автомобиля</h2>
					<h3 class='xsmall-h text-center'>Форма обратной связи</h3>
										<form class='reg-now-visible' id='formIndex' method=post >
						<div class="form-control">
							<input type="text" class="form-control" name="First_name" placeholder='Ваше имя' value="" data-required>
						</div>
<!--						<div class='control-group'>
							<input type="text" class="form-control" name="input_name[1]" placeholder='Enter your mail' value="" data-required data-pattern="^[-a-z0-9!#$%&'*+/=?^_`{|}~]+(\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*@([a-z0-9]([-a-z0-9]{0,61}[a-z0-9])?\.)*(aero|arpa|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|[a-z][a-z])$">
						</div>-->
						<div class='control-group'>
							<input type="text" class="form-control" name="phone" placeholder='Тел\WhatsApp\Viber\Telegram' value="" data-required data-pattern="^[0-9]+$">
						</div>

<!--						<div class="form-control">
							<select name="input_name[3]">
							<option value="" >Категории автомобилей</option>							
							<option value="Category Q" >Q - Fiat 500(два места) или похожая - от 24$</option>
							<option value="Category B" >B - Suzuki Alto(механика) или похожая - от 24$</option>
							<option value="Category C" >C - Kia Picanto(робот) или похожая - от 25$</option>
							<option value="Category D" >D - Hyundai i20(автомат) или похожая - от 26$</option>
							<option value="Category E" >E - Ford Fiesta(автомат) или похожая - от 27$</option>
							<option value="Category F" >F - yundai i25(автомат) или похожая - от 30$</option>							
							<option value="Category FX" >FX - Renault Megane Coupe(автомат) или похожая - от 31$</option>
                                                        <option value="Category I" >I - Mazda 3(автомат) или похожая - от 32$</option>
                                                        <option value="Category IW" >IW - Ford Focus SW(автомат) или похожая - от 34$</option>
							<option value="Category H" >H - Honda Civic(автомат) или похожая - от 41$</option>
							<option value="Category M" >M - Mazda 6(автомат) или похожая - от 47$</option>
							<option value="Category MH" >MH - Hyundai Sonata(автомат) или похожая - от 57$</option>
							<option value="Category T" >T - Fiat Doblo(механика, 5 мест) или похожая - от 60$</option>
							<option value="Category J" >J - Hyundai Tucson(автомат, 5 мест) или похожая - от 63$</option>
							<option value="Category U" >U - Opel Zafira(автомат, 7 мест) или похожая - от 60$</option>
                                                        <option value="Category V" >V - Mitsubishi Outlander(автомат, 7 мест) или похожая - от 77$</option>
                                                        <option value="Category V8" >V8 - Kia Carnival(автомат, 8 мест) или похожая - от 120$</option>
                                                        <option value="Category Y" >Y - Citroen Jumpy(механика, 9 мест)или похожая - от 94$</option>
							<option value="Category Z" >Z - Ford Transit(автомат, 9 мест) или похожая - от 131$</option>
                                                        <option value="Category P" >P - Nissan Maxima(автомат) или похожая - от 116$</option>
							<option value="Category K" >K - BMW 318i(автомат) или похожая - от 84$</option>
							<option value="Category W" >W - Audi A6(автомат) или похожая - от 155$</option>
							<option value="Category O" >O - Ford Edge(автомат) или похожая - от 174$</option>
                                                        </select>
						</div>-->
						 <button type="submit" value="Register Now" class='btn submit' name="submit"><i class="icon-success"></i>Запросить бронирование</button>
					</form>
									</div>
			</div>
                    <h4>Индивидуальные экскурсии по Иерусалиму за 250$</h4>
                    <h4>Закажи Suzuki Alto(кат. В) и получи Kia_Picanto или подобную(кат.С)</h4>
<!--		
                </div>
            
	</div>
    
<div class="clearfix"></div>
		<div class="spacer5"></div>
		<div class="div-shadow offsetY-7"></div>

	<div class="container non-come">
<!--		<h4 class='division-h pull-left sem-h'>Индивидуальные экскурсии по Иерусалиму за 250$</h4>-->
                
<!--		<ul class='offset3 unstyled seminars'>
			<li>
				<i class="ico1"></i>
				<div class="media offset1">
					<h4 class='division-h'>окончание акции</h4>
					<span>31 август, 2017</span>
				</div>
			</li>
			<li>
				<i class="ico2"></i>
				<div class="media offset1">
					<h4 class='division-h'>Time</h4>
					<span>10:00 am - 4:30 pm </span>
				</div>
			</li>
			<li>
				<i class="ico3"></i>
				<div class="media offset1">
					<h4 class='division-h'>Location</h4>
					<span>Deutsche Bahn, Ulm, Baden-Württemberg</span>
				</div>
			</li>
		</ul>-->
            <div class="clearfix"></div>
<!--                <h4 class='division-h pull-left sem-h'>Закажи Suzuki Alto(кат. В) и получи Kia_Picanto или подобную(кат.С)</h4>-->
<!--		<ul class='offset3 unstyled seminars'>
			<li>
				<i class="ico1"></i>
				<div class="media offset1">
					<h4 class='division-h'>Дата окончания акции</h4>
					<span>31 август, 2017</span>
				</div>
			</li>
			<li>
				<i class="ico2"></i>
				<div class="media offset1">
					<h4 class='division-h'>Time</h4>
					<span>10:00 am - 4:30 pm </span>
				</div>
			</li>
			<li>
				<i class="ico3"></i>
				<div class="media offset1">
					<h4 class='division-h'>Location</h4>
					<span>Deutsche Bahn, Ulm, Baden-Württemberg</span>
				</div>
			</li>
		</ul>-->
		<div class="clearfix"></div>
		<div class="spacer1"></div>
		<div class="div-shadow offsetY-1"></div>
	</div>

<!--	<div class="container non-come" data-anchor="information">
		<div class="row intensified-row">
			<div class="span6">
				<figure class='media-news'>
					<a href='http://www.youtube.com/embed/VOJyrQa_WR4?rel=0&amp;wmode=transparent' class="group1" title='This is title text'>
						<img src="pop4.jpg" alt="alt..." >
						<i class="zoom-ico"></i>
					</a>
				</figure>
			</div>

			<div class="span6">
				<h2 class='xh-Bold'>Take a shortlook at our video introduction</h2>
				<div class="excerpt">
					Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat accumsan hendrerit. Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat accumsan hendrerit.
				</div>
				<a href="#" class='more'>
					<div class="inside">
						<div class="backside"> View more Videos </div>
						<div class="frontside"> View more Videos </div>
					</div>
				</a>
			</div>
		</div>
		<div class="spacer2"></div>
		<div class="div-shadow offsetY-1"></div>
	</div>-->

<!--	<div class="container">
		<div class="row intensified-row">
			<div class="span6">
				<h2 class='xh-Bold'>Receive international graduation certificate</h2>
				<div class="excerpt">
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
				</div>
			</div>

			<div class="span6">
				<figure class='media-news'>
					<a href="img_2.jpg" class="group3" title='There can be written anything'>
						<img src="pop5.jpg" alt="alt..." >
						<i class="zoom-icoBw"></i>
					</a>
				</figure>
			</div>
		</div>
		<div class="spacer3"></div>
		<div class="div-shadow offsetY-8"></div>
	</div>-->

<!--	<div class="container">
		<div class="row intensified-row">
			<div class="span6">
				<figure class='media-news'>
					<a href="img_3.jpg" class="group3" title='This is title text'>
						<img src="pop6.jpg" alt="alt..." >
						<i class="zoom-icoBw"></i>
					</a>
				</figure>
			</div>

			<div class="span6">
				<h2 class='xh-Bold'>The best Vastama in next year</h2>
				<div class="excerpt">
					Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat accumsan hendrerit. Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat accumsan hendrerit. Aenean hendrerit tempor adipiscing. Duis lorem lacus, sodales id purus vel.
				</div>
				<a href="#" class='more'>
					<div class="inside">
						<div class="backside"> View Training Program (pdf - 453K) </div>
						<div class="frontside"> View Training Program (pdf - 453K) </div>
					</div>
				</a>
			</div>
		</div>
		<div class="spacer3"></div>
		<div class="div-shadow offsetY-2"></div>
	</div>-->

<!--	<div class="container" data-anchor="features">
		<h2 class='text-center xxh-Bold'>Why people choose Vastama Trainings?</h2>
		<h3 class='text-center xmedium-h'>Your main Features</h3>

		<div class="row">
			<div class="span2 hov1">
				<figure class='thumbnails'>
					<i class='it-ico1'></i>
				</figure>
				<h4 class='xxsmall-h text-center transition-h'>yearly Programs Upgrades</h4>
				<div class="full-text">
					Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim
				</div>
			</div>

			<div class="span2 hov2">
				<figure class='thumbnails'>
					<i class='it-ico2'></i>
				</figure>
				<h4 class='xxsmall-h text-center transition-h'>Best Learning system</h4>
				<div class="full-text">
					Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim velerat
				</div>
			</div>

			<div class="span2 hov3">
				<figure class='thumbnails'>
					<i class='it-ico3'></i>
				</figure>
				<h4 class='xxsmall-h text-center transition-h'>yearly Programs Upgrades </h4>
				<div class="full-text">
					Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim
				</div>
			</div>

			<div class="span2 hov4">
				<figure class='thumbnails'>
					<i class='it-ico4'></i>
				</figure>
				<h4 class='xxsmall-h text-center transition-h'>small groups,individual learning</h4>
				<div class="full-text">
					Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim
				</div>
			</div>

		</div>
		<div class="spacer3"></div>
		<div class="div-shadow offsetY-3"></div>
	</div>-->

	<div class="container">
		<h2 class='text-center xxh-Bold'>Специальные акции</h2>
		<h3 class='text-center xmedium-h'>до 30 августа 2017</h3>

		<div class='auto-x'>
			<div class="span3 noR-border">
				<table class='table package-services not-favorable'>
					<caption class='noR-border'>Аренда KIA PICANTO на 30 дней</caption>
					 <thead>
						<tr>
							<td><b>$790</b>.00</td>
						</tr>
					 </thead>
					<tbody>
						<tr>
							<td>4500 км включены</td>
						</tr>
						<tr>
							<td>Обязательные страховки включены</td>
						</tr>
						<tr>
							<td>Оплата по возвращению машины</td>
						</tr>
						<tr class='lastTr'>
							<td><a class='btn buy-now' href='#'>Заполнить форму</a></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="span3 profitable">
				<table class='table package-services'>
					<caption>Лидер в прокате Hyundai Tucson</caption>
					 <thead>
						<tr>
							<td><b>$67</b>.00</td>
						</tr>
					 </thead>
					<tbody>
						<tr>
							<td>250 км включены</td>
						</tr>
						<tr>
							<td>Обязательные страховки включены</td>
						</tr>						
						<tr>
							<td>Оплата по возвращению машины</td>
						</tr>
						<tr class='lastTr'>
							<td><a class='btn buy-now offsetY-5' href='#'>Заполнить форму</a></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class='span3 noL-border'>
				<table class='table package-services not-favorable'>
					<caption class='noL-border'>Audi A6 на 7 дней</caption>
					 <thead>
						<tr>
							<td><b>$1085</b>.00</td>
						</tr>
					 </thead>
					<tbody>
						<tr>
							<td>Безлимитный километраж</td>
						</tr>
						<tr>
							<td>Обязательные страховки включены</td>
						</tr>
						
						<tr>
							<td>Оплата по возвращению машины</td>
						</tr>
						<tr class='lastTr'>
							<td><a class='btn buy-now offsetY-6' href='#'>Заполнить форму</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="clearfix"></div>
		<div class="spacer3"></div>
	</div>

<!--	<div id="aboutUs_slider" data-anchor="testimonials">
		<h3 class='slide-title text-center'>What people say about us?</h3>
		<h4 class='xxmedium-h text-center'>Testimonals of our Customers </h4>
		<div class="container">
			<ul class="aboutUs-slider unstyled">
				<li>
					<div class="quote">
					“Aenean mollis tortor placerat mauris ornare suscipit. Praesent vitae faucibus sem. Nulla facilisi. Suspendisse quam dolor, suscipit tincidunt venenatis malesuada, interdum eu erat. Donec tempor tristique”
					</div>
					<span class="author">— John Doe (SEO of LLF Corp.)</span>
				</li>
				<li>
					<div class="quote">
					“Aenean mollis tortor placerat mauris ornare suscipit. Praesent vitae faucibus sem. Nulla facilisi. Suspendisse quam dolor, suscipit tincidunt venenatis malesuada, interdum eu erat. Donec tempor tristique”
					</div>
					<span class="author">— John Doe (SEO of LLF Corp.)</span>
				</li>
				<li>
					<div class="quote">
					“Aenean mollis tortor placerat mauris ornare suscipit. Praesent vitae faucibus sem. Nulla facilisi. Suspendisse quam dolor, suscipit tincidunt venenatis malesuada, interdum eu erat. Donec tempor tristique”
					</div>
					<span class="author">— John Doe (SEO of LLF Corp.)</span>
				</li>
			</ul>
		</div>
	</div>-->

<!--	<div class="container" data-anchor="gallery">
		<h2 class='text-center xxh-Bold'>See Gallery from Last Event</h2>
		<h3 class='text-center xmedium-h'>Your main Features</h3>

		<div class="row intensified-row" id='gallery'>
			<div class="span6">
				<figure class='media-news'>
					<a href="img_1.jpg" class="group2 bwWrapper">
						<img src="pop4.jpg" alt="alt..." >
						<i class="zoom-icoBw"></i>
					</a>
				</figure>
			</div>

			<div class="span6">
				<figure class='media-news'>
					<a href="fullsize/img_5.jpg" class="group2 bwWrapper">
						<img src="pop1.jpg" alt="alt..." >
						<i class="zoom-icoBw"></i>
					</a>
				</figure>
			</div>

			<div class="span6">
				<figure class='media-news'>
					<a href="img_6.jpg" class="group2 bwWrapper">
						<img src="pop2.jpg" alt="alt..." >
						<i class="zoom-icoBw"></i>
					</a>
				</figure>
			</div>

			<div class="span6">
				<figure class='media-news'>
					<a href="img_7.jpg" class="group2 bwWrapper">
						<img src="pop3.jpg" alt="alt..." >
						<i class="zoom-icoBw"></i>
					</a>
				</figure>
			</div>
		</div>
		<div class="auto-x">
			<a href="#" class='more pull-none'>
				<div class="inside">
					<div class="backside"> View More Photo </div>
					<div class="frontside"> View More Photo </div>
				</div>
			</a>
		</div>
		<div class="clearfix"></div>
		<div class="spacer5"></div>
		<div class="div-shadow offsetY-7"></div>
	</div>-->

<!--	<div class="container">
		<a href="#" data-scroll="form_slider" class='btn submit a-trig'><i class="icon-success"></i>Register Now</a>
	</div>-->
</section>

<!--===========================-->
<!--=========Footer============-->
<footer class='main-wrapper footer'>
<!--	<div class="partners">
		<div class="container">

			<h4 class='division-h pull-left'>Our Partners</h4>
			<ul class='offset4 unstyled partnersList'>
				<li>
					<a href="#"><img src="sponsor1.png" alt="alt..."></a>
				</li>
				<li>
					<a href="#"><img src="sponsor2.png" alt="alt..."></a>
				</li>
				<li>
					<a href="#"><img src="sponsor3.png" alt="alt..."></a>
				</li>
				<li>
					<a href="#"><img src="sponsor4.png" alt="alt..."></a>
				</li>
				<li>
					<a href="#"><img src="sponsor5.png" alt="alt..."></a>
				</li>
			</ul>
		</div>
	</div>-->

	<div class="container bottom">
		

		<div class="pull-right last-elem">
			<nav class='nav-menu'>
<!--				<ul class='unstyled'>
					<li>
						<a href="#">
							<div class="inside">
								<div class="backside"> News </div>
								<div class="frontside"> News </div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="modal" role="button" href="#myModal">
							<div class="inside">
								<div class="backside"> Contact Us </div>
								<div class="frontside"> Contact Us </div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="inside">
							<div class="backside"> PressKit </div>
							<div class="frontside"> PressKit </div>
						</div>
						</a>
					</li>
				</ul>-->
			</nav>

<!--			<ul class='social-transform unstyled'>
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
			</ul>-->
		</div>
	</div>

	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top">
			<a href="#top">
				<span></span>
			</a>
		</p>
	</div>
</footer>
	<!-- Modal -->

	<div id="myModal" class="modal hide fade " tabindex="-1" role="dialog" aria-hidden="true">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<form method=post>
			<div class='control-group'>
				<input type="text" name="input_name[0]" placeholder='Enter your name' value="" data-required>
			</div>
			<div class='control-group'>
				<input type="text" name="input_name[1]" placeholder='Enter your mail' value="" data-required data-pattern="^[-a-z0-9!#$%&'*+/=?^_`{|}~]+(\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*@([a-z0-9]([-a-z0-9]{0,61}[a-z0-9])?\.)*(aero|arpa|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|[a-z][a-z])$">
			</div>
			<div class='control-group'>
				<textarea name="input_name[11]" value="" cols="30" rows="10" maxlength="300" placeholder='Enter your message ...' data-required></textarea>
			</div>
			<div class='control-group captcha'>
				<div class="picture-code">
					What is <span id="numb1">4</span> + <span id="numb2">1</span> (Anti-spam)
				</div>
				<input type="text" placeholder='Type here ...' name='name' id='chek' data-required data-pattern="5">
			</div>
			<button type="submit" value="Submit" class='btn submit' name="submit">Submit</button>
		</form>
			</div>
</div>
<div class="container">
<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">&copy; 2014-<?php echo date("Y") ?> Vastama Ltd . All Rights Reserved | Design by  <a href="http://www.vastama.com/" target="_blank">Vastama Ltd</a> </p>
	
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
<hr />

</div>
</body>
</html>