<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Отзывы | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "Отзывы | AppGreatStore");
$APPLICATION->SetPageProperty("title", "Отзывы | AppGreatStore");
$APPLICATION->SetTitle("Отзывы");
?>
















<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>




<div class="container">
    <h1>Отзывы</h1>
</div>












<div class="page-reviews">
    <div class="container">

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"page_reviews", 
	array(
		"COMPONENT_TEMPLATE" => "page_reviews",
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "8",
		"SORT_BY1" => "PROPERTY_TITLE",
		"SORT_ORDER1" => "DESC",
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
			0 => "TITLE",
			1 => "DATE",
			2 => "INTROTEXT",
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
		"INCLUDE_SUBSECTIONS" => "N",
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




        <div class="page-reviews-banner">
            <div class="page-reviews-banner__title">
                Мы ценим ваше мнение
            </div>
            <div class="page-reviews-banner__description">
                Лучшая награда для нас - это положительный отзыв! 
                <br>
                Спасибо, что выбираете нас!
            </div>
            <div class="page-reviews-banner__button">
                <a href="#modal-review" class="btn btn-black" data-fancybox="">Оставить отзыв</a>
            </div>
        </div><!-- .page-reviews-banner -->






    </div><!-- .container -->
</div><!-- .page-reviews -->













<?
// Фотогалерея "Наши покупатели"

$APPLICATION->IncludeComponent("bitrix:news.list", "our_customers_slider", Array(
        "DISPLAY_DATE" => "Y",	// Выводить дату элемента
        "DISPLAY_NAME" => "Y",	// Выводить название элемента
        "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
        "AJAX_MODE" => "N",	// Включить режим AJAX
        "IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
        "IBLOCK_ID" => 16,	// Код информационного блока
        "NEWS_COUNT" => "9999",	// Количество новостей на странице
        "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
        "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
        "SORT_BY2" => "TIMESTAMP_X",	// Поле для второй сортировки новостей
        "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
        "FILTER_NAME" => "",	// Фильтр
        "FIELD_CODE" => array(	// Поля
            0 => "ID",
        ),
        "PROPERTY_CODE" => array(	// Свойства
            0 => "DESCRIPTION",
        ),
        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
        "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
        "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
        "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",	// Скрывать ссылку, если нет детального описания
        "PARENT_SECTION" => '',	// ID раздела
        "PARENT_SECTION_CODE" => "",	// Код раздела
        "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
        "CACHE_TYPE" => "A",	// Тип кеширования
        "CACHE_TIME" => "3600",	// Время кеширования (сек.)
        "CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
        "DISPLAY_TOP_PAGER" => "Y",	// Выводить над списком
        "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
        "PAGER_TITLE" => "Новости",	// Название категорий
        "PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
        "PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
        "SET_STATUS_404" => "N",	// Устанавливать статус 404
        "SHOW_404" => "N",	// Показ специальной страницы
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",	// Url для построения ссылок (по умолчанию - автоматически)
        "PAGER_PARAMS_NAME" => "arrPager",	// Имя массива с переменными для построения ссылок
        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    ),
    false
);

                        

?>









<div style="display: none;">
    <div class="modal-std-wrapper" id="modal-review">
        <div class="modal-std  type-2">
            <div class="modal-std-flex-center">
                <form class="form-2">
                    <div class="modal-std-title">
                        Оставить отзыв
                    </div>

                    <div class="modal-std-description">
                        
                    </div>

                    <div class="modal-reviews-inputs">
						<div class="modal-reviews-inputs-item" data-id="name">
							<input type="text" class="form-item-2 required" name="name" placeholder="Имя">
						</div>
						<div class="modal-reviews-inputs-item" data-id="name2">
							<input type="text" class="form-item-2" name="name2" placeholder="Фамилия">
						</div>
						<div class="modal-reviews-inputs-item" data-id="tel">
							<input type="text" class="form-item-2" name="tel" placeholder="Телефон">
						</div>
						<div class="modal-reviews-inputs-item" data-id="email">
							<input type="text" class="form-item-2" name="email" placeholder="E-mail">
						</div>
						<div class="modal-reviews-inputs-item" data-id="comment">
							<textarea class="form-item-2 required" name="comment" placeholder="Текст отзыва"></textarea>
						</div>
						<div class="modal-reviews-inputs-item" data-id="button">
							<a href="#" class="btn btn-black  submit">Отправить</a>
							<div class="modal-std-privacy">
								Продолжая, Вы соглашаетесь со <a href="/user-agreement/">сбором и обработкой персональных данных</a>
							</div>
						</div>
                    </div>

					<input type="hidden" name="thx" value="#ok-review" style="display: none;">
					<input type="hidden" name="subject" value="Отзыв" style="display: none;">
					<input type="submit" style="display: none;">
                </form>
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>





<div style="display: none;">
    <div class="modal-std-wrapper" id="ok-review">
        <div class="modal-std  type-1">
            <div class="modal-std-flex-center">
                <div class="modal-std-title">
                    Спасибо за отзыв!
                </div>
                <div class="modal-std-description">
                    Он появится на сайте в ближайшее время
                </div>
                <div class="modal-std-button">
                    <a href="#" class="btn btn-brown" onclick="$.fancybox.close(); return false;">Ок</a>
                </div>
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>

















<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>