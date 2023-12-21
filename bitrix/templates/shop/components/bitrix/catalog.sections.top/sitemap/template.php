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

// /bitrix/templates/shop/components/bitrix/catalog.sections.top/sitemap_list/template.php
?>


<?
$HTML = '';

foreach($arResult['SECTIONS'] as $arSection){
	$HTML .= '
		<h3><a href="' . $arSection['SECTION_PAGE_URL'] . '">' . $arSection['NAME'] . '</a></h3>
	';

	
	$items__li = '';
	foreach($arSection['ITEMS'] as $arElement){
		$items__li .= '
			<li><a href="' . $arElement['DETAIL_PAGE_URL'] . '">' . $arElement['PROPERTIES']['NAME']['~VALUE'] . '</a></li>
		';
	}

	if( !empty($items__li) ){
		$HTML .= '
			<ul>
' . $items__li . '
			</ul>
		';
	}
}

echo $HTML;
?>