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

// /bitrix/templates/shop/components/bitrix/news.list/block_faq/template.php
?>

<?
$HTML = '';

foreach($arResult['ITEMS'] as $arItem){
	$HTML .= '
                    <div class="special-spoiler-item">
                        <a href="#" class="special-spoiler-item__title">' . htmlspecialchars($arItem['NAME']) . '</a>
                        <div class="special-spoiler-item__body" style="display: none;">
                            ' . $arItem['~DETAIL_TEXT'] . '
                        </div>
                    </div>
	';
}
?>
                <div class="special-spoiler-list">
<?= $HTML; ?>
                </div><!-- .special-spoiler-list -->

