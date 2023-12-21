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

// /bitrix/templates/shop/components/bitrix/news.list/page_index__reviews/template.php
?>

<?
$page_reviews_list = '';

foreach($arResult['ITEMS'] as $arItem){
	$page_reviews_list .= '
                            <div class="swiper-slide">
                                <div class="block-reviews-slider-item">
                                    <div class="block-reviews-slider-item__title">
                                        ' . $arItem['PROPERTIES']['TITLE']['~VALUE'] . '
                                    </div>
                                    <div class="block-reviews-slider-item__date">
                                        ' . $arItem['PROPERTIES']['DATE']['~VALUE'] . '
                                    </div>
                                    <div class="block-reviews-slider-item__introtext">
' . $arItem['PROPERTIES']['INTROTEXT']['~VALUE']['TEXT'] . '
                                    </div>
                                </div>
                            </div>
	';
}
?>








        <div class="block block-reviews">
            <div class="container">
                <div class="h2-flex-reviews">
                    <h2>Отзывы</h2>
                    <a href="/reviews/" class="link-more">Перейти к отзывам</a>
                </div>

                <div class="block-reviews-slider">
                    <div class="swiper-container sw"  data-id="block-reviews-slider" data-type="progressbar"  data-slidesPerView-mobile="1.2">
                        <div class="swiper-wrapper">

<?= $page_reviews_list; ?>

                        </div><!-- .swiper-wrapper -->
                    </div><!-- .swiper-container -->
                </div><!-- .block-reviews-slider -->
            </div><!-- .container -->
        </div><!-- .block.block-reviews -->

