<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>













<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>




<div class="container">
    <h1>Ваш заказ</h1>
</div>








<div class="container">
    <div class="page-basket" style="display: none;">

        <div class="page-basket-list">

        </div><!-- .page-basket-list -->


        
        <div class="page-basket-delivery  free" style="display: none;">
            <div class="page-basket-delivery-ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-delivery.svg" alt="Доставка">
            </div>
            <div class="page-basket-delivery-title">
                Доставка курьером - <b>бесплатно</b> <i>(при заказе от 15 000 рублей)</i>
            </div>
            <div class="page-basket-delivery-price">
                Бесплатно
            </div>
        </div><!-- .page-basket-delivery -->
        
        <div class="page-basket-delivery  not_free" style="display: none;">
            <div class="page-basket-delivery-ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-delivery.svg" alt="Доставка">
            </div>
            <div class="page-basket-delivery-title">
                Доставка товара
            </div>
            <div class="page-basket-delivery-price">
                500 руб.
            </div>
        </div><!-- .page-basket-delivery -->


        <div class="page-basket-resume">
            <div class="page-basket-resume-title">
                Итого
            </div>
            <div class="page-basket-resume-price">
                <span class="value"></span>&nbsp;руб.
                <span class="price-disclaimer">Цена указана за наличный расчёт</span>
            </div>
            <div class="page-basket-resume-button">
                <a href="/basket/order/" class="btn btn-black">Далее</a>
            </div>
        </div><!-- .page-basket-resume -->

    </div><!-- .page-basket -->
</div><!-- .container -->


















<?
$GLOBALS['myFilter1'] = array(
    // 'ID' => $arResult['PROPERTIES']['ADDITIONAL_PRODUCTS_RELATED']['VALUE'],
);

$slider_product_cards_v2_left__title = '
    Рекомендуем
';

$slider_product_cards_v2_left__description = '
    Крупнейшая сеть Apple Premium Reseller в мире. Большая сеть магазинов по всей стране.
';

$slider_product_cards__slider_id = 'swiper-recommend';

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










<script>
$(document).ready(function(){
    let basketJSON = {};
    let basketObj = {};

    // проверяем, есть ли basket в localStorage
    if( !localStorage.getItem('basket') ){
        basketObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        basketJSON = localStorage.getItem('basket');
        basketObj = JSON.parse(basketJSON);
    }

    // console.log(basketObj);




    

    let IDs = '';
    for(i in basketObj.list){
        IDs += basketObj.list[i].id + ',';
    }
    IDs = IDs.slice(0, -1);


    // Если в корзине что-то есть - показываем
    if( IDs != '' ){
        $('.page-basket').show();

        $.ajax({
            async: false,
            type: 'POST',
            url: '/_ajax/otherActions.php',
            headers: {
                'Accept': 'application/json'
            },
            data: {
                action: 'page_basket__list',
                IDs: IDs,
            },
            beforeSend: function (data) {
                // console.log(data);
                // // $('.page-services-content-body-row').hide(300);
                // $('.page-service-center-main-body').hide(300);
            },
            success: function (data) {
                // console.log(data);
                $('.page-basket-list').html( data );

                // console.log(basketObj.list);
                for(let i in basketObj.list){
                    $('.page-basket-list .page-basket-list-item.root[data-id="' + basketObj.list[i].id + '"] .page-basket-list-item-count input').val( basketObj.list[i].count );
                }
                
                finalSum();
            },
        });


        $('body').on('click', '.custom-count a', function(e){
            e.preventDefault();
            
            setTimeout(function(){
                finalSum();
            }, 200);
        });
    }

    else {
        let page_basket_empty__HTML = `
            <div class="page-basket-empty">
                <div class="page-basket-empty-text">
                    В корзине пока пусто.
                </div>
                <a href="/catalog/" class="btn btn-black">В каталог</a>
            </div>
        `;
        $('.page-basket').after( page_basket_empty__HTML );
        $('.page-basket').remove();
    }








    function finalSum(){
        let price_total = 0;

        $('.page-basket-list .root').each(function(){
            // $(this).find('.page-basket-list-item-price-one .value')
            let price_one_full = $(this).attr('data-price-one') * $(this).find('.page-basket-list-item-count .custom-count input').val();
            $(this).find('.page-basket-list-item-price-full .value').html( price_one_full.toLocaleString('ru') );

            price_total += price_one_full;
        });

        
        
        let delivery_price = 500; // цена доставки

        if( price_total >= 15000 ){
            $('.page-basket-delivery.free').show();
        } else {
            $('.page-basket-delivery.not_free').show();
            price_total += delivery_price;
        }


        $('.page-basket-resume-price .value').html( price_total.toLocaleString('ru') );
    }









});
</script>







<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>