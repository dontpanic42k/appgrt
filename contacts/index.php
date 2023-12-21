<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контакты | AppGreatStore");
$APPLICATION->SetPageProperty("keywords", "Контакты | AppGreatStore");
$APPLICATION->SetPageProperty("title", "Контакты | AppGreatStore");
$APPLICATION->SetTitle("Контакты");
?>














<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumbs",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>




<div class="container">
    <h1>Контакты</h1>
</div>





<div class="page-contacts">
    <div class="container">

        <div class="page-contacts-info">
            <div class="page-contacts-info-col-contacts">
                <div class="page-contacts-info-col-contacts__tel">
                    Телефон: <span class="page-contacts-info-col-contacts__tel-value"><a href="tel:+79149353271">+7 (914) 935-32-71</a></span>
                </div>
                <div class="page-contacts-info-col-contacts__messengers">
                    <div class="page-contacts-info-col-contacts__messengers-title">
                        Свяжитесь с нами  мессенджерах:
                    </div>
                    <div class="page-contacts-info-col-contacts__messengers-list">
                        <a href="https://wa.me/+79149353271" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-social-black-whatsapp.svg" alt="whatsapp"></a>
                        <a href="https://t.me/+79149353271" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-social-black-telegram.svg" alt="telegram"></a>
                        <a href="viber://chat?number=%2B79149353271" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/ico-social-black-viber.svg" alt="viber"></a>
                    </div>
                </div>
                <div class="page-contacts-info-col-contacts__email">
                    Также вы можете связаться с нами по 
                    <br>
                    электронной почте <a href="mailto:appgreat.store@mail.ru">appgreat.store@mail.ru</a>
                </div>
                <div class="page-contacts-info-col-contacts__addresses">
                    <b>Адреса:</b>
                    <br>
                    <span class="page-contacts-info-col-contacts__addresses-address">
                        г. Иркутск, улица Урицкого, 4
                    </span>
                    <br>
                    <span class="page-contacts-info-col-contacts__addresses-schedule">
                        Ежедневно с 11:00 до 20:00
                    </span>
                </div>
            </div>
            <div class="page-contacts-info-col-requisites">
                <h2>Реквизиты</h2>
                <a href="/upload/requisites.pdf" class="page-contacts-info-col-requisites-link" download="Реквизиты AppGreat store">Скачать</a>
            </div>
            <div class="page-contacts-info-col-form">
                <h2>Остались вопросы?</h2>
                <div>
                    Оставьте свой номер, мы перезвоним и проконсультруем вас по любому интересующему вопросу.
                </div>
                <form>
                    <input type="text" class="form-item  required" name="tel" placeholder="Телефон">
                    <a href="#" class="btn btn-black  submit">Отправить</a>

                    <input type="hidden" name="thx" value="#ok-page-contacts" style="display: none;">
                    <input type="hidden" name="subject" value="Страница Контакты - Остались вопросы?">
                    <input type="submit" style="display: none;">
                </form>
                <div class="form-disclaimer">
                    Нажимая на кнопку, вы соглашаетесь с <a href="/user-agreement/">условиями обработки персональных данных</a>
                </div>
            </div>
        </div><!-- .page-contacts-info -->

        <div class="page-contacts-map">
            <div id="map"></div>
        </div>

    </div><!-- .container -->
</div><!-- .page-contacts -->

<div style="display: none;">
    <div class="modal-std-wrapper" id="ok-page-contacts">
        <div class="modal-std  type-1">
            <div class="modal-std-flex-center">
                <div class="modal-std-title">
                    Спасибо за обращение!
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













<script src="https://api-maps.yandex.ru/2.1/?apikey=3586af66-d100-412c-aa0c-e8733d144f8b&lang=ru_RU"></script>
<script>
// let city__ID = '';
// let city__COORDS = '';
// let city__ADDRESS = '';

// let newInterval = setInterval(function(){
//     city__ID = localStorage.getItem('city__ID');
    
//     if( city__ID.length > 0 ){
//         for(let i in contacts){
//             if( contacts[i].ID == city__ID ){
//                 city__COORDS = contacts[i].MAP_COORDS;
//                 city__ADDRESS = contacts[i].ADDRESS_FOOTER;
                
//                 console.log(city__COORDS, city__ADDRESS);
//                 clearInterval( newInterval );
//                 ymaps.ready(initYandexMap);
//                 break;
//             } 
//         }
//     }
// }, 20);


let city__ID = '';
let newInterval = setInterval(function(){
    city__ID = localStorage.getItem('city__ID');
    
    if( city__ID.length > 0 ){
        for(let i in contacts){
            if( contacts[i].ID == city__ID ){
                // city__COORDS = contacts[i].MAP_COORDS;
                // city__ADDRESS = contacts[i].ADDRESS_FOOTER;
                
                // console.log(city__COORDS, city__ADDRESS);
                clearInterval( newInterval );
                ymaps.ready(initYandexMap);
                break;
            } 
        }
    }
}, 20);

// ymaps.ready(initYandexMap);
function initYandexMap(){
    let marker_options = {
        iconLayout: 'default#imageWithContent',
        iconImageHref: '<?=SITE_TEMPLATE_PATH; ?>/images/ico-map.svg',
        iconImageSize: [48, 57], // строится от верхнего левого угла
        iconImageOffset: [-24, -57], // смещение иконки
    };


    // let city__COORDS__arr = '';
    // let x = '';
    // let y = '';
    let map_center = '';
    let map_zoom = '';



    let points = [];
    
    for(let i in contacts){
        if( contacts[i].ID == city__ID ){
            // центр карты
            let map_center__arr = contacts[i].MAP_CENTER.split(', ');
            let map_center__x = +map_center__arr[0];
            let map_center__y = +map_center__arr[1];
            map_center = [map_center__x, map_center__y];
            // map_center = [52.2845120735126, 104.28991880414267];
            
            // зум карты
            map_zoom = contacts[i].MAP_ZOOM;
            
            let j = 0;
            for(let POINT_item of contacts[i].POINTS){
                // console.log(POINT_item);
                let city__COORDS__arr = POINT_item.MAP_COORDS.split(', ');
                let x = +city__COORDS__arr[0];
                let y = +city__COORDS__arr[1];

                points[j] = {};
                // points['office'].address = 'г. Иркутск, улица Урицкого, 4';
                // points['office'].coords = [52.2845120735126, 104.28991880414267];
                points[j].address = POINT_item.ADDRESS_FOOTER;
                points[j].coords = [x, y];

                ++j;
            }




        }
    }







    
    // console.log(city__COORDS, city__ADDRESS);
    


// console.log(points);



    let map = new ymaps.Map("map", {
        // center: [52.2845120735126, 104.28991880414267],
        // center: [x, y],
        // zoom: 17,
        center: map_center,
        zoom: map_zoom,
        controls: ['zoomControl'],
    },
    {
        suppressMapOpenBlock: true
    }
    );
    map.behaviors.disable('scrollZoom'); // отключаем прокрутку колесом мыши


    for(let key in points){
        // points[key]
        let marker = new ymaps.Placemark(
            points[key].coords,
            {
                hintContent: points[key].address,
            },
            marker_options
        );
        map.geoObjects.add(marker);
    }



	// перемещение к нужной точке карты по клику на ссылку
    $('a.pan-to').on('click', function(e){
        e.preventDefault();

        let id = $(this).attr('data-id');
        map.panTo( points[id].coords );
    });

}


$(document).ready(function(){
    $('body').on('click', '.modal-geo-list-item', function(e){
        e.preventDefault();
        
        if( $('body').hasClass('fancybox-active') ){
            setTimeout(function(){
                location.reload();
            }, 1000);
        }
    });
});
</script>





















<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>