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

// /bitrix/templates/shop/components/bitrix/news/blog/bitrix/news.detail/.default/template.php


// echo '<pre>';
// print_r( $arResult );
// echo '</pre>';
// die();


CModule::IncludeModule('iblock');

$app = new CBitrixComponent();
$EditAreaID = '';
$elems = CIBlockElement::GetList(
	array('SORT' => 'ASC'), 
    array(
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'ACTIVE' => 'Y',
	),
	false,
	false,
	array(
		'ID',
		'IBLOCK_ID',
		'NAME',
	)
);

while ($elem = $elems->Fetch()){
	$EditAreaID = $app->GetEditAreaID($elem['ID']);

	$arButtons = CIBlock::GetPanelButtons(
		$elem['IBLOCK_ID'],
		$elem['ID'],
		0,
		array(
			'SECTION_BUTTONS' => false,
			'SESSID' => false
		)
	);

	$elem['ADD_LINK'] = $arButtons['edit']['add_element']['ACTION_URL'];
	$elem['EDIT_LINK'] = $arButtons['edit']['edit_element']['ACTION_URL'];
	$elem['DELETE_LINK'] = $arButtons['edit']['delete_element']['ACTION_URL']; 

	$elem['ADD_LINK_TEXT'] = $arButtons['edit']['add_element']['TEXT'];
	$elem['EDIT_LINK_TEXT'] = $arButtons['edit']['edit_element']['TEXT'];
	$elem['DELETE_LINK_TEXT'] = $arButtons['edit']['delete_element']['TEXT'];

	$app->AddEditAction($elem['ID'], $elem['ADD_LINK'], $elem['ADD_LINK_TEXT']);
	$app->AddEditAction($elem['ID'], $elem['EDIT_LINK'], $elem['EDIT_LINK_TEXT']);
	$app->AddDeleteAction($elem['ID'], $elem['DELETE_LINK'], $elem['DELETE_LINK_TEXT'], array('CONFIRM' => 'Точно удалить?'));
}
?>




<div class="breadcrumbs-abs-wrapper">
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>
</div><!-- .breadcrumbs-abs-wrapper -->








<div class="page-blog-first">
    <div class="page-blog-first-ava">
        <img src="<?= CFile::GetPath( $arResult['PROPERTIES']['AVA']['VALUE'] ); ?>" alt="<?= $arResult['PROPERTIES']['DATE']['~VALUE']; ?>">
    </div>

    <div class="container">
        <div class="page-blog-info">
            <div class="page-blog-first-date">
                <?= $arResult['PROPERTIES']['DATE']['~VALUE']; ?>
            </div>
            <div class="page-blog-first-title">
                <?= $arResult['PROPERTIES']['TITLE']['~VALUE']; ?>
            </div>
            <div class="page-blog-first-button">
                &nbsp;
            </div>
        </div><!-- .page-blog-info -->
    </div><!-- .container -->

</div><!-- .page-blog-first -->










<div class="page-blog-content" id="<?= $EditAreaID; ?>">

    <div class="container">
        <div class="page-blog-inner-content">
            <? // <h2>Что мы предлагаем?</h2> ?>
    
            <div class="std-text">
<?= $arResult['PROPERTIES']['CONTENT']['~VALUE']['TEXT']; ?>
            </div><!-- .std-text -->
        </div><!-- .page-blog-inner-content -->
    </div><!-- .container -->





    <div class="container">
        <h2>Другие статьи</h2>
    </div><!-- .container -->

    <div class="page-blog-list">
        

<?
$db = CIBlockElement::GetList(
	$arOrder = Array(
		'RAND' => 'ASC',
	),
	$arFilter = Array(
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'ACTIVE' => 'Y',
		'!ID' => $arResult['ID'],
	),
	$arGroupBy = false,
	// $arNavStartParams = false,
	array(
		'nPageSize' => '4',
		// 'nElementID' => $arResult["ID"],
	),
	$arSelectFields = Array(
		'ID',
		'IBLOCK_ID',
		'NAME',
		'PROPERTY_AVA',
		'PROPERTY_DATE',
		'PROPERTY_TITLE',
		'DETAIL_PAGE_URL',
	)
);

// while($row = $db -> fetch()){
while($row = $db -> getNext()){
	// echo '<pre>';
	// print_r( $row );
	// echo '</pre>';
	// // die();
	
	echo '
        <a href="' . $row['DETAIL_PAGE_URL'] . '" class="page-blog-list-item">
            <div class="page-blog-list-item__ava">
                <img src="' . CFile::GetPath( $row['PROPERTY_AVA_VALUE'] ) . '" alt="' . $row['PROPERTY_DATE_VALUE'] . '">
            </div>
            <div class="page-blog-list-item__info">
                <div class="page-blog-list-item__date">
                    ' . $row['PROPERTY_DATE_VALUE'] . '
                </div>
                <div class="page-blog-list-item__title">
                    ' . $row['PROPERTY_TITLE_VALUE'] . '
                </div>
                <div class="page-blog-list-item__link-more">
                    Перейти
                </div>
            </div>
        </a>
	';
}
?>

    </div><!-- .page-blog-list -->


</div><!-- .page-blog-content -->

