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

// /bitrix/templates/shop/components/bitrix/news.list/our_customers_slider/template.php
?>


<?
// echo '<pre>';
// print_r( $arResult["ITEMS"] );
// echo '</pre>';
// die();

$html = '';

foreach($arResult["ITEMS"] as $item){
	// echo '<pre>';
	// print_r( $item );
	// echo '</pre>';
	// die();

    $ava = CFile::GetPath($item['PROPERTIES']['IMAGE']['VALUE']);

    if( !$ava ){
        $ava = SITE_TEMPLATE_PATH . '/images/ava-empty.svg';
    }


	$html .= '
        <div class="swiper-slide">
            <div class="our-customers-slider-item">
                <a href="' . $ava . '" data-fancybox="our-customers">
                    <img src="' . $ava . '" alt="Наши покупатели">
                </a>
            </div>
        </div>
	';

}





if( !empty($html) ){
    $html = '
        <div class="block block-reviews">
            <div class="container">
                <div class="h2-flex-blog">
                    <div class="h2-flex-blog-left">
                        <h2>Наши покупатели</h2>
                        <div class="h2-flex-blog-description">
                            Фотографии наших покупателей
                        </div>
                    </div>
                </div>

                <div class="block-reviews-foto-slider">
                    <div class="swiper-container sw"  data-id="block-reviews-foto-slider" data-type="progressbar"  data-slidesPerView-mobile="1.2">
                        <div class="swiper-wrapper">
' . $html . '
                        </div><!-- .swiper-wrapper -->
                    </div><!-- .swiper-container -->
                </div><!-- .block-reviews-foto-slider -->
            </div><!-- .container -->
        </div><!-- .block.block-reviews -->
    ';

    echo $html;
}




?>








