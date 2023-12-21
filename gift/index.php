<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Подарочные сертификаты | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "Подарочные сертификаты | AppGreatStore");
$APPLICATION->SetPageProperty("title", "Подарочные сертификаты | AppGreatStore");
$APPLICATION->SetTitle("Подарочные сертификаты");
?>
















<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>




<div class="container">
    <h1>Подарочные сертификаты</h1>
</div>





<div class="page-gift">
    
</div><!-- .page-gift -->


<div class="container">
    <div class="page-gift-banner">
        <div class="page-gift-banner-info">
            <div class="page-gift-banner-info__title">
                Подарите идеальный подарок для своих близких и друзей, который они смогут выбрать сами.
            </div>
            <div class="page-gift-banner-info__subtitle">
                Вариантов отличных подарков так много. 
                <br>
                Сертификат действителен в магазинах сети AppGreat.Store
            </div>
        </div>
        <div class="page-gift-banner-image">
            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/page-gift-banner.png" alt="Подарочные сертификаты">
        </div>
    </div><!-- .page-gift-banner -->
</div><!-- .container -->






<div class="container">
    <div class="page-gift-introtext">
        Подарочный сертификат - идеальный подарок для ваших близких и друзей. Он позволяет им самостоятельно выбрать подарок, который их действительно порадует. AppGreat.Store предлагает вам уникальную возможность приобрести подарочный сертификат на наши товары и услуги.
    </div>
</div><!-- .container -->





<div class="container">
    <div class="page-trade-in-info1-list">
        <div class="page-trade-in-info1-list-item">
            <div class="page-trade-in-info1-list-item__num">
                01
            </div>
            <div class="page-trade-in-info1-list-item__title">
                Почему стоит выбрать нас
            </div>
            <div class="page-trade-in-info1-list-item__text">
                Мы предлагаем широкий выбор товаров и услуг, чтобы каждый получатель сертификата мог найти что-то по своему вкусу.
                <br>
                - Наши сертификаты имеют гибкую систему сроков действия, что позволяет получателю выбрать удобное для него время для использования подарка;
                <br>
                - Мы гарантируем высокое качество наших товаров и услуг, что делает наши сертификаты действительно ценными подарками.
            </div>
        </div>
        <div class="page-trade-in-info1-list-item">
            <div class="page-trade-in-info1-list-item__num">
                02
            </div>
            <div class="page-trade-in-info1-list-item__title">
                Преимущества работы с нами
            </div>
            <div class="page-trade-in-info1-list-item__text">
                Мы предлагаем гибкую систему сроков действия сертификатов, что позволяет получателям использовать их в удобное для них время.
                <br>
                - Наши товары и услуги отличаются высоким качеством, что делает наши сертификаты действительно ценными подарками;
                <br>
                - Мы гарантируем конфиденциальность и безопасность при покупке и использовании наших подарочных сертификатов.
            </div>
        </div>
        <div class="page-trade-in-info1-list-item">
            <div class="page-trade-in-info1-list-item__num">
                03
            </div>
            <div class="page-trade-in-info1-list-item__title">
                Как приобрести подарочный сертификат
            </div>
            <div class="page-trade-in-info1-list-item__text">
                <ul>
                    <li>Выберите сумму сертификата, которую вы хотите подарить. </li>
                    <li>Заполните форму заказа на нашем сайте, указав свои контактные данные и данные получателя сертификата. </li>
                    <li>Оплатите сертификат удобным для вас способом. </li>
                    <li>Заберите сертификат в удобном для вас магазине.</li>
                </ul>
            </div>
        </div>
        <div class="page-trade-in-info1-list-item">
            <div class="page-trade-in-info1-list-item__num">
                04
            </div>
            <div class="page-trade-in-info1-list-item__title">
                Как использовать подарочный сертификат
            </div>
            <div class="page-trade-in-info1-list-item__text">
                Получатель сертификата выбирает товар или услугу на нашем сайте или в нашем магазине.
                <br>
                - Сертификатом можно оплатить покупку полностью или частично, в магазинах или на сайте;
                <br>
                - При оформлении заказа указываете наличие сертификата и свои контактные данные;
                <br>
                - Сумма сертификата будет автоматически учтена при оплате заказа.
            </div>
        </div>
    </div><!-- .page-trade-in-info1-list -->
</div><!-- .container -->





























<div class="container">
    <form>
        <div class="page-gift-content">

            <div class="page-gift-content-left">
            
                <div class="page-gift-content-block  denomination">
                    <div class="page-gift-content-block-h3">
                        Выберите номинал сертификата
                    </div>
                    <div class="page-gift-content-block-inputs">
                        <div class="page-gift-content-block-denomination">
                            <a href="#" class="page-gift-content-denomination-item active" data-id="5 000 руб.">
                                <span class="value">5 000</span> руб.
                            </a>
                            <a href="#" class="page-gift-content-denomination-item" data-id="10 000 руб.">
                                <span class="value">10 000</span> руб.
                            </a>
                            <a href="#" class="page-gift-content-denomination-item" data-id="15 000 руб.">
                                <span class="value">15 000</span> руб.
                            </a>
                            <a href="#" class="page-gift-content-denomination-item" data-id="20 000 руб.">
                                <span class="value">20 000</span> руб.
                            </a>
                        </div>
                    </div>
                </div><!-- .page-gift-content-block -->


                <div class="page-gift-content-block">
                    <div class="page-gift-content-block-h3">
                        Ваше поздравление получателю
                    </div>
                    <div class="page-gift-content-block-inputs">
                        <textarea name="congratulation-text" class="form-item" placeholder="Текст поздравления"></textarea>
                    </div>
                </div><!-- .page-gift-content-block -->


                <div class="page-gift-content-block">
                    <div class="page-gift-content-block-h3">
                        От кого
                    </div>
                    <div class="page-gift-content-block-inputs">
                        <input type="text" class="form-item  required" name="from-name" placeholder="Имя">
                        <input type="text" class="form-item" name="from-surname" placeholder="Фамилия">
                        <input type="text" class="form-item  required" name="from-tel" placeholder="Телефон">
                        <input type="text" class="form-item" name="from-email" placeholder="Email">

                        <!-- <div class="custom-checkbox">
                            <input type="checkbox" name="send-anonymously" value="Отправить анонимно">
                            <label class="checkbox"><span class="custom-checkbox-title">Отправить&nbsp;анонимно</span></label>
                        </div> -->

                        <div class="checkbox-row">
                            <input type="checkbox" name="send-anonymously" class="custom" checked="checked" value="Отправить анонимно">
                            <span class="checkbox-title">Отправить&nbsp;анонимно</span>
                        </div>

                    </div>
                </div><!-- .page-gift-content-block -->


                <div class="page-gift-content-block">
                    <div class="page-gift-content-block-h3">
                        Кому
                    </div>
                    <div class="page-gift-content-block-inputs">
                        <input type="text" class="form-item  required" name="to-name" placeholder="Имя">
                        <input type="text" class="form-item" name="to-surname" placeholder="Фамилия">
                        <input type="text" class="form-item  required" name="to-tel" placeholder="Телефон">
                        <input type="text" class="form-item" name="to-email" placeholder="Email">

                        <a href="#" class="btn btn-black  submit">Отправить</a>

                        <div class="page-gift-content-block-inputs-privacy-policy">
                            Нажимая на кнопку, вы соглашаетесь с <a href="/user-agreement/">условиями оферты</a> и <a href="/privacy-policy/">политикой конфиденциальности</a>
                        </div>
                    </div>
                </div><!-- .page-gift-content-block -->



            </div><!-- .page-gift-content-left -->



            <div class="page-gift-content-right">
                <div class="page-gift-content-right-notes">
                    <div class="page-gift-content-right-notes-item">
                        <div>
                            Подарочный сертификат <b>не подлежит</b> обмену на денежные или другие платежные средства
                        </div>
                    </div>
                    <div class="page-gift-content-right-notes-item">
                        <div>
                            В случае, когда стоимость покупки превышает сумму, указанную на сертификате, покупатель <b>обязан</b> доплатить разницу наличными средствами, либо посредством карты
                        </div>
                    </div>
                    <div class="page-gift-content-right-notes-item">
                        <div>
                            Сертификат выдается на <b>1 год</b> со дня покупки
                        </div>
                    </div>
                    <div class="page-gift-content-right-notes-item">
                        <div>
                            Сертификат является <b>собственностью</b> AppGreat.Store
                        </div>
                    </div>
                </div><!-- .page-gift-content-right-notes -->

            </div><!-- .page-gift-content-right -->


        </div><!-- .page-gift-content -->

        <input type="hidden" name="thx" value="#gift-thx" style="display: none;">
        <input type="hidden" name="denomination" style="display: none;">
        <input type="hidden" name="subject" style="display: none;" value="Заказ подарочного сертификата">
        <input type="submit" style="display: none;">
    </form>
</div><!-- .container -->
        


<script>
$(document).ready(function(){
    $('.page-gift-content-denomination-item').on('click', function(e){
        e.preventDefault();
        
        let id = $(this).attr('data-id');
        $('input[name="denomination"]').val( id );

        $('.page-gift-content-denomination-item.active').removeClass('active');
        $(this).addClass('active');
    });

   
    let denomination__id = $('.page-gift-content-denomination-item.active').attr('data-id');
    $('input[name="denomination"]').val( denomination__id );
});
</script>












<div style="display: none;">
    <div class="modal-std-wrapper" id="gift-thx">
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