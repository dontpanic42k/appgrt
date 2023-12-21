let SITE_TEMPLATE_PATH = '/bitrix/templates/shop';

function modal_menu__open(){
    $('body').addClass('menu-opened');
}

function modal_menu__close(){
    $('body').removeClass('menu-opened');
}

$('.topbar-ico-menu').on('click', function(e){
    e.preventDefault();
    
    if( !$('body').hasClass('menu-opened') ){
        modal_menu__open();
    } else {
        modal_menu__close();
    }
});

$(window).on('keydown', function(e){
    if( e.keyCode == 27 ){
        modal_menu__close();
    }
});

$('.ico-menu-modal-close').on('click', function(e){
    e.preventDefault();
    
    modal_menu__close();
});




$('input[type="checkbox"].custom').each(function(i){
    $(this).attr('id', 'custom-checkbox-' + i);
    $(this).after('<label class="checkbox" for="' + 'custom-checkbox-' + i + '"></label>');
});

$('input[type="radio"].custom').each(function(i){
    $(this).attr('id', 'custom-radio-' + i);
    $(this).after('<label class="radio" for="' + 'custom-radio-' + i + '"></label>');
});









// плавный скролл на якорь
$("a.scroll").click(function (e) {
    e.preventDefault();
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination - 120}, 800);
    
});




// маска для телефона
jQuery(function($){
    $('input[name="tel"]').mask("+7 (999) 999 99 99");
    $('input[name="from-tel"]').mask("+7 (999) 999 99 99");
    $('input[name="to-tel"]').mask("+7 (999) 999 99 99");
});







function swiper_my(swiper_el) {
    let id = $(swiper_el).attr('data-id');
    let delay = $(swiper_el).attr('data-delay');
        delay = delay ? delay : 999999;
    let slidesPerView = $(swiper_el).attr('data-slidesPerView');
        slidesPerView = slidesPerView ? slidesPerView : 1;
    let breakpoints = {};
    let spaceBetween = $(swiper_el).attr('data-spaceBetween');
    let loop = $(swiper_el).attr('data-loop');

    if( slidesPerView == '1' ) {
        breakpoints = {
            1: {
                slidesPerView: 1,
                // spaceBetween: 0,
                spaceBetween: spaceBetween ? spaceBetween : 0,
            },
        }
    }
    
    // else if ( slidesPerView == '2' ) {
    //     breakpoints = {
    //         1: {
    //             slidesPerView: 1,
    //             // spaceBetween: 0,
    //             spaceBetween: spaceBetween ? spaceBetween : 0,
    //         },
    //         600: {
    //             slidesPerView: 2,
    //             // spaceBetween: 16,
    //             spaceBetween: spaceBetween ? spaceBetween : 16,
    //         },
    //     }
    // }
    
    else if ( slidesPerView == '3' ) {
        breakpoints = {
            1: {
                slidesPerView: 3,
                spaceBetween: 15,
                // spaceBetween: spaceBetween ? spaceBetween : 15,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: spaceBetween ? spaceBetween : 15,
            }
        }
    }
    
    else {
        breakpoints = {
            1: {
                slidesPerView: slidesPerView,
                // spaceBetween: 16,
                spaceBetween: spaceBetween ? spaceBetween : 15,
            },
        }
    }




    
    
    let swiper = new Swiper(swiper_el, {
        // slidesPerView: 4,
        // spaceBetween: 30,
        loop: loop,
        autoplay: {
            delay: delay,
        },
        // centeredSlides: true,
        mousewheelControl: true,
        pagination: {
            el: '.swiper-nav[data-id="' + id + '"] .pagination',
            type: 'bullets',
            // type: "progressbar",
            clickable: true,
        },
        // autoHeight: true,

        // slidesPerView: slidesPerView,
        // spaceBetween: spaceBetween,
        
        
        breakpoints: breakpoints,
    });

    
    let navPrev = $('.swiper-nav[data-id="' + id + '"] a[data-id="left"]');
    let navNext = $('.swiper-nav[data-id="' + id + '"] a[data-id="right"]');

    navPrev.on('click', function(e){
        e.preventDefault();
        swiper.slidePrev();
    });

    navNext.on('click', function(e){
        e.preventDefault();
        swiper.slideNext();
    });

}



// $('.sw').each(function(){
//     swiper_my(this);
// });












function sw_progressbar( id ){
    // let id = 'block-compilation-slider';
    let swiper_el = '.sw[data-id="' + id + '"]';
    
    let slidesPerView = $(swiper_el).attr('data-slidesPerView');
    slidesPerView = slidesPerView  ?  slidesPerView  :  4;

    let slidesPerView_mobile = $(swiper_el).attr('data-slidesPerView-mobile');
    slidesPerView_mobile = slidesPerView_mobile  ?  slidesPerView_mobile  :  2;


    if( $(swiper_el + ' .swiper-pagination').length == 0 ){
        let nav = `
            <div class="swiper-pagination"></div>
            <div class="swiper-nav" data-id="${id}">
                <a href="#" data-id="left"></a>
                <a href="#" data-id="right"></a>
            </div>
        `;
    
        $(swiper_el).append( nav );
    }


    let swiper = new Swiper(swiper_el, {
        slidesPerView: slidesPerView,
        spaceBetween: 0,
        loop: true,
        // loop: false,
        autoplay: {
            delay: 7000,
        },
        mousewheelControl: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
            clickable: true,
        },

        breakpoints: {
            1: {
                slidesPerView: slidesPerView_mobile,
            },
            661: {
                slidesPerView: slidesPerView,
            },
        }
    });

    
    let navPrev = $('.swiper-nav[data-id="' + id + '"] a[data-id="left"]');
    let navNext = $('.swiper-nav[data-id="' + id + '"] a[data-id="right"]');

    navPrev.on('click', function(e){
        e.preventDefault();
        swiper.slidePrev();
    });

    navNext.on('click', function(e){
        e.preventDefault();
        swiper.slideNext();
    });
}



$('.sw[data-type="progressbar"]').each(function(){
    let id = $(this).attr('data-id');
    sw_progressbar( id );
});



$('.topbar-search-show').on('click', function(e){
    setTimeout(() => {
        let id = 'swiper-search';
        sw_progressbar( id );
    }, 400);
});




$(window).on('load resize', function(){
    $('.slider-product-cards-v2-left').each(function(){
        let height = $(this).parents('.slider-product-cards-v2').find('.sw .swiper-wrapper').height();
        $(this).height( height );
        $(this).css({
            'height': height + 'px'
        });
    });
});







$(document).ready(function(){
    $('.block-compilation-head-item:not(.active)').on('click', function(e){
        e.preventDefault();

        let id = $(this).attr('data-id');

        $('.block-compilation-head-item.active').removeClass('active');
        $(this).addClass('active');
        
        $('.block-compilation-body-item').each(function(){
            $(this).hide(300);
        });
        $('.block-compilation-body-item[data-id="' + id + '"]').show(300);
    });
    
    $('.block-compilation-head-item[data-id="hit"]').trigger('click');
});
























$('.spoiler-link').on('click', function(e){
    e.preventDefault();

    let itemRoot = $(this).parents('.spoiler-item');
    
    if( itemRoot.hasClass('active') ){
        itemRoot.removeClass('active');
        itemRoot.find('.spoiler-body').hide(300);
    } else {
        itemRoot.addClass('active');
        itemRoot.find('.spoiler-body').show(300);
    }
});






$('.special-spoiler-item__title').on('click', function(e){
    e.preventDefault();

    if( $(this).parents('.block').hasClass('services-spoilers')  &&  $(this).parents('.special-spoiler-item').hasClass('active') ){
        return false;
    }

    let wrapper = $(this).parents('.special-spoiler-item');

    if( !wrapper.hasClass('active') ){
        $('.special-spoiler-item').each(function(){
            $(this).removeClass('active');
            $(this).find('.special-spoiler-item__body').hide(300);
        });

        wrapper.addClass('active');
        wrapper.find('.special-spoiler-item__body').show(300);
    } else {
        wrapper.removeClass('active');
        wrapper.find('.special-spoiler-item__body').hide(300);
    }

});












$('form .submit').on('click', function(e){
    e.preventDefault();
    
    if( $(this).hasClass('disable') ){
        return false;
    }

    $(this).parents('form').submit();
});


$('form').on('submit', function(e){
    e.preventDefault();
    
    let form = $(this);
    let thx = form.find('[name="thx"]').val();
    let error = false;

    form.find('.required').each(function(){
        if( $(this).val().length == 0 ){
            error = true;
            $(this).addClass('error');
        } else {
            $(this).removeClass('error');
        }
    });

    
    
    if( form.find('[name="privacy-policy"]').prop('checked') == false ){
        error = true;
        form.find('[name="privacy-policy"]').addClass('error');
    } else {
        form.find('[name="privacy-policy"]').removeClass('error');
    }

    


    if(error == false){
        let formData = new FormData( $(this)[0] );
        formData.append('action', 'smtp_send_email');

        $.ajax({
            async: false,
            type: 'POST',
            // url: SITE_TEMPLATE_PATH + '/js/send-mail-smtp.php',
            url: '/_ajax/otherActions.php',
            headers: {
                'Accept': 'application/json'
            },
            data: formData,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function (data) {
                // console.log(data);
            },
            success: function (data) {
                // console.log('OK:' + data);
                
                let inputs_to_clear = '';
                inputs_to_clear += '[name="name"]';
                inputs_to_clear += ', [name="tel"]';
                inputs_to_clear += ', [name="email"]';
                inputs_to_clear += ', [name="comment"]';

                inputs_to_clear += ', [name="congratulation-text"]';
                inputs_to_clear += ', [name="from-name"]';
                inputs_to_clear += ', [name="from-surname"]';
                inputs_to_clear += ', [name="from-tel"]';
                inputs_to_clear += ', [name="from-email"]';
                inputs_to_clear += ', [name="to-name"]';
                inputs_to_clear += ', [name="to-surname"]';
                inputs_to_clear += ', [name="to-tel"]';
                inputs_to_clear += ', [name="to-email"]';
                inputs_to_clear += ', [name="to-email"]';

                // form.find('[name="name"], [name="tel"], [name="email"], [name="comment"]').each(function(){
                form.find(inputs_to_clear).each(function(){
                    $(this).val('');
                });
                $.fancybox.close();
                // $.fancybox.open( $('.ok-send') );
                $.fancybox.open( $(thx) );
            },
            error: function(data){
                // console.log('Error:' + data);
            }
        });


    }
    
});





$('.ok-send .close').on('click', function(e){
    e.preventDefault();
    
    $.fancybox.close();
});




$('input[name="privacy-policy"]').on('change', function(e){
    // e.preventDefault();
    
    if( !$(this).prop('checked') ){
        $(this).parents('form').find('.submit').addClass('disable');
    } else {
        $(this).parents('form').find('.submit').removeClass('disable');
    }
});
















$('body').on('click', '.tabs-head-item:not(.active)', function(e){
    e.preventDefault();
    
    let root = $(this).parents('.tabs');
    let id = $(this).attr('data-id');

    root.find('.tabs-head-item.active').removeClass('active');
    $(this).addClass('active');


    root.find('.tabs-body-item:not([data-id="' + id + '"])').hide(300);
    root.find('.tabs-body-item[data-id="' + id + '"]').show(300);
});











// $('body').on('click', '.custom-count a', function(e){
//     e.preventDefault();

//     let inputHtml = $(this).parents('.custom-count').find('input');
//     let inputVal = +inputHtml.val();
//     let direction = $(this).attr('data-id');
    
//     if( direction == 'minus' ){
//         // if( inputVal <= 1 ){
//         //     return false;
//         // }
//         inputHtml.val( --inputVal );
//     }
    
//     if( direction == 'plus' ){
//         inputHtml.val( ++inputVal );
//     }
// });

















function url_get_param__set(prmName, val){
    const url = new URL( window.location );
    url.searchParams.set(prmName, val);
    window.history.pushState({}, '', url);
}

function url_get_param__del(prmName){
    // const url = new URL(window.location);
    // url.searchParams.set(prmName, val);
    // window.history.pushState({}, '', url);

    // let url = new URL( window.location );
    // let params = new URLSearchParams(url.search);
    // params = params.delete( prmName );
    // window.history.pushState({}, '', url);


    const url = new URL(document.location);
    const searchParams = url.searchParams;
    searchParams.delete(prmName); // СѓРґР°Р»РёС‚СЊ РїР°СЂР°РјРµС‚СЂ
    window.history.pushState({}, '', url.toString());
}














function search_redirect(){
    let q = $('.topbar-search-input-q').val();
    location = '/search/?q=' + q;
}


$(document).ready(function(){
    // ENTER РІ СЃС‚СЂРѕРєРµ РїРѕРёСЃРєР°
    $('.topbar-search-input-q').on('keydown', function(e){
        // e.preventDefault();
        if(e.keyCode === 13) {
            search_redirect();
        }
    });

    // РєР»РёРє РЅР° РєРЅРѕРїРєСѓ РІ СЃС‚СЂРѕРєРµ РїРѕРёСЃРєР°
    $('.topbar-search .btn-search').on('click', function(e){
        e.preventDefault();
        search_redirect();
    });


    // РїРѕРєР°Р·Р°С‚СЊ/СЃРєСЂС‹С‚СЊ СЃС‚СЂРѕРєСѓ РїРѕРёСЃРєР°
    $('.topbar-search-show').on('click', function(e){
        e.preventDefault();
        $('.topbar-search').slideToggle(300);
    });


    ////////////////////////////////// !!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // РµСЃР»Рё РІ URL РµСЃС‚СЊ СЃС‚СЂРѕРєР° РїРѕРёСЃРєР°, С‚Рѕ РїСЂРёР±РёРІР°РµРј РµРµ РІ РёРЅРїСѓС‚ РїРѕРёСЃРєР°
    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    let q = urlParams.get('q');

    if( q != null  &&  q.length > 0 ){
        $('.topbar-search-input-q').val( q );
    }

});




$('.topbar-search-close').on('click', function(e){
    e.preventDefault();
    
    $('.topbar-search').slideUp(300);
});






















// СТРАНИЦА "Услуги"

$(document).ready(function(){
    // первая шапка
    $('.page-service-center-main-head-1 a').on('click', function(e){
        e.preventDefault();

        if( $(this).hasClass('active') ){
            return false;
        }
        $('.page-service-center-main-head-1 a.active').removeClass('active');
        $(this).addClass('active');


        
        // id категории
        let id = $(this).attr('data-id');

        // скрываем все кнопки "моделей" (вторая шапка), кроме кликнутой категории
        $('.page-service-center-main-head-2:not([data-id="' + id + '"])').each(function(){
            $(this).hide(300);
        });

        // показываем кнопки "моделей" (вторая шапка) кликнутой категории
        $('.page-service-center-main-head-2[data-id="' + id + '"]').show(300);

        // если в текущей категории ни одна кнопка модели не активна - кличем первую. Иначе кличем в активную
        // чтобы открылся контент
        if( $('.page-service-center-main-head-2[data-id="' + id + '"] a.active').length == 0 ){
            $('.page-service-center-main-head-2[data-id="' + id + '"] a:first-child').trigger('click');
        } else {
            $('.page-service-center-main-head-2[data-id="' + id + '"] a.active').trigger('click');
        }
    });



    $('.page-service-center-main-head-2 > a').on('click', function(e){
        e.preventDefault();

        if( $(this).hasClass('active') ){
            return false;
        }
        
        let category = $(this).parents('.page-service-center-main-head-2').attr('data-id');
        let model = $(this).attr('data-id');
        let bid = $(this).attr('data-bid');

        // // скрываем все блоки контента, которые не подходят
        // $('.page-services-content-body:not([data-category="' + category + '"][data-model="' + model + '"])').each(function(){
        //     $(this).hide(300);
        // });

        // // показываем блок контента, который подходит
        // $('.page-services-content-body[data-category="' + category + '"][data-model="' + model + '"]').show(300);

        $.ajax({
            async: false,
            type: 'POST',
            url: '/_ajax/otherActions.php',
            headers: {
                'Accept': 'application/json'
            },
            data: {
                action: 'page_service_center__prices',
                SECTION_ID: bid,
            },
            beforeSend: function (result) {
                // console.log(result);
                // $('.page-services-content-body-row').hide(300);
                $('.page-service-center-main-body').hide(300);
            },
            success: function (result) {
                // console.log(data);
                setTimeout(function(){
                    $('.page-service-center-main-body').html( result );
                    $('.page-service-center-main-body').show(300);
                    // $('.page-services-content-body-row').show(300);
                }, 0);
            },
        });
        

        // в кнопках "моделей" текущей категории - снимаем все active и ставим только на кликнутую
        $('.page-service-center-main-head-2[data-id="' + category + '"] a').each(function(){
            $(this).removeClass('active');
        });
        $(this).addClass('active');
    });


    // при загрузке страницы - последовательно кликаем в первую кнопку "категории" и первую кнопку "модели"
    $('.page-service-center-main-head-1 a:first-child').trigger('click');
    $('.page-service-center-main-head-2:first-child a:first-child').trigger('click');

});







































// кастомное количество - клик в кнопки +/-
$('body').on('click', '.custom-count a', function(e){
    e.preventDefault();

    let inputHtml = $(this).parents('.custom-count').find('input');
    let inputVal = +inputHtml.val();
    let direction = $(this).attr('data-id');
    
    if( direction == 'minus' ){
        if( inputVal <= 1 ){
            $(this).parents('.root').find('.page-basket-list-item-del a').trigger('click');

            return false;
        }
        inputHtml.val( --inputVal );
    }
    
    if( direction == 'plus' ){
        inputHtml.val( ++inputVal );
    }
});


















///////////////////////////////////     Корзина
// $(document).ready(function(){
//     $('.product-inner-info-row').each(function(){
//         let spec_title = $(this).find('.product-inner-info-row-title').html().trim();
//         let spec_value = $(this).find('.filter-inner a.active').html().trim();
//         let spec_row = spec_title + ': ' + spec_value + "\n\r";
//         console.log(spec_row);
//     });

    
// });


// // клик на "купить", который "нет в наличии"
// $('.index-products-body-item__button[data-id="not_available"]').on('click', function(e){
//     return false;
// });


// Счетчик на корзине в шапке
function basket_counter(){
    let basketJSON = {};
    let basketObj = {};

    
    // проверяем, есть ли basket в localStorage
    if( !localStorage.getItem('basket') ){
        basketObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        basketJSON = localStorage.getItem('basket');
        basketObj = JSON.parse(basketJSON);
    }

    let count = basketObj.list.length;
    if( count > 0 ){
        $('.topbar-basket-count').each(function(){
            $(this).html( count );
        });

        $('.topbar2-basket').removeClass('empty');
        $('.topbar-mobile-1-basket').removeClass('empty');
    } else {
        $('.topbar2-basket').addClass('empty');
        $('.topbar-mobile-1-basket').addClass('empty');
    }

}


$(document).ready(function(){
    basket_counter();
});






// Меняем кнопку "Добавить в корзину / Удалить из корзины"
$(document).ready(function(){
    let basketJSON = {};
    let basketObj = {};

    

    // $('.itemRoot').each(function(){
    $('.add-to-basket').each(function(){
        let root = $(this).parents('.root');

        let current_id = root.attr('data-id');

        // проверяем, есть ли basket в localStorage
        if( !localStorage.getItem('basket') ){
            basketObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
        } else {
            basketJSON = localStorage.getItem('basket');
            basketObj = JSON.parse(basketJSON);
        }


        // смотрим, есть ли уже такой элемент в корзине. Если есть - меняем кнопку
        for(i in basketObj.list){
            if( basketObj.list[i].id == current_id){
                $(this).html('Добавлено');
                $(this).parents('.root').addClass('already-added');
                // $(this).addClass('already-added');
            } else {
                // $(this).parents('.product-page-main-info-button').removeClass('already-added');
                // $(this).removeClass('already-added-2');
                // $(this).parents('.root').removeClass('already-added');
            }
        }
    });

});










// ограничиваем время жизни корзины
$(document).ready(function(){
    let limit = 24 * 3600 * 1000; // 24 часа
    // let limit = 5 * 1000; // 5 секунд
    let basket__last_refresh_time = localStorage.getItem('basket__last_refresh_time');

    if(+new Date() - basket__last_refresh_time > limit){
        localStorage.removeItem('basket');
        localStorage.removeItem('basket__last_refresh_time');
    }
});



// добавляем или удаляем из Корзины
function basketAddOrRemoveItem(id, count){
    // ограничиваем время жизни корзины
    localStorage.setItem('basket__last_refresh_time', +new Date());


    let basketJSON = {};
    let basketObj = {};


    // проверяем, есть ли basket в localStorage
    if( !localStorage.getItem('basket') ){
        basketObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        basketJSON = localStorage.getItem('basket');
        basketObj = JSON.parse(basketJSON);
    }


    // смотрим, есть ли уже такой элемент. Если есть, то удаляем и прерываем функцию
    for(i in basketObj.list){
        if( basketObj.list[i].id == id){
            // console.log('такой уже есть, удаляем и прерываем функцию');
            basketObj.list.splice(i, 1); // удаляем из объекта
            basketJSON = JSON.stringify( basketObj );
            localStorage.setItem('basket', basketJSON);

            // location.reload(); // чтобы поменялась кнопка добавить/удалить
            basket_counter();
            $('.root[data-id="' + id + '"] .add-to-basket').html('Купить');
            $('.root[data-id="' + id + '"]').removeClass('already-added');

            return false;
        }
    }


    // если не было return false на предыдущем шаге
    // console.log('добавляем');
    basketObj.list.push({
        id: id,
        count: count,
    });


    // пакуем в JSON и переписываем localStorage
    basketJSON = JSON.stringify( basketObj );
    localStorage.setItem('basket', basketJSON);

    // console.log(basketJSON);

    // location.reload(); // чтобы поменялась кнопка добавить/удалить
    basket_counter();
    // $('.root[data-id="' + id + '"] .add-to-basket').html('Купить');
    // $('.root[data-id="' + id + '"]').removeClass('already-added');
    $('.root[data-id="' + id + '"] .add-to-basket').html('Добавлено');
    $('.root[data-id="' + id + '"]').addClass('already-added');

    if( window.location.pathname.match('basket') ){
        location.reload();
    }
}





$('body').on('click', '.root .custom-count a', function(e){
    // e.preventDefault();
    
    let root = $(this).parents('.root');
    let id = root.attr('data-id');
    let count = root.find('.custom-count input').val();

    // console.log(id, count);
    basketChangeCountItem(id, count);
});






// изменение количества товара на -/+
function basketChangeCountItem(id, count){
    let basketJSON = {};
    let basketObj = {};


    // проверяем, есть ли basket в localStorage
    if( !localStorage.getItem('basket') ){
        basketObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        basketJSON = localStorage.getItem('basket');
        basketObj = JSON.parse(basketJSON);
    }

    // console.log(id, count);
    // поиск нужного элемента тут сделан перебором id потому, что id тут не ключ, а свойство
    for(i in basketObj.list){
        if( basketObj.list[i].id == id){

            if( count == 0 ){
                // basketObj.list.splice(i, 1); // удаляем из объекта
                basketItem__delete(id);
                
                return false;
            } else {
                basketObj.list[i].count = count;
            }

            basketJSON = JSON.stringify( basketObj );
            localStorage.setItem('basket', basketJSON);

            // location.reload(); // чтобы поменялась кнопка добавить/удалить
            // basket_counter();

            return false;
        }
    }



    // location.reload(); // чтобы поменялась кнопка добавить/удалить
    // basket_counter();

    // if( window.location.pathname.match('basket') ){
    //     location.reload();
    // }
}





// клик на кнопку "В корзину"
$('body').on('click', '.add-to-basket', function(e){
    e.preventDefault();
    
    // if( !$(this).hasClass('active') ){
    //     $(this).addClass('active');
    // } else {
    //     $(this).removeClass('active');
    // }

    let root = $(this).parents('.root');

    // // если нет активной цены, значит не добавляем товар
    // if( root.attr('data-id') == 'not_available' ){
    //     return false;
    // }

    let id = root.attr('data-id');
    let count = 1;

    basketAddOrRemoveItem(id, count);
});









$('body').on('click', '.page-basket-list-item-del', function(e){
    e.preventDefault();
    
    let id = $(this).parents('.root').attr('data-id');
    basketItem__delete(id);
});


function basketItem__delete(id){
    let basketJSON = {};
    let basketObj = {};


    // проверяем, есть ли basket в localStorage
    if( !localStorage.getItem('basket') ){
        basketObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        basketJSON = localStorage.getItem('basket');
        basketObj = JSON.parse(basketJSON);
    }


    // смотрим, есть ли уже такой элемент. Если есть, то удаляем и прерываем функцию
    for(i in basketObj.list){
        if( basketObj.list[i].id == id){
            // console.log('такой уже есть, удаляем и прерываем функцию');
            basketObj.list.splice(i, 1); // удаляем из объекта
            basketJSON = JSON.stringify( basketObj );
            localStorage.setItem('basket', basketJSON);

            location.reload(); // чтобы поменялась кнопка добавить/удалить
            // basket_counter();
            // $('.itemRoot[data-id="' + id + '"] .add-to-basket').html('В корзину');
        }
    }
}



$('body').on('click', '.page-basket-clear', function(e){
    e.preventDefault();
    
    basketAll__delete();
});

function basketAll__delete(){
    let i = 1;
    let count = $('.page-basket-list-item').length;
    let timeout = 175;

    $('.page-basket-list-item').each(function(i){
        setTimeout(() => {
            $(this).hide(300);
            ++i;
        }, i * timeout);
    });

    setTimeout(function(){
        $('.page-basket-total').hide(300);
    }, count * timeout);

    setTimeout(function(){
        $('.page-basket-button').hide(300);
    }, ++count * timeout);

    setTimeout(function(){
        localStorage.removeItem('basket');
        location.reload();
    }, ++count * timeout);
    
}








// // кастомное количество - клик в кнопки +/-
// $('body').on('click', '.page-basket .custom-count a', function(e){
//     e.preventDefault();

//     // let inputHtml = $(this).parents('.custom-count').find('input');
//     // let inputVal = +inputHtml.val();
//     // let direction = $(this).attr('data-id');
    
//     // if( direction == 'minus' ){
//     //     if( inputVal <= 1 ){
//     //         return false;
//     //     }
//     //     inputHtml.val( --inputVal );
//     // }
    
//     // if( direction == 'plus' ){
//     //     inputHtml.val( ++inputVal );
//     // }
// });





$(document).ready(function(){
    $('.basket-list .basket-item-delete').on('click', function(e){
        location.reload();
    });
});









// Оформление заказа "принять"
$('.order-go').on('click', function(e){
    e.preventDefault();

    if( $(this).hasClass('disable') ){
        return false;
    }

    let form = $(this).parents('form');
    let error = false;



    let order_info = '';



    // 1. КТО ПОЛУЧИТ ЗАКАЗ ("Кто получит заказ?"):
    let name = $('.page-basket-order [name="name"]').val();
    let name2 = $('.page-basket-order [name="name2"]').val();
    let tel = $('.page-basket-order [name="tel"]').val();
    let email = $('.page-basket-order [name="email"]').val();

    order_info += name.length != 0  ?  '<b>Имя:</b> ' + name + "<br>\n\r"  :  '';
    order_info += name2.length != 0  ?  '<b>Фамилия:</b> ' + name2 + "<br>\n\r"  :  '';
    order_info += tel.length != 0  ?  '<b>Телефон:</b> ' + tel + "<br>\n\r"  :  '';
    order_info += email.length != 0  ?  '<b>Email:</b> ' + email + "<br>\n\r"  :  '';




    
    // 2. ДОСТАВКА ИЛИ САМОВЫВОЗ ("Как и когда вам удобно получить заказ?"):
    let delivery_or_shop = $('.page-basket-order-deliverytype-switcher-item.active').attr('data-id');

    // order_info += '<b>Как и когда удобно получить заказ:</b>' + "<br>\n\r";

    if( delivery_or_shop == 'delivery' ){
        let delivery_address = $('.page-basket-order [name="address"]').val();
        let delivery_comment = $('.page-basket-order [name="comment-1"]').val();
        order_info += '<b>Способ получения:</b> Доставка' + "<br>\n\r";
        order_info += delivery_address.length != 0  ?  '<b>Доставка по адресу:</b> ' + delivery_address + "<br>\n\r"  :  '<адрес не указан>' + "<br>\n\r";
        order_info += delivery_comment.length != 0  ?  '<b>Комментарий к доставке:</b> ' + delivery_comment + "<br>\n\r"  :  '';
    }

    if( delivery_or_shop == 'shop' ){
        // order_info += '<b>Способ получения:</b> Самовывоз' + "<br>\n\r";
        order_info += '<b>Способ получения:</b> Самовывоз из "' + $('.page-basket-order-deliverytype-shop-change__title .value').html().trim() + '"' + "<br>\n\r";
        // let shop_address = $('.basket-order-shop-button').attr('data-shop-address');
        
        // if( shop_address.length == 0 ){
        //     $('.basket-order-shop-button').addClass('error');
        //     error = true;
        // } else {
        //     $('.basket-order-shop-button').removeClass('error');
        //     order_info += '<b>Способ получения:</b> Самовывоз<br>' + "\n\r";
        //     order_info += '<b>Магазин:</b> ' + shop_address + '<br>' + "\n\r";
        // }
    }
    



    // 3. СПОСОБ ОПЛАТЫ (Как вам удобнее оплатить заказ?):
    let pay_method = $('.page-basket-order-paymethod-switcher-item.active').html().trim();
    order_info += '<b>Способ оплаты:</b> ' + pay_method + "<br>\n\r";




    // 4. КОММЕНТАРИЙ К ЗАКАЗУ
    let order_comment = $('.page-basket-order  [name="comment-2"]').val();
    if( order_comment ){
        order_info += order_comment.length != 0  ?  '<b>Комментарий к заказу:</b> ' + order_comment + "<br>\n\r"  :  '';
    }



    // проверяем, есть ли basket в localStorage
    if( !localStorage.getItem('basket') ){
        basketObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        basketJSON = localStorage.getItem('basket');
        basketObj = JSON.parse(basketJSON);
    }

    let IDs = '';
    let COUNTs = '';
    for(i in basketObj.list){
        IDs += basketObj.list[i].id + ',';
        COUNTs += basketObj.list[i].count + ',';
    }
    IDs = IDs.slice(0, -1);
    COUNTs = COUNTs.slice(0, -1);

    

    form.find('.required').each(function(){
        if( $(this).val().length == 0 ){
            error = true;
            $(this).addClass('error');
        } else {
            $(this).removeClass('error');
        }
    });


    if( error == true ){
        let element = $('.required.error')[0];
        let destination = $(element).offset().top;
        $('html:not(:animated),body:not(:animated)').animate({scrollTop: destination - 120}, 300);
    }

    

    if(error == false){
        let formData = new FormData( form[0] );
        formData.append('action', 'basket_order_go');
        formData.append('order_info', order_info);
        formData.append('basket', JSON.stringify( basketObj.list ));
        
        $.ajax({
            async: false,
            type: 'POST',
            url: '/_ajax/otherActions.php',
            headers: {
                'Accept': 'application/json'
            },
            // data: {
            //     action: 'basket_order_go',
            //     order_info: order_info,
            //     basket: JSON.stringify( basketObj.list ),
            // },
            data: formData,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function (data) {
                // console.log(data);
            },
            success: function (data) {
                // console.log('OK:' + data);

                let height_left = $('.page-basket-order-flex-left').height();
                let height_right = $('.page-basket-order-flex-right').height();
                $('.page-basket-order-flex-left').height( height_left );
                $('.page-basket-order-flex-right').height( height_right );

                $.fancybox.open( $('#ok-order') );

                $('.page-basket-order-flex-left').html('');
                $('.page-basket-order-flex-right').html('');

                localStorage.removeItem('basket');

                setTimeout(function(){
                    location = '/';
                }, 3000);
            },
            error: function(data){
                // console.log('Error:' + data);
            }
        });


        // form.find('input, textarea').each(function(){
        //     $(this).val('');
        // });
        // $.fancybox.close();
        // $.fancybox.open( $('.ok-send') );
    }
});








// купить в 1 клик

$('body').on('click', '.link-buy-in-one-click', function(e){
    e.preventDefault();
    
    let root = $(this).parents('.root');

    if( root.hasClass('already-added') ){
        location = '/basket/order/';
    } else {
        root.find('.add-to-basket').trigger('click');
        setTimeout(function(){
            location = '/basket/order/';
        }, 30);
    }
    
    

});



// $('.link-buy-in-one-click-onthelist').on('click', function(e){
//     e.preventDefault();
    
//     $(this).parents('.itemRoot').find('.add-to-basket.active').trigger('click');
//     setTimeout(function(){
//         location = '/basket/order/';
//     }, 300);
// });





$('.ico-share').on('click', function(e){
    e.preventDefault();
    
    
});




















$(document).ready(function(){

    // заполнение модалки выбора города
    let k = 0;
    let col_1 = '';
    let col_2 = '';

    for(let i in contacts){
        if( k % 2 != 0 ){
            col_1 += '<a href="#" class="modal-geo-list-item" data-id="' + contacts[i].ID + '">' + contacts[i].CITY_NAME_MODAL + '</a>' + "\n\r";
        } else {
            col_2 += '<a href="#" class="modal-geo-list-item" data-id="' + contacts[i].ID + '">' + contacts[i].CITY_NAME_MODAL + '</a>' + "\n\r";
        }
        ++k;
    }

    let modal_geo_list = `
        <div class="modal-geo-list-col">
            ${col_1}
        </div>
        <div class="modal-geo-list-col">
            ${col_2}
        </div>
    `;

    $('.modal-geo-list').html( modal_geo_list );





    // Клик в город
    $('body').on('click', '.modal-geo-list-item', function(e){
        e.preventDefault();
    
        let city__ID = $(this).attr('data-id');
        
        localStorage.setItem('city__ID', city__ID);
    
        $('#modal-geo .modal-geo-list-item.active').removeClass('active');
        $('#modal-geo .modal-geo-list-item[data-id="' + city__ID + '"]').addClass('active');

        contacts__HTML( city__ID );
        $.fancybox.close();
    });







    // на запуске страницы - если в localStorage есть запись, то используем ее. Если нет - дефолтный ID (59 - Иркутск)
    if( !localStorage.getItem('city__ID') ){
        let city__ID = 59;
        $('.modal-geo-list-item[data-id="' + city__ID + '"]').trigger('click');
    } else {
        let city__ID = localStorage.getItem('city__ID');
        $('.modal-geo-list-item[data-id="' + city__ID + '"]').trigger('click');
    }





    // $('body').on('click', '.modal-geo-list-item', function(e){
    //     e.preventDefault();
    
    //     let city_name = $(this).attr('data-id');
        
    //     localStorage.setItem('city_name', city_name);
    
    //     $('#modal-geo .modal-geo-list-item.active').removeClass('active');
    //     $('#modal-geo .modal-geo-list-item[data-id="' + city_name + '"]').addClass('active');
    //     $('.topbar1-geo').html(city_name);
    //     $.fancybox.close();
    // });



    // if( !localStorage.getItem('city_name') ){
    //     let city_name__default = 'Иркутск';
    //     localStorage.setItem('city_name', city_name__default);

    //     $('#modal-geo .modal-geo-list-item.active').removeClass('active');
    //     $('#modal-geo .modal-geo-list-item[data-id="' + city_name__default + '"]').addClass('active');
    //     $('.topbar1-geo').html(city_name__default);
    // } else {
    //     let city_name = localStorage.getItem('city_name');

    //     $('#modal-geo .modal-geo-list-item.active').removeClass('active');
    //     $('#modal-geo .modal-geo-list-item[data-id="' + city_name + '"]').addClass('active');
    //     $('.topbar1-geo').html(city_name);
    // }
    
});




function contacts__HTML( city__ID ){
    for(let i in contacts){
        if( contacts[i].ID == city__ID ){
            // 0 - название города в шапке
            $('.topbar1-geo').each(function(){
                $(this).html( contacts[i].CITY_NAME_MODAL );
            });


            // 0 - телефоны
            let tel = contacts[i].TEL;
            let tel__raw = contacts[i].TEL.replace(/\s|&nbsp;|-|\(|\)/g, '');
            let tel__HTML = '<a href="tel:' + tel__raw + '">' + tel + '</a>';

            $('.topbar1-tels').html('');
            $('.topbar1-tels').append( tel__HTML );

            $('.menu-modal-bottom-tel-and-schedule__tel').html('');
            $('.menu-modal-bottom-tel-and-schedule__tel').append( tel__HTML );

            // $('.footer-contacts-item.tel').html('');
            // $('.footer-contacts-item.tel').append( tel__HTML );

            // $('.page-contacts-info-col-contacts__tel-value').html('');
            // $('.page-contacts-info-col-contacts__tel-value').append( tel__HTML );

            $('.bar-info-text .tel').attr('href', 'tel:' + tel__raw);
            $('.bar-info-text .tel').html( tel );


            // 0 - почты
            $('.footer-contacts-item.email').html('');
            $('.footer-contacts-item.email').append('<a href="mailto:' + contacts[i].EMAIL + '">'+ contacts[i].EMAIL +'</a>');

            $('.bar-info-text .email').attr('href', 'mailto:' + contacts[i].EMAIL);
            $('.bar-info-text .email').html( contacts[i].EMAIL );

            // на странице оформления заказа
            $('.page-basket-order-flex-right-ps-contacts').html('');
            $('.page-basket-order-flex-right-ps-contacts').prepend( tel__HTML );
            $('.page-basket-order-flex-right-ps-contacts').append('<a href="mailto:' + contacts[i].EMAIL + '">'+ contacts[i].EMAIL +'</a>');

            $('.page-contacts-info-col-contacts__email a').attr('href', 'mailto:' + contacts[i].EMAIL);
            $('.page-contacts-info-col-contacts__email a').html( contacts[i].EMAIL );



            // 0 - адреса
            // 0 - расписание
            // console.log(contacts[i]);
            $('.footer-contacts-item.address').html('');
            $('.page-contacts-info-col-contacts__addresses-address').html('');
            $('.page-contacts-info-col-contacts__addresses-schedule').html('');
            $('.modal-shop-change-list').html('');



            $('.footer-contacts-item.tel').html('');
            $('.page-contacts-info-col-contacts__tel-value').html('');

            for(let POINT_i in contacts[i].POINTS){
                let POINT_item = contacts[i].POINTS[POINT_i];

                let ADDRESS_FOOTER = '<div class="footer-contacts-item-address-item">' + POINT_item.ADDRESS_FOOTER + '</div>';
                $('.footer-contacts-item.address').append( ADDRESS_FOOTER );
    
                let ADDRESS_PAGE_CONTACTS = `
                    <div class="page-contacts-info-col-contacts__addresses-address-item">
                        <div class="page-contacts-info-col-contacts__addresses-address-item-address">
                            ${POINT_item.ADDRESS_PAGE_CONTACTS}
                        </div>
                        <div class="page-contacts-info-col-contacts__addresses-address-item-schedule">
                            ${POINT_item.SCHEDULE}
                        </div>
                    </div>`
                ;
                $('.page-contacts-info-col-contacts__addresses-address').append( ADDRESS_PAGE_CONTACTS );


                let ADDRESS_PAGE_ORDER = `
                    <a href="#" class="modal-shop-change-list-item active" data-address="${POINT_item.ADDRESS_FOOTER}">
                        <div class="modal-shop-change-list-item__box">
                            <div class="modal-shop-change-list-item__title">
                                ${POINT_item.ADDRESS_FOOTER}
                            </div>
                        </div>
                    </a>
                `;
                $('.modal-shop-change-list').append( ADDRESS_PAGE_ORDER );
                // $('.page-basket-order-deliverytype-shop-change__title .value').html( ADDRESS_PAGE_CONTACTS );

                // $('.page-contacts-info-col-contacts__addresses-schedule').append( POINT_item.SCHEDULE );



                
                let tel_point = POINT_item.TEL_POINT;
                let tel_point__raw = POINT_item.TEL_POINT.replace(/\s|&nbsp;|-|\(|\)/g, '');
                let tel_point__HTML = '<a href="tel:' + tel_point__raw + '">' + tel_point + '</a><br />';

                // $('.footer-contacts-item.tel').html('');
                $('.footer-contacts-item.tel').append( tel_point__HTML );
    
                // $('.page-contacts-info-col-contacts__tel-value').html('');
                $('.page-contacts-info-col-contacts__tel-value').append( tel_point__HTML );
            }

            $('.modal-shop-change-list-item:first-child').trigger('click');


            // 0 - расписание
            $('.topbar1-schedule').html('');
            // $('.topbar1-schedule').append( contacts[i].SCHEDULE );

            // $('.menu-modal-bottom-tel-and-schedule__schedule').html('');
            // $('.menu-modal-bottom-tel-and-schedule__schedule').append( contacts[i].SCHEDULE );

            $('.footer-contacts-item.schedule').html('');
            // $('.footer-contacts-item.schedule').append( contacts[i].SCHEDULE );





            // 0 - реквизиты
            $('.page-contacts-info-col-requisites-link').attr('href', contacts[i].REQUISITES);


            // 0 - мессенджеры
            $('.page-contacts-info-col-contacts__messengers-list').html('');
            if( contacts[i].MESSENGER_WHATSAPP.length > 0 ){
                $('.page-contacts-info-col-contacts__messengers-list').append('<a href="https://wa.me/' + contacts[i].MESSENGER_WHATSAPP.replace(/\s|&nbsp;|-|\(|\)/g, '') + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-black-whatsapp.svg" alt="whatsapp"></a>');
            }
            if( contacts[i].MESSENGER_TELEGRAM.length > 0 ){
                $('.page-contacts-info-col-contacts__messengers-list').append('<a href="https://t.me/' + contacts[i].MESSENGER_TELEGRAM.replace(/\s|&nbsp;|-|\(|\)/g, '') + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-black-telegram.svg" alt="telegram"></a>');
            }
            if( contacts[i].MESSENGER_VIBER.length > 0 ){
                $('.page-contacts-info-col-contacts__messengers-list').append('<a href="viber://chat?number=%2B7' + contacts[i].MESSENGER_VIBER.replace(/\s|&nbsp;|-|\(|\)/g, '') + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-black-viber.svg" alt="viber"></a>');
            }

            $('.page-basket-order-flex-right-ps-social').html('');
            if( contacts[i].MESSENGER_WHATSAPP.length > 0 ){
                $('.page-basket-order-flex-right-ps-social').append('<a href="https://wa.me/' + contacts[i].MESSENGER_WHATSAPP.replace(/\s|&nbsp;|-|\(|\)/g, '') + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-whatsapp.svg" alt="whatsapp"></a>');
            }
            if( contacts[i].MESSENGER_TELEGRAM.length > 0 ){
                $('.page-basket-order-flex-right-ps-social').append('<a href="https://t.me/' + contacts[i].MESSENGER_TELEGRAM.replace(/\s|&nbsp;|-|\(|\)/g, '') + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-telegram.svg" alt="telegram"></a>');
            }

            $('.menu-modal-bottom-socials').html('');
            if( contacts[i].MESSENGER_WHATSAPP.length > 0 ){
                $('.menu-modal-bottom-socials').append('<a href="https://wa.me/' + contacts[i].MESSENGER_WHATSAPP.replace(/\s|&nbsp;|-|\(|\)/g, '') + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-whatsapp.svg" alt="whatsapp"></a>');
            }
            if( contacts[i].MESSENGER_TELEGRAM.length > 0 ){
                $('.menu-modal-bottom-socials').append('<a href="https://t.me/' + contacts[i].MESSENGER_TELEGRAM.replace(/\s|&nbsp;|-|\(|\)/g, '') + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-telegram.svg" alt="telegram"></a>');
            }
            if( contacts[i].MESSENGER_VIBER.length > 0 ){
                $('.menu-modal-bottom-socials').append('<a href="viber://chat?number=%2B7' + contacts[i].MESSENGER_VIBER.replace(/\s|&nbsp;|-|\(|\)/g, '') + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-viber.svg" alt="viber"></a>');
            }



            

            // 0 - соц. сети
            $('.footer-contacts-social').html('');
            if( contacts[i].SOCIALS_VK.length > 0 ){
                $('.footer-contacts-social').append('<a href="' + contacts[i].SOCIALS_VK + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-vk.svg" alt="vk"></a>');
            }
            if( contacts[i].SOCIALS_YOUTUBE.length > 0 ){
                $('.footer-contacts-social').append('<a href="' + contacts[i].SOCIALS_YOUTUBE + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-youtube.svg" alt="youtube"></a>');
            }
            if( contacts[i].SOCIALS_OK.length > 0 ){
                $('.footer-contacts-social').append('<a href="' + contacts[i].SOCIALS_OK + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-ok.svg" alt="ok"></a>');
            }
            if( contacts[i].SOCIALS_FB.length > 0 ){
                $('.footer-contacts-social').append('<a href="' + contacts[i].SOCIALS_FB + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-fb.svg" alt="fb"></a>');
            }
            if( contacts[i].SOCIALS_TIKTOK.length > 0 ){
                $('.footer-contacts-social').append('<a href="' + contacts[i].SOCIALS_TIKTOK + '" target="_blank"><img src="' + SITE_TEMPLATE_PATH + '/images/ico-social-grey-tiktok.svg" alt="tiktok"></a>');
            }




            break;
        }
    }
}



























///////////////////////////////////     ИЗБРАННОЕ
// $(document).ready(function(){
//     $('.product-inner-info-row').each(function(){
//         let spec_title = $(this).find('.product-inner-info-row-title').html().trim();
//         let spec_value = $(this).find('.filter-inner a.active').html().trim();
//         let spec_row = spec_title + ': ' + spec_value + "\n\r";
//         console.log(spec_row);
//     });

    
// });


// // клик на "купить", который "нет в наличии"
// $('.index-products-body-item__button[data-id="not_available"]').on('click', function(e){
//     return false;
// });


// Счетчик на избранном в шапке
function favorites_counter(){
    let favoritesJSON = {};
    let favoritesObj = {};

    
    // проверяем, есть ли favorites в localStorage
    if( !localStorage.getItem('favorites') ){
        favoritesObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        favoritesJSON = localStorage.getItem('favorites');
        favoritesObj = JSON.parse(favoritesJSON);
    }

    let count = favoritesObj.list.length;
    if( count > 0 ){
        $('.topbar-favorites-count').each(function(){
            $(this).html( count );
        });

        $('.topbar2-favorites').removeClass('empty');
        $('.topbar-mobile-1-favorites').removeClass('empty');
    } else {
        $('.topbar2-favorites').addClass('empty');
        $('.topbar-mobile-1-favorites').addClass('empty');
    }

}


$(document).ready(function(){
    favorites_counter();
});






// Меняем кнопку "Добавить в избранное / Удалить из избранного"
$(document).ready(function(){
    let favoritesJSON = {};
    let favoritesObj = {};

    

    // $('.itemRoot').each(function(){
    $('.add-to-favorites').each(function(){
        let root = $(this).parents('.root');

        let current_id = root.attr('data-id');

        // проверяем, есть ли favorites в localStorage
        if( !localStorage.getItem('favorites') ){
            favoritesObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
        } else {
            favoritesJSON = localStorage.getItem('favorites');
            favoritesObj = JSON.parse(favoritesJSON);
        }


        // смотрим, есть ли уже такой элемент в избранном. Если есть - меняем кнопку
        for(i in favoritesObj.list){
            if( favoritesObj.list[i].id == current_id){
                $(this).addClass('active');
                $(this).parents('.root').addClass('already-added-to-favorites');
                // $(this).addClass('already-added');
            } else {
                // $(this).parents('.product-page-main-info-button').removeClass('already-added');
                // $(this).removeClass('already-added-2');
                // $(this).parents('.root').removeClass('already-added');
            }
        }
    });

});










// ограничиваем время жизни избранного
$(document).ready(function(){
    let limit = 24 * 3600 * 1000; // 24 часа
    // let limit = 5 * 1000; // 5 секунд
    let favorites__last_refresh_time = localStorage.getItem('favorites__last_refresh_time');

    if(+new Date() - favorites__last_refresh_time > limit){
        localStorage.removeItem('favorites');
        localStorage.removeItem('favorites__last_refresh_time');
    }
});



// добавляем или удаляем из избранного
function favoritesAddOrRemoveItem(id, count){
    // ограничиваем время жизни избранного
    localStorage.setItem('favorites__last_refresh_time', +new Date());


    let favoritesJSON = {};
    let favoritesObj = {};


    // проверяем, есть ли favorites в localStorage
    if( !localStorage.getItem('favorites') ){
        favoritesObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        favoritesJSON = localStorage.getItem('favorites');
        favoritesObj = JSON.parse(favoritesJSON);
    }


    // смотрим, есть ли уже такой элемент. Если есть, то удаляем и прерываем функцию
    for(i in favoritesObj.list){
        if( favoritesObj.list[i].id == id){
            // console.log('такой уже есть, удаляем и прерываем функцию');
            favoritesObj.list.splice(i, 1); // удаляем из объекта
            favoritesJSON = JSON.stringify( favoritesObj );
            localStorage.setItem('favorites', favoritesJSON);

            // location.reload(); // чтобы поменялась кнопка добавить/удалить
            favorites_counter();
            $('.root[data-id="' + id + '"] .add-to-favorites').removeClass('active');
            $('.root[data-id="' + id + '"]').removeClass('already-added-to-favorites');

            return false;
        }
    }


    // если не было return false на предыдущем шаге
    // console.log('добавляем');
    favoritesObj.list.push({
        id: id,
        count: count,
    });


    // пакуем в JSON и переписываем localStorage
    favoritesJSON = JSON.stringify( favoritesObj );
    localStorage.setItem('favorites', favoritesJSON);

    // console.log(favoritesJSON);

    // location.reload(); // чтобы поменялась кнопка добавить/удалить
    favorites_counter();
    // $('.root[data-id="' + id + '"] .add-to-favorites').html('Купить');
    // $('.root[data-id="' + id + '"]').removeClass('already-added');
    $('.root[data-id="' + id + '"] .add-to-favorites').addClass('active');
    $('.root[data-id="' + id + '"]').addClass('already-added-to-favorites');

    if( window.location.pathname.match('favorites') ){
        location.reload();
    }
}





$('body').on('click', '.root .custom-count a', function(e){
    // e.preventDefault();
    
    let root = $(this).parents('.root');
    let id = root.attr('data-id');
    let count = root.find('.custom-count input').val();

    // console.log(id, count);
    favoritesChangeCountItem(id, count);
});






// изменение количества товара на -/+
function favoritesChangeCountItem(id, count){
    let favoritesJSON = {};
    let favoritesObj = {};


    // проверяем, есть ли favorites в localStorage
    if( !localStorage.getItem('favorites') ){
        favoritesObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        favoritesJSON = localStorage.getItem('favorites');
        favoritesObj = JSON.parse(favoritesJSON);
    }

    // console.log(id, count);
    // поиск нужного элемента тут сделан перебором id потому, что id тут не ключ, а свойство
    for(i in favoritesObj.list){
        if( favoritesObj.list[i].id == id){

            if( count == 0 ){
                // favoritesObj.list.splice(i, 1); // удаляем из объекта
                favoritesItem__delete(id);
                
                return false;
            } else {
                favoritesObj.list[i].count = count;
            }

            favoritesJSON = JSON.stringify( favoritesObj );
            localStorage.setItem('favorites', favoritesJSON);

            // location.reload(); // чтобы поменялась кнопка добавить/удалить
            // favorites_counter();

            return false;
        }
    }



    // location.reload(); // чтобы поменялась кнопка добавить/удалить
    // favorites_counter();

    // if( window.location.pathname.match('favorites') ){
    //     location.reload();
    // }
}





// клик на кнопку "В избранное"
$('body').on('click', '.add-to-favorites', function(e){
    e.preventDefault();
    
    // if( !$(this).hasClass('active') ){
    //     $(this).addClass('active');
    // } else {
    //     $(this).removeClass('active');
    // }

    let root = $(this).parents('.root');

    // // если нет активной цены, значит не добавляем товар
    // if( root.attr('data-id') == 'not_available' ){
    //     return false;
    // }

    let id = root.attr('data-id');
    let count = 1;

    favoritesAddOrRemoveItem(id, count);
});









$('body').on('click', '.page-favorites-list-item-del', function(e){
    e.preventDefault();
    
    let id = $(this).parents('.root').attr('data-id');
    favoritesItem__delete(id);
});


function favoritesItem__delete(id){
    let favoritesJSON = {};
    let favoritesObj = {};


    // проверяем, есть ли favorites в localStorage
    if( !localStorage.getItem('favorites') ){
        favoritesObj.list = []; // тут должно быть сразу свойство "list", которое объявим массивом, чтобы пушить в него
    } else {
        favoritesJSON = localStorage.getItem('favorites');
        favoritesObj = JSON.parse(favoritesJSON);
    }


    // смотрим, есть ли уже такой элемент. Если есть, то удаляем и прерываем функцию
    for(i in favoritesObj.list){
        if( favoritesObj.list[i].id == id){
            // console.log('такой уже есть, удаляем и прерываем функцию');
            favoritesObj.list.splice(i, 1); // удаляем из объекта
            favoritesJSON = JSON.stringify( favoritesObj );
            localStorage.setItem('favorites', favoritesJSON);

            location.reload(); // чтобы поменялась кнопка добавить/удалить
            // favorites_counter();
            // $('.itemRoot[data-id="' + id + '"] .add-to-favorites').html('В избранное');
        }
    }
}



$('body').on('click', '.page-favorites-clear', function(e){
    e.preventDefault();
    
    favoritesAll__delete();
});

function favoritesAll__delete(){
    let i = 1;
    let count = $('.page-favorites-list-item').length;
    let timeout = 175;

    $('.page-favorites-list-item').each(function(i){
        setTimeout(() => {
            $(this).hide(300);
            ++i;
        }, i * timeout);
    });

    setTimeout(function(){
        $('.page-favorites-total').hide(300);
    }, count * timeout);

    setTimeout(function(){
        $('.page-favorites-button').hide(300);
    }, ++count * timeout);

    setTimeout(function(){
        localStorage.removeItem('favorites');
        location.reload();
    }, ++count * timeout);
    
}








// // кастомное количество - клик в кнопки +/-
// $('body').on('click', '.page-favorites .custom-count a', function(e){
//     e.preventDefault();

//     // let inputHtml = $(this).parents('.custom-count').find('input');
//     // let inputVal = +inputHtml.val();
//     // let direction = $(this).attr('data-id');
    
//     // if( direction == 'minus' ){
//     //     if( inputVal <= 1 ){
//     //         return false;
//     //     }
//     //     inputHtml.val( --inputVal );
//     // }
    
//     // if( direction == 'plus' ){
//     //     inputHtml.val( ++inputVal );
//     // }
// });





$(document).ready(function(){
    $('.favorites-list .favorites-item-delete').on('click', function(e){
        location.reload();
    });
});




$(document).ready(function(){
    // let elY = 0;
    // let scrollY = 0;
    // window.addEventListener("scroll", function() {
    //     const el = document.querySelector('.header');
    //     const height = el.offsetHeight;
    //     const pos = window.pageYOffset;
    //     const diff = scrollY - pos;
    
    //     elY = Math.min(0, Math.max(-height, elY + diff));
    //     el.style.position = pos >= height ? 'fixed' : pos === 0 ? 'absolute' : el.style.position;
    //     el.style.transform = `translateY(${el.style.position === 'fixed' ? elY : 0}px)`;
    
    //     scrollY = pos;
    // })

    let lastScrollTop = 0;

    $(window).on('scroll', function(e){
        e.preventDefault();
        
        let positionY = $(this).scrollTop();

        if( positionY > lastScrollTop ){
            // console.log('вниз');
            $('body').removeClass('sticky-topbar');
        } else {
            // console.log('вверх');
            $('body').addClass('sticky-topbar');
        }

        lastScrollTop = positionY;
    });
});





$(document).ready(function(){
    $('.modal-shop-change-list-item:first-child').trigger('click');
});












$(document).ready(function(){
    let city_selection__flag = localStorage.getItem('city_selection__flag');

    if( +city_selection__flag != 1 ){
        // $('.topbar1-geo').trigger('click');
        $.fancybox.open( $('#modal-geo') );
    }
    localStorage.setItem('city_selection__flag', 1);

    
});