<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Рассрочка и кредит | AppGreatStore");
$APPLICATION->SetPageProperty("description", "Рассрочка и кредит | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "Рассрочка и кредит | AppGreatStore");
$APPLICATION->SetTitle("Рассрочка и кредит");
?>
















<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>





<div class="container">
    <h1>Рассрочка и кредит</h1>

    <div class="h1-subtitle">
        Желаете купить товар, но нет наличных? Мы вам его доставим, а наши банки-партнеры 
        <br>
        помогут выбратьнаиболее выгодный для вас кредит.
    </div>
</div>






<div class="page-installment-and-credit-banks">
    <div class="container">
        <div class="page-installment-and-credit-banks-list">
            <div class="page-installment-and-credit-banks-list-item">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/banks-tinkov.jpg" alt="tinkov">
            </div>
            <div class="page-installment-and-credit-banks-list-item">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/banks-mtsbank.jpg" alt="mtsbank">
            </div>
            <div class="page-installment-and-credit-banks-list-item">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/banks-sber.jpg" alt="sber">
            </div>
            <div class="page-installment-and-credit-banks-list-item">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/banks-sovkombank.jpg" alt="sovkombank">
            </div>
            <div class="page-installment-and-credit-banks-list-item">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/banks-pochtabank.jpg" alt="pochtabank">
            </div>
            <div class="page-installment-and-credit-banks-list-item">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/banks-homecreditbank.jpg" alt="homecreditbank">
            </div>
        </div><!-- .page-installment-and-credit-banks-list -->
    </div><!-- .container -->
</div><!-- .page-installment-and-credit-banks -->






<div class="container">
    <div class="bar-info">
        <div class="bar-info-text">
            При оформлении <b>в кредит</b>, при досрочном погашении переплата уменьшается 
            <br>
            в зависимости от срока. В <b>рассрочке</b> переплата идёт фиксированная!
        </div>
    </div><!-- .bar-info -->
</div><!-- .container -->













<div class="page-installment-and-credit-block1">
    <div class="container">
        <div class="std-wrapper-2">

            <div class="page-installment-and-credit-flex">
                <div class="page-installment-and-credit-flex-col">
                    <div class="page-installment-and-credit-block1-left">
                        <div class="page-installment-and-credit-block1-left-item">
                            <div class="page-installment-and-credit-block1-left-item__title">
                                Никаких банков и очередей
                            </div>
                            <div class="page-installment-and-credit-block1-left-item__description">
                                оформляйте кредит прямо у себя дома
                            </div>
                        </div>
                        <div class="page-installment-and-credit-block1-left-item">
                            <div class="page-installment-and-credit-block1-left-item__title">
                                Без скрытых платежей
                            </div>
                            <div class="page-installment-and-credit-block1-left-item__description">
                                плата за рассрочку заранее не включена в стоимость 
                                <br>
                                товаров на сайте
                            </div>
                        </div>
                        <div class="page-installment-and-credit-block1-left-item">
                            <div class="page-installment-and-credit-block1-left-item__title">
                                Короткая анкета
                            </div>
                            <div class="page-installment-and-credit-block1-left-item__description">
                                всего 10 минут по телефону на оформление кредита
                            </div>
                        </div>
                    </div><!-- .page-installment-and-credit-block1-left -->
                </div><!-- .page-installment-and-credit-flex-col -->

                <div class="page-installment-and-credit-flex-col">
                    <div class="page-installment-and-credit-block1-right">
                        <div class="page-installment-and-credit-block1-right-item">
                            <div class="page-installment-and-credit-block1-right-item__title">
                                80%
                            </div>
                            <div class="page-installment-and-credit-block1-right-item__description">
                                заявок одобряются
                            </div>
                        </div>
                        <div class="page-installment-and-credit-block1-right-item">
                            <div class="page-installment-and-credit-block1-right-item__title">
                                30 мин
                            </div>
                            <div class="page-installment-and-credit-block1-right-item__description">
                                среднее время одобрения
                            </div>
                        </div>
                    </div><!-- .page-installment-and-credit-block1-right -->
                </div><!-- .page-installment-and-credit-flex-col -->

            </div><!-- .page-installment-and-credit-flex -->

        </div><!-- .std-wrapper-2 -->
    </div><!-- .container -->
</div><!-- .page-installment-and-credit-block1 -->













<div class="page-installment-and-credit-steps">
    <div class="container">
        <div class="page-installment-and-credit-steps-title">
            <h2>Получите кредит в 4 шага:</h2>
        </div>
    
        <div class="block-good1-list">
            <div class="block-good1-list-item">
                <div class="block-good1-list-item__ico">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-1.svg" alt="Выберите товар">
                </div>
                <div class="block-good1-list-item__title">
                    Выберите товар
                </div>
                <div class="block-good1-list-item__description">
                    и оформите заказ с 
                    <br>
                    оплатой в кредит
                </div>
            </div>
            <div class="block-good1-list-item">
                <div class="block-good1-list-item__ico">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-2.svg" alt="Согласуйте условия">
                </div>
                <div class="block-good1-list-item__title">
                    Согласуйте условия
                </div>
                <div class="block-good1-list-item__description">
                    кредитования с нашим 
                    <br>
                    менеджером
                </div>
            </div>
            <div class="block-good1-list-item">
                <div class="block-good1-list-item__ico">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-3.svg" alt="Получите решение">
                </div>
                <div class="block-good1-list-item__title">
                    Получите решение
                </div>
                <div class="block-good1-list-item__description">
                    от банков и выберите 
                    <br>
                    лучшие условия
                </div>
            </div>
            <div class="block-good1-list-item">
                <div class="block-good1-list-item__ico">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-good1-3.svg" alt="Ожидайте доставку">
                </div>
                <div class="block-good1-list-item__title">
                    Ожидайте доставку
                </div>
                <div class="block-good1-list-item__description">
                    вашего заказа 
                    <br>
                    (или самовывоз)
                </div>
            </div>
        </div><!-- .block-good1-list -->

    </div><!-- .container -->

</div><!-- .page-installment-and-credit-steps -->














<div class="page-installment-and-credit-conditions">
    <div class="container">
        <div class="std-wrapper-2">

            <div class="page-installment-and-credit-flex">
                <div class="page-installment-and-credit-flex-col">
                    <div class="page-installment-and-credit-conditions-left">
                        <div class="page-installment-and-credit-block1-left-item__title">
                            Условия получения кредита:
                        </div>
                        <div class="page-installment-and-credit-block1-left-item__description">
                            Возраст - от 18 до 69 лет; 
                            <br>
                            Наличие постоянного источника 
                            <br>
                            дохода (работа, пенсия); 
                            <br>
                            Наличие паспорта гражданина РФ;
                        </div>
                    </div>
                </div><!-- .page-installment-and-credit-flex-col -->



                <div class="page-installment-and-credit-flex-col">
                    <div class="page-installment-and-credit-conditions-1-right">
                        <div class="page-installment-and-credit-conditions-1-right-item">
                            <div class="page-installment-and-credit-conditions-1-right-item__title">
                                На сумму:
                            </div>
                            <div class="page-installment-and-credit-conditions-1-right-item__value">
                                10 000 — 300 000 ₽
                            </div>
                        </div>
                        <div class="page-installment-and-credit-conditions-1-right-item">
                            <div class="page-installment-and-credit-conditions-1-right-item__title">
                                На срок:
                            </div>
                            <div class="page-installment-and-credit-conditions-1-right-item__value">
                                4 — 36 месяцев
                            </div>
                        </div>

                        <div class="page-installment-and-credit-conditions-1-button">
                            <a href="#modal-credit" class="btn btn-black" data-fancybox="">Рассчитать стоимость кредита</a>
                        </div>
                    </div><!-- .page-installment-and-credit-conditions-1-right -->
                </div><!-- .page-installment-and-credit-flex-col -->

            </div><!-- .page-installment-and-credit-flex -->


        </div><!-- .std-wrapper-2 -->
    </div><!-- .container -->
</div><!-- .page-installment-and-credit-conditions -->















<div class="page-installment-and-credit-conditions">
    <div class="container">
        <div class="std-wrapper-2">

            <div class="page-installment-and-credit-flex">
                <div class="page-installment-and-credit-flex-col">
                    <div class="page-installment-and-credit-conditions-left">
                        <div class="page-installment-and-credit-block1-left-item__title">
                            Условия рассрочки:
                        </div>
                        <div class="page-installment-and-credit-block1-left-item__description">
                            В рассрочке есть небольшая 
                            <br>
                            <b>переплата</b> за открытие счета и 
                            <br>
                            закрытие, пользование счетом банка 
                            <br>
                            <br>
                        </div>

                        <div class="page-installment-and-credit-block1-left-item__brown">
                            Рассрочка до 36 месяцев
                        </div>
                    </div>
                </div><!-- .page-installment-and-credit-flex-col -->



                <div class="page-installment-and-credit-flex-col">
                    <div class="page-installment-and-credit-conditions-2-right-flex">
                        <div class="page-installment-and-credit-conditions-1-right-item">
                            <div class="page-installment-and-credit-conditions-1-right-item__title">
                                на <b>6 месяцев</b> максимально 
                            </div>
                            <div class="page-installment-and-credit-conditions-1-right-item__value">
                                до 6,5%
                            </div>
                        </div>
                        <div class="page-installment-and-credit-conditions-1-right-item">
                            <div class="page-installment-and-credit-conditions-1-right-item__title">
                                на <b>18 месяцев</b> максимально
                            </div>
                            <div class="page-installment-and-credit-conditions-1-right-item__value">
                                до 17%
                            </div>
                        </div>
                        <div class="page-installment-and-credit-conditions-1-right-item">
                            <div class="page-installment-and-credit-conditions-1-right-item__title">
                                на <b>10 месяцев</b> максимально
                            </div>
                            <div class="page-installment-and-credit-conditions-1-right-item__value">
                                до 9.5%
                            </div>
                        </div>
                        <div class="page-installment-and-credit-conditions-1-right-item">
                            <div class="page-installment-and-credit-conditions-1-right-item__title">
                                на <b>24 месяца</b> максимально
                            </div>
                            <div class="page-installment-and-credit-conditions-1-right-item__value">
                                до 19%
                            </div>
                        </div>
                        <div class="page-installment-and-credit-conditions-1-right-item">
                            <div class="page-installment-and-credit-conditions-1-right-item__title">
                                на <b>12 месяцев</b> максимально
                            </div>
                            <div class="page-installment-and-credit-conditions-1-right-item__value">
                                до 11,5%
                            </div>
                        </div>
                        <div class="page-installment-and-credit-conditions-1-right-item">
                            <div class="page-installment-and-credit-conditions-1-right-item__title">
                                на <b>36 месяцев</b> максимально
                            </div>
                            <div class="page-installment-and-credit-conditions-1-right-item__value">
                                до 20,5%
                            </div>
                        </div>

                    </div><!-- .page-installment-and-credit-conditions-1-right -->
                </div><!-- .page-installment-and-credit-flex-col -->

            </div><!-- .page-installment-and-credit-flex -->


        </div><!-- .std-wrapper-2 -->
    </div><!-- .container -->
</div><!-- .page-installment-and-credit-conditions -->











<div style="display: none;">
    <div class="modal-std-wrapper" id="modal-credit">
        <div class="modal-std  type-2">
            <div class="modal-std-flex-center">
                <form class="form-2">
                    <div class="modal-std-title">
                        Рассчитать стоимость кредита
                        <? // Оставить заявку ?>
                    </div>

                    <div class="modal-std-description">
                        Оставьте свои контактные данные и мы свяжемся с вами
                        <br>
                        <br>
                    </div>

                    <div class="modal-reviews-inputs">
                        <div class="modal-reviews-inputs-item" data-id="name">
							<input type="text" class="form-item-2 required" name="name" placeholder="Имя">
						</div>
                        <div class="modal-reviews-inputs-item" data-id="tel">
							<input type="text" class="form-item-2" name="tel" placeholder="Телефон">
						</div>
                    </div>
                    <textarea class="form-item-2 required" name="comment" placeholder="Текст отзыва"></textarea>

                    <a href="#" class="btn btn-black  submit">Отправить</a>

                    <div class="modal-std-privacy">
                        Продолжая, Вы соглашаетесь со <a href="/user-agreement/">сбором и обработкой персональных данных</a>
                    </div>

                    <input type="hidden" name="thx" value="#ok-credit" style="display: none;">
                    <input type="hidden" name="subject" value="Рассчитать стоимость кредита" style="display: none;">
                    <input type="submit" style="display: none;">
                </form>
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>





<div style="display: none;">
    <div class="modal-std-wrapper" id="ok-credit">
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