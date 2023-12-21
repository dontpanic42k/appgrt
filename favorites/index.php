<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?>














<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>




<div class="container">
    <h1>Избранное</h1>
</div>



<?
// <div class="page-favorites">
//     <div class="container">

//         <div class="page-favorites-content">
//             <div class="page-favorites-description">
//                 В избранном пока пусто.
//             </div>
//             <div class="page-favorites-button">
//                 <a href="/catalog/" class="btn btn-black">В каталог</a>
//             </div>
//         </div><!-- .page-favorites-content -->

//     </div><!-- .container -->
// </div><!-- .page-favorites -->
?>








<div class="container">
    <div class="page-favorites" style="display: none;">

        <div class="page-catalog-list  page-favorites-list">

        </div>

    </div><!-- .page-favorites -->
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
    let favoritesJSON = {};
    let favoritesObj = {};

    // проверяем, есть ли favorites в localStorage
    if( !localStorage.getItem('favorites') ){
        favoritesObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        favoritesJSON = localStorage.getItem('favorites');
        favoritesObj = JSON.parse(favoritesJSON);
    }

    // console.log(favoritesObj);




    

    let IDs = '';
    for(i in favoritesObj.list){
        IDs += favoritesObj.list[i].id + ',';
    }
    IDs = IDs.slice(0, -1);


    // Если в избранном что-то есть - показываем
    if( IDs != ''  &&  IDs != 'undefined' ){
    // if( IDs ){
        $('.page-favorites').show();

        $.ajax({
            async: false,
            type: 'POST',
            url: '/_ajax/otherActions.php',
            headers: {
                'Accept': 'application/json'
            },
            data: {
                action: 'page_favorites__list',
                IDs: IDs,
            },
            beforeSend: function (data) {
                // console.log(data);
                // // $('.page-services-content-body-row').hide(300);
                // $('.page-service-center-main-body').hide(300);
            },
            success: function (data) {
                $('.page-favorites-list').html( data );
            },
        });
    }

    else {
        let page_favorites_empty__HTML = `
            <div class="page-basket-empty">
                <div class="page-basket-empty-text">
                    В избранном пока пусто.
                </div>
                <a href="/catalog/" class="btn btn-black">В каталог</a>
            </div>
        `;
        $('.page-favorites').after( page_favorites_empty__HTML );
        $('.page-favorites').remove();
    }







});
</script>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>