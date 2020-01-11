from flask import Flask, render_template, json, request, redirect
from flask_mail import Mail, Message
import os

app = Flask(__name__)

mail_settings = {
    "MAIL_SERVER": 'smtp.gmail.com',
    "MAIL_PORT": 465,
    "MAIL_USE_TLS": False,
    "MAIL_USE_SSL": True,
    "MAIL_USERNAME": os.environ['EMAIL_USER'],
    "MAIL_PASSWORD": os.environ['EMAIL_PASSWORD']
}

app.config.update(mail_settings)
mail = Mail(app)


site = "RentalCarsIsrael.com"
title = "Недорогая прокат аренда автомобиля в Израиле - " + site
title_ru = "Недорогая прокат аренда автомобиля в Израиле - " + site
description = site + " Недорогая прокат аренда автомобиля в Израиле, бронирование онлайн, нет предоплаты, безлимитный километраж, нет скрытых платежей, говорим по русски, отделения в Бен Гурион, Тель Авив, Хайфа, Эйлат, Нетания, Ашдод, эконом семейные и люкс автомобили, минивэны"
description_minivan_ru = site + " Недорогая прокат аренда автомобиля в Израиле, бронирование онлайн, нет предоплаты, безлимитный километраж, нет скрытых платежей, говорим по русски, отделения в Бен Гурион, Тель Авив, Хайфа, Эйлат, Нетания, Ашдод, эконом семейные и люкс автомобили, минивэны"

insurance_text_ru_CDW = """Дополнительная страховка (Super CDW) <br/>не обязательная и снижает ответственность арендатора до Нуля в случае ущерба автомобилю (т.е отменяет франшизу).
Приобрести данный вид страхования возможно только в дополнение к базовому полису(CDW/LDW & TP).
* Данный вид страхования не покрывает повреждения, нанесенные шинам, колесам, стеклам, крыше, а так же ходовой части автомобиля. Арендатор обязан выплатить полную сумму ущерба, нанесенного этим частям автомобиля."""



Albar_my_low_price_20200115 = [
    ["Id","CarCategoryId","CarCategoryCode","CarCategoryName","Currency","CurrencySymbol","ImageLink","NumberOfPeople","NumberOfSmallBags","NumberOfLargeBags","AirConditioner","Airbags","Radio","PowerSteering","Gear","Doors","PriceExtraKm","KmQuota","UnitPrice","Days","Price","Unit","ImmidiateConfirmation","DiscountRate","PriceAfterDiscount","RateCodeSelected","LocationIDSupplier","SupplierLogoImageLink","MinimumAge","RentalDays","MinimumDays","DrivingExperienceRequired","WinterTiresFee","RentalContractFee","SupplierCode","Terms","IncludedInVoucher","Fees","CarGuid","ComparePrice"],
    ["70f625ec-1c69-49ae-be15-2233f7c3e40a_10","10","B(MBMR)","Suzuki Alto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/10t1.jpg","4","2","1","True","0","True","True","","0","0.45","250.0","11.67","1","11.67","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","11.67"],
    ["871be8eb-5143-4a40-9368-ce62a26f4417_30","30","C (EBAR)"," Kia Picanto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/30t1.jpg","4","2","1","True","0","True","False","","0","0.45","250.0","12.70","1","12.70","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","12.70"],
    ["c30147c1-78ef-4e17-920a-a3b14f388eff_15","15","Q (MBAR)","Fiat 500 or Similar (2 Doors)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/15t1.jpg","4","2","0","True","0","True","False","","2","0.45","250.0","12.10","1","12.10","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","12.10"],
    ["ac0f03b8-e9a6-4602-959f-e9e1503c8fd9_20","20","D (ECAR)","Hyundai i20 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/20t1.jpg","4","2","1","True","0","True","False","","0","0.45","250.0","13.58","1","13.58","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","13.58"],
    ["54e4442a-c4c4-4a94-9063-24114c10985b_50","50","E (EDAR)","Ford Fiesta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/50t.jpg","5","2","1","True","0","True","False","","0","0.45","250.0","14.89","1","14.89","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","14.89"],
    ["b6d0f12a-49e8-456a-99eb-ca80726953f4_60","60","F (EZAR)","Hyundai i25 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/60t1.jpg","5","2","1","True","0","True","False","","0","0.5","250.0","16.93","1","16.93","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","16.93"],
    ["e218b4ce-dbdc-4853-8422-12c6bc81e2d0_90","90","I (CCAR)","VW Golf or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/90t1.jpg","5","2","2","True","0","True","False","","0","0.5","250.0","20.42","1","20.42","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","20.42"],
    ["ef86283b-6bed-4764-b6ce-7df9b4f0ef53_91","91","IW (CWAR)","Seat Leon SW or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/91t1.jpg","5","2","2","True","0","True","False","","0","0.5","250.0","26.62","1","26.62","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","26.62"],
    ["906f993d-c6b3-426a-ba3d-56b08f3d401c_80","80","H (CDAR)","VW Jetta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/80t.jpg","5","2","2","True","0","True","False","","0","0.5","250.0","27.98","1","27.98","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","27.98"],
    ["ad69928f-56c6-4520-aa7c-63ffd0947b18_130","130","M (SDAR)","Mazda 6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/130t.jpg","5","2","2","True","0","True","False","","0","0.5","250.0","32.97","1","32.97","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","32.97"],
    ["dae02cbd-f0a5-43da-b9c1-07c4c3eb983b_180","180","R (SCAR)"," VW Passat or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/180t1.jpg","5","2","2","True","0","True","False","","0","0.75","250.0","61.90","1","61.90","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","61.90"],
    ["a345ed57-0e66-40ce-9bec-b4ec54a9ab53_160","160","P (LDAR)","Nissan Maxima or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/160t3.jpg","5","2","2","True","0","True","False","","0","0.75","250.0","89.93","1","89.93","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","89.93"],
    ["0019354b-eacb-4959-ae0a-f322908c2953_230","230","W (LCBR)","Audi A6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/230t.jpg","5","3","2","True","0","True","False","","0","0.75","250.0","121.57","1","121.57","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","121.57"],
    ["a66a862e-d897-47c8-b6af-cc2de2da5ffe_110","110","K (PDAR)","BMW 318i or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/110.jpg","5","2","2","True","0","True","False","","0","0.5","250.0","71.89","1","71.89","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","71.89"],
    ["ef8df43d-3a9d-4b17-b938-60bb04c33d59_100","100","J (SFBR)","Hyundai Tucson or Similar (Aut. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/100t.jpg","5","2","2","True","0","True","False","","0","0.75","250.0","50.69","1","50.69","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","50.69"],
    ["771b118c-1975-4ad5-972e-6d3fc534e9b0_200","200","T (CPMR)","VW Caddy or Similar (Man. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/200t1.jpg","5","3","2","True","0","True","False","","0","0.75","250.0","43.42","1","43.42","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","43.42"],
    ["d9a01c39-4488-4673-9984-adffb549c2a4_70","70","G (IVMR)","Citroen Berlingo or Similar (Man. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/70.jpg","7","2","2","True","0","True","False","","0","0.75","250.0","47.22","1","47.22","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","47.22"],
    ["374b127f-6999-494a-8c09-e7420e747552_135","135","MH (RDAR)","Hyundai Sonata or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/135.png","5","2","2","True","0","True","False","","0","0.5","250.0","40.04","1","40.04","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","40.04"],
    ["8707555e-451a-4888-b85a-facd218e33e4_210","210","U (IVAR)","Opel Zafira or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/210t.jpg","7","3","2","True","0","True","False","","0","0.75","250.0","49.38","1","49.38","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","49.38"],
    ["a1aeb1ac-2282-466c-b9ec-95a6768c01bf_150","150","O (LFBR)","Ford Edge or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/150t1.jpg","5","3","2","True","0","True","False","","0","0.75","250.0","64.22","1","64.22","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","64.22"],
    ["aff4eb11-fa3a-417c-90e4-4a9bd2fabeee_220","220","V (SVAR)","Mitsubishi Outlander or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/220t.jpg","7","3","2","True","0","True","False","","0","0.75","250.0","54.57","1","54.57","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","54.57"],
    ["c89cdce4-82b7-42dd-96c0-708c3a14e6ca_250","250","Y (FVMR)","Renault Traffic or Similar (Man. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/250.jpg","9","3","2","True","0","True","False","","0","0.75","250.0","114.09","1","114.09","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","114.09"],
    ["e61b830e-b354-4a4d-aafc-c9dda26b25ea_260","260","Z (LVAR)","VW Transporter or Similar (Aut. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/260t2.jpg","9","3","3","True","0","True","False","","0","0.75","250.0","118.67","1","118.67","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","118.67"],
    ["98efcd98-9e81-47c1-9cfa-ef320b25abae_225","225","V8 (FVAR)","Kia Carnival or Similar (Aut. 8 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/225.jpg","8","3","2","True","0","True","False","","0","0.75","250.0","81.27","1","81.27","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","81.27"]

    
]




Albar_my_low_price_20191229 = [
    ["Id","CarCategoryId","CarCategoryCode","CarCategoryName","Currency","CurrencySymbol","ImageLink","NumberOfPeople","NumberOfSmallBags","NumberOfLargeBags","AirConditioner","Airbags","Radio","PowerSteering","Gear","Doors","PriceExtraKm","KmQuota","UnitPrice","Days","Price","Unit","ImmidiateConfirmation","DiscountRate","PriceAfterDiscount","RateCodeSelected","LocationIDSupplier","SupplierLogoImageLink","MinimumAge","RentalDays","MinimumDays","DrivingExperienceRequired","WinterTiresFee","RentalContractFee","SupplierCode","Terms","IncludedInVoucher","Fees","CarGuid","ComparePrice","Car"],
    ["60166b7f-56d1-4c7d-ae4f-b8a62b099394_10","10","B (MBMR)","Suzuki Alto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/10t1.jpg","4","2","1","True","0","True","True","","0","0.45","0.0","11.67","3","35.01","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","35.01"],
    ["d029de4c-0513-4317-998c-2ba3684abab8_30","30","C (EBAR)"," Kia Picanto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/30t1.jpg","4","2","1","True","0","True","False","","0","0.45","0.0","12.70","3","38.10","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","38.10","Hyundai_i10, Kia_Picanto, Peugeot_107, Skoda_Citigo, Toyota_Aygo"],
    ["b49e85bd-17ec-4863-9a48-b3140a7a7549_15","15","Q (MBAR)","Fiat 500 or Similar (2 Doors)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/15t1.jpg","4","2","0","True","0","True","False","","2","0.45","0.0","12.10","3","36.30","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","36.30"],
    ["4aa0b59b-5cbc-4c4a-b0bb-7a68960afc6d_20","20","D (ECAR)","Hyundai i20 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/20t1.jpg","4","2","1","True","0","True","False","","0","0.45","0.0","13.58","3","40.74","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","40.74","Hyundai i20, Toyota Yaris Hybrid, Mitsubishi Space Star, Nissan Micra, Toyota Verso"],
    ["8895a757-696d-4767-b9ef-c28b37f9ef39_50","50","E (EDAR)","Ford Fiesta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/50t.jpg","5","2","1","True","0","True","False","","0","0.45","0.0","14.89","3","44.67","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","44.67","Ford Fiesta, Mazda 2, Opel Corsa, Renault Clio/SW, Kia Rio Hatchback, Mitsubishi Attrage"],
    ["e9d87d88-7bcb-414c-9de0-43ed1839343b_60","60","F (EZAR)","Hyundai i25 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/60t1.jpg","5","2","1","True","0","True","False","","0","0.5","0.0","16.93","3","50.79","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","50.79","Hyundai i25, Kia Rio Sedan, Mitsubishi Lancer, Kia Ceed Hatchback, Citroen C-Elyse"],
    ["427f7544-8105-4e4a-a38c-80ac7168bddb_90","90","I (CCAR)","VW Golf or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/90t1.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","20.42","3","61.26","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","61.26","Mazda 3, Hyundai Elantra, Subaru Impreza, Fiat Tipo, Toyota Corolla, Ford Focus, Kia Forte"],
    ["279a8878-c8a9-4cf3-b5e1-8e40960fa0f0_91","91","IW (CWAR)","Seat Leon SW or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/91t1.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","26.62","3","79.86","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","79.86","Ford Focus SW, Seat Leon Sw, Kia Seed SW, Renault Megane SW, Hyundai i30 SW"],
    ["ec74a8e0-2b27-4b7e-8ff4-688ab6eb0fc4_80","80","H (CDAR)","VW Jetta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/80t.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","27.98","3","83.94","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","83.94","Honda Civic, VW Jetta, Reanult Fluence, Fiat 500X"],
    ["4b03f565-c414-499c-9a6f-0c6cd6465351_130","130","M (SDAR)","Mazda 6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/130t.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","32.97","3","98.91","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","98.91","Mazda 6/SW, Toyota Avensis, Ford Mondeo, Subaru B-4, Honda Accord"],
    ["62260ff6-1880-4847-999e-77aa21ed9a89_180","180","R (SCAR)"," VW Passat or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/180t1.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","61.90","3","185.70","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","185.70"],
    ["f2a94426-8800-494d-bc42-95eb79fb908a_160","160","P (LDAR)","Nissan Maxima or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/160t3.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","89.93","3","269.79","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","269.79","Nissan Maxima, Buick LaCrosse, BMW I520, Audi A4, Volvo S-80, Chevrolet Impala"],
    ["aa3e3ff8-4201-4770-92a4-4fc2d828ab28_230","230","W (LCBR)","Audi A6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/230t.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","121.57","3","364.71","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","364.71","Audi A6, BMW i535, Mercedes E-200, Audi A7, Infiniti Q-70 Hybrid, Cadillac CTS, Lexus GS-250"],
    ["b8323395-a35a-48b1-9d6a-afe498eda464_110","110","K (PDAR)","BMW 318i or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/110.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","71.89","3","215.67","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","215.67"],
    ["2b9e7a09-d0ec-48bc-b3a2-5e129aaab63f_100","100","J (SFBR)","Hyundai Tucson or Similar (Aut. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/100t.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","50.69","3","152.07","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","152.07","Hyundai Toucson Aut, Kia Sportage Aut, Nissan Qashqai Aut, Mazda CX-5 Aut, Subaru XV Aut"],
    ["7bd08fad-20a6-409d-b4c7-61387b7a4739_200","200","T (CPMR)","VW Caddy or Similar (Man. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/200t1.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","43.42","3","130.26","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","130.26","Fiat Doblo Man, Renault Kangoo Man, Peugaut Partner Man, Citroen Berlingo Man"],
    ["c62c74c0-2b76-4a24-8683-336cab4b7b3e_135","135","MH (RDAR)","Hyundai Sonata or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/135.png","5","2","2","True","0","True","False","","0","0.5","0.0","40.04","3","120.12","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","120.12","Hyundai Sonata Hybrid, Honda Accord Hybrid, Toyota Camry Hybrid"],
    ["69c5408c-ec5f-46dd-a974-d79b44cc4572_210","210","U (IVAR)","Opel Zafira or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/210t.jpg","7","3","2","True","0","True","False","","0","0.75","0.0","49.38","3","148.14","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","148.14","Opel Zafira Aut, Mazda 5 Aut, Citroen C4 Picasso, Nissan Qashqai+2 Aut, Toyota Prius Plus Aut"],
    ["e1d40b12-bf70-4da6-9d78-f053f85768cd_150","150","O (LFBR)","Ford Edge or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/150t1.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","64.22","3","192.66","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","192.66","Ford Edge Aut, Toyota Highlander Aut "],
    ["66557688-0564-43c8-a618-123540cc8903_220","220","V (SVAR)","Mitsubishi Outlander or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/220t.jpg","7","3","2","True","0","True","False","","0","0.75","0.0","54.57","3","163.71","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","163.71","Mitsubishi Outlander Aut, Ssangyong Rodius Aut, Kia Sorento Aut, Seat Alambra Aut"],
    ["c5563e2a-f499-4b59-93ac-ba7d5536e404_250","250","Y (FVMR)","Renault Traffic or Similar (Man. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/250.jpg","9","3","2","True","0","True","False","","0","0.75","0.0","114.09","3","342.27","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","342.27","Renault Traffic Man, Hyundai i800 H1 Man"],
    ["9fa4ad21-9ecb-47b6-9ade-4f9c4082e52f_260","260","Z (LVAR)","VW Transporter or Similar (Aut. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/260t2.jpg","9","3","3","True","0","True","False","","0","0.75","0.0","118.67","3","356.01","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","356.01","Ford Transit, VW Transporter, Citroen Jumpy, Hyundai i800 H1"],
    ["644c5f8c-6f99-4a39-893e-146c75125d67_225","225","V8 (FVAR)","Kia Carnival or Similar (Aut. 8 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/225.jpg","8","3","2","True","0","True","False","","0","0.75","0.0","81.27","3","243.81","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","243.81","Toyota Sienna LE, Kia Carnival"]
]

Albar_reg_low_price_20191229 = [
    ["Id","CarCategoryId","CarCategoryCode","CarCategoryName","Currency","CurrencySymbol","ImageLink","NumberOfPeople","NumberOfSmallBags","NumberOfLargeBags","AirConditioner","Airbags","Radio","PowerSteering","Gear","Doors","PriceExtraKm","KmQuota","UnitPrice","Days","Price","Unit","ImmidiateConfirmation","DiscountRate","PriceAfterDiscount","RateCodeSelected","LocationIDSupplier","SupplierLogoImageLink","MinimumAge","RentalDays","MinimumDays","DrivingExperienceRequired","WinterTiresFee","RentalContractFee","SupplierCode","Terms","IncludedInVoucher","Fees","CarGuid","ComparePrice"],
    ["5b7651b8-e681-4490-b0a6-d2ab1c63c8c5_10","10","B (MBMR)","Suzuki Alto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/10t1.jpg","4","2","1","True","0","True","True","","0","0.45","0.0","13.33","3","39.99","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","39.99"],
    ["a0ab906c-2789-4e77-84be-3962c2f99888_30","30","C (EBAR)"," Kia Picanto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/30t1.jpg","4","2","1","True","0","True","False","","0","0.45","0.0","14.37","3","43.11","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","43.11"],
    ["bc372d8d-5d12-4247-98ff-b6f3da1fd06b_15","15","Q (MBAR)","Fiat 500 or Similar (2 Doors)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/15t1.jpg","4","2","0","True","0","True","False","","2","0.45","0.0","13.77","3","41.31","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","41.31"],
    ["bba33963-0a32-42aa-b7b1-0348dd1b30eb_20","20","D (ECAR)","Hyundai i20 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/20t1.jpg","4","2","1","True","0","True","False","","0","0.45","0.0","15.24","3","45.72","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","45.72"],
    ["06aa5d1b-0237-4589-b83b-d4fc0cd9f160_50","50","E (EDAR)","Ford Fiesta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/50t.jpg","5","2","1","True","0","True","False","","0","0.45","0.0","16.56","3","49.68","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","49.68"],
    ["19492bd2-799b-4743-a002-7b2fe816c723_60","60","F (EZAR)","Hyundai i25 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/60t1.jpg","5","2","1","True","0","True","False","","0","0.5","0.0","18.60","3","55.80","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","55.80"],
    ["2ad408c5-c488-442a-8d3d-063075be78e4_90","90","I (CCAR)","VW Golf or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/90t1.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","22.09","3","66.27","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","66.27"],
    ["dd4ad454-03da-40b4-b6f4-803b69535609_91","91","IW (CWAR)","Seat Leon SW or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/91t1.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","28.29","3","84.87","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","84.87"],
    ["8e293b0a-a22d-4686-b119-69d7901c898a_80","80","H (CDAR)","VW Jetta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/80t.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","29.64","3","88.92","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","88.92"],
    ["6413287b-fc96-4cd7-8e2e-461a5fc0bb07_130","130","M (SDAR)","Mazda 6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/130t.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","34.63","3","103.89","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","103.89"],
    ["da4a0583-1d59-427d-96f8-b4fa54ebf831_180","180","R (SCAR)"," VW Passat or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/180t1.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","61.90","3","185.70","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","185.70"],
    ["36b8330b-3350-4fa5-b45a-189c96eb8935_160","160","P (LDAR)","Nissan Maxima or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/160t3.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","93.27","3","279.81","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","279.81"],
    ["e3a7ea7d-9d0e-4752-ac80-f1d122886aa7_230","230","W (LCBR)","Audi A6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/230t.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","124.90","3","374.70","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","374.70"],
    ["05aaa707-62d1-4a25-b7e2-b2284dfd7203_110","110","K (PDAR)","BMW 318i or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/110.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","75.22","3","225.66","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","225.66"],
    ["e598e23e-1999-4c1f-9b48-1e9470e5a4c2_100","100","J (SFBR)","Hyundai Tucson or Similar (Aut. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/100t.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","56.24","3","168.72","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","168.72"],
    ["4361a8a7-4fd0-4db5-93a1-56a037a800c2_200","200","T (CPMR)","VW Caddy or Similar (Man. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/200t1.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","44.53","3","133.59","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","133.59"],
    ["293739d8-7be9-429d-854c-c6775c46928f_135","135","MH (RDAR)","Hyundai Sonata or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/135.png","5","2","2","True","0","True","False","","0","0.5","0.0","43.38","3","130.14","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","130.14"],
    ["a43f8f7f-8c2f-4faf-8b1b-32dcff4a9ce8_210","210","U (IVAR)","Opel Zafira or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/210t.jpg","7","3","2","True","0","True","False","","0","0.75","0.0","52.71","3","158.13","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","158.13"],
    ["0b57166e-f960-4f16-86b4-f360a66f8d87_150","150","O (LFBR)","Ford Edge or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/150t1.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","69.78","3","209.34","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","209.34"],
    ["ee6cee15-7344-4991-bf80-cba36e0377a7_220","220","V (SVAR)","Mitsubishi Outlander or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/220t.jpg","7","3","2","True","0","True","False","","0","0.75","0.0","60.12","3","180.36","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","180.36"],
    ["2c531676-0cc5-497b-97b9-471de030f931_250","250","Y (FVMR)","Renault Traffic or Similar (Man. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/250.jpg","9","3","2","True","0","True","False","","0","0.75","0.0","119.64","3","358.92","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","358.92"],
    ["fd2b24cc-0782-48dd-bc96-e14b4a15aa6e_260","260","Z (LVAR)","VW Transporter or Similar (Aut. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/260t2.jpg","9","3","3","True","0","True","False","","0","0.75","0.0","124.22","3","372.66","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","372.66"],
    ["91432661-37dd-4a85-889f-54ad233de6f1_225","225","V8 (FVAR)","Kia Carnival or Similar (Aut. 8 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/225.jpg","8","3","2","True","0","True","False","","0","0.75","0.0","81.27","3","243.81","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","243.81"]
]


Albar_reg_high_price_20191229 = [
    ["Id","CarCategoryId","CarCategoryCode","CarCategoryName","Currency","CurrencySymbol","ImageLink","NumberOfPeople","NumberOfSmallBags","NumberOfLargeBags","AirConditioner","Airbags","Radio","PowerSteering","Gear","Doors","PriceExtraKm","KmQuota","UnitPrice","Days","Price","Unit","ImmidiateConfirmation","DiscountRate","PriceAfterDiscount","RateCodeSelected","LocationIDSupplier","SupplierLogoImageLink","MinimumAge","RentalDays","MinimumDays","DrivingExperienceRequired","WinterTiresFee","RentalContractFee","SupplierCode","Terms","IncludedInVoucher","Fees","CarGuid","ComparePrice"],
    ["38310b35-38f2-438d-bbc3-29a8935724b2_10","10","B","Suzuki Alto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/10t1.jpg","4","2","1","True","0","True","True","","0","0.45","0.0","25.40","3","76.20","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","76.20"],
    ["ec1304ea-b6b0-40e3-8809-86316156a35d_30","30","C","Kia Picanto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/30t1.jpg","4","2","1","True","0","True","False","","0","0.45","0.0","26.50","3","79.50","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","79.50"],
    ["a9bfd66c-60fa-4495-bab7-e65b52382765_15","15","Q","Fiat 500 or Similar (2 Doors)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/15t1.jpg","4","2","0","True","0","True","False","","2","0.45","0.0","26.00","3","78.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","78.00"],
    ["9d246d7e-fc51-4bfe-a496-a648b5b79350_20","20","D","Hyundai i20 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/20t1.jpg","4","2","1","True","0","True","False","","0","0.45","0.0","27.50","3","82.50","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","82.50"],
    ["02538c55-bae1-4e65-80e4-178918ac56b8_50","50","E","Ford Fiesta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/50t.jpg","5","2","1","True","0","True","False","","0","0.45","0.0","28.50","3","85.50","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","85.50"],
    ["0a6bfe04-b033-45cf-901d-a00a4c04c5ea_60","60","F","Hyundai i25 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/60t1.jpg","5","2","1","True","0","True","False","","0","0.5","0.0","32.75","3","98.25","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","98.25"],
    ["20eb9cda-a5a2-4a69-a980-ae0493fed2e0_90","90","I","VW Golf or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/90t1.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","36.95","3","110.85","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","110.85"],
    ["bf2d043c-8a34-4739-a14a-8ed758f2b6b1_91","91","IW","Seat Leon SW or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/91t1.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","39.00","3","117.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","117.00"],
    ["6eecb8ea-59c1-45a2-b42c-b693fb3bc126_80","80","H","VW Jetta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/80t.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","41.15","3","123.45","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","123.45"],
    ["ab84ea1c-d3a4-4b16-993c-131ef1d88d5b_130","130","M","Mazda 6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/130t.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","53.60","3","160.80","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","160.80"],
    ["068b1c86-f222-4ef8-865b-87252096fb9e_180","180","R"," VW Passat or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/180t1.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","88.95","3","266.85","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","266.85"],
    ["0c392592-5d65-4f81-846b-e18801bf0275_160","160","P","Nissan Maxima or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/160t3.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","148.00","3","444.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","444.00"],
    ["86b77339-b142-4ab7-ba3b-31d0120b31de_230","230","W","Audi A6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/230t.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","187.95","3","563.85","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","563.85"],
    ["0593a87a-d867-4c85-adcf-df73e2bb58aa_110","110","K","BMW 318i or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/110.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","107.15","3","321.45","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","321.45"],
    ["372c7963-dd57-420e-ba06-9db513e65791_100","100","J","Hyundai Tucson or Similar (Aut. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/100t.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","96.60","3","289.80","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","289.80"],
    ["a56230e4-a394-4490-898f-acf7e2afd53b_200","200","T","VW Caddy or Similar (Man. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/200t1.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","89.50","3","268.50","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","268.50"],
    ["39f812d8-02bf-4735-a604-ec2a6f3aab5a_135","135","MH","Hyundai Sonata or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/135.png","5","2","2","True","0","True","False","","0","0.5","0.0","69.00","3","207.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","207.00"],
    ["b6b49a8a-d0a6-42db-936d-c1a87b4ca1ba_210","210","U","Opel Zafira or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/210t.jpg","7","3","2","True","0","True","False","","0","0.75","0.0","92.40","3","277.20","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","277.20"],
    ["0c088935-dd30-4e88-a3a7-fd9b536f9cbc_150","150","O","Ford Edge or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/150t1.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","114.00","3","342.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","342.00"],
    ["2b0e9a1a-76ce-498b-a1b6-13f0ed0b40d7_220","220","V","Mitsubishi Outlander or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/220t.jpg","7","3","2","True","0","True","False","","0","0.75","0.0","107.10","3","321.30","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","321.30"],
    ["766c8659-7e93-4792-986b-42a8109925ad_250","250","Y","Renault Traffic or Similar (Man. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/250.jpg","9","3","2","True","0","True","False","","0","0.75","0.0","117.60","3","352.80","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","352.80"],
    ["9e8e78b3-d5d8-4c8b-90ce-38e719df4ce1_260","260","Z","VW Transporter or Similar (Aut. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/260t2.jpg","9","3","3","True","0","True","False","","0","0.75","0.0","186.90","3","560.70","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","560.70"],
    ["07e1043f-47e1-4114-96e2-e64daa97eb2a_225","225","V8","Kia Carnival or Similar (Aut. 8 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/225.jpg","8","3","2","True","0","True","False","","0","0.75","0.0","124.95","3","374.85","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","374.85"]
]

Albar_my_high_price_20191229 = [
    ["Id","CarCategoryId","CarCategoryCode","CarCategoryName","Currency","CurrencySymbol","ImageLink","NumberOfPeople","NumberOfSmallBags","NumberOfLargeBags","AirConditioner","Airbags","Radio","PowerSteering","Gear","Doors","PriceExtraKm","KmQuota","UnitPrice","Days","Price","Unit","ImmidiateConfirmation","DiscountRate","PriceAfterDiscount","RateCodeSelected","LocationIDSupplier","SupplierLogoImageLink","MinimumAge","RentalDays","MinimumDays","DrivingExperienceRequired","WinterTiresFee","RentalContractFee","SupplierCode","Terms","IncludedInVoucher","Fees","CarGuid","ComparePrice"],
    ["88dd0aa5-f700-4660-88fe-c78c09f15e8a_10","10","B (MBMR)","Suzuki Alto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/10t1.jpg","4","2","1","True","0","True","True","","0","0.45","0.0","22.00","3","66.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","66.00"],
    ["18b0718f-0f1c-49c7-857b-3b50a5cdf29c_30","30","C (EBAR)"," Kia Picanto or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/30t1.jpg","4","2","1","True","0","True","False","","0","0.45","0.0","23.00","3","69.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","69.00"],
    ["39e8e91b-b984-4426-ac7c-fcf3f00fa764_15","15","Q (MBAR)","Fiat 500 or Similar (2 Doors)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/15t1.jpg","4","2","0","True","0","True","False","","2","0.45","0.0","22.00","3","66.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","66.00"],
    ["7cf54c00-152c-411d-8872-25f664036195_20","20","D (ECAR)","Hyundai i20 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/20t1.jpg","4","2","1","True","0","True","False","","0","0.45","0.0","24.00","3","72.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","72.00"],
    ["cd5521b0-6cff-4039-8d42-52eb630db682_50","50","E (EDAR)","Ford Fiesta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/50t.jpg","5","2","1","True","0","True","False","","0","0.45","0.0","25.00","3","75.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","75.00"],
    ["4b42d3cc-b6e7-4e96-b5e7-f998ad74b035_60","60","F (EZAR)","Hyundai i25 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/60t1.jpg","5","2","1","True","0","True","False","","0","0.5","0.0","28.00","3","84.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","84.00"],
    ["4fc3d342-c027-4ca3-92da-a8826a553e2c_90","90","I (CCAR)","VW Golf or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/90t1.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","30.00","3","90.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","90.00"],
    ["69e83c7d-3e26-4b84-84e9-7f9e2e283b2c_91","91","IW (CWAR)","Seat Leon SW or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/91t1.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","32.00","3","96.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","96.00"],
    ["6e9ab29d-03eb-4c86-afdc-5bc90b786116_80","80","H (CDAR)","VW Jetta or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/80t.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","36.00","3","108.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","108.00"],
    ["99ad843d-71ed-4875-98a3-3fcc8657797a_130","130","M (SDAR)","Mazda 6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/130t.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","46.00","3","138.00","D","True","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","138.00"],
    ["32cd346b-75bc-4925-a4d8-0eda5989fcf6_180","180","R (SCAR)"," VW Passat or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/180t1.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","73.00","3","219.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","219.00"],
    ["ee82454e-8d00-4063-8117-bbccf8bd7a6c_160","160","P (LDAR)","Nissan Maxima or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/160t3.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","109.00","3","327.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","327.00"],
    ["13854579-7b21-4ad4-9449-027a00c41b4c_230","230","W (LCBR)","Audi A6 or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/230t.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","152.00","3","456.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","456.00"],
    ["f5e939c9-e5fe-4b90-a4ae-ed4353dc8116_110","110","K (PDAR)","BMW 318i or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/110.jpg","5","2","2","True","0","True","False","","0","0.5","0.0","87.00","3","261.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","261.00"],
    ["a1dd48ed-1c67-430c-afda-bcaa0d526f92_100","100","J (SFBR)","Hyundai Tucson or Similar (Aut. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/100t.jpg","5","2","2","True","0","True","False","","0","0.75","0.0","72.00","3","216.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","216.00"],
    ["de7652d4-d3ba-4bfb-af09-c33e6e6331f9_200","200","T (CPMR)","VW Caddy or Similar (Man. 5 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/200t1.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","69.00","3","207.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","207.00"],
    ["eb06f8a5-a4a6-474a-8e28-7863e95ec9c8_135","135","MH (RDAR)","Hyundai Sonata or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/135.png","5","2","2","True","0","True","False","","0","0.5","0.0","57.00","3","171.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","171.00"],
    ["56c019c8-846f-47d5-827b-965998b35d58_210","210","U (IVAR)","Opel Zafira or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/210t.jpg","7","3","2","True","0","True","False","","0","0.75","0.0","69.00","3","207.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","207.00"],
    ["581387bf-d708-4a93-a25c-2d2c72a28314_150","150","O (LFBR)","Ford Edge or Similar","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/150t1.jpg","5","3","2","True","0","True","False","","0","0.75","0.0","104.00","3","312.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","312.00"],
    ["5fc0a198-07c5-423c-9f93-2c3efea1aa56_220","220","V (SVAR)","Mitsubishi Outlander or Similar (Aut. 7 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/220t.jpg","7","3","2","True","0","True","False","","0","0.75","0.0","88.00","3","264.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","264.00"],
    ["7fa7ae4c-9eff-4c18-8c73-a7ad81627a89_250","250","Y (FVMR)","Renault Traffic or Similar (Man. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/250.jpg","9","3","2","True","0","True","False","","0","0.75","0.0","85.00","3","255.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","255.00"],
    ["91f893bf-6048-4836-b848-a2238189bb1d_260","260","Z (LVAR)","VW Transporter or Similar (Aut. 9 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/260t2.jpg","9","3","3","True","0","True","False","","0","0.75","0.0","125.00","3","375.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","375.00"],
    ["f7293a18-4c1d-48e7-a950-e277400a3ca8_225","225","V8 (FVAR)","Kia Carnival or Similar (Aut. 8 Seats)","$","null","https://rent.albar.co.il/CarImages/Rent/CarCategories/225.jpg","8","3","2","True","0","True","False","","0","0.75","0.0","113.00","3","339.00","D","False","0","0","null","null","null","0","0","0","0","null","null","null","null","null","null","null","339.00"]
]

Albar_branches = [
    ["BranchTypeId","Id","Name","City","Address","Phone","Fax","Latitude","Longitude","OpeningHours","CityCode"],
    ["2","339","Tel Aviv Ben Gurion International Airport  TLVT03 ","Lod","Ben Gurion International Airport","972 3 6058000","972 3 9754469\n","31.994406","34.896553","24 hours a day","Lod"],
    ["2","301","Tel Aviv Hayarkon  TLVC02 ","Tel Aviv","80 Hayarkon Street","972 3 6335252","972 3 5102573","32.077054","34.767302","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Tel Aviv"],
    ["2","328","Tel Aviv   Hamelacha  TLVC01 ","Tel Aviv","3 Hamelacha Street","972 3 7588599","972 3 6884079","32.061739","34.784659","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Tel Aviv"],
    ["2","318","Jerusalem   King David  JRSC01 ","Jerusalem","19 King David Street","972 2 5001800","972 2 5001700","31.775051","35.221945","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Jerusalem"],
    ["2","381","Eilat Ramon International Airport  ETMT01 ","Eilat","Ramon International Airport , Timna Vally","972 8 6239300\n","972 8 6272000\n","29.724311","35.004409","Sun-Thu 05:30-23:00 Fri 05:30-20:00","Eilat"],
    ["2","303","Haifa  HFAC01 ","Haifa","27 Haashlag Street","972 4 8409333","972 4 8412888\n","32.790922","35.041871","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Haifa"],
    ["2","316","Netanya  TLVN03 ","Natanya","1 Ussishkin Street","972 9 8612000","972 9 8843575","32.329953","34.851411","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Natanya"],
    ["2","326","Eilat  ETHC01 ","Eilat","3 Sheshet Hayamim Street","972 8 6998877","972 8 6900100","29.569949","34.963356","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Eilat"],
    ["2","308","Afula  HFAS01 ","Afula","70 Menachem Begin Street","972 4 6204500\n","972 4 6207000\n","32.602102","35.29713","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Afula"],
    ["2","335","Ashdod  TLVS06 ","Ashdod","7 Haorgim Street","972 8 6228815","972 8 6100500","31.810989","34.66169","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Ashdod"],
    ["2","306","Beer Sheva  BEVC01 ","Beer Sheva","18 Itzhak Nafha Street","972 8 6311163\n","972 8 9933800\n","31.249272","34.811306","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Beer Sheva"],
    ["2","321","Beit Shemesh  JRSN01 ","Beit Shemesh","1 Nahar Hayarden Street","972 2 8010047\n","972 2 9910300","31.736459","34.992455","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Beit Shemesh"],
    ["2","341","Bnei Brak   Kahanman 106  TLVS01 ","Bnei Brak","106 Kahanman Street","972 3 6207300\n","972 3 6207600\n","32.077497","34.828951","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Bnei Brak"],
    ["2","300","Bnei Brak   Mivtza Kadesh  TLVE01 ","Bnei Brak","64 Mivtza Kadesh Street","972 3 6160700\n","972 3 6151462","32.100526","34.828772","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Bnei Brak"],
    ["2","329","Elad","El'ad","10 Rabbi Shimon Ben Shetah ","972 3 9501500","972 3 9414512","32.054681","34.960596","Sun-Thu 08:00-18:00 Fri 08:00-13:00","El'ad"],
    ["2","535","Herzliya  TLVN01 ","Herzeliya","9 Hamenofim Street","972 9 7666800","972 9 7490900","32.160801","34.807772","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Herzeliya"],
    ["2","322","Jerusalem   Romema","Jerusalem","21 Shamgar Street","972 2 6339666\n","972 2 5001200","31.794866","35.187715","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Jerusalem"],
    ["2","302","Jerusalem   Talpiyot","Jerusalem","26 Moshe Baram Street","972 2 6482896","972 2 6483094","31.781581","35.209244","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Jerusalem"],
    ["2","310","Kfar Saba  TLVN02 ","Kfar Saba","17 HaTaas Street","972 9 7884888","972 9 8358496","32.176357","34.927125","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Kfar Saba"],
    ["2","325","Kiryat Shmone  KSWC01 ","Kiryat Shmone","1 Hayarden Street","972 4 6665959","972 4 6202100\n","33.211485","35.571238","Sun-Thu 08:00-17:30 Fri 08:00-13:00","Kiryat Shmone"],
    ["2","340","Nes Tziona  TLVS04 ","Nes Tziona","10 Hapatish Street","972 8 6991340","972 8 6103300","31.921971","34.793011","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Nes Tziona"],
    ["2","333","Netivot","Netivot","13 Habonim Street","972 8 6888711","972 8 6235000","31.419581","34.597146","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Netivot"],
    ["2","307","Petah Tikva  TLVE02 ","Petach Tikva","82 Jabotinski Street","972 3 6331440\n","972 3 5059700\n","32.176357","34.927125","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Petach Tikva"],
    ["2","332","Rehovot  TLVS05 ","Rehovot","96 Herzl Street","972 8 9417980","972 8 9415693","31.886905","34.81419","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Rehovot"],
    ["2","330","Rishon LeZion  TLVS03 ","Rishon LeTsiyon","14 Saharov Street","972 3 5363600","972 3 5363500","31.991093","34.77095","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Rishon LeTsiyon"],
    ["2","323","Tiberias  HFAE01 ","Tiberias","71 Hayarden Street","972 4 6666123","972 4 6944383","32.787906","35.537311","Sun-Thu 08:00-18:00 Fri 08:00-13:00","Tiberias"]
]


# Russian site
@app.route('/sitemap.xml')
def sitemap(): return render_template('sitemap.xml')

@app.route('/robots.txt')
def robots(): return render_template('robots.txt')

@app.route('/')
def index():
    page = "ru"
    return render_template('index.html', page= page, title=title, Albar_my_low_price = Albar_my_low_price_20200115, Albar_my_high_price = Albar_my_high_price_20191229, Albar_reg_low_price = Albar_reg_low_price_20191229, Albar_reg_high_price = Albar_reg_high_price_20191229, Albar_branches=Albar_branches, description=description)

@app.route('/ru/')
def index_ru():
    page = "ru"
    return render_template('index.html', page= page, title=title_ru, Albar_my_low_price = Albar_my_low_price_20200115, Albar_my_high_price = Albar_my_high_price_20191229, Albar_reg_low_price = Albar_reg_low_price_20191229, Albar_reg_high_price = Albar_reg_high_price_20191229,Albar_branches=Albar_branches, description=description)


@app.route('/ru/minivans')
def minivans():
    page = "ru/minivans"
    return render_template('minivans.html', page= page, title=title_ru, Albar_my_low_price = Albar_my_low_price_20200115, Albar_my_high_price = Albar_my_high_price_20191229, Albar_reg_low_price = Albar_reg_low_price_20191229, Albar_reg_high_price = Albar_reg_high_price_20191229,Albar_branches=Albar_branches, description=description)

@app.route('/ru/branches')
def branches():
    page = "ru/branches"
    return render_template('branches.html', title=title_ru, Albar_my_low_price = Albar_my_low_price_20200115, Albar_my_high_price = Albar_my_high_price_20191229, Albar_reg_low_price = Albar_reg_low_price_20191229, Albar_reg_high_price = Albar_reg_high_price_20191229,Albar_branches=Albar_branches, description=description)

@app.route('/ru/insurance')
def insurance():
    page = "ru/insurance"
    return render_template('insurance.html', page= page, title=title_ru, Albar_my_low_price = Albar_my_low_price_20200115, Albar_my_high_price = Albar_my_high_price_20191229, Albar_reg_low_price = Albar_reg_low_price_20191229, Albar_reg_high_price = Albar_reg_high_price_20191229,Albar_branches=Albar_branches, description=description)

@app.route('/ru/terms')
def terms():
    page = "ru/terms"
    return render_template('terms.html', page= page, title=title_ru, Albar_my_low_price = Albar_my_low_price_20200115, Albar_my_high_price = Albar_my_high_price_20191229, Albar_reg_low_price = Albar_reg_low_price_20191229, Albar_reg_high_price = Albar_reg_high_price_20191229,Albar_branches=Albar_branches, description=description)


@app.route('/ru/faq')
def faq():
    page = "ru/faq"
    return render_template('faq.html', page= page, title=title_ru, Albar_my_low_price = Albar_my_low_price_20200115, Albar_my_high_price = Albar_my_high_price_20191229, Albar_reg_low_price = Albar_reg_low_price_20191229, Albar_reg_high_price = Albar_reg_high_price_20191229,Albar_branches=Albar_branches, description=description)


@app.route('/ru/about')
def about():
    page = "ru/about"
    return render_template('about.html', page= page, title=title_ru, Albar_my_low_price = Albar_my_low_price_20200115, Albar_my_high_price = Albar_my_high_price_20191229, Albar_reg_low_price = Albar_reg_low_price_20191229, Albar_reg_high_price = Albar_reg_high_price_20191229,Albar_branches=Albar_branches, description=description)




@app.route('/ru/request_car', methods=["POST"])
def request_car():
    title = "Спасибо за обращение к нам"
    car = request.form.get("car")
    First_name = request.form.get("First_name")
    Last_name = request.form.get("Last_name")
    phone = request.form.get("phone")
    message = request.form.get("message")
    date_rent = request.form.get("date_rent")
    date_return = request.form.get("date_return")
    email = request.form.get("email")
    to_email = request.form.get("to_email")
    DriverExperience = request.form.get("DriverExperience")
    age = request.form.get("age")
    SuperCDW = request.form.get("SuperCDW")
    SuperTP = request.form.get("SuperTP")
    childseat = request.form.get("childseat")
    addDriver = request.form.get("addDriver")
    tour = request.form.get("tour")

    subject = '{}: {} rent from {} till {} {} {}'.format(site, car, date_rent, date_return, First_name, Last_name )
    body = '{}: Запрос на аренду категория {} от {} {} email: {}  c {} до {}  Тел - {};  Сообщение:  {};  SuperCDW - {}; SuperTP - {}; Возраст водителя - {}; Опыт вождения - {}; Доп.Водитель - {}; Детское сидение - {}; Заинтересован в экскурсии - {}' \
        .format(site, car, First_name, Last_name, email, date_rent, date_return, phone, message, SuperCDW, SuperTP, age, DriverExperience, addDriver, childseat, tour)
    msg = Message(subject=subject,
                  sender=app.config.get("MAIL_USERNAME"),
                  recipients=[to_email],
                  body=body)
    mail.send(msg)
    return render_template('success-send-email-ru.html', title=title)






