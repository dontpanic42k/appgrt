<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Главная | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "Главная | AppGreatStore");
$APPLICATION->SetPageProperty("title", "Главная | AppGreatStore");
$APPLICATION->SetTitle("Главная");

CModule::IncludeModule('iblock');
?> 















        <div class="index-first">
            <div class="container">
                <div class="index-first-slider">
                    <div class="swiper-container sw" data-id="index-first-slider">
                        <div class="swiper-wrapper">
                            
<?
                            // <div class="swiper-slide">
                            //     <div class="index-first-slider-item">
                            //         <div class="index-first-slider-item-info">
                            //             <div class="index-first-slider-item-info__title">
                            //                 Выгодный Trade in
                            //             </div>
                            //             <div class="index-first-slider-item-info__description">
                            //                 Сдай свой старый телефон и получи скидку 
                            //                 <br>
                            //                 до 50% на покупку нового
                            //             </div>
                            //             <div class="index-first-slider-item-info__button">
                            //                 <a href="/trade-in/" class="btn btn-black">Подробнее</a>
                            //             </div>
                            //         </div>
                            //         <div class="index-first-slider-item-image" style="align-self: flex-end; height: initial;">
                            //             <img src="< ?=SITE_TEMPLATE_PATH; ? >/images/pic-banner-index-first.png" alt="Выгодный Trade in" style="max-width: 100%; max-height: 100%; width: initial; height: initial;">
                            //         </div>
                            //     </div>
                            // </div>
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"page_index__first_slider", 
	array(
		"COMPONENT_TEMPLATE" => "page_index__first_slider",
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "9999",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
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
                            
                        </div><!-- .swiper-wrapper -->

                        <div class="swiper-pagination"></div>
                    </div><!-- .swiper-container -->
                </div><!-- .index-first-slider -->
            </div><!-- .container -->
        </div><!-- .index-first -->

<script>
$(document).ready(function(){
    let id = 'index-first-slider';
    let swiper_el = '.sw[data-id="' + id + '"]';
    let swiper = new Swiper(swiper_el, {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 7000,
        },
        mousewheelControl: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    
    // let navPrev = $('.swiper-nav[data-id="' + id + '"] a[data-id="left"]');
    // let navNext = $('.swiper-nav[data-id="' + id + '"] a[data-id="right"]');

    // navPrev.on('click', function(e){
    //     e.preventDefault();
    //     swiper.slidePrev();
    // });

    // navNext.on('click', function(e){
    //     e.preventDefault();
    //     swiper.slideNext();
    // });
});
</script>






<?
$page_catalog_subcat__HTML = '';

$db = CIBlockSection::GetList(
	$arOrder = array('SORT' => 'ASC'),
	$arFilter = array(
		'ACTIVE' => 'Y',
		'IBLOCK_ID' => 5,
		// 'SECTION_ID' => $arParams['PARENT_SECTION'],
		'SECTION_ID' => 0,
	),
	$bIncCnt = false,
	$Select = array(
		'ID',
		'IBLOCK_ID',
		'NAME',
		'PICTURE',
		'SECTION_PAGE_URL',
		'UF_CATALOG_CATEGORY_PRICE_MIN',
	),
	$NavStartParams = false
);

while($row = $db -> getNext()){
	// echo '<pre>';
	// print_r( $row );
	// echo '</pre>';
	// // die();

	$CATALOG_CATEGORY_PRICE_MIN = '';
	if( !empty($row['UF_CATALOG_CATEGORY_PRICE_MIN']) ){
		$CATALOG_CATEGORY_PRICE_MIN = 'от ' . $row['UF_CATALOG_CATEGORY_PRICE_MIN'] . ' руб.';
	}
	
	$catalog__list_of_cats__HTML .= '
		<a href="' . $row['SECTION_PAGE_URL'] . '" class="block-catalog-categories-list-item">
			<div class="block-catalog-categories-list-item__ava">
				<img src="' . CFile::GetPath( $row['PICTURE'] ) . '" alt="' . htmlspecialchars( $row['NAME'] ) . '">
			</div>
			<div class="block-catalog-categories-list-item__title">
				' . $row['NAME'] . '
			</div>
			<div class="block-catalog-categories-list-item__description">
				' . $CATALOG_CATEGORY_PRICE_MIN . '
			</div>
		</a>
	';
}
?>



<div class="block-catalog-categories">
    <div class="block-catalog-categories-list">

<?= $catalog__list_of_cats__HTML; ?>

    </div><!-- .block-catalog-categories-list -->
</div><!-- .block-catalog-categories -->









        



<?$APPLICATION->IncludeFile(
    SITE_DIR.'_include/block-compilation.php' // "подборка" - табы со слайдерами внутри - Хит/NEW/Sale
);?>








        <div class="block block-brands">
            <div class="container">
                <h2>Бренды</h2>

                <div class="block-brands-list">
<?
                    // <a href="/catalog/macbook/" class="block-brands-list-item"><img src="< ?=SITE_TEMPLATE_PATH; ? >/images/brands-apple.png" alt="apple"></a>
                    // <a href="/catalog/other/dyson/" class="block-brands-list-item"><img src="< ?=SITE_TEMPLATE_PATH; ? >/images/brands-dyson.png" alt="dyson"></a>
                    // <a href="/catalog/other/dji/" class="block-brands-list-item"><img src="< ?=SITE_TEMPLATE_PATH; ? >/images/brands-dji.png" alt="dji"></a>
                    // <a href="/catalog/garmin/" class="block-brands-list-item"><img src="< ?=SITE_TEMPLATE_PATH; ? >/images/brands-garmin.png" alt="garmin"></a>
                    // <a href="/catalog/samsung/" class="block-brands-list-item"><img src="< ?=SITE_TEMPLATE_PATH; ? >/images/brands-samsung.png" alt="samsung"></a>
                    // <a href="/catalog/other/playstation/" class="block-brands-list-item"><img src="< ?=SITE_TEMPLATE_PATH; ? >/images/brands-playstation.png" alt="playstation"></a>
?>
                    <a href="/search/?q=apple" class="block-brands-list-item"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/brands-apple.png" alt="apple"></a>
                    <a href="/search/?q=dyson" class="block-brands-list-item"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/brands-dyson.png" alt="dyson"></a>
                    <a href="/search/?q=dji" class="block-brands-list-item"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/brands-dji.png" alt="dji"></a>
                    <a href="/search/?q=garmin" class="block-brands-list-item"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/brands-garmin.png" alt="garmin"></a>
                    <a href="/search/?q=samsung" class="block-brands-list-item"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/brands-samsung.png" alt="samsung"></a>
                    <a href="/search/?q=playstation" class="block-brands-list-item"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/brands-playstation.png" alt="playstation"></a>
                </div>
            </div><!-- .container -->
        </div><!-- .block.block-brands -->











        <div class="block block-service-center">
            <div class="container">
                <div class="block-service-center-flex">
                    <div class="block-service-center-info">
                        <div class="block-service-center-info__title">
                            Сервисный центр
                        </div>
                        <div class="block-service-center-info__description">
                            Быстрый и качественный ремонт вашей техники 
                            <br>
                            с гарантией и бесплатной диагностикой.
                        </div>
                        <div class="block-service-center-info__button">
                            <a href="/service-center/" class="btn btn-black">Подробнее</a>
                        </div>
                    </div>
                    <div class="block-service-center-image" style="align-self: flex-end;">
                        <img src="<?=SITE_TEMPLATE_PATH; ?>/images/service-center-index-tel.png" alt="Сервисный центр">
                    </div>
                </div><!-- .block-service-center-flex -->
            </div><!-- .container -->
        </div><!-- .block.block-service-center -->
        











        <div class="block block-good1">
            <div class="container">
                <div class="block-good1-list">
                    <div class="block-good1-list-item">
                        <div class="block-good1-list-item__ico">
                            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-1.svg" alt="Удобно">
                        </div>
                        <div class="block-good1-list-item__title">
                            Удобно
                        </div>
                        <div class="block-good1-list-item__description">
                            Бесплатная доставка по всей РФ (отправка в день заказа и доставка в самые короткие сроки)
                        </div>
                    </div>
                    <div class="block-good1-list-item">
                        <div class="block-good1-list-item__ico">
                            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-2.svg" alt="Надёжно">
                        </div>
                        <div class="block-good1-list-item__title">
                            Надёжно
                        </div>
                        <div class="block-good1-list-item__description">
                            В работе используем оригинальные запчасти. Быстрое и качественное обслуживание вашей техники
                        </div>
                    </div>
                    <div class="block-good1-list-item">
                        <div class="block-good1-list-item__ico">
                            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-3.svg" alt="Честно">
                        </div>
                        <div class="block-good1-list-item__title">
                            Честно
                        </div>
                        <div class="block-good1-list-item__description">
                            Только фиксированные цены — никаких накруток. Если что-то пойдёт не так, ремонт переделаем бесплатно
                        </div>
                    </div>
                    <div class="block-good1-list-item">
                        <div class="block-good1-list-item__ico">
                            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-4.svg" alt="Запись через сайт">
                        </div>
                        <div class="block-good1-list-item__title">
                            Запись через сайт
                        </div>
                        <div class="block-good1-list-item__description">
                            Достаточно сделать запись в несколько кликов на сайте или по телефону
                        </div>
                    </div>
                </div><!-- .block-good1-list -->
            </div><!-- .container -->
        </div><!-- .block.block-good1 -->











        <div class="block block-link-to-about">
            <div class="container">
                <div class="block-link-to-about-flex">
                    <div class="block-link-to-about-left">
                        <h2>AppGreat.store</h2>
                        <div class="block-link-to-about-description">
                            Больше, чем просто магазин устройств
                        </div>
                    </div>
                    <a href="/about/" class="block-link-to-about-link  link-more">О компании</a>
                </div><!-- .block-link-to-about-flex -->
            </div><!-- .container -->
        </div><!-- .block.block-link-to-about -->










        <div class="block-good2">
            <div class="container">
                <div class="block-good2-title">
                    Покупайте онлайн и в розничных 
                    <br>
                    магазинах AppGreat.store
                </div>

                <div class="block-good2-button">
                    <a href="/contacts/" class="btn btn-white">Контакты</a>
                </div>

                <div class="block-good2-list">
                    <div class="block-good2-list-item">
                        <div class="block-good2-list-item__ico">
                            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good2-1.svg" alt="Гарантия низкой цены">
                        </div>
                        <div class="block-good2-list-item__title">
                            Гарантия 
                            <br>
                            низкой цены
                        </div>
                        <div class="block-good2-list-item__description">
                            Нашли цену ниже? 
                            <br>
                            Сделаем еще ниже!
                        </div>
                    </div>
                    <div class="block-good2-list-item">
                        <div class="block-good2-list-item__ico">
                            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good2-2.svg" alt="Индивидуальный подход">
                        </div>
                        <div class="block-good2-list-item__title">
                            Индивидуальный подход
                        </div>
                        <div class="block-good2-list-item__description">
                            Грамотные специалисты, помогут с выбором техники и сэкономят ваше время и деньги
                        </div>
                    </div>
                    <div class="block-good2-list-item">
                        <div class="block-good2-list-item__ico">
                            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good2-3.svg" alt="Бонусы при покупке">
                        </div>
                        <div class="block-good2-list-item__title">
                            Бонусы при покупке
                        </div>
                        <div class="block-good2-list-item__description">
                            Чехол, защитное стекло и адаптер быстрой зарядки к каждому IPhone в подарок
                        </div>
                    </div>
                    <div class="block-good2-list-item">
                        <div class="block-good2-list-item__ico">
                            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good2-4.svg" alt="Эксперты Apple">
                        </div>
                        <div class="block-good2-list-item__title">
                            Эксперты Apple
                        </div>
                        <div class="block-good2-list-item__description">
                            Мы делаем всё, чтобы бренд AppGreat ассоциировался со словами "выгода" и "качество"
                        </div>
                    </div>
                    <div class="block-good2-list-item">
                        <div class="block-good2-list-item__ico">
                            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good2-5.svg" alt="Ремонт">
                        </div>
                        <div class="block-good2-list-item__title">
                            Ремонт
                        </div>
                        <div class="block-good2-list-item__description">
                            Качественный сервис и индивидуальный подход к каждому клиенту
                        </div>
                    </div>
                </div><!-- .block-good2-list -->
            </div><!-- .container -->
        </div><!-- .block-good2 -->










<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"page_index__reviews", 
	array(
		"COMPONENT_TEMPLATE" => "page_index__reviews",
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "8",
		"SORT_BY1" => "PROPERTY_DATE",
		"SORT_ORDER1" => "DESC",
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








<?$APPLICATION->IncludeFile(
    SITE_DIR.'_include/block-stories.php'
);?>












<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"page_index__blog", 
	array(
		"COMPONENT_TEMPLATE" => "page_index__blog",
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "7",
		"SORT_BY1" => "PROPERTY_DATE",
		"SORT_ORDER1" => "DESC",
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
			0 => "DATE",
			1 => "TITLE",
			2 => "AVA",
			3 => "",
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

















<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>