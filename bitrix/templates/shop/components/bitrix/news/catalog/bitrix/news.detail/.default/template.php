<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

// /bitrix/templates/shop/components/bitrix/news/catalog/bitrix/news.detail/.default/template.php
// CModule::IncludeModule('iblock');
$IBLOCK_ID = 5;
?>

<?
// echo '<pre>';
// print_r( $arResult['PROPERTIES'] );
// echo '</pre>';
// die();


// $arResult['PROPERTIES']



// 0. ПРОДУКТ - id
$PRODUCT__ID = $arResult['ID'];




// 0. ПРОДУКТ - Название
$PRODUCT__NAME = htmlspecialchars( $arResult['PROPERTIES']['NAME']['~VALUE'] );




// 0. ПРОДУКТ - Слайдеры
$PRODUCT__slider_items__HTML = '';

foreach($arResult['PROPERTIES']['IMAGES']['VALUE'] as $item){
	$PRODUCT__slider_items__HTML .= '
                        <div class="swiper-slide">
                            <img src="' . CFile::GetPath( $item ) . '" alt="' . $PRODUCT__NAME . '" />
                        </div>
	';
}




// 0. ПРОДУКТ - Теги
$PRODUCT__tags__HTML = '';

$PRODUCT__tags__arr = array(
	'XML_ID_TAGS__HIT' => 'hit',
	'XML_ID_TAGS__NEW' => 'new',
	'XML_ID_TAGS__SALE' => 'sale',
);

foreach($arResult['PROPERTIES']['TAGS']['VALUE_XML_ID'] as $item){
	$PRODUCT__tags__HTML .= '<div class="product-card-labels-item" data-type="' . $PRODUCT__tags__arr[$item] . '"></div>';
}

if( !empty($PRODUCT__tags__HTML) ){
	$PRODUCT__tags__HTML = '
		<div class="page-product-card-info-labels">
			<div class="product-card-labels">
				' . $PRODUCT__tags__HTML . '
			</div>
		</div>
	';
}




// 0. ПРОДУКТ - Артикул
$PRODUCT__VENDOR_CODE = '';
if( !empty($arResult['PROPERTIES']['VENDOR_CODE']['~VALUE']) ){
	$PRODUCT__VENDOR_CODE = '
            <div class="page-product-card-info-vendor-code">
				Артикул: ' . $arResult['PROPERTIES']['VENDOR_CODE']['~VALUE'] . '
            </div>
	';
}




// 0. ПРОДУКТ - Цена
$PRODUCT__price__raw = (int) preg_replace('/[^0-9]/', '', $arResult['PROPERTIES']['PRICE']['VALUE']);
$PRODUCT__price__formatted = number_format($PRODUCT__price__raw, 0, ',', ' ');




// 0. ПРОДУКТ - Описание
$PRODUCT__tabs__DESCRIPTION = '';
if( !empty($arResult['PROPERTIES']['TABS_DESCRIPTION']['~VALUE']['TEXT']) ){
    $PRODUCT__tabs__DESCRIPTION = $arResult['PROPERTIES']['TABS_DESCRIPTION']['~VALUE']['TEXT'];
}




// 0. ПРОДУКТ - Характеристики
$PRODUCT__tabs__SPECS = '';
if( !empty($arResult['PROPERTIES']['TABS_SPECS']['~VALUE']['TEXT']) ){
    $PRODUCT__tabs__SPECS = $arResult['PROPERTIES']['TABS_SPECS']['~VALUE']['TEXT'];
}





//////////////////////////////////////////////////////////////////////
// 
// Характеристики-ссылки на другие товары
// 


// 0. RAM
// $arResult['PROPERTIES']['SPECS_RAM']['VALUE'] - своя характеристика
$SPECS__RAM__arr = array(); // массив всех возможных вариантов характеристики

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => 6, // Память (ОЗУ)
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
    )
);

while($row = $db -> getNext()){
    $SPECS__RAM__arr[$row['ID']] = $row['NAME'];
}



$SPECS__RAM__HTML = '';

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => $IBLOCK_ID,
        'ID' => $arResult['PROPERTIES']['OTHER_PRODUCT_RAM']['VALUE'],
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
        'DETAIL_PAGE_URL',
        'PROPERTY_SPECS_RAM',
    )
);

while($row = $db -> getNext()){
    $SPECS__RAM__HTML .= '
        <a href="' . $row['DETAIL_PAGE_URL'] . '" class="product-specs-row-memory-item" data-id="' . $row['PROPERTY_SPECS_RAM_VALUE'] . '">' . $SPECS__RAM__arr[ $row['PROPERTY_SPECS_RAM_VALUE'] ] . '</a>
    ';
}

if( !empty($arResult['PROPERTIES']['SPECS_RAM']['VALUE']) ){
    $SPECS__RAM__HTML .= '
        <a href="#" class="product-specs-row-memory-item  active"  data-id="' . $arResult['PROPERTIES']['SPECS_RAM']['VALUE'] . '"  onclick="return false;">' . $SPECS__RAM__arr[ $arResult['PROPERTIES']['SPECS_RAM']['VALUE'] ] . '</a>
    ';
}

if( !empty($SPECS__RAM__HTML) ){
    $SPECS__RAM__HTML = '
                <div class="page-product-card-info-specs-item  product-specs-ram">
                    <div class="page-product-card-info-specs-item__title">
                        Память (оперативная)
                    </div>
                    <div class="page-product-card-info-specs-item__value">
                        <div class="product-specs-row-memory">
                            ' . $SPECS__RAM__HTML . '
                        </div>
                    </div>
                </div>
    ';
}











// 0. HDD
// $arResult['PROPERTIES']['SPECS_HDD']['VALUE'] - своя характеристика
$SPECS__HDD__arr = array(); // массив всех возможных вариантов характеристики

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => 7, // Память (ПЗУ)
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
    )
);

while($row = $db -> getNext()){
    $SPECS__HDD__arr[$row['ID']] = $row['NAME'];
}



$SPECS__HDD__HTML = '';

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => $IBLOCK_ID,
        'ID' => $arResult['PROPERTIES']['OTHER_PRODUCT_HDD']['VALUE'],
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
        'DETAIL_PAGE_URL',
        'PROPERTY_SPECS_HDD',
    )
);

while($row = $db -> getNext()){
    $SPECS__HDD__HTML .= '
        <a href="' . $row['DETAIL_PAGE_URL'] . '" class="product-specs-row-memory-item"  data-id="' . $row['PROPERTY_SPECS_HDD_VALUE'] . '">' . $SPECS__HDD__arr[ $row['PROPERTY_SPECS_HDD_VALUE'] ] . '</a>
    ';
}

if( !empty($arResult['PROPERTIES']['SPECS_HDD']['VALUE']) ){
    $SPECS__HDD__HTML .= '
        <a href="#" class="product-specs-row-memory-item  active"  data-id="' . $arResult['PROPERTIES']['SPECS_HDD']['VALUE'] . '"  onclick="return false;">' . $SPECS__HDD__arr[ $arResult['PROPERTIES']['SPECS_HDD']['VALUE'] ] . '</a>
    ';
}

if( !empty($SPECS__HDD__HTML) ){
    $SPECS__HDD__HTML = '
                <div class="page-product-card-info-specs-item  product-specs-hdd">
                    <div class="page-product-card-info-specs-item__title">
                        Память (накопитель)
                    </div>
                    <div class="page-product-card-info-specs-item__value">
                        <div class="product-specs-row-memory">
                            ' . $SPECS__HDD__HTML . '
                        </div>
                    </div>
                </div>
    ';
}











// 0. COLOR
// $arResult['PROPERTIES']['SPECS_COLOR']['VALUE'] - своя характеристика
$SPECS__COLOR__arr = array(); // массив всех возможных вариантов характеристики

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => 8, // Цвет
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
        'PROPERTY_COLOR_IMAGE'
    )
);

while($row = $db -> getNext()){
    $SPECS__COLOR__arr[$row['ID']] = $row['PROPERTY_COLOR_IMAGE_VALUE'];
}



$SPECS__COLOR__HTML = '';

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => $IBLOCK_ID,
        'ID' => $arResult['PROPERTIES']['OTHER_PRODUCT_COLOR']['VALUE'],
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
        'DETAIL_PAGE_URL',
        'PROPERTY_SPECS_COLOR',
    )
);

while($row = $db -> getNext()){
    $SPECS__COLOR__HTML .= '
        <a href="' . $row['DETAIL_PAGE_URL'] . '" class="product-specs-row-colors-item" style="background: url(' . CFile::GetPath( $SPECS__COLOR__arr[ $row['PROPERTY_SPECS_COLOR_VALUE'] ] ) . ');"></a>
    ';
}

if( !empty($arResult['PROPERTIES']['SPECS_COLOR']['VALUE']) ){
    $SPECS__COLOR__HTML .= '
        <a href="' . $row['DETAIL_PAGE_URL'] . '" class="product-specs-row-colors-item  active" style="background: url(' . CFile::GetPath( $SPECS__COLOR__arr[ $arResult['PROPERTIES']['SPECS_COLOR']['VALUE'] ] ) . ');" onclick="return false;"></a>
    ';
}

if( !empty($SPECS__COLOR__HTML) ){
    $SPECS__COLOR__HTML = '
                <div class="page-product-card-info-specs-item">
                    <div class="page-product-card-info-specs-item__title">
                        Цвет
                    </div>
                    <div class="page-product-card-info-specs-item__value">
                        <div class="product-specs-row-colors">
                            ' . $SPECS__COLOR__HTML . '
                        </div>
                    </div>
                </div>
    ';
}











// 0. DIAGONAL
// $arResult['PROPERTIES']['SPECS_DIAGONAL']['VALUE'] - своя характеристика
$SPECS__DIAGONAL__arr = array(); // массив всех возможных вариантов характеристики

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => 13, // Диагональ
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
    )
);

while($row = $db -> getNext()){
    $SPECS__DIAGONAL__arr[$row['ID']] = $row['NAME'];
}



$SPECS__DIAGONAL__HTML = '';

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => $IBLOCK_ID,
        'ID' => $arResult['PROPERTIES']['OTHER_PRODUCT_DIAGONAL']['VALUE'],
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
        'DETAIL_PAGE_URL',
        'PROPERTY_SPECS_DIAGONAL',
    )
);

while($row = $db -> getNext()){
    $SPECS__DIAGONAL__HTML .= '
        <a href="' . $row['DETAIL_PAGE_URL'] . '" class="product-specs-row-memory-item"  data-id="' . $row['PROPERTY_SPECS_DIAGONAL_VALUE'] . '">' . $SPECS__DIAGONAL__arr[ $row['PROPERTY_SPECS_DIAGONAL_VALUE'] ] . '</a>
    ';
}

if( !empty($arResult['PROPERTIES']['SPECS_DIAGONAL']['VALUE']) ){
    $SPECS__DIAGONAL__HTML .= '
        <a href="#" class="product-specs-row-memory-item  active"  data-id="' . $arResult['PROPERTIES']['SPECS_DIAGONAL']['VALUE'] . '"  onclick="return false;">' . $SPECS__DIAGONAL__arr[ $arResult['PROPERTIES']['SPECS_DIAGONAL']['VALUE'] ] . '</a>
    ';
}

if( !empty($SPECS__DIAGONAL__HTML) ){
    $SPECS__DIAGONAL__HTML = '
                <div class="page-product-card-info-specs-item  product-specs-diagonal">
                    <div class="page-product-card-info-specs-item__title">
                        Диагональ
                    </div>
                    <div class="page-product-card-info-specs-item__value">
                        <div class="product-specs-row-memory">
                            ' . $SPECS__DIAGONAL__HTML . '
                        </div>
                    </div>
                </div>
    ';
}











// 0. WIFI
// $arResult['PROPERTIES']['SPECS_WIFI']['VALUE'] - своя характеристика
$SPECS__WIFI__arr = array(); // массив всех возможных вариантов характеристики

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => 14, // Модуль связи
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
    )
);

while($row = $db -> getNext()){
    $SPECS__WIFI__arr[$row['ID']] = $row['NAME'];
}



$SPECS__WIFI__HTML = '';

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => $IBLOCK_ID,
        'ID' => $arResult['PROPERTIES']['OTHER_PRODUCT_WIFI']['VALUE'],
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
        'DETAIL_PAGE_URL',
        'PROPERTY_SPECS_WIFI',
    )
);

while($row = $db -> getNext()){
    $SPECS__WIFI__HTML .= '
        <a href="' . $row['DETAIL_PAGE_URL'] . '" class="product-specs-row-memory-item"  data-id="' . $row['PROPERTY_SPECS_WIFI_VALUE'] . '">' . $SPECS__WIFI__arr[ $row['PROPERTY_SPECS_WIFI_VALUE'] ] . '</a>
    ';
}

if( !empty($arResult['PROPERTIES']['SPECS_WIFI']['VALUE']) ){
    $SPECS__WIFI__HTML .= '
        <a href="#" class="product-specs-row-memory-item  active"  data-id="' . $arResult['PROPERTIES']['SPECS_WIFI']['VALUE'] . '"  onclick="return false;">' . $SPECS__WIFI__arr[ $arResult['PROPERTIES']['SPECS_WIFI']['VALUE'] ] . '</a>
    ';
}

if( !empty($SPECS__WIFI__HTML) ){
    $SPECS__WIFI__HTML = '
                <div class="page-product-card-info-specs-item  product-specs-wifi">
                    <div class="page-product-card-info-specs-item__title">
                        Модуль связи
                    </div>
                    <div class="page-product-card-info-specs-item__value">
                        <div class="product-specs-row-memory">
                            ' . $SPECS__WIFI__HTML . '
                        </div>
                    </div>
                </div>
    ';
}



?>




<?
// ВЫВОД КОНТЕНТА
?>






<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>









<div class="container">
    <div class="page-product-card  root"  data-id="<?= $PRODUCT__ID; ?>">

        <div class="page-product-card-images">

            <div class="swiper-thumbnails-wrapper">
                <div thumbsSlider="" class="swiper-container swiper-thumbnails">
                    <div class="swiper-wrapper">
                        <?= $PRODUCT__slider_items__HTML; ?>
                    </div>
                </div>
            </div><!-- .swiper-thumbnails-wrapper -->



            <div class="swiper-main-wrapper">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper-container swiper-main">
                    <div class="swiper-wrapper">
                        <?= $PRODUCT__slider_items__HTML; ?>
                    </div>
                </div>
            </div><!-- .swiper-main-wrapper -->

            <a href="#" class="swiper-thumbnails-nav-item" data-id="left"></a>
            <a href="#" class="swiper-thumbnails-nav-item" data-id="right"></a>
        </div><!-- .page-product-card-images -->



        <div class="page-product-card-info">
			<?= $PRODUCT__tags__HTML; ?>

            <h1 class="page-product-card-info-title">
                <?= $PRODUCT__NAME; ?>
            </h1>

			<?= $PRODUCT__VENDOR_CODE; ?>


            
            <div class="page-product-card-info-specs">

                <?= $SPECS__COLOR__HTML; ?>
<?
                // <div class="page-product-card-info-specs-item">
                //     <div class="page-product-card-info-specs-item__title">
                //         Цвет
                //     </div>
                //     <div class="page-product-card-info-specs-item__value">
                //         <div class="product-specs-row-colors">
                //             <a href="#" class="product-specs-row-colors-item white active" style="background: #FFFFFF;"></a>
                //             <a href="#" class="product-specs-row-colors-item" style="background: #FBD9D2;"></a>
                //             <a href="#" class="product-specs-row-colors-item" style="background: #3B3B3B;"></a>
                //         </div>
                //     </div>
                // </div>
?>

                <?= $SPECS__HDD__HTML; ?>

                <?= $SPECS__RAM__HTML; ?>

                <?= $SPECS__DIAGONAL__HTML; ?>

                <?= $SPECS__WIFI__HTML; ?>
<?
                // <div class="page-product-card-info-specs-item">
                //     <div class="page-product-card-info-specs-item__title">
                //         Память
                //     </div>
                //     <div class="page-product-card-info-specs-item__value">
                //         <div class="product-specs-row-memory">
                //             <a href="#" class="product-specs-row-memory-item active">128 Гб</a>
                //             <a href="#" class="product-specs-row-memory-item">256 Гб</a>
                //             <a href="#" class="product-specs-row-memory-item">512 Гб</a>
                //             <a href="#" class="product-specs-row-memory-item">1 ТБ</a>
                //         </div>
                //     </div>
                // </div>
?>

            </div><!-- .page-product-card-info-specs -->


            <div class="page-product-card-info-price-and-buttons">
                <div class="page-product-card-info-price-and-buttons__price">
                    <?= $PRODUCT__price__formatted; ?> руб.
                    <div class="price-disclaimer">
                        Цена указана за 
                        <br>
                        наличный расчёт
                    </div>
                </div>
                <div class="page-product-card-info-price-and-buttons__button">
                    <a href="#" class="btn btn-black  add-to-basket">Купить</a>
                </div>
                <div class="page-product-card-info-price-and-buttons__buy-one-click">
                    <a href="#" class="link-buy-in-one-click">Купить в один клик</a>
                </div>
            </div><!-- .page-product-card-info-price-and-buttons -->
            




        </div><!-- .page-product-card-info -->

        
        <div class="page-product-card-info-icos">
            <a href="#" class="product-card-favorite  add-to-favorites"></a>
            <a href="#" class="ico-share  ya-share2" data-curtain data-shape="round" data-limit="0" data-more-button-type="short" data-services="vkontakte,odnoklassniki,telegram,twitter,viber,whatsapp"></a>
        </div><!-- .page-product-card-info-icos -->

    </div><!-- .page-product-card -->
</div><!-- .container -->

<script src="https://yastatic.net/share2/share.js"></script>



<script>
$(document).ready(function(){
    let swiper_thumbnails = new Swiper('.swiper-thumbnails', {
        // loop: true,
        loop: false,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,

        direction: 'vertical',
    });

    let nav_swiper_thumbnails__prev = $('a.swiper-thumbnails-nav-item[data-id="left"]');
    let nav_swiper_thumbnails__next = $('a.swiper-thumbnails-nav-item[data-id="right"]');

    nav_swiper_thumbnails__prev.on('click', function(e){
        e.preventDefault();
        swiper_thumbnails.slidePrev();
    });

    nav_swiper_thumbnails__next.on('click', function(e){
        e.preventDefault();
        swiper_thumbnails.slideNext();
    });



    let swiper_main = new Swiper('.swiper-main', {
        // loop: true,
        loop: false,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: swiper_thumbnails,
        },
    });
});
</script>








<div class="container">
    <a href="#best-price-guarantee" class="page-product-banner-best-price-guarantee" data-fancybox="">
        <div class="page-product-banner-best-price-guarantee__title">
            Нашли дешевле?
        </div>
        <div class="page-product-banner-best-price-guarantee__subtitle">
            Напишите нам, и мы сделаем вам скидку
        </div>
    </a>
</div>




<div class="page-product-tabs  tabs">

    <div class="page-product-tabs-head">
        <div class="container">
            <div class="page-product-tabs-head-list">
                <a href="#" class="page-product-tabs-head-list-item  tabs-head-item active" data-id="1">Описание</a>
                <a href="#" class="page-product-tabs-head-list-item  tabs-head-item" data-id="2">Характеристики</a>
                <a href="#" class="page-product-tabs-head-list-item  tabs-head-item" data-id="3">Доставка и оплата</a>
                <a href="#" class="page-product-tabs-head-list-item  tabs-head-item" data-id="4">Условия возврата и обмена товара</a>
                <a href="#" class="page-product-tabs-head-list-item  tabs-head-item" data-id="5">Гарантии</a>
            </div><!-- .page-product-tabs-head-list -->
        </div><!-- .container -->
    </div><!-- .page-product-tabs-head -->



    <div class="page-product-tabs-body">
        <div class="container">
            <div class="page-product-tabs-body-list">
                <div class="page-product-tabs-body-list-item  tabs-body-item" data-id="1">
<?
                    // <div class="page-product-tabs-body-list-item-title">
                    //     Описание
                    // </div>
?>
                    <div class="page-product-tabs-body-list-item-body">
<?= $PRODUCT__tabs__DESCRIPTION; ?>
                    </div>
                </div>
                <div class="page-product-tabs-body-list-item  tabs-body-item" data-id="2" style="display: none;">
<?
                    // <div class="page-product-tabs-body-list-item-title">
                    //     Характеристики
                    // </div>
?>
                    <div class="page-product-tabs-body-list-item-body">
<?= $PRODUCT__tabs__SPECS;?>
                    </div>
                </div>
                <div class="page-product-tabs-body-list-item  tabs-body-item" data-id="3" style="display: none;">
<?
                    // <div class="page-product-tabs-body-list-item-title">
                    //     Доставка и оплата
                    // </div>
?>
                    <div class="page-product-tabs-body-list-item-body">
<?
$APPLICATION->IncludeFile(
    SITE_DIR.'_include/page-product-inner__block__delivery-and-pay.php'
);
?>
                    </div>
                </div>
                <div class="page-product-tabs-body-list-item  tabs-body-item" data-id="4" style="display: none;">
<?
                    // <div class="page-product-tabs-body-list-item-title">
                    //     Условия возврата и обмена товара
                    // </div>
?>
                    <div class="page-product-tabs-body-list-item-body">
<?
$APPLICATION->IncludeFile(
    SITE_DIR.'_include/page-product-inner__block__refund.php'
);
?>
                    </div>
                </div>
                <div class="page-product-tabs-body-list-item  tabs-body-item" data-id="5" style="display: none;">
<?
                    // <div class="page-product-tabs-body-list-item-title">
                    //     Гарантии
                    // </div>
?>
                    <div class="page-product-tabs-body-list-item-body">
<?
$APPLICATION->IncludeFile(
    SITE_DIR.'_include/page-product-inner__block__guarantees.php'
);
?>
                    </div>
                </div>
            </div><!-- .page-product-tabs-body-list -->
        </div><!-- .container -->
    </div><!-- .page-product-tabs-body -->

</div><!-- .page-product-tabs -->













<div class="block container">
    <div class="block-good1-list">
        <div class="block-good1-list-item">
            <div class="block-good1-list-item__ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good4-1.svg" alt="Представитель Apple">
            </div>
            <div class="block-good1-list-item__title">
                Представитель Apple
            </div>
            <div class="block-good1-list-item__description">
                Сеть магазинов по всей стране
            </div>
        </div>
        <div class="block-good1-list-item">
            <div class="block-good1-list-item__ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good4-2.svg" alt="Обмен в течение 14 дней">
            </div>
            <div class="block-good1-list-item__title">
                Обмен в течение 14 дней
            </div>
            <div class="block-good1-list-item__description">
                Мы осуществляем обмен в любом магазине в течение 14 дней с момента покупки
            </div>
        </div>
        <div class="block-good1-list-item">
            <div class="block-good1-list-item__ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good4-3.svg" alt="Авторизованные сервисные центры">
            </div>
            <div class="block-good1-list-item__title">
                Авторизованные сервисные центры
            </div>
            <div class="block-good1-list-item__description">
                Авторизованные сервисные центры Apple. Ремонтируем iPhone, iPad, Mac, Apple Watch — от двух часов
            </div>
        </div>
        <div class="block-good1-list-item">
            <div class="block-good1-list-item__ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good4-4.svg" alt="Услуги">
            </div>
            <div class="block-good1-list-item__title">
                Услуги
            </div>
            <div class="block-good1-list-item__description">
                Рассрочка, сервисные программы, срочная доставка и многие другие услуги для клиентов
            </div>
        </div>
    </div><!-- .block-good1-list -->
</div><!-- .block.container -->






















<?
// 0. ПРОДУКТ - Дополнительные товары - "С этим товаром покупают"
// СЛАЙДЕР

$GLOBALS['myFilter1'] = array(
    'ID' => $arResult['PROPERTIES']['ADDITIONAL_PRODUCTS_RELATED']['VALUE'],
);

$slider_product_cards_v2_left__title = '
    С этим товаром покупают
';

$slider_product_cards_v2_left__description = '
    Крупнейшая сеть Apple Premium Reseller в мире. Большая сеть магазинов по всей стране.
';

$slider_product_cards__slider_id = 'products_related';

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
		"IBLOCK_ID" => $IBLOCK_ID,
		"NEWS_COUNT" => 9999,
		"SORT_BY1" => "SORT",
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














<?
// 0. ПРОДУКТ - Дополнительные товары - "Похожие товары"
// СЛАЙДЕР

$GLOBALS['myFilter1'] = array(
    // 'ID' => $arResult['PROPERTIES']['ADDITIONAL_PRODUCTS_SIMILAR']['VALUE'],
);

$slider_product_cards_v2_left__title = '
    Похожие товары
';

$slider_product_cards_v2_left__description = '
    Крупнейшая сеть Apple Premium Reseller в мире. Большая сеть магазинов по всей стране.
';

$slider_product_cards__slider_id = 'products_similar';

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
		"IBLOCK_ID" => $IBLOCK_ID,
		"NEWS_COUNT" => 9999,
		"SORT_BY1" => "SORT",
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
		// "PARENT_SECTION" => "",
		"PARENT_SECTION" => $arResult['IBLOCK_SECTION_ID'],
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















<div id="recently_viewed_products"></div>
<?
// <div class="block container">
//     <div class="slider-product-cards-v2">
        
//         <div class="slider-product-cards-v2-left">
//             <div class="slider-product-cards-v2-left__title">
//                 Вы недавно 
//                 <br>
//                 смотрели
//             </div>
//             <div class="slider-product-cards-v2-left__description">
//                 Крупнейшая сеть Apple Premium Reseller в мире. Большая сеть магазинов по всей стране.
//             </div>
//         </div>



//         <div class="slider-product-cards-v2-right">

//             <div class="swiper-container sw"  data-id="block-compilation-slider-product-inner-3" data-type="progressbar" data-slidesPerView="3">
//                 <div class="swiper-wrapper">
//                     <div class="swiper-slide">
//                         <div class="product-card">
//                             <div class="product-card-labels">
//                                 <div class="product-card-labels-item" data-type="hit"></div>
//                                 <div class="product-card-labels-item" data-type="new"></div>
//                                 <div class="product-card-labels-item" data-type="sale"></div>
//                             </div>
//                             <a href="#" class="product-card-favorite"></a>
//                             <a href="#" class="product-card__ava">
//                                 <img src="images/pic-product-1-thumbnail.png" alt="Смарт-часы Apple Watch Series SE">
//                             </a>
//                             <a href="#" class="product-card__title">
//                                 Смарт-часы Apple Watch Series SE
//                             </a>
//                             <div class="product-card__price">
//                                 75 990 руб.
//                             </div>
            
//                             <div class="product-card-buttons">
//                                 <div class="product-card-buttons__buy-button">
//                                     <a href="#" class="btn btn-black">Купить</a>
//                                 </div>
//                                 <div class="product-card-buttons__buy-oneclick">
//                                     <a href="#">Купить в один клик</a>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>

//                     <div class="swiper-slide"><div class="product-card"><div class="product-card-labels"><div class="product-card-labels-item" data-type="hit"></div><div class="product-card-labels-item" data-type="new"></div><div class="product-card-labels-item" data-type="sale"></div></div><a href="#" class="product-card-favorite"></a><a href="#" class="product-card__ava"><img src="images/pic-product-1-thumbnail.png" alt="Смарт-часы Apple Watch Series SE"></a><a href="#" class="product-card__title">Смарт-часы Apple Watch Series SE</a><div class="product-card__price">75 990 руб.</div><div class="product-card-buttons"><div class="product-card-buttons__buy-button"><a href="#" class="btn btn-black">Купить</a></div><div class="product-card-buttons__buy-oneclick"><a href="#">Купить в один клик</a></div></div></div></div>
//                     <div class="swiper-slide"><div class="product-card"><div class="product-card-labels"><div class="product-card-labels-item" data-type="hit"></div><div class="product-card-labels-item" data-type="new"></div><div class="product-card-labels-item" data-type="sale"></div></div><a href="#" class="product-card-favorite"></a><a href="#" class="product-card__ava"><img src="images/pic-product-1-thumbnail.png" alt="Смарт-часы Apple Watch Series SE"></a><a href="#" class="product-card__title">Смарт-часы Apple Watch Series SE</a><div class="product-card__price">75 990 руб.</div><div class="product-card-buttons"><div class="product-card-buttons__buy-button"><a href="#" class="btn btn-black">Купить</a></div><div class="product-card-buttons__buy-oneclick"><a href="#">Купить в один клик</a></div></div></div></div>
//                     <div class="swiper-slide"><div class="product-card"><div class="product-card-labels"><div class="product-card-labels-item" data-type="hit"></div><div class="product-card-labels-item" data-type="new"></div><div class="product-card-labels-item" data-type="sale"></div></div><a href="#" class="product-card-favorite"></a><a href="#" class="product-card__ava"><img src="images/pic-product-1-thumbnail.png" alt="Смарт-часы Apple Watch Series SE"></a><a href="#" class="product-card__title">Смарт-часы Apple Watch Series SE</a><div class="product-card__price">75 990 руб.</div><div class="product-card-buttons"><div class="product-card-buttons__buy-button"><a href="#" class="btn btn-black">Купить</a></div><div class="product-card-buttons__buy-oneclick"><a href="#">Купить в один клик</a></div></div></div></div>
//                     <div class="swiper-slide"><div class="product-card"><div class="product-card-labels"><div class="product-card-labels-item" data-type="hit"></div><div class="product-card-labels-item" data-type="new"></div><div class="product-card-labels-item" data-type="sale"></div></div><a href="#" class="product-card-favorite"></a><a href="#" class="product-card__ava"><img src="images/pic-product-1-thumbnail.png" alt="Смарт-часы Apple Watch Series SE"></a><a href="#" class="product-card__title">Смарт-часы Apple Watch Series SE</a><div class="product-card__price">75 990 руб.</div><div class="product-card-buttons"><div class="product-card-buttons__buy-button"><a href="#" class="btn btn-black">Купить</a></div><div class="product-card-buttons__buy-oneclick"><a href="#">Купить в один клик</a></div></div></div></div>
//                     <div class="swiper-slide"><div class="product-card"><div class="product-card-labels"><div class="product-card-labels-item" data-type="hit"></div><div class="product-card-labels-item" data-type="new"></div><div class="product-card-labels-item" data-type="sale"></div></div><a href="#" class="product-card-favorite"></a><a href="#" class="product-card__ava"><img src="images/pic-product-1-thumbnail.png" alt="Смарт-часы Apple Watch Series SE"></a><a href="#" class="product-card__title">Смарт-часы Apple Watch Series SE</a><div class="product-card__price">75 990 руб.</div><div class="product-card-buttons"><div class="product-card-buttons__buy-button"><a href="#" class="btn btn-black">Купить</a></div><div class="product-card-buttons__buy-oneclick"><a href="#">Купить в один клик</a></div></div></div></div>
//                     <div class="swiper-slide"><div class="product-card"><div class="product-card-labels"><div class="product-card-labels-item" data-type="hit"></div><div class="product-card-labels-item" data-type="new"></div><div class="product-card-labels-item" data-type="sale"></div></div><a href="#" class="product-card-favorite"></a><a href="#" class="product-card__ava"><img src="images/pic-product-1-thumbnail.png" alt="Смарт-часы Apple Watch Series SE"></a><a href="#" class="product-card__title">Смарт-часы Apple Watch Series SE</a><div class="product-card__price">75 990 руб.</div><div class="product-card-buttons"><div class="product-card-buttons__buy-button"><a href="#" class="btn btn-black">Купить</a></div><div class="product-card-buttons__buy-oneclick"><a href="#">Купить в один клик</a></div></div></div></div>

//                 </div><!-- .swiper-wrapper -->
//             </div><!-- .swiper-container -->

//         </div><!-- .slider-product-cards-v2-right -->

//     </div><!-- .slider-product-cards-v2 -->
// </div><!-- .container -->
?>





<script>
// сортировка характеристик
$(document).ready(function(){
    function swap( el_class ){
        for(let i = 0; i <= $(el_class).length; ++i){

            let max = +$(el_class).eq(0).attr('data-id');

            $(el_class).each(function(){
                let id = +$(this).attr('data-id');
                console.log(id, max);

                if( id > max ){
                    console.log('меняем');
                    // $(el_class + '[data-id="' + id + '"]').replaceWith( $(el_class + '[data-id="' + max + '"]') );
                    
                    let copy_from = $(el_class + '[data-id="' + id + '"]');
                    let copy_to = $(el_class + '[data-id="' + max + '"]');
                    
                    $(el_class + '[data-id="' + id + '"]').replaceWith(copy_to);
                    $(el_class + '[data-id="' + max + '"]').replaceWith(copy_from);

                    // console.log(copy_from.html());
                    // console.log(copy_to.html());

                    // $(el_class + '[data-id="' + id + '"]').after(copy_to);
                    // $(el_class + '[data-id="' + max + '"]').after(copy_from);
    
                    // let copy_from = $(el_class + '[data-id="' + id + '"]');
                    // let copy_to = $(el_class + '[data-id="' + max + '"]');
                    
                    // $(el_class + '[data-id="' + id + '"]').after(copy_to);
                    // $(el_class + '[data-id="' + max + '"]').after(copy_from);
    
                    max = id;
                }
            });
        }
    }


    
    // swap('.product-specs-row-memory-item');



    function sort(el){
        let arr = [];

        $(el).each(function(){
            arr.push( $(this).attr('data-id') );
        });

        arr.sort(function(a, b){
            return a - b;
        });
        

        let html = '';

        for(i of arr){
            let el_class = $(el + '[data-id="' + i + '"]').attr('class');
            let el_href = $(el + '[data-id="' + i + '"]').attr('href');
            let el_onclick = 'onclick="' + $(el + '[data-id="' + i + '"]').attr('onclick') + '"';
            let el_text = $(el + '[data-id="' + i + '"]').html();
            html += '<a href="' + el_href + '" class="' + el_class + '" data-id="" ' + el_onclick + '>' + el_text + '</a>';
        }

        $(el).parent().html( html );
    }

    sort('.product-specs-ram .product-specs-row-memory-item');
    sort('.product-specs-hdd .product-specs-row-memory-item');
    sort('.product-specs-diagonal .product-specs-row-memory-item');
    sort('.product-specs-wifi .product-specs-row-memory-item');
});
</script>




<script>
// "вы недавно смотрели"
$(document).ready(function(){
    // recently-viewed-products
    let id = $('.page-product-card.root').attr('data-id');

    let recently_viewed_products = localStorage.getItem('recently_viewed_products');

    if( recently_viewed_products ){
        recently_viewed_products = recently_viewed_products.split(',');

        let flag_for_add = true;
        for(let i in recently_viewed_products){
            if( recently_viewed_products[i] == id ){
                // console.log('не добавляем');
                flag_for_add = false;
                break;
            }
        }

        let recently_viewed_products_NEW = '';
        if( flag_for_add ){
            // console.log('добавляем');
            recently_viewed_products.push(id);
            // console.log(recently_viewed_products);
            recently_viewed_products_NEW = recently_viewed_products.join(',');
            localStorage.setItem('recently_viewed_products', recently_viewed_products_NEW);
        }
    } else {
        localStorage.setItem('recently_viewed_products', id);
    }








    if( recently_viewed_products ){
        // $('.page-favorites').show();
        // recently_viewed_products = recently_viewed_products.reverse();
        // console.log(recently_viewed_products);

        $.ajax({
            async: false,
            type: 'POST',
            url: '/_ajax/otherActions.php',
            headers: {
                'Accept': 'application/json'
            },
            data: {
                action: 'recently_viewed_products',
                IDs: recently_viewed_products.join(','),
            },
            beforeSend: function (data) {
                // console.log(data);
                // // $('.page-services-content-body-row').hide(300);
                // $('.page-service-center-main-body').hide(300);
            },
            success: function (data) {
        // console.log(recently_viewed_products);
                
                let swiper_id = 'recently_viewed_products';
                let html = `
<div class="block container">
    <div class="slider-product-cards-v2">
        
        <div class="slider-product-cards-v2-left">
            <div class="slider-product-cards-v2-left__title">
                Вы недавно 
                <br>
                смотрели
            </div>
            <div class="slider-product-cards-v2-left__description">
                Крупнейшая сеть Apple Premium Reseller в мире. Большая сеть магазинов по всей стране.
            </div>
        </div>

        <div class="slider-product-cards-v2-right">

            <div class="swiper-container sw"  data-id="${swiper_id}" data-type="progressbar" data-slidesPerView="3">
                <div class="swiper-wrapper">
${data}
                </div><!-- .swiper-wrapper -->
            </div><!-- .swiper-container -->

        </div><!-- .slider-product-cards-v2-right -->

    </div><!-- .slider-product-cards-v2 -->
</div><!-- .container -->
                `;

                $('#recently_viewed_products').after( html );

                sw_progressbar(swiper_id);
            },
        });
    

    // else {
    //     let page_favorites_empty__HTML = `
    //         <div class="page-basket-empty">
    //             <div class="page-basket-empty-text">
    //                 В избранном пока пусто.
    //             </div>
    //             <a href="/catalog/" class="btn btn-black">В каталог</a>
    //         </div>
    //     `;
    //     $('.page-favorites').after( page_favorites_empty__HTML );
    //     $('.page-favorites').remove();
    // }



    }
    
});
</script>
















<div style="display: none;">
    <div class="modal-std-wrapper" id="best-price-guarantee">
        <div class="modal-std  type-2">
            <div class="modal-std-flex-center">
                <form class="form-2">
                    <div class="modal-std-title">
                        Нашли дешевле?
                    </div>

                    <div class="modal-std-description">
                        Напишите, где нашли дешевле и мы сделаем скидку
                    </div>

                    <div class="modal-std-inputs">
                        <input type="text" class="form-item-2 required" name="name" placeholder="Имя">
                        <input type="text" class="form-item-2 required" name="tel" placeholder="Телефон">
                        <input type="text" class="form-item-2" name="email" placeholder="Email">
                        <input type="text" class="form-item-2 required" name="comment" placeholder="Где нашли дешевле">
                        <a href="#" class="btn btn-black  submit">Отправить</a>

                        <div class="modal-std-privacy">
                            Продолжая, Вы соглашаетесь со <a href="/user-agreement/">сбором и обработкой персональных данных</a>
                        </div>

                        <input type="hidden" name="thx" value="#best-price-guarantee-ok" style="display: none;">
                        <input type="hidden" name="subject" value="Нашли дешевле" style="display: none;">
                        <input type="submit" style="display: none;">
                    </div>
                </form>
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>




<div style="display: none;">
    <div class="modal-std-wrapper" id="best-price-guarantee-ok">
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


