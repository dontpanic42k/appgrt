<?php
// /bitrix/templates/shop/components/bitrix/breadcrumb/breadcrumbs/template.php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult)) return "";


$itemSize = count($arResult);

for($index = 0; $index < $itemSize; $index++){
	if( $index == 0 ){
		$title = 'Главная';
	} else {
		$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	}

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1){
		$strReturn .= '
			<a href="' . $arResult[$index]["LINK"] . '" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				' . $title . '
				<meta itemprop="position" content="' . ($index + 1) . '" />
			</a>
		';
	} else {
		$strReturn .= '
			<span>' . $title . '</span>
		';
	}
}



$strReturn = '
    <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <div class="container">
            <div class="breadcrumbs-flex">
' . $strReturn . '
            </div><!-- .breadcrumbs-flex -->
        </div><!-- .container -->
    </div><!-- .breadcrumbs -->
';


return $strReturn;