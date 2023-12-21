<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Франшиза</title>


    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="template/js/fancybox/jquery.fancybox.min.css" />
    <script src="template/js/fancybox/jquery.fancybox.min.js"></script>
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

    <!-- Маска для телефона -->
    <script src="template/js/jquery.maskedinput.js" type="text/javascript"></script>
    

    <meta property="og:title" content="AppGreat"/>
    <meta property="og:description" content="Интернет-магазин продукции Apple и не только"/>
    <meta property="og:url" content="https://appgreatstore.ru/franchise/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="AppGreatStore"/>
    <meta property="og:image" content="/opengraph.jpg"/>

    
    <link rel="stylesheet" href="template/css/style.css?time=<?= time(); ?>">
</head>
<body>

    <div class="main">

        <div class="topbar">
            <div class="container">
                <div class="topbar-flex">
                    <a href="/" class="topbar-logo"><img src="template/images/logo.svg" alt="logo"></a>

                    <div class="topbar-tels">
                        <a href="tel:+79149353271">+7 (914) 935-32-71</a>
                    </div>

                    <a href="#form-bottom" class="btn btn-gold  scroll">Заказать звонок</a>
                </div><!-- .topbar-flex -->
            </div><!-- .container -->
        </div><!-- .topbar -->



        <div class="block-first">
            <div class="container">
                <div class="block-first-content">
                    <h1 class="block-first-title">
                        Франшиза фирменного магазина техники и аксессуаров AppGreat.Store
                    </h1>
        
                    <div class="block-first-description">
                        Откройте магазин по продаже техники Apple и начните зарабатывать от 300 000 руб. с первого месяца
                    </div>
        
        
                    <div class="block-first-form">
                        <form>
                            <input type="text" class="form-item-2 required" name="name" placeholder="Имя">
                            <input type="text" class="form-item-2 required" name="tel" placeholder="Телефон">
                            <input type="text" class="form-item-2" name="email" placeholder="E-mail">
        
                            <a href="#" class="btn btn-gold-2  submit">Узнать подробнее</a>
        
                            <input type="hidden" name="thx" value="#ok-page-franchise" style="display: none;">
                            <input type="hidden" name="subject" value="Страница Франшиза" style="display: none;">
                            <input type="submit" style="display: none;">
                        </form>
                    </div>
                </div><!-- .block-first-content -->
            </div><!-- .container -->

            <img src="template/images/first.png" alt="block-first-image" class="block-first-image">
        </div><!-- .block-first -->






        <div class="block block-facts">
            <div class="container">
                <h2>Факты в цифрах</h2>

                <div class="block-facts-flex">
                    <div class="block-facts-flex-col">
                        <div class="block-facts-item" data-id="1">
                            <div class="block-facts-item__ava">
                                <img src="template/images/facts-ico-1.png" alt="Время на открытие">
                            </div>
                            <div class="block-facts-item__title">
                                Время на 
                                <br>
                                открытие
                            </div>
                            <div class="block-facts-item__description">
                                25-31 день
                            </div>
                            <div class="block-facts-item__num">
                                01
                            </div>
                        </div><!-- .block-facts-item -->
                    </div><!-- .block-facts-flex-col -->



                    <div class="block-facts-flex-col">
                        <div class="block-facts-item" data-id="2">
                            <div class="block-facts-item__ava">
                                <img src="template/images/facts-ico-2.png" alt="Средняя окупаемость">
                            </div>
                            <div class="block-facts-item__title">
                                Средняя 
                                <br>
                                окупаемость
                            </div>
                            <div class="block-facts-item__description">
                                3-6 месяцев
                            </div>
                            <div class="block-facts-item__num">
                                02
                            </div>
                        </div><!-- .block-facts-item -->

                        <div class="block-facts-item" data-id="3">
                            <div class="block-facts-item__ava">
                                <img src="template/images/facts-ico-3.png" alt="Чистая прибыль с первого месяца">
                            </div>
                            <div class="block-facts-item__title">
                                Чистая прибыль 
                                <br>
                                с первого месяца
                            </div>
                            <div class="block-facts-item__description">
                                от 300 000 руб.
                            </div>
                            <div class="block-facts-item__num">
                                03
                            </div>
                        </div><!-- .block-facts-item -->
                    </div><!-- .block-facts-flex-col -->



                    <div class="block-facts-flex-col">
                        <div class="block-facts-item" data-id="4">
                            <div class="block-facts-item__ava">
                                <img src="template/images/facts-ico-4.png" alt="Более 4 000">
                            </div>
                            <div class="block-facts-item__title">
                                Более 4 000 
                            </div>
                            <div class="block-facts-item__description">
                                клиентов посещают наш магазин ежемесячно
                            </div>
                            <div class="block-facts-item__num">
                                04
                            </div>
                        </div><!-- .block-facts-item -->
                    </div><!-- .block-facts-flex-col -->

                </div><!-- .block-facts-content -->

            </div><!-- .container -->
        </div><!-- .block.block-facts -->









        <div class="block block-form-mini">
            <div class="container">
                <h2>
                    Узнайте больше 
                    <br>
                    об условиях сотрудничества
                </h2>

                <div class="block-form-mini-form">
                    <form>
                        <div class="block-form-mini-form-flex">
                            <input type="text" class="form-item required" name="name" placeholder="Имя">
                            <input type="text" class="form-item required" name="tel" placeholder="Телефон">
                            <a href="#" class="btn btn-gold-2  submit">Узнать подробнее</a>
                        </div><!-- .block-form-mini-form-flex -->
    
                        <input type="hidden" name="thx" value="#ok-page-franchise" style="display: none;">
                        <input type="hidden" name="subject" value="Страница Франшиза" style="display: none;">
                        <input type="submit" style="display: none;">
                    </form>
                </div>
            </div><!-- .container -->
        </div><!-- .block.block-form-mini -->






        <div class="block block-format">
            <div class="container">
                <h2>
                    Выберите формат франшизы 
                    <br>
                    AppGreat.Store
                </h2>

                <div class="block-format-list">

                    <div class="block-format-list-item">
                        <div class="block-format-list-item-num">
                            от 200к
                        </div>
                        <div class="block-format-list-item-ico">
                            <img src="template/images/format-1.png" alt="Торговый остров">
                        </div>
                        <div class="block-format-list-item-title">
                            Торговый остров
                        </div>

                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                Паушальный взнос
                            </div>
                            <div class="block-format-list-item-row-right">
                                200 000 рублей
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                Роялти
                            </div>
                            <div class="block-format-list-item-row-right">
                                20 000 в месяц
                            </div>
                        </div>

                        <h3>Вложения:</h3>

                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                1. Закупка товаров
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 1.5 млн
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                2. Мебель и оформление торговой точки
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 400 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                3. Оборудования и ПО
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 200 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                4. Аренда
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 100 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                5. Рекламная кампания
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 200 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                6. Открытие точки
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 25 дней
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                7. Рекомендуемая площадь
                            </div>
                            <div class="block-format-list-item-row-right">
                                от 10 м<sup>2</sup>
                            </div>
                        </div>

                        <div class="block-format-list-item-row  resume resume-mt">
                            <div class="block-format-list-item-row-left">
                                Средняя прибыль от точки
                            </div>
                            <div class="block-format-list-item-row-right">
                                от 350 000 руб./мес.
                            </div>
                        </div>
                        <div class="block-format-list-item-row  resume">
                            <div class="block-format-list-item-row-left">
                                Срок окупаемости
                            </div>
                            <div class="block-format-list-item-row-right">
                                3-6 месяцев
                            </div>
                        </div>
                    </div><!-- .block-format-list-item -->





                    <div class="block-format-list-item">
                        <div class="block-format-list-item-num">
                            от 250к
                        </div>
                        <div class="block-format-list-item-ico">
                            <img src="template/images/format-2.png" alt="Офис продаж ">
                        </div>
                        <div class="block-format-list-item-title">
                            Офис продаж 
                        </div>

                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                Паушальный взнос
                            </div>
                            <div class="block-format-list-item-row-right">
                                250 000 рублей
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                Роялти
                            </div>
                            <div class="block-format-list-item-row-right">
                                25.000 в месяц
                            </div>
                        </div>

                        <h3>Вложения:</h3>

                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                1. Закупка товаров
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 2 млн
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                2. Мебель и оформление торговой точки
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 600 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                3. Оборудования и ПО
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 400 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                4. Аренда
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 150 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                5. Рекламная кампания
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 200 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                6. Открытие точки
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 25 дней
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                7. Рекомендуемая площадь
                            </div>
                            <div class="block-format-list-item-row-right">
                                от 30 м<sup>2</sup>
                            </div>
                        </div>



                        <div class="block-format-list-item-row  resume resume-mt">
                            <div class="block-format-list-item-row-left">
                                Средняя прибыль от точки
                            </div>
                            <div class="block-format-list-item-row-right">
                                от 450 000 руб./мес.
                            </div>
                        </div>
                        <div class="block-format-list-item-row  resume">
                            <div class="block-format-list-item-row-left">
                                Срок окупаемости
                            </div>
                            <div class="block-format-list-item-row-right">
                                3-6 месяцев
                            </div>
                        </div>

                    </div><!-- .block-format-list-item -->





                    <div class="block-format-list-item  dark">
                        <div class="block-format-list-item-num">
                            от 350к
                        </div>
                        <div class="block-format-list-item-ico">
                            <img src="template/images/format-3.png" alt="Магазин">
                        </div>
                        <div class="block-format-list-item-title">
                            Магазин
                        </div>

                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                Паушальный взнос
                            </div>
                            <div class="block-format-list-item-row-right">
                                350 000 рублей
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                Роялти
                            </div>
                            <div class="block-format-list-item-row-right">
                                45 000 в месяц
                            </div>
                        </div>

                        <h3>Вложения:</h3>

                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                1. Закупка товаров
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 3 млн
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                2. Мебель и оформление торговой точки
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 1 млн
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                3. Оборудования и ПО
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 500 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                4. Аренда
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 150 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                5. Рекламная кампания
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 200 т.р.
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                6. Открытие точки
                            </div>
                            <div class="block-format-list-item-row-right">
                                до 31 дня
                            </div>
                        </div>
                        <div class="block-format-list-item-row">
                            <div class="block-format-list-item-row-left">
                                7. Рекомендуемая площадь
                            </div>
                            <div class="block-format-list-item-row-right">
                                от 40 м<sup>2</sup>
                            </div>
                        </div>



                        <div class="block-format-list-item-row  resume resume-mt">
                            <div class="block-format-list-item-row-left">
                                Средняя прибыль от точки
                            </div>
                            <div class="block-format-list-item-row-right">
                                от 500 000 руб./мес.
                            </div>
                        </div>
                        <div class="block-format-list-item-row  resume">
                            <div class="block-format-list-item-row-left">
                                Срок окупаемости
                            </div>
                            <div class="block-format-list-item-row-right">
                                5-6 месяцев
                            </div>
                        </div>

                    </div><!-- .block-format-list-item -->


                </div><!-- .block-format-list -->
            </div><!-- .container -->
        </div><!-- .block.block-format -->







        <div class="block block-good">
            <div class="container">
                <h2>
                    Сотрудничая с нами, Вы получаете
                </h2>

                <div class="block-good-head">
                    <a href="#" class="block-good-head-item active" data-id="1">
                        Поддержка на каждом этапе
                    </a>
                    <a href="#" class="block-good-head-item" data-id="2">
                        Комплексное продвижение в интернете
                    </a>
                    <a href="#" class="block-good-head-item" data-id="3">
                        Общение и развитие
                    </a>
                </div><!-- .block-good-head -->


                <div class="block-good-list" data-id="1">
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            01
                        </div>
                        <div class="block-good-list-item__introtext">
                            Помощь с подбором помещения, макет торговой точки, презентация для ТЦ, ведение переговоров с арендодателем
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            02
                        </div>
                        <div class="block-good-list-item__introtext">
                            Помощь с оформлением магазина и закупкой оборудования
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            03
                        </div>
                        <div class="block-good-list-item__introtext">
                            Самый быстрый вариант логистики,  который разработан именно для вас
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            04
                        </div>
                        <div class="block-good-list-item__introtext">
                            Личного менеджера, который всегда на связи и поможет разобраться с любым вопросом
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            05
                        </div>
                        <div class="block-good-list-item__introtext">
                            Поставки товара по самой низкой цене в России
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            06
                        </div>
                        <div class="block-good-list-item__introtext">
                            Гарантию 12 месяцев на технику Apple
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            07
                        </div>
                        <div class="block-good-list-item__introtext">
                            Целую команду запуска франчайзи
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            08
                        </div>
                        <div class="block-good-list-item__introtext">
                            Поддержку 24/7
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            09
                        </div>
                        <div class="block-good-list-item__introtext">
                            Обучение для вас и сотрудников
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            10
                        </div>
                        <div class="block-good-list-item__introtext">
                            Систему учёта и управления магазином
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            11
                        </div>
                        <div class="block-good-list-item__introtext">
                            Инструкции, скрипты продаж и обучающие материалы
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            12
                        </div>
                        <div class="block-good-list-item__introtext">
                            Макеты вывесок, флаеров, визиток и футболок
                        </div>
                    </div>
                </div><!-- .block-good-list -->


                <div class="block-good-list" data-id="2" style="display: none;">
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            01
                        </div>
                        <div class="block-good-list-item__introtext">
                            Аналитику по городу и анализ конкурентов
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            02
                        </div>
                        <div class="block-good-list-item__introtext">
                            Полное рекламное продвижение: эффективно настроенную таргетированную и контекстную рекламу, секретные каналы для привлечения клиентов, коллаборации с блогерами
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            03
                        </div>
                        <div class="block-good-list-item__introtext">
                            Конверсионный сайт для вашего города
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            04
                        </div>
                        <div class="block-good-list-item__introtext">
                            Разработанный брендбук и фирменный стиль
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            05
                        </div>
                        <div class="block-good-list-item__introtext">
                            Упаковку социальных сетей: VK, Youtube, TikTok
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            06
                        </div>
                        <div class="block-good-list-item__introtext">
                            Качественный фото-контент
                        </div>
                    </div>
                </div>

                <div class="block-good-list" data-id="3" style="display: none;">
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            01
                        </div>
                        <div class="block-good-list-item__introtext">
                            Встречи, слеты и совместный отдых с партнерами
                        </div>
                    </div>
                    <div class="block-good-list-item">
                        <div class="block-good-list-item__num">
                            02
                        </div>
                        <div class="block-good-list-item__introtext">
                            Еженедельные конференции, где мы делимся успехами и результатами
                        </div>
                    </div>
                </div>

                <div class="block-good-button">
                    <a href="#form-bottom" class="btn btn-gold-2  scroll">Получить бесплатный аудит</a>
                </div>

            </div><!-- .container -->
        </div><!-- .block.block-good -->

<script>
$(document).ready(function(){
    $('.block-good-head-item').on('click', function(e){
        e.preventDefault();
        
        if( $(this).hasClass('active') ){
            return false;
        }

        let id = $(this).attr('data-id');
        $('.block-good-head-item.active').removeClass('active');
        $(this).addClass('active');

        $('.block-good-list').each(function(){
            $(this).hide(300);
        });
        $('.block-good-list[data-id="' + id + '"]').show(300);
    });
});
</script>




        
        <div class="block-steps">
            <div class="container">
                <h2>
                    31 день на открытие
                </h2>

                <div class="h2-description">
                    6 этапов запуска бизнеса будут пройдены благодаря 
                    <br>
                    подробным инструкциям и содействию команды AppGreat.Store
                </div>


                <div class="block-steps-list">
                    <div class="block-steps-list-item">
                        <div class="block-steps-list-item__num">
                            01
                        </div>
                        <div class="block-steps-list-item__ava">
                            <img src="template/images/steps-1.png" alt="01">
                        </div>
                        <div class="block-steps-list-item__title">
                            1 день
                        </div>
                        <div class="block-steps-list-item__subtitle">
                            ЗАКЛЮЧЕНИЕ 
                            <br>
                            ДОГОВОРА
                        </div>
                        <div class="block-steps-list-item__introtext">
                            Закрепляем все условия сотрудничества письменно: от размера роялти до всех мер поддержки вашего филиала
                        </div>
                    </div>
                    <div class="block-steps-list-item">
                        <div class="block-steps-list-item__num">
                            02
                        </div>
                        <div class="block-steps-list-item__ava">
                            <img src="template/images/steps-2.png" alt="02">
                        </div>
                        <div class="block-steps-list-item__title">
                            2-29 дней
                        </div>
                        <div class="block-steps-list-item__subtitle">
                            Аренда и ремонт 
                            <br>
                            помещения
                        </div>
                        <div class="block-steps-list-item__introtext">
                            Поможем подобрать локацию с высоким трафиком, вместе спланируем пространство и решим, как лучше разместить товар
                        </div>
                    </div>
                    <div class="block-steps-list-item">
                        <div class="block-steps-list-item__num">
                            03
                        </div>
                        <div class="block-steps-list-item__ava">
                            <img src="template/images/steps-3.png" alt="03">
                        </div>
                        <div class="block-steps-list-item__title">
                            16-30 дней
                        </div>
                        <div class="block-steps-list-item__subtitle">
                            Поиск и обучение 
                            <br>
                            персонала
                        </div>
                        <div class="block-steps-list-item__introtext">
                            Расскажем, по каким критериям отобрать сотрудников, а для успешных кандидатов проводим курс по продажам и общению с клиентами
                        </div>
                    </div>
                    <div class="block-steps-list-item">
                        <div class="block-steps-list-item__num">
                            04
                        </div>
                        <div class="block-steps-list-item__ava">
                            <img src="template/images/steps-4.png" alt="04">
                        </div>
                        <div class="block-steps-list-item__title">
                            24-30 дней
                        </div>
                        <div class="block-steps-list-item__subtitle">
                            ПЕРВИЧНАЯ 
                            <br>
                            ЗАКУПКА ТОВАРА
                        </div>
                        <div class="block-steps-list-item__introtext">
                            Заказ и размещение торгового оборудования, покупка первой партии товаров и комплектация собственного склада
                        </div>
                    </div>
                    <div class="block-steps-list-item">
                        <div class="block-steps-list-item__num">
                            05
                        </div>
                        <div class="block-steps-list-item__ava">
                            <img src="template/images/steps-5.png" alt="05">
                        </div>
                        <div class="block-steps-list-item__title">
                            20-31 дней
                        </div>
                        <div class="block-steps-list-item__subtitle">
                            ЗАПУСК 
                            <br>
                            РЕКЛАМЫ
                        </div>
                        <div class="block-steps-list-item__introtext">
                            Настройка таргета для соц. сетей, контекста в поисковых системах для генерации базы клиентов из онлайн-пользователей
                        </div>
                    </div>
                    <div class="block-steps-list-item">
                        <div class="block-steps-list-item__num">
                            06
                        </div>
                        <div class="block-steps-list-item__ava">
                            <img src="template/images/steps-6.png" alt="06">
                        </div>
                        <div class="block-steps-list-item__title">
                            20-31 дней
                        </div>
                        <div class="block-steps-list-item__subtitle">
                            ТОРЖЕСТВЕННОЕ 
                            <br>
                            ОТКРЫТИЕ
                        </div>
                        <div class="block-steps-list-item__introtext">
                            Первый день работы магазина с приуроченными к этому акциями, розыгрышами и спецпредложениями
                        </div>
                    </div>
                </div><!-- .block-steps-list -->


                <div class="block-steps-button">
                    <a href="#form-bottom" class="btn btn-gold-2  scroll">Получить план открытия</a>
                </div>
                
            </div><!-- .container -->
        </div><!-- .block.block-steps -->




        





        <div class="block interior">
            <h2>
                Стильный интерьер
            </h2>
            <div class="h2-description">
                Посмотрите, как будет выглядеть Ваш магазин
            </div>
            <div class="interior-list">
                <div class="interior-item" data-id="1">
                    <img src="template/images/about-interior-1.jpg" alt="interior">
                </div>
                <div class="interior-item" data-id="2">
                    <img src="template/images/about-interior-2.jpg" alt="interior">
                </div>
                <div class="interior-item" data-id="3">
                    <img src="template/images/about-interior-3.jpg" alt="interior">
                </div>
                <div class="interior-item" data-id="4">
                    <img src="template/images/about-interior-4.jpg" alt="interior">
                </div>
            </div><!-- .interior-list -->
        </div><!-- .block.interior -->








        <div class="block-map">
            <div class="container">
                <div class="block-map-image">
                    <img src="template/images/franchise-map.png" alt="map">
                </div>
            </div><!-- .container -->
        </div><!-- .block-map -->

<style>
.block-map{
    background: #000;
}

.block-map-image{

}

.block-map-image img{
    width: 100%;
}
</style>


        <div class="block-form-mini bottom" id="form-bottom">
            <div class="container">
                <h2>
                    Присоединяйтесь 
                    <br>
                    к нашей франчазинговой сети
                </h2>

                <div class="h2-description-2">
                    Станьте партнером
                </div>

                <div class="block-form-mini-form">
                    <form>
                        <div class="block-form-mini-form-flex">
                            <input type="text" class="form-item required" name="name" placeholder="Имя">
                            <input type="text" class="form-item required" name="tel" placeholder="Телефон">
                            <a href="#" class="btn btn-gold-2  submit">Стать партнером</a>
                        </div><!-- .block-form-mini-form-flex -->
    
                        <input type="hidden" name="thx" value="#ok-page-franchise" style="display: none;">
                        <input type="hidden" name="subject" value="Страница Франшиза" style="display: none;">
                        <input type="submit" style="display: none;">
                    </form>
                </div>
            </div><!-- .container -->
        </div><!-- .block-form-mini.bottom -->





        
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-flex">
                    <div class="footer-bottom-left">
                        <div class="footer-bottom-copyright">
                            Copyright <?= date('Y'); ?>. Все права защищены.
                        </div>
        
                        <div class="footer-bottom-links">
<?
                            // <a href="#privacy-policy" data-fancybox="">Политика конфиденциальности</a>
                            // <a href="#user-agreement" data-fancybox="">Соглашение</a>
?>
                            <a href="/privacy-policy/">Политика конфиденциальности</a>
                            <a href="/user-agreement/">Соглашение</a>
                        </div>
                    </div>
        
                    <a href="https://enjoytouch.ru/" class="footer-bottom-dev" target="_blank"><img src="template/images/logo-et.svg" alt="Enjoy Touch"></a>
                </div><!-- .footer-bottom-flex -->
            </div><!-- .container -->
        </div><!-- .footer-bottom -->


    </div><!-- .main -->









<?
    // <div style="display: none;">
    //     <div class="modal-std" id="order1">
    //         <form>
    //             <div class="modal-std-title">
    //                 Заказать обратный звонок
    //             </div>
    //             <div class="modal-std-description">
    //                 Мы свяжемся с вами в ближайшее время
    //             </div>
    //             <div class="modal-std-inputs">
    //                 <input type="text" class="form-item required" placeholder="Имя" name="name">
    //                 <input type="text" class="form-item required" placeholder="Телефон" name="tel">
    //             </div>
    //             <div class="modal-std-button">
    //                 <a href="#" class="btn btn-red submit">Отправить</a>
    //             </div>

    //             <div class="modal-std-privacy">
    //                 <div class="privacy-policy-form">
    //                     <input type="checkbox" name="privacy-policy" class="custom" checked="checked">
    //                     <div class="privacy-policy-description">Нажимая на кнопку «Отправить заявку», вы соглашаетесь на обработку <a href="#privacy-policy" data-fancybox="">персональных данны</a></div>
    //                 </div>
    //             </div>

    //             <input type="hidden" name="thx" value="#ok-page-franchise" style="display: none;">
    //             <input type="hidden" name="subject" value="Страница Франшиза" style="display: none;">
    //             <input type="submit" style="display: none;">
    //         </form>
    //     </div>
    // </div>
    

    // <div style="display: none;">
    //     <div class="modal-std  ok-send"  id="ok-send">
    //         <div class="modal-std-title">
    //             Спасибо за сообщение
    //         </div>
    //         <div class="modal-std-description">
    //             Мы свяжемся с вами в ближайшее время
    //         </div>
    //         <div class="modal-std-button">
    //             <a href="#" class="btn btn-red" onclick="$.fancybox.close(); return false;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Закрыть&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    //         </div>
    //     </div>
    // </div>
?>

    
<div style="display: none;">
    <div class="modal-std-wrapper" id="ok-page-franchise">
        <div class="modal-std  type-1">
            <div class="modal-std-flex-center">
                <div class="modal-std-title">
                    Спасибо за обращение!
                </div>
                <div class="modal-std-description">
                    Мы свяжемся с вами в ближайшее время
                </div>
                <div class="modal-std-button">
                    <a href="#" class="btn btn-brown" onclick="$.fancybox.close(); return false;">Ок</a>
                </div>
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>








<?
// <div style="display: none;">
//     <div class="modal-std-wrapper" id="privacy-policy">
//         <div class="modal-std type-2">
//             <div class="std-text">

//                 <h2>Политика конфиденциальности</h2>

//                 Настоящий документ «Политика конфиденциальности» (далее – по тексту – «Политика») представляет собой правила использования сайтом franchise.appgreatstore.ru (далее – Оператор) персональной информации Пользователя, которую Оператор, включая всех лиц, входящих в одну группу с Оператором, могут получить о Пользователе во время использования им любого из сайтов, сервисов, служб, программ, продуктов или услуг Оператора(далее – Сайт)и в ходе исполнения Оператором любых соглашений и договоров с Пользователем. Согласие Пользователя с Политикой, выраженное им в рамках отношений с одним из перечисленных лиц, распространяется на все остальные перечисленные лица.
//                 <br>

//                 <br>
//                 Использование Сайта означает безоговорочное согласие Пользователя с настоящей Политикой и указанными в ней условиями обработки его персональной информации; в случае несогласия с этими условиями Пользователь должен воздержаться от использования Сайта.
//                 <br>

//                 <br>
//                 <b>1. Общие положения политики</b>
//                 <br>

//                 <br>
//                 1.1. Настоящая Политика является неотъемлемой частью Публичной оферты (далее – «Оферта»), размещенной и/или доступной в сети Интернет по адресу: https://franchise.appgreatstore.ru/privacy-policy/, а также иных заключаемых с Пользователем договоров, когда это прямо предусмотрено их условиями.
//                 <br>
//                 1.2. Настоящая Политика составлена в соответствии с Федеральным законом «О персональных данных» № 152-ФЗ от 27 июля 2006 г., а также иными нормативно-правовыми актами Российской Федерации в области защиты и обработки персональных данных и действует в отношении всех персональных данных, которые Оператор может получить от Пользователя, являющегося стороной по гражданско-правовому договору.
//                 <br>
//                 1.3. Оператор имеет право вносить изменения в настоящую Политику. При внесении изменений в заголовке Политики указывается дата последнего обновления редакции. Новая редакция Политики вступает в силу с момента ее размещения на сайте, если иное не предусмотрено новой редакцией Политики.
//                 <br>
//                 1.4. К настоящей Политике, включая толкование ее положений и порядок принятия, исполнения, изменения и прекращения, подлежит применению законодательство Российской Федерации.
//                 <br>

//                 <br>
//                 <b>2. Персональная информация Пользователей, которую обрабатывает Сайт</b>
//                 <br>

//                 <br>
//                 2.1.Под персональной информацией в настоящей Политике понимается:
//                 <br>
//                 2.1.1.Информация, предоставляемая Пользователем самостоятельно при регистрации (создании учётной записи) или в процессе использования Сайта, включая персональные данные Пользователя. Обязательная для предоставления Сайтом информация помечена специальным образом. Иная информация предоставляется Пользователем на его усмотрение;
//                 <br>
//                 2.1.2.данные, которые передаются в автоматическом режиме Сайту в процессе их использования с помощью установленного на устройстве Пользователя программного обеспечения, в том числе IP-адрес, данные файлов cookie, информация о браузере Пользователя (или иной программе, с помощью которой осуществляется доступ к Сайту), технические характеристики оборудования и программного обеспечения, используемых Пользователем, дата и время доступа к Сайту, адреса запрашиваемых страниц и иная подобная информация;
//                 <br>
//                 2.1.3. Иная информация о Пользователе, обработка которой предусмотрена условиями использования Сайта.
//                 <br>
//                 2.2. Настоящая Политика применима только к информации, обрабатываемой в ходе использования Сайта. Сайт не контролирует и не несет ответственность за обработку информации сайтами третьих лиц, на которые Пользователь может перейти по ссылкам, доступным на Сайте.
//                 <br>
//                 2.3. Сайт не проверяет достоверность персональной информации, предоставляемой Пользователем, и не имеет возможности оценивать его дееспособность.
//                 <br>

//                 <br>
//                 <b>3. Цели обработки персональной информации Пользователей</b>
//                 <br>

//                 <br>
//                 3.1. Сайт собирает и хранит только ту персональную информацию, которая необходима для предоставления сервисов или исполнения соглашений и договоров с Пользователем, за исключением случаев, когда законодательством предусмотрено обязательное хранение персональной информации в течение определенного законом срока.
//                 <br>
//                 3.2. Персональную информацию Пользователя Сайт обрабатывает в следующих целях:
//                 <br>
//                 3.2.1. Идентификация стороны в рамках сервисов, соглашений и договоров с Сайтом;
//                 <br>
//                 3.2.2. Предоставление Пользователю персонализированных сервисов и услуг, а также исполнение соглашений и договоров;
//                 <br>
//                 3.2.3. Направление уведомлений, запросов и информации, касающихся использования Сайта, исполнения соглашений и договоров, а также обработка запросов и заявок от Пользователя;
//                 <br>
//                 3.2.4. Улучшение качества работы Сайта, удобства его использования для Пользователя, разработка новых услуг и сервисов;
//                 <br>
//                 3.2.5. Таргетирование рекламных материалов;
//                 <br>
//                 3.2.6. Проведение статистических и иных исследований на основе обезличенных данных.
//                 <br>

//                 <br>
//                 <b>4. Условия обработки персональной информации Пользователей и её передачи третьим лицам</b>
//                 <br>

//                 <br>
//                 4.1. В отношении персональной информации Пользователя сохраняется ее конфиденциальность, кроме случаев добровольного предоставления Пользователем информации о себе для общего доступа неограниченному кругу лиц.
//                 <br>
//                 4.2. Сайт вправе передать персональную информацию Пользователя третьим лицам в следующих случаях:
//                 <br>
//                 4.3.1. Пользователь выразил согласие на такие действия;
//                 <br>
//                 4.3.2. Передача необходима для использования Пользователем определенного сервиса либо для исполнения определенного соглашения или договора с Пользователем;
//                 <br>
//                 4.3.3. Передача необходима для функционирования и работоспособности самого Сайта;
//                 <br>
//                 4.3.4. Передача предусмотрена российским или иным применимым законодательством в рамках установленной законодательством процедуры;
//                 <br>
//                 4.3.5. Такая передача происходит в рамках продажи или иной передачи бизнеса (полностью или в части), при этом к приобретателю переходят все обязательства по соблюдению условий настоящей Политики применительно к полученной им персональной информации;
//                 <br>
//                 4.3.6. В целях обеспечения возможности защиты прав и законных интересов Сайта или третьих лиц в случаях, когда Пользователь нарушает Пользовательское соглашение Сайта, настоящую Политику, либо документы, содержащие условия использования конкретных сервисов.
//                 <br>
//                 4.3.7. В результате обработки персональной информации Пользователя путем ее обезличивания получены обезличенные статистические данные, которые передаются третьему лицу для проведения исследований, выполнения работ или оказания услуг по поручению Сайта.
//                 <br>

//                 <br>
//                 <b>5. Изменение и удаление персональной информации. </b>
//                 <br>

//                 <br>
//                 5.1. Пользователь может в любой момент изменить (обновить, дополнить) предоставленную им персональную информацию или её часть, обратившись к Сайту по контактам в разделе 9«Контакты».
//                 <br>
//                 5.2. Права, предусмотренные п.5.1. настоящей Политики могут быть ограничены в соответствии с требованиями законодательства. Например, такие ограничения могут предусматривать обязанность Сайта сохранить измененную или удаленную Пользователем информацию на срок, установленный законодательством, и передать такую информацию в соответствии с законодательно установленной процедурой государственному органу.
//                 <br>

//                 <br>
//                 <b>6. Обработка персональной информации при помощи файлов Cookie и счетчиков</b>
//                 <br>

//                 <br>
//                 6.1. Файлы cookie, передаваемые Сайтом оборудованию Пользователя и оборудованием Пользователя Сайту, могут использоваться Сайтом для предоставления Пользователю персонализированных сервисов, для таргетирования рекламы, которая показывается Пользователю, в статистических и исследовательских целях, а также для улучшения Сайта.
//                 <br>
//                 6.2. Пользователь осознает, что оборудование и программное обеспечение, используемые им для посещения сайтов в сети интернет могут обладать функцией запрещения операций с файлами cookie (для любых сайтов или для определенных сайтов), а также удаления ранее полученных файлов cookie.
//                 <br>
//                 6.3. franchise.appgreatstore.ru вправе установить, что предоставление определенного сервиса или услуги возможно только при условии, что прием и получение файлов cookie разрешены Пользователем.
//                 <br>
//                 6.4. Структура файла cookie, его содержание и технические параметры определяются Сайтом и могут изменяться без предварительного уведомления Пользователя.
//                 <br>
//                 6.5. Счетчики, размещенные Сайтом, могут использоваться для анализа файлов cookie Пользователя, для сбора и обработки статистической информации об использовании Сайта, а также для обеспечения работоспособности Сайта в целом или их отдельных функций в частности. Технические параметры работы счетчиков определяются Сайтом и могут изменяться без предварительного уведомления Пользователя.
//                 <br>

//                 <br>
//                 <b>7. Защита персонально информации Пользователя</b>
//                 <br>

//                 <br>
//                 7.1. Сайт предпринимает необходимые и достаточные организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий с ней третьих лиц.
//                 <br>

//                 <br>
//                 <b>8. Изменение Политики конфиденциальности</b>
//                 <br>

//                 <br>
//                 8.1. Сайт имеет право вносить изменения в настоящую Политику конфиденциальности. При внесении изменений в актуальной редакции указывается дата последнего обновления. Новая редакция Политики вступает в силу с момента ее размещения, если иное не предусмотрено новой редакцией Политики. Действующая редакция постоянно доступна на странице в подвале сайта.
//                 <br>

//                 <br>
//                 <b>9. Контакты и вопросы по персональным данным</b>
//                 <br>

//                 <br>
//                 9.1. Все предложения, вопросы, запросы и иные обращения по поводу настоящей Политики и использования своих персональных данных Пользователь вправе направлять Сайту:
//                 <br>
//                 -по адресу электронной почты: appgreat.store@mail.ru;
//                 <br>
//                 -по почтовому адресу: 664003, г. Иркутск, ул. Урицкого, 4.
//                 <br>
//             </div>
//         </div>
//     </div>
// </div><!-- style="display: none;" -->



// <div style="display: none;">
//     <div class="modal-std-wrapper" id="user-agreement">
//         <div class="modal-std type-2">
//             <div class="std-text">

//                 <h2>Соглашение</h2>

//                 Настоящий документ «Пользовательское соглашение» (далее - Соглашение) представляет собой предложение, размещенное на сайте franchise.appgreatstore.ru (далее - «Сайт»), заключить договор на изложенных ниже условиях Соглашения.
//                 <br>

//                 <br>
//                 <b>1. Общие положения</b>
//                 <br>

//                 <br>
//                 1.1.Вы настоящим подтверждаете, что с момента регистрации на Сайте и в течение времени пользования Сайтом, а также персонализированными сервисами Сайта, вы являетесь Пользователем Сайта вплоть до вашего личного обращения в администрацию Сайта с требованием об отказе от любых взаимоотношений с Сайтом.
//                 <br>
//                 1.2.Использование вами Сайта любым способом и в любой форме в пределах его объявленных функциональных возможностей, включая:
//                 <br>
//                 а) Просмотр размещенных на Сайте материалов;
//                 <br>
//                 б) Регистрация и/или авторизация на Сайте;
//                 <br>
//                 в) Размещение или отображение на Сайте любых материалов, включая, но не ограничиваясь такими как: тексты, гипертекстовые ссылки, изображения, аудио и видеофайлы, сведения и/или иная информация.
//                 <br>

//                 <br>
//                 Создает договор на условиях настоящего Соглашения в соответствии с положениями ст.437 и 438 Гражданского кодекса Российской Федерации.
//                 <br>

//                 <br>
//                 1.3.Воспользовавшись любой из указанных выше возможностей по использованию Сайта, вы подтверждаете, что:
//                 <br>
//                 а) Ознакомились с условиями настоящего Соглашения в полном объеме до начала использования Сайта;
//                 <br>
//                 б) Принимаете все условия настоящего Соглашения в полном объеме без каких-либо изъятий и ограничений с вашей стороны и обязуетесь их соблюдать или прекратить использование Сайта. Если вы не согласны с условиями настоящего Соглашения или не имеете права на заключение договора на их основе, вам следует незамедлительно прекратить любое использование Сайта;
//                 <br>
//                 в) Соглашение (в том числе любая из его частей) может быть изменено Сайтом без какого-либо специального уведомления. Новая редакция Соглашения вступает в силу с момента ее размещения на Сайте либо доведения до сведения Пользователя в иной удобной форме, если иное не предусмотрено новой редакцией Соглашения.
//                 <br>

//                 <br>
//                 <b>2. Общие условия пользования Сайтом</b>
//                 <br>

//                 <br>
//                 2.1.Сайт осуществляет продажу товара посредством веб-ресурса franchise.appgreatstore.ru и сопутствующих сервисных служб Сайта. 
//                 <br>
//                 2.2.Сайт осуществляет доставку товара способами, определенными в Части 3 настоящего Соглашения. 
//                 <br>
//                 2.3.Сайт предоставляет доступ к персонализированным сервисам Сайта для получения наиболее полной информации по интересующему вас товару, создания рейтингов и мнений, участия в конкурсных программах и иных акциях, проводимых Сайтом.
//                 <br>
//                 2.4.Настоящим вы даете своё добровольное согласие на информирование вас обо всех действиях Сайта, связанных с продажей товара и/или оказанием услуг, в том числе о статусе выполнения заказа, а также об иных событиях любого характера, относящихся к сервисам Сайта. 
//                 <br>
//                 2.5.Согласие на получение рассылки:
//                 <br>
//                 Подписываясь на SMS и email-рассылку franchise.appgreatstore.ru или третьих лиц, уполномоченных на рассылку от имени franchise.appgreatstore.ru, в сети Интернет, я соглашаюсь получать информационную рассылку на телефон и электронный адрес, указанный мной при подписке через сервис подписки информационной рассылки на сайте franchise.appgreatstore.ru. Я проинформирован о том, что в случае, если у меня возникнет желание отказаться от информационной рассылки franchise.appgreatstore.ru, мне будет необходимо самостоятельно перейти по ссылке «Отписаться от рассылки», указанной в тексте отправляемых сайтом сообщений с электронного адреса Сайта appgreat.store@mail.ru или же сообщить о несогласии получения информационных рассылок по адресам, указанным в разделе «Контакты» данного Соглашения. Я также даю разрешение Сайту или третьим лицам, уполномоченным на рассылку от имени Сайта, собирать, хранить и обрабатывать все переданные мною в адрес Сайта персональные данные (в том числе фамилию, имя, отчество и адрес электронной почты) с целью информирования о новостях и других событиях Сайта.  
//                 <br>
//                 2.6.Вы соглашаетесь, что Сайт не несет никакой ответственности за задержки, сбои, неверную или несвоевременную доставку, удаление или не сохранность каких-либо уведомлений. При этом Сайт оставляет за собой право повторного направления любого уведомления, в случае его неполучения Вами. 
//                 <br>
//                 2.7.Все вопросы по информационной поддержке Вы можете задать по адресу appgreat.store@mail.ru.
//                 <br>
//                 2.8.Вы признаёте, что сопровождающее товар описание на Сайте не претендует на исчерпывающую информативность и может содержать неточности. Вы вправе направить все замечания по неточному описанию товара Сайту по адресу franchise.appgreatstore.ru.
//                 <br>
//                 2.9.Вы признаёте, что Сайт прилагает достаточные усилия, чтобы внешний вид, упаковка и характеристики товаров соответствовали описаниям, приведенным в каталоге Сайта. Одновременно Сайт доводит до вашего сведения, что фактические внешний вид, упаковка и характеристики товара могут отличаться от этих описаний в случае ассортиментного товара, а также в случае внесения изменений в товар непосредственно производителем.
//                 <br>
//                 2.10.Вы проинформированы, что цена и наличие товара на Сайте изменяется круглосуточно без предварительного уведомления об этом и указываются в индивидуальном статусе и подробной карточке товара, отображаемым в каталоге на Сайте. 
//                 <br>

//                 <br>
//                 <b>3. Обязательства Пользователя при использовании Сайта</b>
//                 <br>

//                 <br>
//                 3.1.Вы соглашаетесь не использовать сервисы Сайта с целью: 
//                 <br>
//                 3.1.1.Загрузки контента, который является незаконным, нарушает любые права третьих лиц; пропагандирует насилие, жестокость, ненависть и/или дискриминацию по расовому, национальному, половому, религиозному, социальному признакам; содержит недостоверные сведения и/или оскорбления в адрес конкретных лиц, организаций, органов власти; 
//                 <br>
//                 3.1.2. Побуждения к совершению противоправных действий, а также содействия лицам, действия которых направлены на нарушение ограничений и запретов, действующих на территории РФ;
//                 <br>
//                 3.1.3. Нарушения прав несовершеннолетних лиц и/или причинение им вреда в любой форме;
//                 <br>
//                 3.1.4. Ущемления прав меньшинств; 
//                 <br>
//                 3.1.5. Выдачи себя за другого человека или представителя организации и/или сообщества без достаточных на то прав, в том числе за сотрудников Сайта;
//                 <br>
//                 3.1.6. Введения в заблуждение относительно свойств и характеристик каких-либо товаров из каталога на Сайте; некорректного сравнения товаров, а также формирования негативного отношения к лицам, (не) пользующимся определенными товарами, или осуждения таких лиц;
//                 <br>
//                 3.1.7. Загрузки контента, который вы не имеете права делать доступным по законодательству РФ или согласно каким-либо контрактным отношениям; 
//                 <br>
//                 3.1.8. Загрузки контента, который затрагивает и/или содержит какой-либо патент, торговый знак, коммерческую тайну, фирменное наименование, авторские и смежные с ними права, а равно прочие права на результаты интеллектуальной деятельности, принадлежащие или правомерно используемые третьими лицами; 
//                 <br>
//                 3.1.9. Загрузки не разрешенной специальным образом рекламной информации и/или спама; 
//                 <br>
//                 3.1.10. Сбора и обработки персональных данных, информации о частной жизни любых лиц; 
//                 <br>
//                 3.1.11. Нарушения нормальной работы Сайта;
//                 <br>
//                 3.1.12. Нарушения российских или международных норм права.
//                 <br>
//                 3.2.Вы соглашаетесь не использовать на Сайте бранных слов, непристойных и оскорбительных образов, сравнений и выражений, в том числе в отношении пола, расы, национальности, профессии, социальной категории, возраста, языка человека и гражданина, а также в отношении организаций, органов власти, официальных государственных символов (флагов, гербов, гимнов), религиозных символов, объектов культурного наследия (памятников истории и культуры).
//                 <br>
//                 3.3.Вы признаете и соглашаетесь, что Сайт имеет право (но не обязанность) по своему усмотрению отказать в размещении и/или удалить любой контент, доступный через сервисы Сайта.
//                 <br>

//                 <br>
//                 <b>4. Политика конфиденциальности</b>
//                 <br>

//                 <br>
//                 4.1.Условия Политики конфиденциальности и отношения между вами и Сайтом, связанные с обработкой персональных данных, регулируются Федеральным Законом РФ №152-ФЗ от 27 июля 2006г. «О персональных данных». 
//                 <br>
//                 4.2.Политика конфиденциальности действует в отношении персональных данных, которые Сайт получил или может получить от вас при регистрации и/или оформлении заказа на Сайте, и необходимые для выполнения обязательств со стороны Сайта в отношении приобретаемого вами товара/услуги и/или вашего доступа к сервисам Сайта. 
//                 <br>
//                 4.3.Политика конфиденциальности доступна в подвале сайта по ссылке – https://franchise.appgreatstore.ru.
//                 <br>

//                 <br>
//                 <b>5. Условия приобретения и доставки товара</b>
//                 <br>

//                 <br>
//                 5.1.Вы можете приобрести товар на Сайте, оплатив его следующими способами: наличными, кредитной картой, банковским переводом.
//                 <br>
//                 5.2.Настоящим вы соглашаетесь, что выбранный вами способ оплаты не подлежит изменению с момента оформления заказа на Сайте. 
//                 <br>
//                 5.3.Настоящим вы соглашаетесь, что подтверждение заказа, оплаченного электронными деньгами, кредитной картой, банковским переводом, происходит только после подтверждения списания денежных средств в счёт оплаты заказа. 
//                 <br>
//                 5.4.Сайт осуществляет доставку товара следующими способами: служба доставки Сайта (курьерская доставка или доставка в пункт самовывоза). Вы вправе выбрать любой удобный для вас способ доставки в соответствии с условиями доставки в свой регион/страну или исходя из своих предпочтений. 
//                 <br>
//                 5.5.Вы соглашаетесь, что в случае невозможности передачи вам товара по вашей вине, в том числе нарушения вами срока, в течение которого вы обязаны забрать товар, будет расцениваться Сайтом как ваш отказ от товара. При этом товар возвращается Сайту, а заказ считается аннулированным. 
//                 <br>
//                 5.6.Все вопросы, связанные со сроками и условиями доставки товара, вы можете направить в Сайту по адресу appgreat.store@mail.ru.
//                 <br>

//                 <br>
//                 <b>6. Ответственность</b>
//                 <br>

//                 <br>
//                 6.1. Сервисы Сайта могут содержать ссылки на другие ресурсы. Вы признаете и соглашаетесь с тем, что Сайт не несет никакой ответственности за доступность этих ресурсов и за их контент, а также за любые последствия, связанные с использованием вами контента этих ресурсов.
//                 <br>
//                 6.2.Вы также соглашаетесь с тем, что Сайт не несёт никакой ответственности за ваши персональные данные, которые вы предоставляете сторонним ресурсам и/или иным третьим лицам в случае перехода на них с Сайта.
//                 <br>
//                 6.3.Вы подтверждаете, что Сайт не отвечает за возможную потерю и/или порчу данных, которая может произойти из-за нарушения вами положений настоящего Соглашения, а также неправильного доступа и/или использования персонализированных сервисов Сайта.
//                 <br>
//                 6.4.Ответственность за действия несовершеннолетних, включая приобретение ими товаров из каталога на Сайте, лежит на законных представителях несовершеннолетних.
//                 <br>
//                 6.5.Вы соглашаетесь, что в случае неисполнения и/или ненадлежащего исполнения Сайтом обязательств по продаже и/или доставке вам товара в связи с предоставлением вами недостоверных и/или недействительных данных о себе, а равно невыполнение вами условий настоящего Соглашения, Сайт ответственности не несет. 
//                 <br>

//                 <br>
//                 <b>7. Реквизиты</b>
//                 <br>

//                 <br>
//                 ИП Зайкова Кристина Викторовна
//                 <br>
//                 ИНН 032628413669
//                 <br>
//                 ОГРНИП322030000018732
//                 <br>
//                 Юридический адрес:
//                 <br>
//                 г. Улан-Удо, ул. Егорова 1г
//                 <br>
//                 Фактический адрес:
//                 <br>
//                 г. Иркутск, ул. Урицкого, 4
//                 <br>
//                 Наименование банка:
//                 <br>
//                 ФИЛИАЛ "ХАБАРОВСКИЙ" АО "АЛЬФА-БАНК"
//                 <br>
//                 Р/сч. 40802810020120001793
//                 <br>
//                 К/сч. 30101810800000000770
//                 <br>
//                 БИК040813770
//                 <br>
//                 E-mail: appgreat.store@mail.ru

//             </div>
//         </div>
//     </div>
// </div><!-- style="display: none;" -->
?>


    
    <script src="template/js/scripts.js?time=<?= time(); ?>"></script>
</body>
</html>


