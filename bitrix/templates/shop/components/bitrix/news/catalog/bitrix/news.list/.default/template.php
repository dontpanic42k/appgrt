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

// /bitrix/templates/shop/components/bitrix/news/catalog/bitrix/news.list/.default/template.php

// CModule::IncludeModule('iblock');

// echo '<pre>';
// print_r( $arParams );
// echo '</pre>';
// // die();

// $arParams['PARENT_SECTION']
// $arParams['PARENT_SECTION_CODE']
?>





<?
// если первая страница каталога
if( $_SERVER['PHP_SELF'] == '/catalog/index.php' ){
?>



<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>


<div class="container">
    <h1>Каталог</h1>
</div>


<?
$page_catalog_subcat__HTML = '';

$db = CIBlockSection::GetList(
	$arOrder = array('SORT' => 'ASC'),
	$arFilter = array(
		'ACTIVE' => 'Y',
		'IBLOCK_ID' => $arParams['IBLOCK_ID'],
		'SECTION_ID' => $arParams['PARENT_SECTION'],
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


















<?
} else {
// если не первая страница каталога ("/catalog/")
?>


<?
$current_url = $_SERVER['REDIRECT_URL'];
$cats_chain__arr = array_filter(explode('/', $current_url), function($element) {
    return !empty($element);
});

$SECTION_CODE__MAIN_CATEGORY = $cats_chain__arr[2];

// $SECTION_ID = '';
// $cats_chain__arr__count = count( $cats_chain__arr );

// if( $cats_chain__arr__count == 2){
// 	$SECTION_ID = $cats_chain__arr[2];
// }

// if( $cats_chain__arr__count == 3){
// 	$SECTION_ID = $cats_chain__arr[3];
// }

$PARENT_SECTION__row = CIBlockSection::GetList(array('SORT' => 'ASC'), array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'CODE' => $SECTION_CODE__MAIN_CATEGORY), false, array('ID', 'NAME'), false)->fetch();

$PARENT_SECTION__ID = $PARENT_SECTION__row['ID'];
$h1 = $PARENT_SECTION__row['NAME'];



$page_catalog_subcat__HTML = '';

$db = CIBlockSection::GetList(
	$arOrder = array('SORT' => 'ASC'),
	$arFilter = array(
		'ACTIVE' => 'Y',
		'IBLOCK_ID' => $arParams['IBLOCK_ID'],
		'SECTION_ID' => $PARENT_SECTION__ID, // по ID родительской секции
	),
	$bIncCnt = false,
	$Select = array(
		'ID',
		'IBLOCK_ID',
		'NAME',
		'SECTION_PAGE_URL',
	),
	$NavStartParams = false
);

while($row = $db -> getNext()){
	$section__a_href__active = '';

	if( $current_url == $row['SECTION_PAGE_URL'] ){
		$section__a_href__active = ' active';
		$h1 = $row['NAME']; // ЕСЛИ НУЖНО, чтобы h1 был всегда родительским - закомментировать эту строку
	}
	
	$page_catalog_subcat__HTML .= '
                <a href="' . $row['SECTION_PAGE_URL'] . '" class="page-catalog-subcat-head-item  ' . $section__a_href__active . '">' . $row['NAME'] . '</a>
	';
}


// ссылка "Все"
$link_all_subcats__href = '/' . $cats_chain__arr[1] . '/' . $cats_chain__arr[2] . '/';
$link_all_subcats__active = $SECTION_CODE__MAIN_CATEGORY == $arParams['PARENT_SECTION_CODE']  ?  ' active'  :  '';
$link_all_subcats = '<a href="' . $link_all_subcats__href . '" class="page-catalog-subcat-head-item ' . $link_all_subcats__active . '">Все</a>' . "\n\r";



// $page_catalog_subcat__HTML = $link_all_subcats . $page_catalog_subcat__HTML;


// если подкатегорий нету, то не показываем эту шапку
if( !empty($page_catalog_subcat__HTML) ){
	$page_catalog_subcat__HTML = '
			<div class="page-catalog-subcat-head">
				' . $link_all_subcats . $page_catalog_subcat__HTML . '
			</div><!-- .page-catalog-subcat-head -->
	';
}
?>



        
<?
// Ниже - вывод контента страницы
?>

<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>


<div class="container">
    <h1><?= $h1; ?></h1>
</div>


<div class="page-catalog">
    <div class="container">
    
        <div class="page-catalog-subcat-wrapper">

<?= $page_catalog_subcat__HTML; ?>
            

            <div class="page-catalog-sort">
                <a href="#" class="page-catalog-sort-current">
                    Новинки
                </a>

                <div class="page-catalog-sort-body" style="display: none;">
					<a href="?sort_by=date&sort_direction=desc" data-sort-by="date" data-sort-direction="desc">Новинки</a>
					<!-- <a href="#" data-sort-by="" data-sort-direction="">Популярные</a> -->
					<a href="?sort_by=price&sort_direction=asc" data-sort-by="price" data-sort-direction="asc">По возрастанию цены</a>
					<a href="?sort_by=price&sort_direction=desc" data-sort-by="price" data-sort-direction="desc">По убыванию цены</a>
                </div>
            </div>


        </div><!-- .page-catalog-subcat-wrapper -->
<script>
$(document).ready(function(){
	$('.page-catalog-sort-current').on('click', function(e){
		e.preventDefault();
		
		$('.page-catalog-sort-body').toggle(300);
	});
});
</script>





<?
$sort = '';

$sort_by__arr = array(
	'price' => 'PROPERTY_PRICE',
	'date' => 'PROPERTY_DATE',
);

$sort_direction__arr = array(
	'asc' => 'ASC',
	'desc' => 'DESC',
);



if( !empty($_GET['sort_by']) ){

}

if( !empty($_GET['sort_by'])  &&  !empty($_GET['sort_direction']) ){
	$sort_by = $sort_by__arr[strtolower($_GET['sort_by'])];
	$sort_direction = $sort_direction__arr[strtolower($_GET['sort_direction'])];
} else {
	$sort_by = 'PROPERTY_DATE';
	$sort_direction = 'DESC';
}

$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"page_catalog__product_list", 
	array(
		"COMPONENT_TEMPLATE" => "page_catalog__product_list",
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => $arParams['IBLOCK_ID'],
		// "NEWS_COUNT" => "16",
		"NEWS_COUNT" => "99999",
		// "SORT_BY1" => "PROPERTY_DATE",
		// "SORT_ORDER1" => "DESC",
		"SORT_BY1" => $sort_by,
		"SORT_ORDER1" => $sort_direction,
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
			1 => "",
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
		"PARENT_SECTION" => $arParams['PARENT_SECTION'],
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







    
    </div><!-- .container -->
</div><!-- .page-catalog -->





<?

} // закрывает if( $_SERVER['PHP_SELF'] == '/catalog/index.php' ){

?>


















