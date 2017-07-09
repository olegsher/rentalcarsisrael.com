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
header('Location: http://www.rentalcarsisrael.com/ru/');
    }
?>






<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="ru">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>аренда прокат Kia Picanto в Израиле | rentalcarsisrael.com</title>
<meta name="keywords" content="машина прокат, машина прокат Израиле, аренда машины Израиль, avto prokat, prokat mashin, auto arenda, прокат аренда машин, где можно взять машину напрокат, заказать машину, аренда иномарок, 
      arenda avto, стоимость аренды машины, 
      израиль прокат автомобилей, съем машины Израиле, аренда авто, прокат машины, 
      сьем автомобиля,автомобиль,  машина Израиле, дешевый прокат автомобиля" />
        <meta  name="description"  content="Прокат автомобиля в Израиле, пассажирский микроавтобус и минивэн 9 мест, 
              автоматическая коробка передач начиная с 25$" />
        <meta property="fb:app_id" content="1322511981092474" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="ru_RU" />       
        <meta property="og:url" content="http://www.rentalcarsisrael.com/ru/catC_Kia_Picanto_4seats_automatic.php" />
        <meta property="og:image" content="http://www.rentalcarsisrael.com/images/car_key.jpg"/><meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="640" />
        <meta property="og:image:height" content="320" />
        <meta property="og:title" content="Прокат автомобиля в Израиле, пассажирский микроавтобус и минивэн 9 мест, 
              автоматическая коробка передач начиная с 25$"/>
        <meta property="og:description" content="аренда прокат Kia Picanto в Израиле, аренда прокат автомобиля в Израиле, эконом класс и семейные машины, микроавтобусы и минивэны 7-8-9 мест"/>
  
        
        
        
        
        
        
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
    <?php include("../seo_stat"); ?>
        
        <div class="container">
            
            
        <div class="container-fluid">
              <h1>Прокат аренда Kia Picanto в Израиле начиная с 25$</h1>
              <div class="row">
                <div class="col-sm-6 biseller-column" >
<!--                  <a href="single.html">	-->

                    <img src="../images/car_key.jpeg" alt="прокат аренда Kia Picanto в Израиле начиная с 25$" class="img-responsive"/>
                    <span class="price"><img src="../m/images/viber_whatsapp_icon.png" alt="прокат аренда Kia Picanto в Израиле начиная с 25$" /> +972-58-7710101</span>
<!--                  </a>-->
<h4 style="color:green; font-weight: lighter;">Нет предоплаты, возможна оплата наличными</h4>
<h4 style="color:green; font-weight: lighter;">Безлимитный километраж при аренде на 3-29 day</h4>
<h4 style="color:green; font-weight: lighter;">Нет штрафов за изменение или отмену заказа, нет скрытых платежей</h4>




                <h4>Заполните форму и мы свяжемся с вами:</h4>
                <h5 style="color:red; font-weight: lighter;">*Консультация и расчет аренды бесплатно и без обязательств</h5>
                <form action="#" method="post" name="car-select-form" id="car-select-form">
                    
                    <input type="text" name="First_name" required class="form-control" placeholder="Имя и Фамилия">  
                    <input type="hidden" name="car-select" value="Category C">  
                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required id="email" class="form-control" placeholder="Почта">  
                      <input type="text" name="phone" required class="form-control" placeholder="Тел/WhatsApp/Viber" >  
                      <input type="text" name="message" class="form-control" placeholder="Сообщение">      
                    <div class="clearfix"></div>
                    <input type="submit" class="btn .btn-success" name="submit" value="Отправить форму" id="checkoutModalLabel">
                  </form>           
                <h5>или свяжитесь с нами по <img src="../m/images/viber_whatsapp_icon.png" alt="прокат аренда Kia Picanto в Израиле начиная с 25$" /> +972-58-771-0101</h5>
                
                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,twitter,evernote,linkedin,lj,viber,whatsapp,skype,telegram" data-counter=""></div>
                <div class="alert alert-success">                    
                      Нужна машина сейчас? У нас всегда есть горящие предложения<br>                                     
                      Планируете поездку в Израиль? Закажите машину заранее и сэкономьте до 40%<br>     
                      Специальные цены для заказывающих долгосрочную аренду 30+ дней                      
                    </div>
                
 <div class="alert alert-warning">               
 <h4>Почему стоит заказать у нас а не напрямую в отделении компании по аренде</h4>
<br>Первое это конечно обслуживание на родном языке, у нас вы можете выяснить все интересующие вас вопросы по телефону-viber-whatsapp +972-58-7710101. 
<br>Второе, но не менее важное, это цена — наши цены значительно ниже чем при прямом заказе в отделении проката. 
<br>И у нас как правило есть какие то мероприятия — то скидка 25$ при аренде 7+ дней, то дополнительный водитель бесплатно…
</div>
                

<div class="alert alert-warning">
<h4>Какие документы принести в отделение для получения машины</h4>

Действующие права, кредитную карту(мы принимает все основные КРЕДИТНЫЕ карты. Номер на карте ОБЯЗАТЕЛЬНО должен быть выдавлен а не напечатан) на которой будет закрыт депозит, документ о бронировани автомобиля(достаточно номера), если вы турист то визу В2 или В3 для отмены НДС
</div>
<div class="alert alert-warning">
<h4>Процесс получения машины</h4>

При получении обязательно осмотрите машину и запишите в документ приемки ВСЕ царапины и повреждения(это можно не делать если вы берете отмену личного участия).                
</div>               
                
    
<h4 style="color: #000000; font-weight: bold;">Условия аренды</h4>               
<?php include("__rentalconditions.html"); ?>  
                
                    
                </div>
                <div class="col-sm-6 ad-info">
                  <h2>Категория аренды проката: C 
                      <br>Kia Picanto или подобная</h2>
                    <p class="text-success glyphicon glyphicon-ok"> Кондиционер</p> 
                    <p class="text-success glyphicon glyphicon-ok"> Автоматическая коробка передач</p><br>
                    <h4>Дополнительные машины в категории C: </h4>
                     <a href="catC_Hyundai_i10_4seats_automatic.php">Hyundai_i10</a>,
                    <a href="catC_Kia_Picanto_4seats_automatic.php">Kia_Picanto</a>,
                    <a href="catC_Peugeot_107_4seats_automatic.php">Peugeot_107</a>,
                    <a href="catC_Skoda_Citigo_4seats_automatic.php">Skoda_Citigo</a>,
                    <a href="catC_Toyota_Aygo_4seats_automatic.php">Toyota_Aygo</a> и другие
                    

<!--                <div class="alert alert-success">-->
                    
<!--                </div>-->
<hr/>
<div class="alert alert-warning">                 
<h4>Какую информацию нужно предоставить для оформления бронирования автомобиля?</h4>

Имя и фамилия на английском как в правах, дату время и место сьема\возврата автомобиля, категорию автомобиля, возраст водителя и стаж вождения. <br>Также нужно предоставить почту(на нее придет документ о бронировании) и контактный телефон. 
<br>Арендатору должно быть более 21 года + стаж вождения минимум 1 год, у вас должна быть кредитная карта для закрытия депозита (минимальный депозит у нас 750$).
</div>                  
<hr />
<h4 style="color: #000000; font-weight: bold;">Отделения по прокату аренде автомобилей в Израиле:</h4>
<?php include("__branches.html"); ?>

<h4 style="color: #000000; font-weight: bold;">Страховки:</h4>
<?php include("__insurance.html"); ?>
                
                

                
                
                
                </div>
              </div>
        </div>
            
            
<br />Наши поисковые запросы: 
<p style="color:tear; font-weight: lighter;" >прокат автомобиля в израиле, аренда прокат авто аэропорт, аренда прокат авто бен гурион, аренда прокат авто нетания, прокат авто тель авив, прокат авто тель авив, аренда авто израиль, аренда авто в иерусалиме, прокат авто в эйлате, 
аренда автомобиля в Тель Авиве, аренда автомобиля в Эйлате, аренда автомобиля в Израиле, машина прокат, машина прокат Израиле, аренда машины Израиль, 
avto prokat, prokat mashin, auto arenda, прокат аренда машин, где можно взять машину напрокат, заказать машину, аренда иномарок, arenda avto, 
стоимость аренды машины, израиль прокат автомобилей, съем машины Израиле, аренда авто, прокат машины, сьем автомобиля,автомобиль,  машина Израиле, дешевый прокат автомобиля  
<hr />   
            
            
            
        </div>
        <link rel="stylesheet" href="../m/css/bootstrap.min.css">
<link rel="stylesheet" href="../m/css/bootstrap-select.css">
<link rel="stylesheet" href="../m/css/font-awesome.min.css" />
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->

<script type="text/javascript">
var ZCallbackWidgetLinkId  = '86c302f105eb53a8f2c43e54f6be69ad';
var ZCallbackWidgetDomain  = 'my.zadarma.com';
(function(){
    var lt = document.createElement('script');
    lt.type ='text/javascript';
    lt.charset = 'utf-8';
    lt.async = true;
    lt.src = 'https://' + ZCallbackWidgetDomain + '/callbackWidget/js/main.min.js?unq='+Math.floor(Math.random(0,1000)*1000);
    var sc = document.getElementsByTagName('script')[0];
    if (sc) sc.parentNode.insertBefore(lt, sc);
    else document.documentElement.firstChild.appendChild(lt);
})();
</script>

    </body>
</html>
