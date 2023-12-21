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

// /bitrix/templates/shop/components/bitrix/news.list/sitemap_list/template.php
?>

<?
$HTML = '';

foreach($arResult['ITEMS'] as $arItem){
	$HTML .= '
        <li><a href="' . $arItem['DETAIL_PAGE_URL'] . '">' . $arItem['PROPERTIES']['TITLE']['~VALUE'] . '</a></li>
	';
}

if( !empty($HTML) ){
    $HTML = '
        <ul>
' . $HTML . '
        </ul>
    ';
}


echo $HTML;
?>