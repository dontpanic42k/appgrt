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

// /bitrix/templates/shop/components/bitrix/news.list/page_index__first_slider/template.php
?>

<?
$HTML = '';

foreach($arResult['ITEMS'] as $arItem){
    // echo '<pre>';
    // print_r( $arItem );
    // echo '</pre>';
    // die();

    if( $arItem['PROPERTIES']['WHERE_SHOW']['VALUE_XML_ID'] != 'XML_SHOW_ALL'  &&  $arItem['PROPERTIES']['WHERE_SHOW']['VALUE_XML_ID'] != 'XML_SHOW_ONLY_PAGE_INDEX' ){
        continue;
    }
    


    $AVA = '';
    if( !empty($arItem['PROPERTIES']['AVA']['VALUE']) ){
        $AVA = '
            <div class="index-first-slider-item-image">
                <img src="' . CFile::GetPath( $arItem['PROPERTIES']['AVA']['VALUE'] ) . '" alt="Акция">
            </div>
        ';
    }

    $TITLE = '';
    if( !empty($arItem['PROPERTIES']['TITLE']['~VALUE']) ){
        $TITLE = '
            <div class="index-first-slider-item-info__title">
                ' . $arItem['PROPERTIES']['TITLE']['~VALUE']['TEXT'] . '
            </div>
        ';
    }

    $INTROTEXT = '';
    if( !empty($arItem['PROPERTIES']['INTROTEXT']['~VALUE']) ){
        $INTROTEXT = '
            <div class="index-first-slider-item-info__description">
                ' . $arItem['PROPERTIES']['INTROTEXT']['~VALUE']['TEXT'] . '
            </div>
        ';
    }

    // $DEADLINE = '';
    // if( !empty($arItem['PROPERTIES']['DEADLINE']['~VALUE']) ){
    //     $DEADLINE = '
    //                 <div class="page-promo-list-item-info__deadline">
    //                     ' . $arItem['PROPERTIES']['DEADLINE']['~VALUE'] . '
    //                 </div>
    //     ';
    // }

    $HREF = '';
    if( !empty($arItem['PROPERTIES']['HREF']['~VALUE']) ){
        $HREF = '
            <div class="index-first-slider-item-info__button">
                <a href="' . $arItem['PROPERTIES']['HREF']['~VALUE'] . '" class="btn btn-black">Подробнее</a>
            </div>
        ';
    }



    if( empty($arItem['PROPERTIES']['ARCHIVE']['VALUE']) ){
        $HTML .= '
                            <div class="swiper-slide">
                                <div class="index-first-slider-item">
                                    <div class="index-first-slider-item-info">
                                        ' . $TITLE . '
                                        ' . $INTROTEXT . '
                                        ' . $HREF . '
                                    </div>
                                    ' . $AVA . '
                                </div>
                            </div>
        ';
    }
}

echo $HTML;
?>