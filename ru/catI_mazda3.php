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
header('Location: http://www.rentalcarsisrael.com/m/i.php');
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
        <title>аренда прокат Mazda 3 в Израиле | rentalcarsisrael.com</title>
<meta name="keywords" content="машина прокат, машина прокат Израиле, аренда машины Израиль, avto prokat, prokat mashin, auto arenda, прокат аренда машин, где можно взять машину напрокат, заказать машину, аренда иномарок, arenda avto, стоимость аренды машины, израиль прокат автомобилей, съем машины Израиле, аренда авто, прокат машины, сьем автомобиля,автомобиль,  машина Израиле, дешевый прокат автомобиля" />
        <meta  name="description"  content="аренда прокат автомобиля в Израиле, эконом класс и семейные машины, микроавтобусы и минивэны 7-8-9 мест" />
        <meta property="fb:app_id" content="1322511981092474" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="ru_RU" />       
        <meta property="og:url" content="http://www.rentalcarsisrael.com/ru/catI_mazda3.php" />
        <meta property="og:image" content="http://www.rentalcarsisrael.com/m/images/mazda3.png"/>
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="640" />
        <meta property="og:image:height" content="320" />
        <meta property="og:title" content="машина прокат, машина прокат Израиле, аренда машины Израиль, avto prokat, prokat mashin, auto arenda, прокат аренда машин, где можно взять машину напрокат, заказать машину, аренда иномарок, arenda avto, стоимость аренды машины, израиль прокат автомобилей, съем машины Израиле, аренда авто, прокат машины, сьем автомобиля,автомобиль,  машина Израиле, дешевый прокат автомобиля" />
        <meta property="og:description" content="аренда прокат автомобиля в Израиле, эконом класс и семейные машины, микроавтобусы и минивэны 7-8-9 мест"/>
  
        
        
        
        
        
        
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
    <?php include("../__shema.html"); ?>  
        
        <div class="container">
            
            
        <div class="container-fluid">
              <h1>Прокат аренда Mazda 3 в Израиле начиная с 32$</h1>
              <div class="row">
                <div class="col-sm-6 biseller-column" >
<!--                  <a href="single.html">	-->
                    <img src="../m/images/mazda3.png" alt="прокат аренда Mazda 3 в Израиле начиная с 32$" class="img-responsive"/>
                    <span class="price"><img src="../m/images/viber_whatsapp_icon.png" alt="прокат аренда Mazda 3 в Израиле начиная с 32$" /> +972-58-7710101</span>
<!--                  </a>-->
<mark class="text-success glyphicon glyphicon-ok">Безлимитный километраж при аренде на 3-29 day</mark>
<mark class="text-success glyphicon glyphicon-ok">Нет скрытых платежей</mark>




                <h4>Заполните форму и мы свяжемся с вами:</h4>
                <form action="#" method="post" name="car-select-form" id="car-select-form">
                    
                    <input type="text" name="First_name" required class="form-control" placeholder="Имя и Фамилия">  
                    <input type="hidden" name="car-select" value="Category I">  
                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required id="email" class="form-control" placeholder="Почта">  
                      <input type="text" name="phone" required class="form-control" placeholder="Тел/WhatsApp/Viber" >  
                      <input type="text" name="message" class="form-control" placeholder="Сообщение">      
                    <div class="clearfix"></div>
                    <input type="submit" class="btn .btn-success" name="submit" value="Отправить форму" id="checkoutModalLabel">
                  </form>           
                <h5>или свяжитесь с нами по <img src="../m/images/viber_whatsapp_icon.png" alt="прокат аренда Mazda 3 в Израиле начиная с 32$" /> +972-58-771-0101</h5>
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
                
    
<h4>Условия аренды</h4>
НДС:
<br>Граждане Израиля или лица, имеющие израильское либо двойное гражданство, обязаны платить НДС в соответствии с законом. 
Только лица, имеющие туристическую визу типа В2 и В3, освобождены от оплаты НДС. 
<br>Важно: Для освобождения от оплаты НДС необходимо во время оформления контракта на стойке компании иметь при себе Вкладыш с визой .
<br>Аренда в одном направлении
возможна между всеми филиалами Бесплатно, кроме г. Эйлат. 
<br>Сбор за возврат из\в филиал в г.Эйлат будет взиматься в соответствии: 
<br>1-2 дня аренды: $200.00. 
<br>3 дня аренды и более: бесплатно.

<br>Доставка & возврат доступны по предварительной договоренности и требуют подтверждения. 
<br>До 15 км от месторасположения филиала: $15.00 
<br>До 30 км от месторасположения филиала: $25.00 
<br>До 50 км и больше от месторасположения филиала: $40.00 
<br>Модели автомобилей представлены исключительно для примера и при выдаче компания имеет право предоставить автомобиль того же класса, но другой марки. 
<br>Минимальная плата за аренду составляет 24 часа. 
<br>Опоздание от 1 до 3 часов соответствует 1/3 от дневной стоимости. 
<br>Опоздание возврата от 3 часов до 24 часов соответствует стоимости полного дня аренды. 
<br>Ответственность за использование автомобиля ложится на арендатора в соответствии с контрактом. 
<br>Каждый дополнительный водитель должен быть вписан в контракт. 
<br>Топливо: Поставляется с полным баком и рекомендуется вернуть с полным баком. 
<br>При возврате с недостающим топливом взымается дополнительная плата в размере 30% от стоимости. 
<br>Ранний возврат: В случае возврата раннее указанного срока, оплата производиться в соответствии с релевантным тарифом аренды (ежедневно, еженедельно, ежемесячно и т.д.) 
<br>Парковочные штрафы, дорожные штрафы & платные дороги: В случае неуплаты одного из нарушений, описанных выше, будет взиматься дополнительная плата в размере 50.00 ILS.
<br>Свободное бронирование для следующих категорий:
B (EBMR), C (ECAR), D (CCAR), E (CDAR, F (IDAR), I (SDAR), H (FDAR), M (PDAR). 
<br>Для бронирования остальных категории требуется подтверждение от нашего отдела заказов. 
<br>Отмена предупреждение не позднее чем за 24 часа до получения. 
<br>Отмена 7-8-9 местных автомобилей за 48 часов до получения. Иначе будет оплата в размере одного дня аренды.
<br>Минимальный возраст водителя желающего арендовать авто, не должен быть менее 21 года и зависит от категории автомобиля: 
<br>Категории B(EBMR), Q(MBAR), C(ECAR), D(CCAR), E(CDAR): Минимальный возраст 21 год (с дополнительной оплатой за страхование "молодого водителя" ) + Водительский стаж минимум один год. 
<br>Категории F(IDAR), FH(IXAH), I(SDAR), H(FDAR), M(PDAR), MH(SXAH), J(IFAR), T(CVMR): Минимальный возраст 23 года + Водительский стаж минимум один год. Категории R(LDAR), G(IVAR), U(PWAR), V(MVAR), V8(SVAR), S(PVMR), Y(PVMR), Z(PVAR): Минимальный возраст 25 лет + Водительский стаж минимум 2 года. 
<br>Категория R минимальный стаж 3 года. 
<br>Категории P(XDAR), W(WXAR): Минимальный возраст 28 лет + Водительский стаж минимум 5 лет.
<br>Дополнительные расценки
<br>Налог аэропорта Бен Гурион: Оплата в размере $39.00 взимается с каждого, кто берет либо возвращает автомобиль в аэропорту имени 'Бен Гурион'. 
<br>Молодой водитель: Дополнительная пошлина в размере $10.00 в сутки (максимум$75.00) распространяется на водителей в возрасте от 21 до 23 лет. 
<br>Дополнительный водитель: цена $2.0 в сутки (максимум $50.00). 
<br>Детское кресло: цена $5.00 в сутки (максимум $50.00). 
<br>Навигатор(GPS): цена $10.00 в сутки (максимум $75.00). 
<br>Экстренная помощь на дороге: $4.00 в день (максимум $100.00). Экспресс помощь для следующих услуг: Ключи заперты в автомобиле, потерены или поломаны, Помощь при пробитом колесе. Закончилось топливо или разрядился аккамулятор. Мы пришлем помощь и поможем завести машину как можно быстрее.
<br>Способы оплаты:
<br>Для оформления контракта арендатор должен иметь при себе зарегистрированную на его имя кредитную карту. 
<br>Мы принимаем кредитные карты: Visa, MasterCard, Amex, Diners

<hr/>Модель указанная на странице только для информации и компания вправе предоставить любую машину в данной категории
<br>Минимальный возраст водителя 23 года + водительские права минимум один год.<hr/>

                
                    
                </div>
                <div class="col-sm-6 ad-info">
                  <h2>Категория аренды проката: I(SDAR) 
                      <br>Mazda 3 или подобная</h2>
                    <p class="text-success glyphicon glyphicon-ok"> Кондиционер</p> 
                    <p class="text-success glyphicon glyphicon-ok"> Автоматическая коробка передач</p><br>
                    <p class="text-danger glyphicon glyphicon-remove">Нет надбавок за использование кредитной карты </p>
                    <p class="text-danger glyphicon glyphicon-remove">Нет штрафов за изменение заказа</p>
                    <p class="text-danger glyphicon glyphicon-remove">Нет штрафа за отмену заказа</p>
                    <h4>Дополнительные машины в категории I: </h4>
                    Hyundai i35, Subaru Impreza, Renault Megan, Skoda Roomster, 
                    Toyota Corolla, Ford Focus, Kia Forte, Mitsubishi Lancer, Hyundai i30, Kia Ceed, Citroen C-Elysee и другие
                    

<!--                <div class="alert alert-success">-->
                    
<!--                </div>-->
<hr/>
<div class="alert alert-warning">                 
<h4>Какую информацию нужно предоставить для оформления бронирования автомобиля?</h4>

Имя и фамилия на английском как в правах, дату время и место сьема\возврата автомобиля, категорию автомобиля, возраст водителя и стаж вождения. <br>Также нужно предоставить почту(на нее придет документ о бронировании) и контактный телефон. 
<br>Арендатору должно быть более 21 года + стаж вождения минимум 1 год, у вас должна быть кредитная карта для закрытия депозита (минимальный депозит у нас 750$).
</div>                  
<hr />
<h4>ОТДЕЛЕНИЯ ПО АРЕНДЕ ПРОКАТУ АВТОМОБИЛЕЙ В ИЗРАИЛЕ:</h4>
<br>

<div class="table-responsive">     
<table class="table table-bordered">
<tbody>
<tr>
<td>
<p><strong>Город</strong></p>
</td>
<td>
<p><strong>Адрес</strong></p>
</td>

</tr>
<tr>
<td>
<p><strong>Ашдод</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>7 Haorgim Street , Ashdod</td>
</tr>
<tr>
<td>
<p><strong>Ben Gurion Int'l Airport</strong> - центральное отделение аренды проката автомобилей в Израиле</p>
</td>
<td>Terminal 3</td>

</tr>
<tr>
<td>
<p><strong>Афула</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>71 Menachem Begin Street , Afula</td>

</tr>
<tr>
<td>
<p><strong>Беэр Шева</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>18 Itzhak Nafha Street , Beer Sheva</td>

</tr>
<tr>
<td><strong>Бней Брак</strong> - городское отделение аренды проката автомобилей в Израиле</td>
<td>106 Kahanman Street , Bnei Brak</td>

</tr>
<tr>
<td><strong>Бней Брак</strong> - городское отделение аренды проката автомобилей в Израиле</td>
<td>64 Mivtza Kadesh Street , Bnei Brak</td>

</tr>
<tr>
<td>
<p><strong>Герцлия</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>8 Aba Even Street , Herzeliya</td>

</tr>
<tr>
<td>
<p><strong>Иерусалим</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td><td>
19 King David Street , Jerusalem
</td>
</tr>
<tr>
<td>
<p><strong>Кирьят Шмоне</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>1 Hayarden Street , Kiryat Shmone</td>
</tr>
<tr>
<td>
<p><strong>Нетания</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>1 Ussishkin Street , Natanya</td>
</tr>
<tr>
<td>
<p><strong>Бейт Шемеш</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>10 Nahal Zohar Street , Beit Shemesh</td>

</tr>
<tr>
<td>
<p><strong>Петах Тиква</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>82 Jabotinski Street , Petach Tikva</td>
</tr>
<tr>
<td>
<p><strong>Nes Tziona</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>10 Hapatish Street , Nes Tziona</td>
</tr>
<tr>
<td>
<p><strong>Ришон Лецио</strong>н - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>14 David Saharov Street , Rishon LeTsiyon</td>
</tr>

<tr>
<td>
<p><strong>Реховот</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>96 Herzl Street , Rehovot</td>
</tr>
<tr>
<td><strong>Холон</strong> - городское отделение аренды проката автомобилей в Израиле</td>
<td>73 Hamerkava Street , Holon</td>
</tr>
<tr>
<td>
<p><strong>Тель Авив, набережная</strong> - центральное отделение аренды проката автомобилей в Израиле</p>
</td>
<td>80 Hayarkon Street , Tel Aviv</td>

</tr>
<tr>
<td><strong>Тель Авив</strong> - центральное отделение аренды проката автомобилей в Израиле</td>
<td>9 Hamasger Street , Tel Aviv</td>
</tr>
<tr>
<td>
<p><strong>Тверия</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>71 Hayarden Street , Tiberias</td>
</tr>
<tr>
<td>
<p><strong>Кфар Саба</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>17 Ha'Taas Street , Kfar Saba</td>

</tr>
<tr>
<td>
<p><strong>Хайфа</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>88 Hahistadrut Street , Haifa</td>

</tr>
<tr>
<td>
<p><strong>Эйлат</strong> - городское отделение аренды проката автомобилей в Израиле</p>
</td>
<td>3 Sheshet Hayamim Street , Eilat</td>

</tr>
</tbody>
</table>
</div>

<h4>Страховки:</h4>
<br>Страхование (CDW/LDW & TP) покрывают ущерб причиненный автомобилю за исключением франшизы, сумма зависит от категории автомобиля. 
<br>Личная ответственность(франшиза): Сумма франшизы зависит от категории автомобиля $500.00 - $1000.00. 
<br>Данный вид страхования не покрывает повреждения, нанесенные шинам, колесам, стеклам, крыше, а так же ходовой части автомобиля. 
<br>Арендатор обязан выплатить полную сумму ущерба, нанесенного этим частям автомобиля. 
<br>Полная страховка (Super CDW) не обязательная и снижает ответственность арендатора до Нуля в случае ущерба автомобилю. 
<br>Приобрести данный вид страхования возможно только в дополнение к базовому полису(CDW/LDW & TP). 
<br>Полная страховка(Super TP) не обязательная и снижает ответственность арендатора до Нуля в случае угона арендованнго автомобиля. 
<br>Приобрести данный вид страхования возможно только в дополнение к базовому полису (CDW/LDW & TP). 
<br>Страхование 3-его лица (3PLC - Limited Coverage) обязательно для клиентов, отказавшихся от полиса CDW/LDW & TP и имеют покрытие от кредитной компании. 
<br>Для приобретения данного полиса, арендатор обязан иметь при себе годную кредитную карту, например World Master Card из США или Канадскую Gold/Platinum Visa/Master Card либо Visa Premier с письменным подтверждением о покрытии кредитной компанией страховки на аренду авто в Израиле. 
<br>Страхование 3-его лица является обязательным в Израиле в том случае, когда полис CDW/LDW & TP был отклонен или при необходимости покрытия ущерба, который не покрыт кредитной компании, например ущерб шинам\колесам не вследствие кражи, вандализма либо не является результатом столкновения автомобиля или ущерба нанесенного третьей стороной. 
<br>Полис CDW/LDW & TP должен быть приобретен в случие, когда покрытие от кредитной компании не распространяется на аренду авто в Израиле. 
<br>Только кредитные компании США World Master Card или Канады Gold/Platinum Visa/Master Card или Visa Premier могут быть использованы для отказа от полиса CDW/LDW & TP.В случае отказа от полиса CDW & TP ответственность арендатора возрастает до полной стоимости автомобиля. 
<br>Страховые Полиса, предлагаемые другими организациями, не принимаются. 
<br>Страхование путешествий так же не принимается. 
<br>Действительно для аренды максимум в 28 последовательных дней.

                
                

                
                
                
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
    </body>
</html>
