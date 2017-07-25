<?php 
if(isset($_POST['submit'])){
    $to = "admin@privateisrael.com"; // this is your Email address
    $reqemail = "admin@privateisrael.com";

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
            $message = '<html lang="ru"><body>';
            $message .= '<hr />';
            $message .= 'Бронирование экскурсии в Израиле http://www.rentalcarsisrael.com +972-58-7710101';
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
    
    $subject2 = "Бронирование экскурсии в Израиле http://www.rentalcarsisrael.com +972-58-7710101";
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
<html class='no-js' lang="ru">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	
	<title>Лучшие туры по Израилю</title>
        <meta name="keywords" content="машина прокат, машина прокат Израиле, аренда машины Израиль, avto prokat, prokat mashin, auto arenda, прокат аренда машин, где можно взять машину напрокат, заказать машину, аренда иномарок, 
      arenda avto, стоимость аренды машины, израиль прокат автомобилей, съем машины Израиле, аренда авто, прокат машины, 
      сьем автомобиля,автомобиль,  машина Израиле, дешевый прокат автомобиля" />
        <meta  name="description"  content="Лучшие туры по Израилю начиная с 250$" />
        <meta property="fb:app_id" content="1322511981092474" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="ru_RU" />       
        <meta property="og:url" content="http://www.rentalcarsisrael.com/test_lp/lp_rus_tours.php" />
        <meta property="og:image" content="http://www.rentalcarsisrael.com/images/car_key_vastama.jpeg"/><meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="640" />
        <meta property="og:image:height" content="320" />
        <meta property="og:title" content="Лучшие туры по Израилю начиная с 250$. Бронируйте +972-58-7710101"/>
        <meta property="og:description" content="Лучшие туры по Израилю"/>
  

	<link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon">
	



<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" href="bootstrap.min-ver.css" media="all">
	<link rel="stylesheet" href="main.css" media="all">
	<link rel="stylesheet" href="responsive.css" media="all">

	<script src="jquery-1.10.1.min.js" ></script>
	<script src="bootstrap.min.js" ></script>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52856386-10', 'auto');
  ga('send', 'pageview');

</script>
<script type="application/ld+json"> { 
"@context" : "http://schema.org",
"@type" : "TravelAgency",
"image": "http://www.rentalcarsisrael.com/images/car_key_vastama.jpeg", 
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
<!--===========================-->
<!--==========Header===========-->
<div class="main-holder">
<header class='main-wrapper header'>
	<div class="container apex">
		<span class="contact-header pull-left small_font">
			<img src="../images/sprite_phone_viber_whatsapp.png" width="112" height="32" alt="">
			<img src="phone.png" width="150" height="32" alt="">
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
			<a href="http://www.rentalcarsisrael.com/ru/" class='pull-left'>
				<img src="logo.png" alt="Vastama" title="Vastama">
			</a>
			<h1 class="description-logo">
				Лучшие туры по Израилю
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
							<h1>Индивидуальные экскурсии по Израилю</h1>
							<ul class='ul-list-slider Open-sansR'>                                                                
								<li>Незабываемые авторские экскурсии от 250USD - оставьте данные и гид свяжется с вами</li>								
								<li>Самые известные частные гиды с огромным опытом и рекомендациями</li>
								<li> 
								<a target="blank" href="http://www.rentalcarsisrael.com/ru" class='pull-left'>							
							Акция: Экскурсия + аренда автомобиля по наилучшей цене</a>
								
								</li>
								<li>Самая выгодная опция для компаний 7+ человек</li>
								<li>Оплата напрямую гиду, нет посредников</li>
								                                     
							</ul>
						</div>
						<!--<div class="img-slider slide-man1 fin_2">
							<img src="xslider_tours1.png" alt="Бюджетные автомобили начиная от 10USD в день">
						</div>-->
					</li>
					<li>
						<div class="list-forstart fin_1">
							<h1>Дни отдыха в Израиле</h1>
							<ul class='ul-list-slider Open-sansR'>
								<li>
							<a target="blank" href="https://atlantistravel.co.il/ekskursii/gruppovye-ekskursii-po-izrailju?filter_cities=24&viewtype=list&filter_types[0]=5&filter_types[1]=4&filter_types[2]=25&filter_types[3]=26&refer=5977556e2f026" class='pull-left'>
							Мёртвое море от 100шек - для получения скидки введите промокод vastama5
							</a>								
								
								</li>								
								<li>От ведущего туроператора в Израиле</li>
								<li>Сотни довольных клиентов</li>
							</ul>
						</div>
						<div>
						<a target="blank" href="https://atlantistravel.co.il/ekskursii/gruppovye-ekskursii-po-izrailju?filter_cities=24&viewtype=list&filter_types[0]=5&filter_types[1]=4&filter_types[2]=25&filter_types[3]=26&refer=5977556e2f026" class='pull-left'>
							<img src="5_atlantis.png" alt="Минивены 7+ мест начиная от 35USD в день">
							</a>
						</div>
					</li>
					<li>
						<div class="list-forstart fin_1">
							<h1>Регулярные групповые экскурсии</h1>
							<ul class='ul-list-slider Open-sansR'>
								<li> 
								<a target="blank" href="https://atlantistravel.co.il/ekskursii/gruppovye-ekskursii-po-izrailju?filter_cities=24&viewtype=list&filter_types[0]=5&filter_types[1]=4&filter_types[2]=25&filter_types[3]=26&refer=5977556e2f026" class='pull-left'>
							Aвторские экскурсии от 175 шек - для получения скидки введите промокод vastama5
							</a>
								</li>								
								<li>
								<a target="blank" href="https://atlantistravel.co.il/ekskursii/gruppovye-ekskursii-po-izrailju?filter_cities=24&viewtype=list&filter_types[0]=5&filter_types[1]=4&filter_types[2]=25&filter_types[3]=26&refer=5977556e2f026" class='pull-left'>
							Регулярные экскурсии от 100 шек - для получения скидки введите промокод vastama5
							</a>
								</li>
								<li>Только лицензированные гиды</li>
								<li>Большие комфортабельные автобусы</li>
								<li>От ведущего туроператора в Израиле</li>
							</ul>
						</div>
						<<div>
							<a target="blank" href="https://atlantistravel.co.il/ekskursii/gruppovye-ekskursii-po-izrailju?filter_cities=24&viewtype=list&filter_types[0]=5&filter_types[1]=4&filter_types[2]=25&filter_types[3]=26&refer=5977556e2f026" class='pull-left'>
							<img src="5_atlantis.png" alt="Минивены 7+ мест начиная от 35USD в день">
							</a>
						</div>
					</li>
				</ul>
				<div class="bx-controls bx-has-pager bx-has-controls-direction" id='dafault_pager'>
					<div class="bx-pager bx-default-pager">
						<!--<div class="bx-pager-item">
							<a class="bx-pager-link pager-Ico1" data-slide-index="0" href=""><span></span></a>
						</div>

						<div class="bx-pager-item">
							<a class="bx-pager-link pager-Ico2 active" data-slide-index="1" href=""><span></span></a>
						</div>

						<div class="bx-pager-item lastItem">
							<a class="bx-pager-link pager-Ico3" data-slide-index="2" href=""><span></span></a>
						</div>-->
					</div>
				</div>
		</div>

		<div class="container">
			<div class="container relative fin_3 non-come" id='elem-portable'>
				<div class="reg-now">
					<h2 class='medium-h text-center'>Хотите узнать больше?</h2>
					<h3 class='xsmall-h text-center'>Оставьте ваши данные для связи</h3>
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



						 <button type="submit" value="Register Now" class='btn submit' name="submit"><i class="icon-success"></i>Запросить информацию</button>
<hr/>
<img src="../images/sprite_phone_viber_whatsapp.png" width="112" height="32" alt="">
			<img src="phone.png" width="150" height="32" alt="">					
					</form>
                                        
									</div>
			</div>
                    
                        
                        
                    <!--<h2 style="color:red; font-weight: lighter ;" class="text-center">В чем преимущество индивидуальной экскурсии перед обычной экскурсией в большом автобусе?</h2>
                        
                        <p style="color: grey; font-weight: lighter ;" class="text-center">
                            Вы путешествуете в кругу своих близких людей                            
                            <br>Нет долгих сборов перед экскурсией и развозки людей после экскурсии
                        <br>Гид полностью в вашем распоряжении, можно изменить ход экскурссии в любой момент
                        <br>Количество посещаемых достопримечательностей как правило в 2-2.5 раз больше чем в обычной экскурсии</p>
                    
                        
                        <h2 style="color:red; font-weight: lighter ;" class="text-center">Почему стоит заказать экскурсию по Израилю у нас?</h2>
                        
                        <p style="color: grey; font-weight: lighter ;" class="text-center">
                            Вы получаете полноценную экскурсию по Израилю от лучших лицензионных гидов + арендуете подходящую именно Вам машину и все это по цене 
                            сопоставимой с ценой на обычные экскурсии, а в некоторых случаях даже дешевле и конечно экскурсия на нашей машине 
                            обойдется Вам гораздо дешевле подобных индивидуальных экскурсий от других компаний
                            
                            <br>Как это работает? 
                            <br>Очень просто вместо того чтобы предлагать индивидуальную экскурсию за 450-600$ мы предлагаем отдельно оплатить работу гида (250$)
                            и арендовать подходящую Вам машину по самой лучшей в Израиле цене(наша компания занимается арендой автомобилей в Израиле, 
                            гиду Вы платите напрямую и программу тоже закрываете непосредственно с гидом). 
                            <br>Вы можете арендовать от самой маленькой машины за 25$ в день
                            до 9-местного минивэна за 100$ в день... 250км уже включены в стоимость также как и обязательные страховки.
                            Вам остается только доплатить за бензин... 
                            <br>Если Вы не хотите сами управлять машиной можно договориться с гидом
                        </p>-->
                       
                        
                        
                        
                    
                    

		<div class="clearfix"></div>
		<div class="spacer1"></div>
		<div class="div-shadow offsetY-1"></div>
	</div>



	<div class="container">
		<!--<h2 class='text-center xxh-Bold'>Добавьте однодневную аренду автомобиля для экскурсии по лучшим в Израиле ценам</h2>
		<h3 class='text-center xmedium-h'></h3>
-->
		<div class='auto-x'>
			<!--<div class="span3 noR-border">
				<table class='table package-services not-favorable'>
					<caption class='noR-border'>Renault Traffic(Мех. 9 мест)</caption>
					 <thead>
						<tr>
							<td><b>$100</b>.00</td>
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
                                                <tr>
							<td>Самый выгодный вариант - экскурсия на 8 чел обойдется вам всего 
                                                        в 350$ + бензин вместо 600$
                                                        </td>
						</tr>
                                                <tr>
                                                    <td>    
                                                        Для сравнения экскурсия на большом автобусе из расчета 60$ с человека обойдется в 480$</td>
						</tr>
                                                
						<tr class='lastTr'>
							<td><a class='btn buy-now' href='#'>Заполнить форму</a></td>
						</tr>
					</tbody>
				</table>
			</div>-->

			<!--<div class="span3 profitable">
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
                                                <tr>
							<td>Комфортный вариант - экскурсия на 4 чел обойдется вам всего 
                                                        в 317$ + бензин вместо 450$
                                                        </td>
						</tr>
                                                <tr>
                                                    <td>    
                                                        Для сравнения экскурсия на большом автобусе из расчета 60$ с человека обойдется в 240$</td>
						</tr>
						<tr class='lastTr'>
							<td><a class='btn buy-now offsetY-5' href='#'>Заполнить форму</a></td>
						</tr>
					</tbody>
				</table>
			</div>-->

			<!--<div class='span3 noL-border'>
				<table class='table package-services not-favorable'>
					<caption class='noL-border'>Mazda 6</caption>
					 <thead>
						<tr>
							<td><b>$50</b>.00</td>
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
                                                <tr>
                                                    <td>Экономный  вариант - экскурсия на 4 чел обойдется вам всего 
                                                        в 300$ + бензин вместо 450$</td>
                                                </tr>    
                                                <tr>
                                                    <td>    
                                                        Для сравнения экскурсия на большом автобусе из расчета 60$ с человека обойдется в 240$</td>
						</tr>
						<tr class='lastTr'>
							<td><a class='btn buy-now offsetY-6' href='#'>Заполнить форму</a></td>
						</tr>
					</tbody>
				</table>
			</div>-->
		</div>
               <!-- <hr/>-->
<!--<p style="color: grey; font-weight: lighter ;" class="text-center">У нас в прокате есть машины на любой вкус от мини начиная с 25$ и до минивенов и машин класса люкс.
<br>Компания Vastama ltd основана в 2014 году и уже более 3 лет является официальным агентом ведущей в Израиле компании Albar(Thrifty, с 1 сентября - Eurocar), наши онлайн цены значительно
дешевле цен в отделениях компании</p>
<p style="color:red; font-weight: lighter;" class="text-center">Тел\WhatsApp\Viber\Telegram +972-58-771-0101</p>


		<div class="clearfix"></div>
		<div class="spacer3"></div>
                Все указанные на сайте и в ваучере цены не включают НДС. <br>
Все указанные на сайте расценки на краткосрочную аренду не включают обязательные и дополнительные страховки(если не указано другое)  
<br>Модели автомобилей представлены исключительно для примера и при выдаче компания имеет право предоставить автомобиль того же класса, но другой марки. 
<br>Компания поставщик может изменить цены но конечной считается цена в ваучере.
<hr/>-->
	</div>





</div>
</section>

<!--===========================-->
<!--=========Footer============-->
<footer class='main-wrapper footer'>



</footer>
	

</div>
<div class="container">
	
<!--Техническая информация о работе сайта: 
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
--><hr />
<p>&copy; 2014-<?php echo date("Y") ?> Vastama Ltd . All Rights Reserved | Design by  <a href="http://www.vastama.com/" target="_blank">Vastama Ltd</a> </p>

</div>

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
<!--<?php include("../seo_stat"); ?>-->

</body>
</html>