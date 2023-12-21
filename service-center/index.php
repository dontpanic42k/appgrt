<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Сервис | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "Сервис | AppGreatStore");
$APPLICATION->SetPageProperty("title", "Сервис | AppGreatStore");
$APPLICATION->SetTitle("Сервис");
?>




<?
CModule::IncludeModule("iblock");

$IBLOCK_ID = 4;

function getSectionList($filter, $select){
    $dbSection = CIBlockSection::GetList(
        Array(
            'LEFT_MARGIN' => 'ASC',
        ),
        array_merge( 
            Array(
                'ACTIVE' => 'Y',
                'GLOBAL_ACTIVE' => 'Y'
            ),
            is_array($filter) ? $filter : Array()
        ),
        false,
        array_merge(
            Array(
                'ID',
                'IBLOCK_SECTION_ID'
            ),
            is_array($select) ? $select : Array()
        )
    );

    while( $arSection = $dbSection-> GetNext(true, false) ){
        $SID = $arSection['ID'];
        $PSID = (int) $arSection['IBLOCK_SECTION_ID'];

        $arLincs[$PSID]['CHILDS'][$SID] = $arSection;

        $arLincs[$SID] = &$arLincs[$PSID]['CHILDS'][$SID];
    }

    return array_shift($arLincs);
}




$arSections = getSectionList(
    Array(
        'IBLOCK_ID' => $IBLOCK_ID
    ),
    Array(
        'NAME',
        'SECTION_PAGE_URL'
    )
);


$services_head_1__HTML = '';
$services_head_2__HTML = '';

foreach($arSections['CHILDS'] as $item_1){
    $category = $item_1['NAME'];
    $services_head_1__HTML .= '<a href="#" data-id="' . $category . '">' . $category . '</a>' . "\n\r";


    $services_head_2__one = '';

    foreach($item_1['CHILDS'] as $item_2){
        $model = $item_2['NAME'];

        $services_head_2__one .= '
                    <a href="#" data-id="' . $model . '" data-bid="' . $item_2['ID'] . '">' . $model . '</a>
        ';
    }

    $services_head_2__HTML .= '
            <div class="page-service-center-main-head-2" data-id="' . $category . '" style="display: none;">
                ' . $services_head_2__one . '
            </div>
    ';
}
?>
























<div class="breadcrumbs-abs-wrapper darker">
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>
</div><!-- .breadcrumbs-abs-wrapper -->








<div class="page-trade-in-first  page-service-center">
    <div class="container">

        <div class="index-first-slider-item">
            <div class="index-first-slider-item-info">
                <div class="page-service-center-first-title">
                    Сервис
                </div>
                <div class="page-service-center-first-description">
                    Собственная лаборатория. Первоклассные инженеры. 
                    <br>
                    Оригинальные и новые запчасти Apple.
                </div>
            </div>
            <div class="index-first-slider-item-image" style="align-self: flex-end;">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/service-center-index-tel.png" alt="Сервис">
            </div>
        </div>

    </div><!-- .container -->
</div><!-- .page-trade-in-first -->











<div class="block page-service-center-main">
    <div class="container">

        <h2>Выберите модель вашего iPhone или iPad и неисправность</h2>

        <div class="page-service-center-main-head-1">
<?= $services_head_1__HTML; ?>
            <!-- <a href="#" class="active">iPhone</a>
            <a href="#">iPad</a>
            <a href="#">Watch</a>
            <a href="#">AirPods</a> -->
        </div>
        <!-- <div class="page-service-center-main-head-2"> -->
<?= $services_head_2__HTML; ?>
            <!-- <a href="#" class="active">iPhone 12</a>
            <a href="#">iPhone 11 Pro Max</a>
            <a href="#">iPhone 11 Pro</a>
            <a href="#">iPhone 11</a>
            <a href="#">iPhone XS Max</a>
            <a href="#">iPhone XS</a>
            <a href="#">iPhone XR</a>
            <a href="#">iPhone X</a>
            <a href="#">iPhone 8+</a> -->
        <!-- </div> -->


        <div class="page-service-center-main-body">

        </div><!-- .page-service-center-main-body -->



    </div><!-- .container -->
</div><!-- .block.page-service-center-main -->













<div class="block-50 container">
    <div class="bar-info">
        <div class="bar-info-text">
            <h2>Не нашли в списке свою неисправность?</h2>
            Звоните по номеру <b><a href="tel:+79149353271" class="tel">+7 (914) 935-32-71</a></b> или напишите нам на <b><a href="mailto:appgreat.store@mail.ru" class="email">appgreat.store@mail.ru</a></b>, мы поможем!
        </div>
    </div><!-- .bar-info -->
</div><!-- .container -->












<div class="block container">
    <div class="page-service-center-steps">
        <h2>Порядок оказания услуги</h2>

        <div class="page-service-center-steps-list">
            <div class="page-service-center-steps-list-item">
                <div class="page-service-center-steps-list-item__num">
                    01
                </div>
                <div class="page-service-center-steps-list-item__text">
                    Оставляете заявку на 
                    <br>
                    сайте или через 
                    <br>
                    телефоны звонок 
                </div>
            </div>
            <div class="page-service-center-steps-list-item">
                <div class="page-service-center-steps-list-item__num">
                    02
                </div>
                <div class="page-service-center-steps-list-item__text">
                    Консультация по 
                    <br>
                    текущей проблеме
                </div>
            </div>
            <div class="page-service-center-steps-list-item">
                <div class="page-service-center-steps-list-item__num">
                    03
                </div>
                <div class="page-service-center-steps-list-item__text">
                    Посещение нашего 
                    <br>
                    сервисного центра или 
                    <br>
                    отправка устройства в наш 
                    <br>
                    Сервисный центр 
                </div>
            </div>
            <div class="page-service-center-steps-list-item">
                <div class="page-service-center-steps-list-item__num">
                    04
                </div>
                <div class="page-service-center-steps-list-item__text">
                    Оплата, получение 
                    <br>
                    чека и гарантии на 
                    <br>
                    ремонт
                </div>
            </div>
        </div><!-- .page-service-center-steps-list -->

    </div><!-- .page-service-center-steps -->

</div><!-- .container -->

















<div class="block container">
        
    <div class="block-good1-list">
        <div class="block-good1-list-item">
            <div class="block-good1-list-item__ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-1.svg" alt="Удобно">
            </div>
            <div class="block-good1-list-item__title">
                Удобно
            </div>
            <div class="block-good1-list-item__description">
                Бесплатная доставка по всей РФ (отправка в день заказа и доставка в самые короткие сроки)
            </div>
        </div>
        <div class="block-good1-list-item">
            <div class="block-good1-list-item__ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-2.svg" alt="Надёжно">
            </div>
            <div class="block-good1-list-item__title">
                Надёжно
            </div>
            <div class="block-good1-list-item__description">
                В работе используем оригинальные запчасти. Даём гарантию на нашу работу и запчасти от 90 дней
            </div>
        </div>
        <div class="block-good1-list-item">
            <div class="block-good1-list-item__ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-3.svg" alt="Честно">
            </div>
            <div class="block-good1-list-item__title">
                Честно
            </div>
            <div class="block-good1-list-item__description">
                Только фиксированные цены — никаких накруток. Если что-то пойдёт не так, ремонт переделаем бесплатно.
            </div>
        </div>
        <div class="block-good1-list-item">
            <div class="block-good1-list-item__ico">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-3.svg" alt="Запись через сайт">
            </div>
            <div class="block-good1-list-item__title">
                Запись через сайт
            </div>
            <div class="block-good1-list-item__description">
                Достаточно сделать запись в несколько кликов на сайте или по телефону.
            </div>
        </div>
    </div><!-- .block-good1-list -->
    
</div><!-- .block.container -->












<div class="container">
    <div class="page-reviews-banner">
        <div class="page-reviews-banner__title">
            Записаться на ремонт
        </div>
        <div class="page-reviews-banner__description">
            Оперативно свяжемся с вами для уточнения деталей. Бесплатная 
            <br>
            консультация по вопросам ремонта с сервисными инженерами — 
            <br>
            бесплатно.
        </div>
        <div class="page-reviews-banner__button">
            <a href="#modal-service-center" class="btn btn-black" data-fancybox="">Записаться</a>
        </div>
    </div><!-- .page-reviews-banner -->
</div><!-- .container -->





<div style="display: none;">
    <div class="modal-std-wrapper" id="modal-service-center">
        <div class="modal-std  type-2">
            <div class="modal-std-flex-center">
                <form class="form-2">
                    <div class="modal-std-title">
                        Записаться в сервис
                    </div>

                    <div class="modal-std-description">
                        
                    </div>

                    <div class="modal-std-inputs">
                        <input type="text" class="form-item-2 required" name="name" placeholder="Имя">
                        <input type="text" class="form-item-2 required" name="tel" placeholder="Телефон">

                        <div class="modal-std-h3">
                            Выберите устройство
                        </div>

                        <div class="custom-checkbox-row">
                            <input type="radio" class="custom" name="device" value="iPhone">
                            <div class="custom-checkbox-row-title">
                                iPhone
                            </div>
                        </div>

                        <div class="custom-checkbox-row">
                            <input type="radio" class="custom" name="device" value="Watch">
                            <div class="custom-checkbox-row-title">
                                Watch
                            </div>
                        </div>

                        <div class="custom-checkbox-row">
                            <input type="radio" class="custom" name="device" value="MacBook">
                            <div class="custom-checkbox-row-title">
                                MacBook
                            </div>
                        </div>

                        <div class="custom-checkbox-row">
                            <input type="radio" class="custom" name="device" value="iPad">
                            <div class="custom-checkbox-row-title">
                                iPad
                            </div>
                        </div>

                        <textarea class="form-item-2" name="comment" placeholder="Причина обращения"></textarea>

                        <a href="#" class="btn btn-black  submit">Отправить</a>

                        <div class="modal-std-privacy">
                            Продолжая, Вы соглашаетесь со <a href="/user-agreement/">сбором и обработкой персональных данных</a>
                        </div>



                        <input type="hidden" name="comment" style="display: none;">
                        <input type="hidden" name="thx" value="#ok-service-center" style="display: none;">
                        <input type="hidden" name="subject" value="Записаться в сервис" style="display: none;">
                        <input type="submit" style="display: none;">
                    </div>
                </form>
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>





<div style="display: none;">
    <div class="modal-std-wrapper" id="ok-service-center">
        <div class="modal-std  type-1">
            <div class="modal-std-flex-center">
                <div class="modal-std-title">
                    Спасибо за заявку!
                </div>
                <div class="modal-std-description">
                    Мы свяжемся с вами в ближайшее время
                </div>
                <div class="modal-std-button">
                    <a href="#" class="btn btn-brown" onclick="$.fancybox.close(); return false;">Ок</a>
                </div>
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>














<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>