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

// /bitrix/templates/shop/components/bitrix/news/blog/bitrix/news.list/.default/template.php

// echo '<pre>';
// print_r( $arParams );
// echo '</pre>';
// die();


$i = 0;
$HTML = '';
$page_blog_first__HTML = '';
$page_blog_list__HTML = '';

foreach($arResult['ITEMS'] as $arItem){
	if( $i == 0 ){
		$page_blog_first__HTML .= '
<a href="' . $arItem['DETAIL_PAGE_URL'] . '" class="page-blog-first" id="' . $this->GetEditAreaId($arItem['ID']) . '">
    <div class="page-blog-first-ava">
        <img src="' . CFile::GetPath( $arItem['PROPERTIES']['AVA']['VALUE'] ) . '" alt="' . $arItem['PROPERTIES']['DATE']['~VALUE'] . '">
    </div>

    <div class="container">
        <div class="page-blog-info">
            <div class="page-blog-first-date">
                ' . $arItem['PROPERTIES']['DATE']['~VALUE'] . '
            </div>
            <div class="page-blog-first-title">
                ' . $arItem['PROPERTIES']['TITLE']['~VALUE'] . '
            </div>
            <div class="page-blog-first-button">
                <div class="page-blog-first-button__link">
                    Перейти
                </div>
            </div>
        </div><!-- .page-blog-info -->
    </div><!-- .container -->

</a><!-- .page-blog-first -->
		';
	} else {
		$page_blog_list__HTML .= '
        <a href="' . $arItem['DETAIL_PAGE_URL'] . '" class="page-blog-list-item" id="' . $this->GetEditAreaId($arItem['ID']) . '">
            <div class="page-blog-list-item__ava">
                <img src="' . CFile::GetPath( $arItem['PROPERTIES']['AVA']['VALUE'] ) . '" alt="' . $arItem['PROPERTIES']['DATE']['~VALUE'] . '">
            </div>
            <div class="page-blog-list-item__info">
                <div class="page-blog-list-item__date">
                    ' . $arItem['PROPERTIES']['DATE']['~VALUE'] . '
                </div>
                <div class="page-blog-list-item__title">
                    ' . $arItem['PROPERTIES']['TITLE']['~VALUE'] . '
                </div>
                <div class="page-blog-list-item__link-more">
                    Перейти
                </div>
            </div>
        </a>
		';
	}

	++$i;



	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
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
    let elements_shown = $('.page-blog-list .page-blog-list-item').length + 1;
    let elements_total = <?= $elements_count_total; ?>;
    let how_much = 8;
    $('.button-show-more__info span[data-id="shown"]').html( elements_shown );
    $('.button-show-more__info span[data-id="total"]').html( elements_total );
    
    if( elements_shown == elements_total ){
        $('.button-show-more__button').hide(300);
    }


    $('.page-blog-show-more').on('click', function(e){
        e.preventDefault();

        // заново определяем, сколько элементов показано
        let elements_shown = $('.page-blog-list .page-blog-list-item').length + 1;
        
        $.ajax({
            async: false,
            type: 'POST',
            url: '/_ajax/otherActions.php',
            headers: {
                'Accept': 'application/json'
            },
            data: {
                action: 'page_blog__showmore',
                elements_shown: elements_shown,
                how_much: how_much,
            },
            cache: false,
            success: function (data) {
                $('.page-blog-list').append( data );
                $('.page-blog-list .page-blog-list-item.new').each(function(){
                    $(this).show(300);
                });
                
                let elements_shown__new = $('.page-blog-list .page-blog-list-item').length + 1;
                $('.button-show-more__info span[data-id="shown"]').html( elements_shown__new );

                if( elements_shown__new == elements_total ){
                    $('.button-show-more__button').hide(300);
                }
            },
        });
    });
});
</script>












<div class="breadcrumbs-abs-wrapper">
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>
</div><!-- .breadcrumbs-abs-wrapper -->






<?= $page_blog_first__HTML; ?>







<div class="page-blog-content">


    <div class="page-blog-list">
<?= $page_blog_list__HTML; ?>
    </div><!-- .page-blog-list -->

    

    <div class="button-show-more">
        <div class="button-show-more__button">
            <a href="#" class="btn btn-black-t  page-blog-show-more">Показать еще</a>
        </div>
        <div class="button-show-more__info">
            Вы посмотрели <span data-id="shown">-</span> из <span data-id="total">-</span> статей
        </div>
    </div><!-- .button-show-more -->

</div><!-- .page-blog -->

