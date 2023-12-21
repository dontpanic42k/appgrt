<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

// $APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
// 	"LEVEL"	=>	"3",
// 	"COL_NUM"	=>	"2",
// 	"SHOW_DESCRIPTION"	=>	"Y",
// 	"SET_TITLE"	=>	"Y",
// 	"CACHE_TIME"	=>	"36000000"
// 	)
// );
?>











<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-flex">
            <a href="/">Главная</a>
            <span>Страница не найдена</span>
        </div><!-- .breadcrumbs-flex -->
    </div><!-- .container -->
</div><!-- .breadcrumbs -->






<div class="container">
    <div class="page-404-wrapper">
        <div class="page-404-title">
            404
        </div>
        <div class="page-404-subtitle">
            Страница не найдена
        </div>
        <div class="page-404-button">
            <a href="/catalog/" class="btn btn-black">В каталог</a>
        </div>
    </div>
</div><!-- .container -->













<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>