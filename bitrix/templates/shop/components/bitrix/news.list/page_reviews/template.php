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

// /bitrix/templates/shop/components/bitrix/news.list/page_reviews/template.php
?>

<?
$page_reviews_list = '';

foreach($arResult['ITEMS'] as $arItem){
	$page_reviews_list .= '
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
	';
}
?>







<?
// КНОПКА "ПОКАЗАТЬ ЕЩЕ"

$elements_count_total = 0;

// выясняем сколько элементов существует
$arFilter = array(
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    'DEPTH_LEVEL' => '1',
    'SECTION_ID' => false,
    'ACTIVE' => 'Y',
);

$res = CIBlockElement::GetList(false, $arFilter, array('IBLOCK_ID'));

if ($el = $res->Fetch()){
    $elements_count_total = $el['CNT'];
}
?>



<script>
$(document).ready(function(){
    // при запуске страницы
    let elements_shown = $('.page-reviews-list .block-reviews-slider-item').length;
    let elements_total = <?= $elements_count_total; ?>;
    let how_much = 8;
    $('.button-show-more__info span[data-id="shown"]').html( elements_shown );
    $('.button-show-more__info span[data-id="total"]').html( elements_total );

    if( elements_shown == elements_total ){
        $('.button-show-more__button').hide(300);
    }
	

    $('.page-reviews-show-more').on('click', function(e){
        e.preventDefault();

        // заново определяем, сколько элементов показано
        let elements_shown = $('.page-reviews-list .block-reviews-slider-item').length;
        
        $.ajax({
            async: false,
            type: 'POST',
            url: '/_ajax/otherActions.php',
            headers: {
                'Accept': 'application/json'
            },
            data: {
                action: 'page_reviews__showmore',
                elements_shown: elements_shown,
                how_much: how_much,
            },
            cache: false,
            success: function (data) {
                $('.page-reviews-list').append( data );
                $('.page-reviews-list .block-reviews-slider-item.new').each(function(){
                    $(this).show(300);
                });
                
                let elements_shown__new = $('.page-reviews-list .block-reviews-slider-item').length;
                $('.button-show-more__info span[data-id="shown"]').html( elements_shown__new );

                if( elements_shown__new == elements_total ){
                    $('.button-show-more__button').hide(300);
                }
            },
        });
    });
});
</script>







        <div class="page-reviews-list">

<?= $page_reviews_list; ?>

        </div><!-- .page-reviews-list -->


        <div class="button-show-more">
            <div class="button-show-more__button">
                <a href="#" class="btn btn-black-t  page-reviews-show-more">Показать еще</a>
            </div>
            <div class="button-show-more__info">
                Вы посмотрели <span data-id="shown">-</span> из <span data-id="total">-</span> отзывов
            </div>
        </div><!-- .button-show-more -->


