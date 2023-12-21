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

// /bitrix/templates/shop/components/bitrix/news.list/block_product_slider_1/template.php
?>

<?
$HTML = '';

foreach($arResult['ITEMS'] as $arItem){
    // echo '<pre>';
    // print_r( $arItem );
    // echo '</pre>';
    // die();
    
    // $DETAIL_PAGE_URL = $arItem['DETAIL_PAGE_URL']; // УДАЛИТЬ КАК НЕНУЖНЫЙ


    $price__raw = (int) preg_replace('/[^0-9]/', '', $arItem['PROPERTIES']['PRICE']['~VALUE']);
    $price__formatted = number_format($price__raw, 0, ',', ' ');


    


    // теги НАЧАЛО
    $tags__HTML = '';

    $tags__arr = array(
        'XML_ID_TAGS__HIT' => 'hit',
        'XML_ID_TAGS__NEW' => 'new',
        'XML_ID_TAGS__SALE' => 'sale',
    );
    
    foreach($arItem['PROPERTIES']['TAGS']['VALUE_XML_ID'] as $item){
        $tags__HTML .= '<div class="product-card-labels-item" data-type="' . $tags__arr[$item] . '"></div>';
    }

    if( !empty($tags__HTML) ){
        $tags__HTML = '
                <div class="product-card-labels">
                    ' . $tags__HTML . '
                </div>
        ';
    }
    // теги КОНЕЦ

    
    
    
	$HTML .= '
        <div class="swiper-slide">
            <div class="product-card  root"  data-id="' . $arItem['ID'] . '">
                ' . $tags__HTML . '

                <a href="#" class="product-card-favorite  add-to-favorites"></a>
                <a href="' . $arItem['DETAIL_PAGE_URL'] . '" class="product-card__ava">
                    <img src="' . CFile::GetPath( $arItem['PROPERTIES']['IMAGES']['VALUE'][0] ) . '" alt="' . htmlspecialchars( $arItem['PROPERTIES']['NAME']['~VALUE'] ) . '">
                </a>
                <a href="' . $arItem['DETAIL_PAGE_URL'] . '" class="product-card__title">
                    ' . $arItem['PROPERTIES']['NAME']['~VALUE'] . '
                </a>
                <div class="product-card__price">
                    ' . $price__formatted . ' руб.
                </div>

                <div class="product-card-buttons">
                    <div class="product-card-buttons__buy-button">
                        <a href="#" class="btn btn-black  add-to-basket">Купить</a>
                    </div>
                    <div class="product-card-buttons__buy-oneclick">
                        <a href="#" class="link-buy-in-one-click">Купить в один клик</a>
                    </div>
                </div>
            </div>
        </div>
	';
}

echo $HTML;
?>