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

// /bitrix/templates/shop/components/bitrix/news.list/blog_index/template.php
?>

<?
$block_blog_list = '';

foreach($arResult['ITEMS'] as $arItem){
	$block_blog_list .= '
                <a href="' . $arItem['DETAIL_PAGE_URL'] . '" class="block-blog-list-item">
                    <div class="block-blog-list-item__ava">
                        <img src="' . CFile::GetPath( $arItem['PROPERTIES']['AVA']['VALUE'] ) . '" alt="' . $arItem['PROPERTIES']['DATE']['~VALUE'] . '">
                    </div>
                    <div class="block-blog-list-item__info">
                        <div class="block-blog-list-item__date">
                            ' . $arItem['PROPERTIES']['DATE']['~VALUE'] . '
                        </div>
                        <div class="block-blog-list-item__title">
                            ' . $arItem['PROPERTIES']['TITLE']['~VALUE'] . '
                        </div>
                        <div class="block-blog-list-item__link-more">
                            Перейти
                        </div>
                    </div>
                </a>
	';
}
?>




        <div class="block block-blog">
            <div class="container">
                <div class="h2-flex-blog">
                    <div class="h2-flex-blog-left">
                        <h2>Блог</h2>
                        <div class="h2-flex-blog-description">
                            Последние новости из мира Apple и много других интересных статей
                        </div>
                    </div>
                    <div class="h2-flex-blog-right">
                        <a href="/blog/" class="link-more">Перейти в блог</a>
                    </div>
                </div>
            </div><!-- .container -->


            <div class="block-blog-list">
                <div class="empty"></div>
				
<?= $block_blog_list; ?>

            </div><!-- .block-blog-list -->

        </div><!-- .block.block-blog -->

