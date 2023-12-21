<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оформление заказа");
?>














<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>




<div class="container">
    <h1>Оформление заказа</h1>
</div>





<div class="page-basket-order">
    <div class="container">
        <form>

            <div class="page-basket-order-flex">

                <div class="page-basket-order-flex-left">
                    <div class="page-basket-order-flex-left-block">
                        <div class="page-basket-order-flex-left-block-title">
                            Кто получит заказ
                        </div>
                        <input type="text" class="form-item-2 required" name="name" placeholder="Имя">
                        <input type="text" class="form-item-2" name="name2" placeholder="Фамилия">
                        <input type="text" class="form-item-2 required" name="tel" placeholder="Телефон">
                        <input type="text" class="form-item-2" name="email" placeholder="E-mail">
                    </div>


                    <div class="page-basket-order-flex-left-block">
                        <div class="page-basket-order-flex-left-block-title">
                            Как вам удобнее получить заказ?
                        </div>
                        <a href="#" class="btn btn-black-t  page-basket-order-deliverytype-switcher-item  page-basket-order-flex-left-block-deliverytype-1  active" data-id="delivery">Доставка</a>
                        <a href="#" class="btn btn-black-t  page-basket-order-deliverytype-switcher-item  page-basket-order-flex-left-block-deliverytype-2" data-id="shop">Самовывоз</a>

                        <input type="text" class="form-item-2" name="address" placeholder="Адрес">
                        <textarea class="form-item-2" name="comment-1" placeholder="Комментарий к заказу"></textarea>

                        <a href="#modal-shop-change" class="page-basket-order-deliverytype-shop-change" data-fancybox="" style="display: none;" onclick="return false1;">
                            <div class="page-basket-order-deliverytype-shop-change__box">
                                <div class="page-basket-order-deliverytype-shop-change__title">
                                    <span class="value">г. Иркутск, улица Урицкого, 4</span>
                                </div>
                                <div class="page-basket-order-deliverytype-shop-change__button-edit">
                                    Изменить
                                </div>
                            </div>
                        </a>
                    </div>

<div style="display: none;">
    <div class="modal-std-wrapper" id="modal-shop-change">
        <div class="modal-std  type-2">
            <div class="modal-std-flex-center">
                <div class="modal-std-title">
                    Выберите магазин
                </div>
                
                <div class="modal-shop-change-list">
                    <a href="#" class="modal-shop-change-list-item active" data-address="г. Иркутск, улица Урицкого, 4">
                        <div class="modal-shop-change-list-item__box">
                            <div class="modal-shop-change-list-item__title">
                                г. Иркутск, улица Урицкого, 4
                            </div>
                        </div>
                    </a>
                    <!-- <a href="#" class="modal-shop-change-list-item" data-address="г. Москва, ул. Гагарина, 1">
                        <div class="modal-shop-change-list-item__box">
                            <div class="modal-shop-change-list-item__title">
                                г. Москва, ул. Гагарина, 1
                            </div>
                        </div>
                    </a> -->
                </div>
                
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>




                    <div class="page-basket-order-flex-left-block">
                        <div class="page-basket-order-flex-left-block-title">
                            Как вам удобнее оплатить заказ?
                        </div>
                        <a href="#" class="btn btn-black-t  page-basket-order-paymethod-switcher-item  page-basket-order-flex-left-block-paymethod-1  active" data-id="pri_poluchenii">Онлайн оплата</a>
                        <a href="#" class="btn btn-black-t  page-basket-order-paymethod-switcher-item  page-basket-order-flex-left-block-paymethod-2" data-id="po_schetu_ul">По счету для ЮЛ</a>

<label class="label-file page-basket-order-file" style="display: none;">
    <div class="label-file-flex">
        <div class="label-file-flex-left">
            <div class="label-file-flex-left__title">
                Выберите файл
            </div>
            <div class="label-file-flex-left__name">
                <span class="file_name">DOC, PDF до 5 мбайт</span>
            </div>
        </div>
        <div class="label-file-flex-right">
            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-file.svg" alt="файл">
        </div>
    </div>
	<input type="file" class="form-item" name="file" placeholder="Загрузите файл или перетащите его в это поле">
</label>
                    </div>


                    <div class="page-basket-order-flex-left-block">
                        <div class="page-basket-order-flex-left-block-title">
                            Дополнительно
                        </div>
                        <textarea class="form-item-2" name="comment-2" placeholder="Комментарий к заказу"></textarea>
                    </div>


                    <div class="page-basket-order-flex-left-block  desktop-only">
                        <div class="page-basket-order-submit">
                            <a href="#" class="btn btn-black  order-go">Оформить заказ</a>
                            <div class="page-basket-order-submit-disclaimer">
                                Нажимая на кнопку, вы соглашаетесь с <a href="/user-agreement/">условиями 
                                <br>
                                оферты и политикой конфиденциальности</a>
                            </div>
                        </div>
                    </div>

                </div><!-- .page-basket-order-flex-left -->





                
                <div class="page-basket-order-flex-right">

                    <div class="page-basket-order-flex-right-products">
                        <div class="page-basket-order-flex-right-product-list">

                        </div><!-- .page-basket-order-flex-right-product-list -->

                        <div class="page-basket-order-flex-right-resume">
                            <div class="page-basket-order-flex-right-resume-row">
                                <div class="page-basket-order-flex-right-resume-row__title">
                                    Товары:
                                </div>
                                <div class="page-basket-order-flex-right-resume-row__value  page-basket-order-resume-price-onlyproducts">
                                    <span class="value"></span> руб.
                                </div>
                            </div>
                            <div class="page-basket-order-flex-right-resume-row  page-basket-order-delivery free" style="display: none;">
                                <div class="page-basket-order-flex-right-resume-row__title">
                                    Доставка:
                                </div>
                                <div class="page-basket-order-flex-right-resume-row__value">
                                    Бесплатно
                                </div>
                            </div>
                            <div class="page-basket-order-flex-right-resume-row  page-basket-order-delivery not_free" style="display: none;">
                                <div class="page-basket-order-flex-right-resume-row__title">
                                    Доставка:
                                </div>
                                <div class="page-basket-order-flex-right-resume-row__value">
                                    500 руб.
                                </div>
                            </div>
                        </div>
    
                        <div class="page-basket-order-flex-right-resume-final">
                            <div class="page-basket-order-flex-right-resume-final__title">
                                Итого:
                            </div>
                            <div class="page-basket-order-flex-right-resume-final__price  page-basket-order-resume-price-full">
                                <span class="value"></span> руб.
                                <div class="price-disclaimer">
                                    Цена указана за наличный расчёт
                                </div>
                            </div>
                        </div>
                    </div><!-- .page-basket-order-flex-right-products -->



                    <div class="container  mobile-only">
                        <div class="page-basket-order-submit">
                            <a href="#" class="btn btn-black  order-go">Оформить заказ</a>
                            <div class="page-basket-order-submit-disclaimer">
                                Нажимая на кнопку, вы соглашаетесь с <a href="/user-agreement/">условиями 
                                <br>
                                оферты и политикой конфиденциальности</a>
                            </div>
                        </div>
                    </div>                    



                    <div class="page-basket-order-flex-right-ps">
                        <div class="page-basket-order-flex-right-ps-title">
                            Нужна помощь или вопрос?
                        </div>
                        <div class="page-basket-order-flex-right-ps-social">
                            <a href="https://t.me/+79149353271" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-social-grey-telegram.svg" alt="telegram"></a>
                            <a href="https://wa.me/+79149353271" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-social-grey-whatsapp.svg" alt="whatsapp"></a>
                        </div>
                        <div class="page-basket-order-flex-right-ps-contacts">
<?
                            // <a href="tel:+79149353271" class="tel">+7 914 935 32 71</a>
                            // <a href="mailto:appgreat.store@mail.ru" class="email">appgreat.store@mail.ru</a>
?>
                        </div>
                    </div>

                </div><!-- .page-basket-order-flex-right -->

            </div><!-- .page-basket-order-flex -->

            <input type="hidden" name="subject" value="Заказ" style="display: none;">
            <input type="hidden" name="order-info" value="" style="display: none;">
        </form>
    </div><!-- .container -->
</div><!-- .page-basket-order -->















<div style="display: none;">
    <div class="modal-std-wrapper" id="ok-order">
        <div class="modal-std  type-1">
            <div class="modal-std-flex-center">
                <div class="modal-std-title">
                    Спасибо за заказ!
                </div>
                <div class="modal-std-description">
                    Скоро с вами свяжется наш менеджер 
                    <br>
                    для уточнения деталей
                </div>
                <div class="modal-std-button">
                    <? // <a href="#" class="btn btn-brown" onclick="$.fancybox.close(); return false;">Ок</a> ?>
                    <a href="/" class="btn btn-brown">Ок</a>
                </div>
            </div><!-- .modal-std-flex-center -->
        </div><!-- .modal-std.type-1 -->
    </div><!-- ok-order -->
</div>









<script>
$(document).ready(function(){
    let basketJSON = {};
    let basketObj = {};
    
    // проверяем, есть ли basket в localStorage
    if( !localStorage.getItem('basket') ){
        basketObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        basketJSON = localStorage.getItem('basket');
        basketObj = JSON.parse(basketJSON);
    }

    // console.log(basketObj);




    

    let IDs = '';
    for(i in basketObj.list){
        IDs += basketObj.list[i].id + ',';
    }
    IDs = IDs.slice(0, -1);


    // Если в корзине что-то есть - показываем
    if( IDs != '' ){
        $('.page-basket').show();

        $.ajax({
            async: false,
            type: 'POST',
            url: '/_ajax/otherActions.php',
            headers: {
                'Accept': 'application/json'
            },
            data: {
                action: 'page_basket_order__list',
                IDs: IDs,
            },
            beforeSend: function (data) {
                // console.log(data);
                // // $('.page-services-content-body-row').hide(300);
                // $('.page-service-center-main-body').hide(300);
            },
            success: function (data) {
                // console.log(data);
                $('.page-basket-order-flex-right-product-list').html( data );

                // console.log(basketObj.list);
                for(let i in basketObj.list){
                    $('.page-basket-order-flex-right-product-list .page-basket-order-flex-right-product-list-item.root[data-id="' + basketObj.list[i].id + '"] .page-basket-order-flex-right-product-list-item-info__price-count').html( basketObj.list[i].count );
                    $('.page-basket-order-flex-right-product-list .page-basket-order-flex-right-product-list-item.root[data-id="' + basketObj.list[i].id + '"]').attr('data-count', basketObj.list[i].count);
                }
                
                finalSum();
            },
        });


        $('body').on('click', '.custom-count a', function(e){
            e.preventDefault();
            
            setTimeout(function(){
                finalSum();
            }, 200);
        });
    }

    else {
        location = '/basket/';
    }








    function finalSum(){
        let price_total = 0;

        $('.page-basket-order-flex-right-product-list .root').each(function(){
            // $(this).find('.page-basket-list-item-price-one .value')
            let price_one_full = $(this).attr('data-price-one') * $(this).attr('data-count');

            price_total += price_one_full;
        });

        $('.page-basket-order-resume-price-onlyproducts .value').html( price_total.toLocaleString('ru') ); // до прибавления стоимости доставки
        
        
        let delivery_price = 500; // цена доставки

        if( price_total >= 15000 ){
            $('.page-basket-order-delivery.free').show();
        } else {
            $('.page-basket-order-delivery.not_free').show();
            price_total += delivery_price;
        }

        $('.page-basket-order-resume-price-full .value').html( price_total.toLocaleString('ru') ); // со стоимостью доставки
    }









    $('.page-basket-order-deliverytype-switcher-item').on('click', function(e){
        e.preventDefault();

        if( $(this).hasClass('active') ){
            return false;
        }
        
        let id = $(this).attr('data-id');
        $('.page-basket-order-deliverytype-switcher-item.active').removeClass('active');
        $('.page-basket-order-deliverytype-switcher-item[data-id="' + id + '"]').addClass('active');

        let elemets__delivery = '.page-basket-order [name="comment-1"], .page-basket-order [name="address"]';
        let elemets__shop = '.page-basket-order-deliverytype-shop-change';

        if( id == 'delivery'){
            $(elemets__delivery).css('transition', 'none');
            setTimeout(function(){$(elemets__delivery).show(300);}, 10);
            setTimeout(function(){$(elemets__delivery).css('transition', 'all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0s');}, 320);

            $(elemets__shop).css('transition', 'none');
            setTimeout(function(){$(elemets__shop).hide(300);}, 10);
            setTimeout(function(){$(elemets__shop).css('transition', 'all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0s');}, 320);
        } else {
            $(elemets__delivery).css('transition', 'none');
            setTimeout(function(){$(elemets__delivery).hide(300);}, 10);
            setTimeout(function(){$(elemets__delivery).css('transition', 'all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0s');}, 320);

            $(elemets__shop).css('transition', 'none');
            setTimeout(function(){$(elemets__shop).show(300);}, 10);
            setTimeout(function(){$(elemets__shop).css('transition', 'all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0s');}, 320);
        }
    });


    // смена магазина
    $('body').on('click', '.modal-shop-change-list-item', function(e){
        e.preventDefault();
        
        let address = $(this).attr('data-address');

        $('.page-basket-order-deliverytype-shop-change__title .value').html( address );

        $('.modal-shop-change-list-item.active').removeClass('active');
        $(this).addClass('active');

        $.fancybox.close();
    });

    







    $('.page-basket-order-paymethod-switcher-item').on('click', function(e){
        e.preventDefault();

        if( $(this).hasClass('active') ){
            return false;
        }
        
        let id = $(this).attr('data-id');
        $('.page-basket-order-paymethod-switcher-item.active').removeClass('active');
        $('.page-basket-order-paymethod-switcher-item[data-id="' + id + '"]').addClass('active');

        let elemets = '.page-basket-order-file';

        if( id == 'po_schetu_ul'){
            $(elemets).css('transition', 'none');
            setTimeout(function(){$(elemets).show(300);}, 10);
            setTimeout(function(){$(elemets).css('transition', 'all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0s');}, 320);
        } else {
            $(elemets).css('transition', 'none');
            setTimeout(function(){$(elemets).hide(300);}, 10);
            setTimeout(function(){$(elemets).css('transition', 'all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0s');}, 320);
        }
    });


    $('[type="file"]').change(function() {
        if (this.files[0]){ // если выбрали файл
            // console.log(this.files[0].name);
            let newNameFile = this.files[0].name;
            $(this).parents('label').find('.file_name').html( newNameFile );
        }
    });




    $('.page-basket-order-deliverytype-switcher-item[data-id="delivery"]').on('click', function(e){
        e.preventDefault();
        
        $('.page-basket-order-paymethod-switcher-item[data-id="pri_poluchenii"]').html('Онлайн оплата');
    });

    $('.page-basket-order-deliverytype-switcher-item[data-id="shop"]').on('click', function(e){
        e.preventDefault();
        
        $('.page-basket-order-paymethod-switcher-item[data-id="pri_poluchenii"]').html('При получении');
    });





});
</script>













<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>