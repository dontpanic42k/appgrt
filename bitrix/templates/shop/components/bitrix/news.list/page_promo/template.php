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

// /bitrix/templates/shop/components/bitrix/news.list/page_promo/template.php
?>

<?
$page_promo_list = '';

foreach($arResult['ITEMS'] as $arItem){
    // echo '<pre>';
    // print_r( $arItem );
    // echo '</pre>';
    // die();

    if( $arItem['PROPERTIES']['WHERE_SHOW']['VALUE_XML_ID'] == 'XML_SHOW_ONLY_PAGE_INDEX' ){
        continue;
    }
    
    $AVA = '';
    if( !empty($arItem['PROPERTIES']['AVA']['VALUE']) ){
        $AVA = '
                    <img src="' . CFile::GetPath( $arItem['PROPERTIES']['AVA']['VALUE'] ) . '" alt="Акция">
        ';
    }

    $TITLE = '';
    if( !empty($arItem['PROPERTIES']['TITLE']['~VALUE']) ){
        $TITLE = '
                    <div class="page-promo-list-item-info__title">
                        ' . $arItem['PROPERTIES']['TITLE']['~VALUE']['TEXT'] . '
                    </div>
        ';
    }

    $INTROTEXT = '';
    if( !empty($arItem['PROPERTIES']['INTROTEXT']['~VALUE']) ){
        $INTROTEXT = '
                    <div class="page-promo-list-item-info__introtext">
                        ' . $arItem['PROPERTIES']['INTROTEXT']['~VALUE']['TEXT'] . '
                    </div>
        ';
    }

    $DEADLINE = '';
    if( !empty($arItem['PROPERTIES']['DEADLINE']['~VALUE']) ){
        $DEADLINE = '
                    <div class="page-promo-list-item-info__deadline">
                        ' . $arItem['PROPERTIES']['DEADLINE']['~VALUE'] . '
                    </div>
        ';
    }



    if( empty($arItem['PROPERTIES']['ARCHIVE']['VALUE']) ){
        $page_promo_list__actual .= '
                <div class="page-promo-list-item">
                    <div class="page-promo-list-item-ava">
                        ' . $AVA . '
                    </div>
                    <div class="page-promo-list-item-info">
                        ' . $TITLE . '
                        ' . $INTROTEXT . '
                        ' . $DEADLINE . '
                    </div>
                </div>
        ';
    } else {
        $page_promo_list__archive .= '
                <div class="page-promo-list-item">
                    <div class="page-promo-list-item-ava">
                        ' . $AVA . '
                    </div>
                    <div class="page-promo-list-item-info">
                        ' . $TITLE . '
                        ' . $INTROTEXT . '
                        <div class="page-promo-list-item-info__deadline">
                            Завершена
                        </div>
                    </div>
                </div>
        ';
    }

}
?>









<div class="page-promo">
    <div class="container">
        <div class="page-promo-head">
            <a href="#" data-id="actual" class="active">Все</a>
            <a href="#" data-id="archive">Архив</a>
        </div>


        <div class="page-promo-list" data-id="actual">
<?= $page_promo_list__actual; ?>
        </div><!-- .page-promo-list -->


        <div class="page-promo-list" data-id="archive" style="display: none;">
<? //= $page_promo_list__archive; ?>
<?
if( !empty($page_promo_list__archive) ){
    echo $page_promo_list__archive;
} else {
    echo '
<div class="std-text">
В архиве пока нет акций.
</div>
    ';
}
?>
        </div><!-- .page-promo-list -->

    </div><!-- .container -->
</div><!-- .page-promo -->


<script>
$(document).ready(function(){
    $('body').on('click', '.page-promo-head a', function(e){
        e.preventDefault();
        
        if( $(this).hasClass('active') ){
            return false;
        }

        let id = $(this).attr('data-id');
        $('.page-promo-head a.active').removeClass('active');
        $(this).addClass('active');

        $('.page-promo-list').hide(300);
        $('.page-promo-list[data-id="' + id + '"]').show(300);
    });
});
</script>
