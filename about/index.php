<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "О компании | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "О компании | AppGreatStore");
$APPLICATION->SetPageProperty("title", "О компании | AppGreatStore");
$APPLICATION->SetTitle("О компании");
?><div class="breadcrumbs-abs-wrapper">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
</div>
<!-- .breadcrumbs-abs-wrapper -->
<div class="page-about-first">
	<div class="page-about-first-ava">
 <img alt="О компании" src="/bitrix/templates/shop/images/about-bg.jpg">
	</div>
	<div class="container">
		<div class="page-about-first-info">
			<div class="page-about-first-info__logo">
 <a href="/"> <img alt="logo" src="/bitrix/templates/shop/images/logo_v2-white.svg"> </a>
			</div>
			<div class="page-about-first-info__description">
				 Фирменный магазин оригинальной <br>
				 техники Apple и аксессуаров.
			</div>
		</div>
		<!-- .page-about-first-info -->
	</div>
	<!-- .container -->
</div>
<!-- .page-about-first -->
<div class="block-50 container">
	<h2>О нас</h2>
	<div class="flex">
		<div class="flex-col-50">
			<div class="std-text">
				 Мы работаем в 2х городах России, а также осуществляем доставку по всей стране в самые короткие сроки. Компания работает уже более 5-ти лет и сделала за этот срок более 50 000 счастливых покупателей. Об этом говорит большое количество отзывов о нашей кампании. <br>
 <br>
 <b>Наша миссия</b> заключается в том, чтобы предоставлять людям качественный и нужный товар по самым демократичным и доступным ценам. <br>
 <br>
 <b>Наша ценность</b> заключается в том, что к каждому клиенту мы подходим с индивидуальным подходом. Наша главная задача - донести информацию для потребителя как можно более качественно, информативно и при этом легко.
			</div>
		</div>
		<!-- .flex-col-50 -->
		<div class="flex-col-50">
			<div class="std-text">
				 В ассортименте нашего магазина представлены разные бренды такие как Apple, Samsung, Dyson, DJI, Sony, JBL, Marshall и многое другое, с официальной гарантией на всю технику 1 год. В нашем магазине&nbsp;ты найдешь любую технику, которая будет тебе по душе. <br>
 <br>
 <b>Каждый месяц</b> мы радуем наших покупателей разными акциями, дарим подарки при покупке и устраиваем розыгрыши IPhone, среди покупателей. В нашем магазине работает программа Trade-In с выгодой до 50 000 рублей, а также действует кредит и рассрочка на самых выгодных условиях, причем ее можно оформить, не выходя из дома, чтобы ваша покупка была не только приятной, но и легкой. <br>
 <br>
				 Технику Apple оценят по достоинству все, кто выбирает надежность, стиль и качество. Вы можете приобрести любую технику в нашем магазине онлайн с доставкой или посетить любой из наших филиалов.
			</div>
		</div>
		<!-- .flex-col-50 -->
	</div>
	<!-- .flex -->
</div>
<!-- .container -->
<div class="block-50 container">
	<h2>Наши преимущества</h2>
	<div class="block-good1-list">
		<div class="block-good1-list-item">
			<div class="block-good1-list-item__ico">
 <img alt="Гарантия низкой цены" src="/bitrix/templates/shop/images/ico-good3-1.svg">
			</div>
			<div class="block-good1-list-item__title">
				 Гарантия низкой цены
			</div>
			<div class="block-good1-list-item__description">
				 Нашли цену ниже? <br>
				 Сделаем еще ниже!
			</div>
		</div>
		<div class="block-good1-list-item">
			<div class="block-good1-list-item__ico">
 <img alt="Выгодный Trade-In" src="/bitrix/templates/shop/images/ico-good3-2.svg">
			</div>
			<div class="block-good1-list-item__title">
				 Выгодный Trade-In
			</div>
			<div class="block-good1-list-item__description">
				 Сдай свой старый телефон и получи дополнительную скидку на покупку
			</div>
		</div>
		<div class="block-good1-list-item">
			<div class="block-good1-list-item__ico">
 <img alt="Бонусы при покупке" src="/bitrix/templates/shop/images/ico-good3-2.svg">
			</div>
			<div class="block-good1-list-item__title">
				 Бонусы при покупке
			</div>
			<div class="block-good1-list-item__description">
				 Чехол, защитное стекло и адаптер быстрой зарядки к каждому IPhone в подарок
			</div>
		</div>
		<div class="block-good1-list-item">
			<div class="block-good1-list-item__ico">
 <img alt="Эксперты Apple" src="/bitrix/templates/shop/images/ico-good3-4.svg">
			</div>
			<div class="block-good1-list-item__title">
				 Эксперты Apple
			</div>
			<div class="block-good1-list-item__description">
				 Мы делаем всё, чтобы бренд AppGreat ассоциировался со словами "выгода" и "качество"
			</div>
		</div>
		<div class="block-good1-list-item">
			<div class="block-good1-list-item__ico">
 <img alt="Эксперты Apple" src="/bitrix/templates/shop/images/ico-good3-5.svg">
			</div>
			<div class="block-good1-list-item__title">
				 Ремонт
			</div>
			<div class="block-good1-list-item__description">
				 Качественный сервис и индивидуальный подход к каждому клиенту
			</div>
		</div>
	</div>
</div>
<div class="block-50 page-about-interior">
	<div class="page-about-interior-item" data-id="1">
 <img alt="interior" src="/bitrix/templates/shop/images/about-interior-1.jpg">
	</div>
	<div class="page-about-interior-item" data-id="2">
 <img alt="interior" src="/bitrix/templates/shop/images/about-interior-2.jpg">
	</div>
	<div class="page-about-interior-item" data-id="3">
 <img alt="interior" src="/bitrix/templates/shop/images/about-interior-3.jpg">
	</div>
	<div class="page-about-interior-item" data-id="4">
 <img alt="interior" src="/bitrix/templates/shop/images/about-interior-4.jpg">
	</div>
</div>
<!-- .block-50.page-about-interior -->
<div class="container block-50">
	<div class="faq">
		<h2>FAQ</h2>
		<div class="special-spoiler">
			<div class="container">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"block_faq",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "block_faq",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"ID",1=>"NAME",2=>"IBLOCK_ID",3=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "9999",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
			</div>
		</div>
		<!-- .special-spoiler -->
	</div>
	<!-- .faq -->
</div>
<!-- .container --> <script>
$(document).ready(function(){
	let firstSpoiler = $(".special-spoiler-item").eq(0);
	firstSpoiler.find(".special-spoiler-item__title").trigger("click");
});
</script>
<div class="block-50 page-about-vacancies">
	<div class="container">
		<div class="page-about-vacancies-flex">
			<div class="page-about-vacancies-flex-left">
				<div class="std-text">
					<h2>Вакансии</h2>
					<p>
 <b>
						Это не просто работа — это образ жизни. <br>
						 Присоединяйся! </b>
					</p>
					<p>
						Ты молод, креативен и берешь от жизни максимум? С нами ты можешь стать не просто продавцом техники, а настоящим носителем духа легендарного бренда Apple!
					</p>
					<p>
						&nbsp;
					</p>
					<h2>Что мы предлагаем?</h2>
					<ul>
						<li>Оклад и ежемесячная премия по итогам работы</li>
						<li>Карьерный рост и профессиональное развитие</li>
						<li>Официальное трудоустройство по ТК РФ</li>
						<li>Оплата два раза в месяц на банковскую карту</li>
						<li>Сменный график работы 5/2 (выходные по скользящему графику)</li>
						<li>Скидки на продукцию в наших магазинах</li>
					</ul>
					<p>
						Отправляя нам информацию о себе, вы даете согласие на обработку нами ваших персональных данных. Мы гарантируем конфиденциальность информации. Мы рассматриваем заявки от лиц старше 18 лет.
					</p>
				</div>
				<!-- .std-text -->
			</div>
			<!-- .page-about-vacancies-flex-left -->
			<div class="page-about-vacancies-flex-right">
 <img src="/bitrix/templates/shop/images/about-vacancies.jpg" alt="Вакансии"> <a href="https://docs.google.com/forms/d/1F8VD0m8e8pxBPUsr6etl_cWGcXL8jUgvK3uoLXrl1nU/edit" class="btn btn-black" target="_blank">Заполнить анкету</a>
			</div>
			<!-- .page-about-vacancies-flex-right -->
		</div>
		<!-- .page-about-vacancies-flex -->
	</div>
	<!-- .container -->
</div>
<!-- .page-about-vacancies --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>