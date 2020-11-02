<?php 
require '../db/db.php';

// Лендос (главная страница)

require '../header.php'; ?>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(&quot;../assets/img/94541.jpg&quot;);"></div>
                <div class="swiper-slide" style="background-image: url(&quot;../assets/img/20.jpg&quot;);"></div>
                <div class="swiper-slide" style="background-image: url(&quot;../assets/img/EA3HeysU0AAy1mA.jpg&quot;);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <hr>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Страхование</h2>
                <p class="text-center">Оформляйте полисы прямо на сайте</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-automobile icon"></i>
                        <h3 class="name">ОСАГО</h3>
                        <p class="description">ОСАГО - обязательный вид, который подразумевает страхование ответственности клиента от возможного ущерба, причиненного другому участнику дорожного движения, либо иному имуществу.<br></p><a class="learn-more" href="../Strahovky/Osago1.php">Оформить »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="la la-automobile icon"></i>
                        <h3 class="name">КАСКО</h3>
                        <p class="description"><br>КАСКО - добровольное страхование, обеспечивающее защиту вашего автомобиля от любых повреждений вне зависимости от вызвавших их причин.<br><br></p><a class="learn-more" href="../Strahovky/kaskO.php">Оформить »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-house-damage icon"></i>
                        <h3 class="name">Имущество</h3>
                        <p class="description"><br>ИМУЩЕСТВО - добровольное страхование имущества - домов, квартир, помещений,включая внутреннюю отделку и инженерное оборудование.<br></p><a class="learn-more" href="../Strahovky/property.php">Оформить »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 408px;"><i class="typcn typcn-heart-half-outline icon"></i>
                        <h3 class="name">Жизнь</h3>
                        <p class="description"><br>СТРАХОВАНИЕ ЖИЗНИ - накопительное страхование жизни и здоровья.<br><br></p><a class="learn-more" href="../Strahovky/life.php">Оформить »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-medkit icon"></i>
                        <h3 class="name">ДМС/ОМС</h3>
                        <p class="description">ДМС/ОМС - Добровольное медицинское страхование, подразумевающее возможность получать квалифицированную медицинскую помощь в лучших медицинских учреждениях города без очередей и в удобное для вас время.<br></p><a class="learn-more"
                            href="../Strahovky/DMSOMS.php">Оформить »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 410px;"><i class="fa fa-phone icon"></i>
                        <h3 class="name">Частный случай</h3>
                        <p class="description">Мы оформляем любые виды страховок, поэтому если в списке нет вашего случая, то опишите его по ссылке ниже.</p><a class="learn-more" href="../Strahovky/other.php">Оформить »</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-blue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Калькулятор ОСАГО</h2>
                <p class="text-center">Рассчитать, выбрать и оформить страховку от любой из страховых компаний онлайн</p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="https://agentpolis.ru/4e3bd263528badfae62199b6ac5fbe7cb4e81dec/eosago#/">Оформить</a></div>
        </div>
    </div>
    <hr>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div><canvas data-bs-chart="{&quot;type&quot;:&quot;horizontalBar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Ингосстрах&quot;,&quot;Росгосстрах, ПАО СК&quot;,&quot;Сбербанк страхование&quot;,&quot;Ингосстрах-жизнь&quot;,&quot;Сбербанк страхование жизни&quot;,&quot;Альфа Страхование&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:&quot;#4e73df&quot;,&quot;borderColor&quot;:&quot;#4e73df&quot;,&quot;data&quot;:[&quot;3836&quot;,&quot;3854&quot;,&quot;4129&quot;,&quot;4644&quot;,&quot;5124&quot;,&quot;8020&quot;,&quot;&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:true,&quot;legend&quot;:{&quot;display&quot;:false,&quot;reverse&quot;:false},&quot;title&quot;:{&quot;display&quot;:true,&quot;text&quot;:&quot;Рейтинг страховых компаний&quot;,&quot;fontSize&quot;:&quot;17&quot;}}}"></canvas></div>
                </div>
                <div class="col-md-6">
                    <div></div><a href="../Communication/news.php" style="color: rgb(0,0,0);font-size: 24px;font-family: Aclonica, sans-serif;">Актуальные новости страхования<br></a>
                    <ul style="margin: 10px;padding: 10px;">
                        <li><a href="https://www.insur-info.ru/press/155994/"><span style="text-decoration: underline;">Законопроект о праве банков и страховщиков платить штрафы со скидкой 50% принят во II чтении</span></a><br></li>
                        <li><a href="https://www.insur-info.ru/comments/1388/"><span style="text-decoration: underline;">Страховое направление в работе Службы финансового уполномоченного - итоги первого года</span></a><br></li>
                        <li><a href="https://www.insur-info.ru/press/155965/"><span style="text-decoration: underline;">Глава ВСС считает, что страховой рынок РФ может в 2022 году стать сильнее, чем до кризиса</span></a><br></li>
                        <li><a href="https://www.insur-info.ru/press/155959/"><span style="text-decoration: underline;">Продавцы поддельных полисов ОСАГО начали предупреждать покупателей об отсутствии выплат по ним в случае ДТП</span></a><br></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="map-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Офис Insper</h2>
                <p class="text-center">Мы находимся на первом этаже универмага "Калининский"<br>Пн-Пт 10:00 - 20:00<br>Сб-Вс - 11:00 - 19:00</p>
            </div>
        </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA4z01d9VjtRuZS91GrBgpJqC_qC04sBnw&amp;q=Russia%2C+%D0%9A%D0%BE%D0%BD%D0%B4%D1%80%D0%B0%D1%82%D1%8C%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D1%80.%2C+40&amp;zoom=15"
            width="100%" height="450"></iframe></div>
<? require "../footer.php";?>