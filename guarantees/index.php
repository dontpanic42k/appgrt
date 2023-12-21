<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Гарантии | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "Гарантии | AppGreatStore");
$APPLICATION->SetPageProperty("title", "Гарантии | AppGreatStore");
$APPLICATION->SetTitle("Гарантии");
?>













<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>




<div class="container">
    <h1>Гарантии</h1>
</div>



<div class="container">
    <div class="std-wrapper">
        <div class="page-guarantees-flex">
            <div class="page-guarantees-content-left">
                <div class="page-guarantees-content-bold">
                    Приобретая в нашем магазине любой 
                    <br>
                    телефон, вы получаете гарантию сроком 
                    <br>
                    на целый год в специализированном сервисном центре.
                    <br>
                    <br>
                </div>
                <div class="page-guarantees-content-text">
                    Для нас очень важно обеспечить покупателей качественной продукцией, поэтому мы четко следуем Постановлению Правительства РФ «Об утверждении Правил продажи отдельных видов товаров, перечня товаров длительного пользования, на которые не распространяется требование покупателя о безвозмездном предоставлении ему на период ремонта или замены аналогичного товара, и перечня непродовольственных товаров надлежащего качества, не подлежащих возврату или обмену на аналогичный товар других размера, формы, габарита, фасона, расцветки или комплектации».
                    <br>
                    <br>
                    <i>Согласно гарантийным обязательствам, каждый покупатель может вернуть телефон или сдать его на ремонт при наличии нетронутых заводских пломб. Более детальные условия приведены ниже.</i>
                    <br>
                    <br>
                    Подготавливая к отправке каждый заказ, мы внимательно осматриваем каждое устройство и тестируем, поэтому шансы покупателей получить бракованный товар сводятся к минимуму. Для нас очень важно, чтобы все клиенты были довольны работой магазина, поэтому мы не допускаем к реализации устройства с малейшими дефектами.
                    <br>
                    <br>
                </div>
                <div class="page-guarantees-content-bold">
                    Поднимайте себе настроение приятными покупками!
                </div>
            </div><!-- .page-guarantees-content-left -->
            <div class="page-guarantees-content-right">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/pic-guarantees.png" alt="Гарантии">
            </div><!-- .page-guarantees-content-right -->
        </div><!-- .page-guarantees-flex -->
    </div><!-- .std-wrapper -->
</div><!-- .container -->

















<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>