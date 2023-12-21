<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(94919600, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/94919600" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


    <? // <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> ?>
    <script src="<?=SITE_TEMPLATE_PATH; ?>/js/jquery.min.js"></script>
    
    <?
    // <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    // <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    ?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH; ?>/js/fancybox/jquery.fancybox.min.css" />
    <script src="<?=SITE_TEMPLATE_PATH; ?>/js/fancybox/jquery.fancybox.min.js"></script>
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">


    <meta property="og:title" content="<?$APPLICATION->ShowTitle();?>"/>
    <meta property="og:description" content="Интернет-магазин продукции Apple и не только"/>
    <meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST']; ?>/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="AppGreat"/>
    <meta property="og:image" content="/opengraph.jpg"/>
    

    <!-- Маска для телефона -->
    <script src="<?=SITE_TEMPLATE_PATH; ?>/js/jquery.maskedinput.js" type="text/javascript"></script>
    
    
    <!-- swiper -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH; ?>/js/swiper/swiper-bundle.min.css">
    <script src="<?=SITE_TEMPLATE_PATH; ?>/js/swiper/swiper-bundle.min.js"></script>
    
    
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH; ?>/css/style.css?time=<?= time(); ?>">
</head>



<body>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	


    <div class="menu-modal">
        <div class="menu-modal-body">
            <a href="#" class="ico-menu-modal-close"></a>

            <div class="menu-modal-top">
                <a href="#modal-geo" class="topbar1-geo" data-fancybox=""></a>
                <a href="/favorites/" class="topbar2-favorites  empty"><div class="topbar-favorites-count"></div>Избранное</a>
            </div>


            <div class="menu-modal-block">
                <div class="menu-modal-block-title">
                    Каталог
                </div>
                <div class="menu-modal-block-flex">
                    <div class="menu-modal-block-flex-col">
                        <ul>
                            <li><a href="/catalog/iphone/">iPhone</a></li>
                            <li><a href="/catalog/macbook/">MacBook</a></li>
                            <li><a href="/catalog/watch/">Watch</a></li>
                            <li><a href="/catalog/samsung/">Samsung</a></li>
                            <li><a href="/catalog/accessories/">Аксессуары</a></li>
                            <li><a href="/catalog/other/">Прочее</a></li>
                        </ul>
                    </div>
                    <div class="menu-modal-block-flex-col">
                        <ul>
                            <li><a href="/catalog/imac/">iMac</a></li>
                            <li><a href="/catalog/ipad/">iPad</a></li>
                            <li><a href="/catalog/airpods/">AirPods </a></li>
                            <li><a href="/catalog/garmin/">Garmin</a></li>
                            <li><a href="/catalog/tv/">TV</a></li>
                            <li><a href="/catalog/used/">Б/У техника</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="menu-modal-block">
                <div class="menu-modal-block-title">
                    Компания
                </div>
                <div class="menu-modal-block-flex">
                    <div class="menu-modal-block-flex-col">
                        <ul>
                            <li><a href="/about/">О компании</a></li>
                            <li><a href="/gift/">Подарочные сертификаты</a></li>
                            <li><a href="/delivery-and-pay/">Доставка и оплата</a></li>
                            <li><a href="/refund/">Условия возврата <br>и обмена товара</a></li>
                            <li><a href="/guarantees/">Гарантии</a></li>
                            <li><a href="/trade-in/">Trade-in</a></li>
                            <li><a href="/installment-and-credit/">Рассрочка и кредит</a></li>
                        </ul>
                    </div>
                    <div class="menu-modal-block-flex-col">
                        <ul>
                            <li><a href="/service-center/">Сервис</a></li>
                            <li><a href="/promo/">Акции</a></li>
                            <li><a href="/reviews/">Отзывы</a></li>
                            <li><a href="/blog/">Блог</a></li>
                            <li><a href="/franchise/" target="_blank">Франшиза</a></li>
                            <li><a href="/contacts/">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="menu-modal-bottom">
                <div class="menu-modal-bottom-tel-and-schedule">
                    <div class="menu-modal-bottom-tel-and-schedule__tel">
                        <a href="tel:+79149353271">+7 (914) 935-32-71</a>
                    </div>
                    <div class="menu-modal-bottom-tel-and-schedule__schedule">
                        Ежедневно с 11:00 до 20:00
                    </div>
                </div>

                <div class="menu-modal-bottom-socials">
                    <a href="https://t.me/+79149353271" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-social-grey-telegram.svg" alt="telegram"></a>
                    <a href="https://wa.me/+79149353271" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-social-grey-whatsapp.svg" alt="whatsapp"></a>
                    <a href="viber://chat?number=%2B79149353271" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-social-grey-viber.svg" alt="viber"></a>
                </div>
            </div>

            
        </div><!-- .menu-modal-body -->
    </div><!-- .menu-modal -->






    <div class="main">

        <div class="topbar">

            <div class="topbar1">
                <div class="container">
                    <div class="topbar1-flex">
                        <? // <a href="#modal-geo" class="topbar1-geo" data-fancybox="">Иркутск</a> ?>
                        <a href="#modal-geo" class="topbar1-geo" data-fancybox=""></a>
    
                        <div class="topbar1-menu">
                            <ul>
                                <li><a href="/catalog/">Каталог</a></li>
                                <li><a href="/about/">О компании</a></li>
                                <li><a href="/service-center/">Сервис</a></li>
                                <li><a href="/promo/">Акции</a></li>
                                <li><a href="/reviews/">Отзывы</a></li>
                                <li><a href="/blog/">Блог</a></li>
                                <li><a href="/franchise/" target="_blank">Франшиза</a></li>
                                <li><a href="/contacts/">Контакты</a></li>
                            </ul>
                        </div>
    
                        <div class="topbar1-schedule">
                            Ежедневно с 11:00 до 20:00
                        </div>
    
                        <div class="topbar1-tels">
                            <a href="tel:+79149353271">+7 (914) 935-32-71</a>
                        </div>
                    </div><!-- .topbar1-flex -->
                </div><!-- .container -->
            </div><!-- .topbar1 -->
    
    
    
            <div class="topbar2">
                <div class="container">
                    <div class="topbar2-flex">
                        <a href="/" class="topbar2-logo"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/logo.svg" alt="logo"></a>

                        <div class="topbar2-menu">
                            <ul>
                                <li><a href="/catalog/iphone/">iPhone</a></li>
                                <li><a href="/catalog/macbook/">MacBook</a></li>
                                <li><a href="/catalog/imac/">iMac</a></li>
                                <li><a href="/catalog/ipad/">iPad</a></li>
                                <li><a href="/catalog/watch/">Watch</a></li>
                                <li><a href="/catalog/airpods/">AirPods </a></li>
                                <li><a href="/catalog/samsung/">Samsung</a></li>
                                <li><a href="/catalog/garmin/">Garmin</a></li>
                                <li><a href="/catalog/accessories/">Аксессуары</a></li>
                                <li><a href="/catalog/tv/">TV</a></li>
                                <li><a href="/catalog/other/">Прочее</a></li>
                                <li><a href="/catalog/used/">Б/У техника</a></li>
                            </ul>
                        </div>

                        <div class="topbar2-right">
                            <a href="#" class="topbar2-search-ico  topbar-search-show"></a>

                            <a href="/favorites/" class="topbar2-favorites  empty"><div class="topbar-favorites-count"></div></a>

                            <a href="/basket/" class="topbar2-basket  empty"><div class="topbar-basket-count"></div>Корзина</a>
                        </div><!-- .topbar2-right -->
                    </div><!-- .topbar2-flex -->
                </div><!-- .container -->
            </div><!-- .topbar2 -->



            <!-- <a href="#" class="topbar-ico-menu">
                <div class="topbar-ico-menu__dash"></div>
                <div class="topbar-ico-menu__dash"></div>
                <div class="topbar-ico-menu__dash"></div>
            </a> -->

        </div><!-- .topbar -->






<div style="display: none;">
    <div class="modal-std-wrapper" id="modal-geo">
        <div class="modal-std  type-1">
            <div class="modal-std-flex-center">
                <div class="modal-std-title">
                    Выберите город
                </div>
                
                <div class="modal-geo-list">
                    <div class="modal-geo-list-col">
                        <a href="#" class="modal-geo-list-item" data-id="Иркутск">Иркутск</a>
                        <!-- <a href="#" class="modal-geo-list-item" data-id="Улан-Удэ">Улан-Удэ</a> -->
                    </div>
                    <div class="modal-geo-list-col">
                        <a href="#" class="modal-geo-list-item" data-id="Улан-Удэ">Улан-Удэ</a>
                        <!-- <a href="#" class="modal-geo-list-item" data-id="Новосибирск">Новосибирск</a>
                        <a href="#" class="modal-geo-list-item" data-id="Красноярск">Красноярск</a> -->
                    </div>
                </div>
                
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>










        <div class="topbar-mobile">

            <div class="topbar-mobile-1">
                <div class="container">
                    <div class="topbar-mobile-1-flex">
                        <a href="/" class="topbar-mobile-1-logo"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/logo-white.svg" alt="logo"></a>

                        <a href="#" class="topbar-mobile-1-search-ico  topbar-search-show"></a>
                        <a href="/basket/" class="topbar-mobile-1-basket  empty"><div class="topbar-basket-count"></div></a>
                        <a href="#" class="topbar-ico-menu">
                            <div class="topbar-ico-menu__dash"></div>
                            <div class="topbar-ico-menu__dash"></div>
                            <div class="topbar-ico-menu__dash"></div>
                        </a>
                    </div><!-- .topbar-mobile-1-flex -->
                </div><!-- .container -->
                
            </div><!-- .topbar-mobile-1 -->


            <div class="topbar-mobile-2">
                <div class="container">
                    <ul>
                        <li><a href="/catalog/iphone/">iPhone</a></li>
                        <li><a href="/catalog/macbook/">MacBook</a></li>
                        <li><a href="/catalog/imac/">iMac</a></li>
                        <li><a href="/catalog/ipad/">iPad</a></li>
                        <li><a href="/catalog/watch/">Watch</a></li>
                        <li><a href="/catalog/airpods/">AirPods </a></li>
                        <li><a href="/catalog/samsung/">Samsung</a></li>
                        <li><a href="/catalog/garmin/">Garmin</a></li>
                        <li><a href="/catalog/accessories/">Аксессуары</a></li>
                        <li><a href="/catalog/tv/">TV</a></li>
                        <li><a href="/catalog/other/">Прочее</a></li>
                        <li><a href="/catalog/used/">Б/У техника</a></li>
                    </ul>
                </div><!-- .container -->
            </div><!-- .topbar-mobile-2 -->

        </div><!-- .topbar-mobile -->











        

<div class="topbar-search"  style="display: none;">
    <div class="container">

        <div class="topbar-search-flex">
            <a href="#" class="btn btn-search"></a>
            <input type="text" class="topbar-search-input-q"  name="q"  placeholder="Поиск"  value="">
            <a href="#" class="topbar-search-close"></a>
        </div>


        <div class="topbar-search-additional">
            <h2>Популярные запросы</h2>

            <div class="topbar-search-additional-buttons">
                <a href="/catalog/airpods/">airpods</a>
                <a href="/catalog/iphone/iphone-13/">iphone 13</a>
                <a href="/catalog/iphone/iphone-12/">iphone 12</a>
            </div>


            <div class="modal-search-slider">
<?
$GLOBALS['myFilter1'] = array(
    // 'ID' => $arResult['PROPERTIES']['ADDITIONAL_PRODUCTS_RELATED']['VALUE'],
);

$slider_product_cards_v2_left__title = '
    Обратите внимание
';

$slider_product_cards_v2_left__description = '
    Крупнейшая сеть Apple Premium Reseller в мире. Большая сеть магазинов по всей стране.
';

$slider_product_cards__slider_id = 'swiper-search';

$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"block_product_slider_2__with_title_and_subtitle",
	array(
		"FILTER_NAME" => "myFilter1",
        "slider_product_cards_v2_left__title" => $slider_product_cards_v2_left__title,
        "slider_product_cards_v2_left__description" => $slider_product_cards_v2_left__description,
        "slider_product_cards__slider_id" => $slider_product_cards__slider_id,

		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "-",
		"IBLOCK_ID" => 5,
		"NEWS_COUNT" => 16,
		// "SORT_BY1" => "SORT",
		"SORT_BY1" => "RAND",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER2" => "DESC",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "j M Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "news",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);
?>
            </div><!-- .modal-search-slider -->


        </div><!-- .topbar-search-additional -->
        
        
    </div><!-- .container -->
</div><!-- .topbar-search -->
						