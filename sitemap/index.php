<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Карта сайта | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "Карта сайта | AppGreatStore");
$APPLICATION->SetPageProperty("title", "Карта сайта | AppGreatStore");
$APPLICATION->SetTitle("Карта сайта");
?>
















<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>




<div class="container">
    <h1>Карта сайта</h1>
</div>






<div class="container">
    <div class="page-sitemap">
        <h3><a href="/">Главная</a></h3>
        <h3><a href="/about/">О компании</a></h3>
        <h3><a href="/delivery-and-pay/">Доставка и оплата</a></h3>
        <h3><a href="/refund/">Условия возврата и обмена товара</a></h3>
        <h3><a href="/guarantees/">Гарантии</a></h3>
        <h3><a href="/trade-in/">Trade-in</a></h3>
        <h3><a href="/installment-and-credit/">Рассрочка и кредит</a></h3>
        <h3><a href="/service-center/">Сервис</a></h3>
        <h3><a href="/promo/">Акции</a></h3>
        <h3><a href="/reviews/">Отзывы</a></h3>
        
        <h3><a href="/franchise/">Франшиза</a></h3>
        <h3><a href="/contacts/">Контакты</a></h3>
        <h3><a href="/privacy-policy/">Политика конфиденциальности</a></h3>
        <h3><a href="/user-agreement/">Соглашение</a></h3>
        <h3><a href="/gift/">Подарочные сертификаты</a></h3>



        <h3><a href="/blog/">Блог</a></h3>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"sitemap_list", 
	array(
		"COMPONENT_TEMPLATE" => "",
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "999999",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "PROPERTY_DATE",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "IBLOCK_ID",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "TITLE",
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
		"PARENT_SECTION" => "",
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

        <h3><a href="/catalog/">Каталог</a></h3>
<?$APPLICATION->IncludeComponent("bitrix:catalog.sections.top", "sitemap", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"IBLOCK_ID" => "5",	// Инфоблок
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SECTION_SORT_FIELD" => "sort",	// По какому полю сортируем разделы
		"SECTION_SORT_ORDER" => "asc",	// Порядок сортировки разделов
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"SECTION_COUNT" => "999999",	// Максимальное количество выводимых разделов
		"ELEMENT_COUNT" => "999999",	// Максимальное количество элементов, выводимых в каждом разделе
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
		"PROPERTY_CODE" => array(	// Свойства
			0 => "NAME",
			1 => "",
		),
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"DISPLAY_COMPARE" => "N",	// Выводить кнопку сравнения
		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
		"PRICE_CODE" => "",	// Тип цены
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"PRICE_VAT_INCLUDE" => "N",	// Включать НДС в цену
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
	),
	false
);?>


    </div><!-- .page-sitemap -->
</div><!-- .container -->

























<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>