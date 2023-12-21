<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Trade-in | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "Trade-in | AppGreatStore");
$APPLICATION->SetPageProperty("title", "Trade-in | AppGreatStore");
$APPLICATION->SetTitle("Trade-in");
?>















<div class="breadcrumbs-abs-wrapper darker">
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>
</div><!-- .breadcrumbs-abs-wrapper -->







<div class="page-trade-in-first">
    <div class="container">

        <div class="index-first-slider-item">
            <div class="index-first-slider-item-info">
                <div class="index-first-slider-item-info__title">
                    Выгодный Trade in
                </div>
                <div class="index-first-slider-item-info__description">
                    Сдай свой старый телефон и получи скидку 
                    <br>
                    до 50% на покупку нового
                </div>
                <div class="index-first-slider-item-info__button">
                    <a href="#" class="btn btn-black  page-trade-in-first-button">Рассчитать Trade-In</a>
                </div>
            </div>
            <div class="index-first-slider-item-image" style="align-self: flex-end;">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/pic-banner-index-first.png" alt="Выгодный Trade in">
            </div>
        </div>

    </div><!-- .container -->
</div><!-- .page-trade-in-first -->

<script>
$(document).ready(function(){
    $('.page-trade-in-first-button').on('click', function(e){
        e.preventDefault();
        
        let element = $('.page-trade-calc');
        let destination = $(element).offset().top;
        $('html:not(:animated),body:not(:animated)').animate({scrollTop: destination - 40}, 300);
    });
});
</script>











<div class="block page-trade-in-info1">
    <div class="container">
        <h2>Как это работает</h2>
        
        <div class="page-trade-in-info1-description">
            Программа трейд-ин — это умный, удобный и экологичный способ покупки новых устройств. Теперь вам есть куда принести свои устройства Apple, которые вы решили обновить, получить при этом выгоду себе и принести пользу окружающей среде.
        </div>

        <div class="page-trade-in-info1-list">
            <div class="page-trade-in-info1-list-item">
                <div class="page-trade-in-info1-list-item__num">
                    01
                </div>
                <div class="page-trade-in-info1-list-item__title">
                    Принесите свои устройства
                </div>
                <div class="page-trade-in-info1-list-item__text">
                    Мы принимаем все модели iPhone, iPad, Apple Watch, ноутбуки Mac, а также смартфоны и планшеты других производителей. Устройство должно быть в рабочем состоянии (включаться), без существенныхповреждений корпуса и экрана и без следов от контакта с жидкостью. Ограничение для выезда курьера:Выездной выкуп работает только на территории Иркутска. Ограничений по минимальной сумме выкупа нет
                </div>
            </div>
            <div class="page-trade-in-info1-list-item">
                <div class="page-trade-in-info1-list-item__num">
                    02
                </div>
                <div class="page-trade-in-info1-list-item__title">
                    Отдайте устройство на мгновенную диагностику
                </div>
                <div class="page-trade-in-info1-list-item__text">
                    Если устройство соответствует условиям из пункта 1, мы проведем диагностику для оценки его стоимости. При оценке мы учитываем повреждения и царапины на корпусе, экране, сколы и другие следы использования. Это займет не более 15 минут.
                </div>
            </div>
            <div class="page-trade-in-info1-list-item">
                <div class="page-trade-in-info1-list-item__num">
                    03
                </div>
                <div class="page-trade-in-info1-list-item__title">
                    Используйте скидку при покупке нового устройства
                </div>
                <div class="page-trade-in-info1-list-item__text">
                    Все ваши устройства, сданные по программе трейд-ин, могут теперь суммарно использоваться при оплате вашей покупки. Что вы хотите купить — решать вам, ограничений по ассортименту нет. Оставшуюся сумму можно доплатить картой, наличными или оформить в рассрочку или кредит. При этом бонусная программа будет работать на накопление (списать бонусы при такой покупке нельзя)
                </div>
            </div>
        </div><!-- .page-trade-in-info1-list -->

    </div><!-- .container -->
</div><!-- .block.page-trade-in-info1 -->













<div class="container block">
    <div class="faq">
        <h2>Часто задаваемые вопросы</h2>
        
        <div class="special-spoiler">
            <div class="">

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"block_faq", 
	array(
		"COMPONENT_TEMPLATE" => "block_faq",
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => "10",
		"NEWS_COUNT" => "9999",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "IBLOCK_ID",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
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
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

            </div>
        </div><!-- .special-spoiler -->
    </div><!-- .faq -->
</div><!-- .container -->

<!-- <script>
$(document).ready(function(){
	let firstSpoiler = $(".special-spoiler-item").eq(0);
	firstSpoiler.find(".special-spoiler-item__title").trigger("click");
});
</script> -->













<div class="block page-trade-in-info2">
    <div class="container">
        <div class="page-trade-in-info2-title">
            <h2>
                Здесь Вы можете самостоятельно оценить Ваше устройство, чтобы Вы могли понимать какую скидку Вы получите при покупке нового устройства
            </h2>
        </div>
        
        <div class="page-trade-in-info2-flex">
            <div class="page-trade-in-info2-flex-col">
                Программа Trade-in разработана для всех клиентов магазина AppGreat и предоставляет свободу при выборе компенсации за ваше устройство. Помимо скидки на обновление гаджета мы предлагаем использовать эту же скидку на приобретение прочего ассортимента нашего магазина.
            </div>
            <div class="page-trade-in-info2-flex-col">
                Условия:
                <br>
                • При себе иметь паспорт
                <br>
                • Знать свой пароль Apple ID
                <br>
                • Оценка производится после осмотра специалиста в магазине
                <br>
                • Обменять свой старый iPhone вы можете в счет стоимости любой техники Apple в нашем магазине (Apple iPhone, Apple Watch, Air Pods, Macbook, iPad)
            </div>
        </div><!-- .page-trade-in-info2-flex -->

    </div><!-- .container -->
</div><!-- .block.page-trade-in-info2 -->












<div class="block page-trade-calc">
    <div class="container">


        <div class="page-trade-calc-wrapper">

            <div class="page-trade-in-calc-title">
                <h2>
                    Расскажите о вашем устройстве и узнайте 
                    <br>
                    его примерную стоимость:
                </h2>
            </div>
    

            <div class="page-trade-calc-flex">

                <div class="page-trade-in-calc-left">
                    <div class="page-trade-in-calc-left-col">
                        <div class="page-trade-in-calc-left-title">
                            Ваша модель IPhone
                        </div>
                        <div class="page-trade-in-calc-left-list  model">
                            
                        </div>
                    </div><!-- .page-trade-in-calc-left-col -->
        
        
        
                    <div class="page-trade-in-calc-left-col">
                        <div class="page-trade-in-calc-left-title">
                            Память
                        </div>
                        <div class="page-trade-in-calc-left-list  memory">
                            
                        </div>
                    </div><!-- .page-trade-in-calc-left-col -->
        
                </div><!-- .page-trade-in-calc-left -->
        
        
        
        
        
        
        
                <div class="page-trade-in-calc-right">
                    <div class="page-trade-in-calc-resume">
                        <div class="page-trade-in-calc-resume__info">
                            <div class="page-trade-in-calc-resume__title">
                                Ваша скидка*
                            </div>
                            <div class="page-trade-in-calc-resume__value">
                                <span class="value">-</span> р.
                            </div>
                        </div>
                    </div><!-- .page-trade-in-calc-resume -->
        
                    <div class="page-trade-in-calc-right-description">
                        *Данная оценка указана для максимального грейда. Точная стоимость вашего устройства будет известна только после диагностики в магазине
                    </div>
        
                    <div class="page-trade-in-calc-right-button">
                        <a href="#modal-trade-in" class="btn btn-black" data-fancybox="">Оставить заявку на Trade-In</a>
                    </div>
                </div><!-- .page-trade-in-calc-right -->

            </div><!-- .page-trade-calc-flex -->
    

        </div><!-- .page-trade-calc-wrapper -->




    </div><!-- .container -->
</div><!-- .block.page-trade-calc -->












<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"page_trade_in__calc", 
	array(
		"COMPONENT_TEMPLATE" => "page_trade_in__calc",
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => "12",
		"NEWS_COUNT" => "99999",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "IBLOCK_ID",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "*",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
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
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>









<div style="display: none;">
    <div class="modal-std-wrapper" id="modal-trade-in">
        <div class="modal-std  type-2">
            <div class="modal-std-flex-center">
                <form class="form-2">
                    <div class="modal-std-title">
                        Оставить заявку на trade-in
                    </div>

                    <div class="modal-std-description">
                        
                    </div>

                    <div class="modal-std-inputs">
                        <input type="text" class="form-item-2 required" name="name" placeholder="Имя">
                        <input type="text" class="form-item-2 required" name="tel" placeholder="Телефон">
                        <a href="#" class="btn btn-black  submit">Отправить</a>

                        <div class="modal-std-privacy">
                            Продолжая, Вы соглашаетесь со <a href="/user-agreement/">сбором и обработкой персональных данных</a>
                        </div>

                        <input type="hidden" name="comment" style="display: none;">
                        <input type="hidden" name="thx" value="#ok-trade-in" style="display: none;">
                        <input type="hidden" name="subject" value="Заявка на trade-in" style="display: none;">
                        <input type="submit" style="display: none;">
                    </div>
                </form>
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>





<div style="display: none;">
    <div class="modal-std-wrapper" id="ok-trade-in">
        <div class="modal-std  type-1">
            <div class="modal-std-flex-center">
                <div class="modal-std-title">
                    Спасибо за заявку!
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








<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>