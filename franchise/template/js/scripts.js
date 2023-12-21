// function modal_menu__open(){
//     $('body').addClass('menu-opened');
// }

// function modal_menu__close(){
//     $('body').removeClass('menu-opened');
// }

// $('.topbar-ico-menu').on('click', function(e){
//     e.preventDefault();
    
//     if( !$('body').hasClass('menu-opened') ){
//         modal_menu__open();
//     } else {
//         modal_menu__close();
//     }
// });

// $(window).on('keydown', function(e){
//     if( e.keyCode == 27 ){
//         modal_menu__close();
//     }
// });

// $('.ico-menu-modal-close').on('click', function(e){
//     e.preventDefault();
    
//     modal_menu__close();
// });




// $('input[type="checkbox"].custom').each(function(i){
//     $(this).attr('id', 'custom-checkbox-' + i);
//     $(this).after('<label class="checkbox" for="' + 'custom-checkbox-' + i + '"></label>');
// });

// $('input[type="radio"].custom').each(function(i){
//     $(this).attr('id', 'custom-radio-' + i);
//     $(this).after('<label class="radio" for="' + 'custom-radio-' + i + '"></label>');
// });









// // плавный скролл на якорь
$('a.scroll').click(function (e) {
    e.preventDefault();
    let elementClick = $(this).attr('href')
    let destination = $(elementClick).offset().top;
    $('html:not(:animated),body:not(:animated)').animate({
        scrollTop: destination - 120
    }, 800);
});




// маска для телефона
jQuery(function($){
    $('input[name="tel"]').mask("+7 (999) 999 99 99");
});






// $('.spoiler-link').on('click', function(e){
//     e.preventDefault();

//     let itemRoot = $(this).parents('.spoiler-item');
    
//     if( itemRoot.hasClass('active') ){
//         itemRoot.removeClass('active');
//         itemRoot.find('.spoiler-body').hide(300);
//     } else {
//         itemRoot.addClass('active');
//         itemRoot.find('.spoiler-body').show(300);
//     }
// });






// $('.special-spoiler-item__title').on('click', function(e){
//     e.preventDefault();

//     if( $(this).parents('.block').hasClass('services-spoilers')  &&  $(this).parents('.special-spoiler-item').hasClass('active') ){
//         return false;
//     }

//     let wrapper = $(this).parents('.special-spoiler-item');

//     if( !wrapper.hasClass('active') ){
//         $('.special-spoiler-item').each(function(){
//             $(this).removeClass('active');
//             $(this).find('.special-spoiler-item__body').hide(300);
//         });

//         wrapper.addClass('active');
//         wrapper.find('.special-spoiler-item__body').show(300);
//     } else {
//         wrapper.removeClass('active');
//         wrapper.find('.special-spoiler-item__body').hide(300);
//     }

// });












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
            url: '/franchise/_ajax/otherActions.php',
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
                // form.find('input, textarea').each(function(){
                form.find('[name="name"], [name="tel"], [name="email"], [name="comment"]').each(function(){
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




// $('input[name="privacy-policy"]').on('change', function(e){
//     // e.preventDefault();
    
//     if( !$(this).prop('checked') ){
//         $(this).parents('form').find('.submit').addClass('disable');
//     } else {
//         $(this).parents('form').find('.submit').removeClass('disable');
//     }
// });




















// function url_get_param__set(prmName, val){
//     const url = new URL( window.location );
//     url.searchParams.set(prmName, val);
//     window.history.pushState({}, '', url);
// }

// function url_get_param__del(prmName){
//     // const url = new URL(window.location);
//     // url.searchParams.set(prmName, val);
//     // window.history.pushState({}, '', url);

//     // let url = new URL( window.location );
//     // let params = new URLSearchParams(url.search);
//     // params = params.delete( prmName );
//     // window.history.pushState({}, '', url);


//     const url = new URL(document.location);
//     const searchParams = url.searchParams;
//     searchParams.delete(prmName); // СѓРґР°Р»РёС‚СЊ РїР°СЂР°РјРµС‚СЂ
//     window.history.pushState({}, '', url.toString());
// }


$(document).ready(function(){
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





