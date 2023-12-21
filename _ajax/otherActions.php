<?
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
use Bitrix\Main\Application;

// define('EMAIL_ADMIN', 'dontpanic42k@gmail.com');
define('EMAIL_ADMIN', 'appgreat.store@mail.ru');


$action = $_POST['action'];


if( $action == 'page_service_center__prices' ){
    page_service_center__prices();
}

if( $action == 'page_blog__showmore' ){
    page_blog__showmore($nOffset = $_POST['elements_shown'], $how_much = $_POST['how_much']);
}

if( $action == 'page_reviews__showmore' ){
    page_reviews__showmore($nOffset = $_POST['elements_shown'], $how_much = $_POST['how_much']);
}

if( $action == 'page_basket__list' ){
    page_basket__list($_POST['IDs']);
}

if( $action == 'page_basket_order__list' ){
    page_basket_order__list($_POST['IDs']);
}

if( $action == 'basket_order_go' ){
    // basket_order_go($_POST['IDs'], $_POST['COUNTs']);
    basket_order_go($_POST['basket'], $_POST['order_info']);
}

if( $action == 'page_favorites__list' ){
    page_favorites__list($_POST['IDs']);
}

if( $action == 'recently_viewed_products' ){
    recently_viewed_products($_POST['IDs']);
}

if( $action == 'smtp_send_email' ){
    smtp_send_email();
}



function page_service_center__prices(){
    $IBLOCK_ID = 4;
    $SECTION_ID = $_POST['SECTION_ID'];

    $db = CIBlockElement::GetList(
        $arOrder = Array('SORT' => 'ASC', 'timestamp_x' => 'ASC'),
        $arFilter = Array('IBLOCK_ID' => $IBLOCK_ID, 'SECTION_ID' => $SECTION_ID),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = Array(
            'IBLOCK_ID',
            'ID',
            'PROPERTY_TITLE',
            'PROPERTY_PRICE'
        )
    );


    $HTML = '';
    $i = 1;
    $col_odd_HTML = '';
    $col_even_HTML = '';

    while( $res = $db->fetch() ){
        // echo '<pre>';
        // print_r( $res );
        // echo '</pre>';
        // die();

        if( $i % 2 != 0 ){
            $col_odd_HTML .= '
                <div class="page-service-center-main-body-row">
                    <div class="page-service-center-main-body-row__title">
                        ' . $res['PROPERTY_TITLE_VALUE'] . '
                    </div>
                    <div class="page-service-center-main-body-row__price">
                        ' . $res['PROPERTY_PRICE_VALUE'] . '
                    </div>
                </div>
            ';
        } else {
            $col_even_HTML .= '
                <div class="page-service-center-main-body-row">
                    <div class="page-service-center-main-body-row__title">
                        ' . $res['PROPERTY_TITLE_VALUE'] . '
                    </div>
                    <div class="page-service-center-main-body-row__price">
                        ' . $res['PROPERTY_PRICE_VALUE'] . '
                    </div>
                </div>
            ';
        }

        ++$i;
    }

    $col_odd_HTML = '
            <div class="page-service-center-main-body-col-50">
                ' . $col_odd_HTML . '
            </div>
    ';

    $col_even_HTML = '
            <div class="page-service-center-main-body-col-50">
                ' . $col_even_HTML . '
            </div>
    ';

    echo $HTML = $col_odd_HTML . $col_even_HTML;
    // echo 123;
}









function page_blog__showmore( $nOffset, $how_much ){
    $IBLOCK_ID = 1;
    // $SECTION_ID = $_POST['SECTION_ID'];
    // echo $nOffset;die();
    $arFilter = array(
        'IBLOCK_ID' => $IBLOCK_ID,
        'ACTIVE' => 'Y',
    );

    // if( $SECTION_ID != 'all' ){
    //     $arFilter['SECTION_ID'] = $SECTION_ID;
    // }

    $db = CIBlockElement::GetList(
        $arOrder = Array(
			'PROPERTY_DATE' => 'DESC',
		),
        $arFilter,
        $arGroupBy = false,
        // $arNavStartParams = false,
        $arNavStartParams = array(
			'nTopCount' => $how_much,
			'nOffset' => $nOffset
		),
        $arSelectFields = array(
            'IBLOCK_ID',
            'ID',
            'PROPERTY_AVA',
            'PROPERTY_DATE',
            'PROPERTY_TITLE',
            'DETAIL_PAGE_URL',
        )
    );


    $HTML = '';

    // while( $res = $db->fetch() ){
    while( $res = $db->getNext() ){
        // echo '<pre>';
        // print_r( $res );
        // echo '</pre>';
        // die();

        $HTML .= '
        <a href="' . $res['DETAIL_PAGE_URL'] . '" class="page-blog-list-item  new" style="display: none;">
            <div class="page-blog-list-item__ava">
                <img src="' . CFile::GetPath( $res['PROPERTY_AVA_VALUE'] ) . '" alt="' . $res['PROPERTY_DATE_VALUE'] . '">
            </div>
            <div class="page-blog-list-item__info">
                <div class="page-blog-list-item__date">
                    ' . $res['PROPERTY_DATE_VALUE'] . '
                </div>
                <div class="page-blog-list-item__title">
                    ' . $res['PROPERTY_TITLE_VALUE'] . '
                </div>
                <div class="page-blog-list-item__link-more">
                    Перейти
                </div>
            </div>
        </a>
        ';
    }


    echo $HTML;
}










function page_reviews__showmore( $nOffset, $how_much ){
    $IBLOCK_ID = 2;
    // $SECTION_ID = $_POST['SECTION_ID'];
    // echo $nOffset;die();
    $arFilter = array(
        'IBLOCK_ID' => $IBLOCK_ID,
        'ACTIVE' => 'Y',
    );

    // if( $SECTION_ID != 'all' ){
    //     $arFilter['SECTION_ID'] = $SECTION_ID;
    // }

    $db = CIBlockElement::GetList(
        $arOrder = Array(
			'SORT' => "ASC",
		),
        $arFilter,
        $arGroupBy = false,
        // $arNavStartParams = false,
        $arNavStartParams = array(
			'nTopCount' => $how_much,
			'nOffset' => $nOffset
		),
        $arSelectFields = array(
            'IBLOCK_ID',
            'ID',
            'PROPERTY_TITLE',
            'PROPERTY_DATE',
            'PROPERTY_INTROTEXT',
        )
    );


    $HTML = '';

    while( $res = $db->fetch() ){
        // echo '<pre>';
        // print_r( $res );
        // echo '</pre>';
        // die();

        $HTML .= '
            <div class="block-reviews-slider-item  new"  style="display: none;">
                <div class="block-reviews-slider-item__title">
                    ' . $res['PROPERTY_TITLE_VALUE'] . '
                </div>
                <div class="block-reviews-slider-item__date">
                    ' . $res['PROPERTY_DATE_VALUE'] . '
                </div>
                <div class="block-reviews-slider-item__introtext">
' . $res['PROPERTY_INTROTEXT_VALUE']['TEXT'] . '
                </div>
            </div>
        ';
    }


    echo $HTML;
}








function page_basket__list($IDs){
    $IBLOCK_ID = 5;
    $SECTION_ID = $_POST['SECTION_ID'];

    // $IDs__arr = array();
    $IDs__arr = explode(',', $IDs);
    




    // ---- НАЧАЛО  - Массивы соответствий свойств товара (RAM, HDD, COLOR, ...)
// 0. RAM
$SPECS__RAM__arr = array(); // массив всех возможных вариантов характеристики

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => 6, // Память (ОЗУ)
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
    )
);

while($row = $db -> getNext()){
    $SPECS__RAM__arr[$row['ID']] = $row['NAME'];
}



// 0. HDD
$SPECS__HDD__arr = array(); // массив всех возможных вариантов характеристики

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => 7, // Память (ПЗУ)
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
    )
);

while($row = $db -> getNext()){
    $SPECS__HDD__arr[$row['ID']] = $row['NAME'];
}



// 0. COLOR
$SPECS__COLOR__arr = array(); // массив всех возможных вариантов характеристики

$db = CIBlockElement::GetList(
    $arOrder = Array('SORT' => 'ASC'),
    $arFilter = Array(
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => 8, // Цвет
    ),
    $arGroupBy = false,
    $arNavStartParams = false,
    $arSelectFields = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
        'PROPERTY_COLOR_IMAGE'
    )
);

while($row = $db -> getNext()){
    $SPECS__COLOR__arr[$row['ID']] = $row['PROPERTY_COLOR_IMAGE_VALUE'];
}
    // ---- КОНЕЦ   - Массивы соответствий свойств товара (RAM, HDD, COLOR, ...)







    

    $db = CIBlockElement::GetList(
        $arOrder = Array('SORT' => 'ASC'),
        $arFilter = Array(
            'IBLOCK_ID' => $IBLOCK_ID,
            'ID' => $IDs__arr,
        ),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = Array(
            'IBLOCK_ID',
            'ID',
            'PROPERTY_NAME',
            'PROPERTY_PRICE',
            'PROPERTY_IMAGES',
            'PROPERTY_SPECS_RAM',
            'PROPERTY_SPECS_HDD',
            'PROPERTY_SPECS_COLOR',
        )
    );


    $HTML = '';

    while( $res = $db->fetch() ){
        // echo '<pre>';
        // print_r( $res );
        // echo '</pre>';
        // // die();

        $NAME = htmlspecialchars( $res['PROPERTY_NAME_VALUE'] );


        $price__raw = (int) preg_replace('/[^0-9]/', '', $res['PROPERTY_PRICE_VALUE']);
        $price__formatted = number_format($price__raw, 0, ',', ' ');

        

        // НАЧАЛО характеристики
        $SPECS__RAM__HTML = '';
        if( !empty($res['PROPERTY_SPECS_RAM_VALUE']) ){
            $SPECS__RAM__HTML = '
                <div class="page-basket-list-item-info__specs-row">
                    Память: <span class="value">' . $SPECS__RAM__arr[$res['PROPERTY_SPECS_RAM_VALUE']] . '</span>
                </div>
            ';
        }

        $SPECS__HDD__HTML = '';
        if( !empty($res['PROPERTY_SPECS_HDD_VALUE']) ){
            $SPECS__HDD__HTML = '
                <div class="page-basket-list-item-info__specs-row">
                    Память (накопитель): <span class="value">' . $SPECS__HDD__arr[$res['PROPERTY_SPECS_HDD_VALUE']] . '</span>
                </div>
            ';
        }

        $SPECS__COLOR__HTML = '';
        if( !empty($res['PROPERTY_SPECS_COLOR_VALUE']) ){
            $SPECS__COLOR__HTML .= '
                <div class="page-basket-list-item-info__specs-row">
                    <div class="page-basket-list-item-info__specs-row-title">
                        Цвет
                    </div>
                    <div class="page-basket-list-item-info__specs-row-value">
                        <div class="page-basket-list-item-info__specs-row-value-color" style="background: url(' . CFile::GetPath( $SPECS__COLOR__arr[ $res['PROPERTY_SPECS_COLOR_VALUE'] ] ) . ');"></div>
                    </div>
                </div>
            ';
        }
        // КОНЕЦ характеристики

        

        $HTML .= '
            <div class="page-basket-list-item  root" data-id="' . $res['ID'] . '" data-price-one="' . $price__raw . '">
                <div class="page-basket-list-item-ava">
                    <img src="' . CFile::GetPath( $res['PROPERTY_IMAGES_VALUE'][0] ) . '" alt="' . $NAME . '">
                </div>
                <div class="page-basket-list-item-info">
                    <div class="page-basket-list-item-info__title">
                        ' . $NAME . '
                    </div>
                    <div class="page-basket-list-item-info__specs">
                        ' . $SPECS__COLOR__HTML . '
                        ' . $SPECS__RAM__HTML . '
                        ' . $SPECS__HDD__HTML . '
                    </div>
                </div>
                <div class="page-basket-list-item-price-one">
                    <div class="page-basket-list-item-title">
                        Цена
                    </div>
                    <span class="value">' . $price__formatted . '</span> руб.
                </div>
                <div class="page-basket-list-item-count">
                    <div class="page-basket-list-item-title">
                        Количество
                    </div>
                    <div class="custom-count">
                        <a href="#" data-id="minus">-</a>
                        <input type="text" value="1">
                        <a href="#" data-id="plus">+</a>
                    </div>
                </div>
                <div class="page-basket-list-item-price-full">
                    <div class="page-basket-list-item-title">
                        Стоимость
                    </div>
                    <span class="value"></span> руб.
                </div>
                <div class="page-basket-list-item-del">
                    <a href="#">Удалить</a>
                </div>
            </div><!-- .page-basket-list-item -->
        ';
        
    }

    echo $HTML;
}








function page_basket_order__list($IDs){
    $IBLOCK_ID = 5;
    $SECTION_ID = $_POST['SECTION_ID'];

    // $IDs__arr = array();
    $IDs__arr = explode(',', $IDs);
    

    

    $db = CIBlockElement::GetList(
        $arOrder = Array('SORT' => 'ASC'),
        $arFilter = Array(
            'IBLOCK_ID' => $IBLOCK_ID,
            'ID' => $IDs__arr,
        ),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = Array(
            'IBLOCK_ID',
            'ID',
            'PROPERTY_NAME',
            'PROPERTY_PRICE',
            'PROPERTY_IMAGES',
        )
    );


    $HTML = '';

    while( $res = $db->fetch() ){
        // echo '<pre>';
        // print_r( $res );
        // echo '</pre>';
        // // die();

        $NAME = htmlspecialchars( $res['PROPERTY_NAME_VALUE'] );


        $price__raw = (int) preg_replace('/[^0-9]/', '', $res['PROPERTY_PRICE_VALUE']);
        $price__formatted = number_format($price__raw, 0, ',', ' ');

        
        

        $HTML .= '
                            <div class="page-basket-order-flex-right-product-list-item  root"  data-id="' . $res['ID'] . '" data-price-one="' . $price__raw . '">
                                <div class="page-basket-order-flex-right-product-list-item-ava">
                                    <img src="' . CFile::GetPath( $res['PROPERTY_IMAGES_VALUE'][0] ) . '" alt="' . $NAME . '">
                                </div>
                                <div class="page-basket-order-flex-right-product-list-item-info">
                                    <div class="page-basket-order-flex-right-product-list-item-info__title">
                                        ' . $NAME . '
                                    </div>
                                    <div class="page-basket-order-flex-right-product-list-item-info__price">
                                        <span class="page-basket-order-flex-right-product-list-item-info__price-count">1</span> х ' . $price__formatted . ' руб.
                                    </div>
                                </div>
                            </div>
        ';
        
    }

    echo $HTML;
}








// function basket_order_go($IDs, $COUNTs){
function basket_order_go($basket, $order_info){
    $basket = json_decode($basket);
    // $IDs__arr = array();
    // $COUNTS__arr = array();
    $basket__arr = array();

    foreach($basket as $item){
        $basket__arr[ $item->id ] = $item->count;
    }

    // echo '<pre>';
    // print_r( $basket__arr );
    // echo '</pre>';
    // die();
    


    
    $IBLOCK_ID = 5;
    $SECTION_ID = $_POST['SECTION_ID'];

    // // $IDs__arr = array();
    // $IDs__arr = explode(',', $IDs);
    // $COUNTs__arr = explode(',', $COUNTs);

    $SITE_URL = (!empty($_SERVER['HTTPS'])  ?  'https'  :  'http')  .  '://'  .  $_SERVER['SERVER_NAME'];
    $SITE_URL = $_SERVER['REQUEST_SCHEME']  .  '://'  .  $_SERVER['SERVER_NAME'];

    

    $db = CIBlockElement::GetList(
        $arOrder = Array('SORT' => 'ASC'),
        $arFilter = Array(
            'IBLOCK_ID' => $IBLOCK_ID,
            // 'ID' => $IDs__arr,
            'ID' => array_keys($basket__arr),
        ),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = Array(
            'IBLOCK_ID',
            'ID',
            'PROPERTY_NAME',
            'PROPERTY_PRICE',
            'PROPERTY_IMAGES',
        )
    );


    $HTML = '';
    $price_total = 0;
    $delivery_price = 500; // цена доставки

    while( $res = $db->fetch() ){
        $NAME = htmlspecialchars( $res['PROPERTY_NAME_VALUE'] );


        $price__raw = (int) preg_replace('/[^0-9]/', '', $res['PROPERTY_PRICE_VALUE']);
        $price__formatted = number_format($price__raw, 0, ',', ' ');


        $price_total += $price__raw;
        

        $HTML .= '
                            <div style="display: flex; align-items: center; justify-content: flex-start; flex-wrap: nowrap; margin-bottom: 10px;">
                                <div style="min-width: 63px; width: 63px; height: 63px; margin-right: 10px;">
                                    <img src="' . $SITE_URL . CFile::GetPath( $res['PROPERTY_IMAGES_VALUE'][0] ) . '" style="width: 100%; height: 100%; object-fit: contain; object-position: center center;">
                                </div>
                                <div>
                                    <div style="font-weight: 600; font-size: 21px; line-height: 21px; color: #121212; margin-bottom: 10px;">
                                        ' . $NAME . '
                                    </div>
                                    <div style="font-weight: 500; font-size: 16px; line-height: 20px; color: #121212;">
                                        ' . $basket__arr[$res['ID']] . ' х ' . $price__formatted . ' руб.
                                    </div>
                                </div>
                            </div>
        ';
    }


    $price_total__with_delivery = $price_total;

    if( $price_total >= 15000 ){
        $delivery_price__HTML = 'Бесплатно';
        // $price_total__with_delivery
    } else {
        $delivery_price__HTML = '500 руб.';
        $price_total__with_delivery += $delivery_price;
    }

    

    $HTML .= '
                        <div style="margin-top: 26px;">
                            <div style="display: flex; align-items: center; justify-content: flex-start; flex-wrap: wrap; font-weight: 400; font-size: 18px; line-height: 1.167; color: #121212; margin-bottom: 26px;">
                                <div>
                                    Товары:
                                </div>
                                <div style="margin-left: auto;">
                                    ' . $price_total . ' руб.
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: flex-start; flex-wrap: wrap; font-weight: 400; font-size: 18px; line-height: 1.167; color: #121212; margin-bottom: 26px;">
                                <div>
                                    Доставка:
                                </div>
                                <div style="margin-left: auto;">
                                    ' . $delivery_price__HTML . '
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; justify-content: flex-start; flex-wrap: wrap; border-top: 1px solid rgba(0,0,0,0.2); padding-top: 26px;">
                            <div style="font-weight: 600; font-size: 21px; line-height: 1; color: #121212;">
                                Итого:
                            </div>
                            <div style="font-weight: 700; font-size: 24px; line-height: 1; color: #121212; margin-left: auto;">
                                ' . $price_total__with_delivery . ' руб.
                            </div>
                        </div>
    ';


    $HTML = '
        <div style="max-width: 800px;">
            <div>
                ' . $HTML . '
            </div>

            <div style="font-size: 18px; line-height: 2; color: #121212; margin-top: 26px; border-top: 1px solid rgba(0,0,0,0.2); padding-top: 26px;">
                ' . $order_info . '
            </div>
        </div>
    ';


    


    ///////////////////
    // отправка писем
    include $_SERVER['DOCUMENT_ROOT'] . '/bitrix/templates/shop/js/PHPMailer/index.php';
    $email__to = EMAIL_ADMIN;
    $email__subject = 'Заказ с сайта';
    $email__body = $HTML;
    SMTP_mail($email__to, $email__subject, $email__body);
    
    // echo $HTML;
    echo 1;
}

















function page_favorites__list($IDs){
    $IBLOCK_ID = 5;

    // $IDs__arr = array();
    $IDs__arr = explode(',', $IDs);
    

    

    $db = CIBlockElement::GetList(
        $arOrder = Array('SORT' => 'ASC'),
        $arFilter = Array(
            'IBLOCK_ID' => $IBLOCK_ID,
            'ID' => $IDs__arr,
        ),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = Array(
            'IBLOCK_ID',
            'ID',
            'DETAIL_PAGE_URL',
            'PROPERTY_NAME',
            'PROPERTY_PRICE',
            'PROPERTY_IMAGES',
            'PROPERTY_TAGS',
        )
    );


    $HTML = '';

    while( $res = $db->getNext() ){
        // echo '<pre>';
        // print_r( $res );
        // echo '</pre>';
        // // die();

        $NAME = htmlspecialchars( $res['PROPERTY_NAME_VALUE'] );


        $price__raw = (int) preg_replace('/[^0-9]/', '', $res['PROPERTY_PRICE_VALUE']);
        $price__formatted = number_format($price__raw, 0, ',', ' ');


        

        $PRODUCT__tags__HTML = '';

        $PRODUCT__tags__arr = array(
            'Хит' => 'hit',
            'New' => 'new',
            'Sale' => 'sale',
        );
        
        foreach($res['PROPERTY_TAGS_VALUE'] as $item){
            $PRODUCT__tags__HTML .= '<div class="product-card-labels-item" data-type="' . $PRODUCT__tags__arr[$item] . '"></div>';
            // $PRODUCT__tags__HTML .= $item;
        }
        
        if( !empty($PRODUCT__tags__HTML) ){
            // $PRODUCT__tags__HTML = '
            //     <div class="page-product-card-info-labels">
            //         <div class="product-card-labels">
            //             ' . $PRODUCT__tags__HTML . '
            //         </div>
            //     </div>
            // ';
            $PRODUCT__tags__HTML = '
                
                    <div class="product-card-labels">
                        ' . $PRODUCT__tags__HTML . '
                    </div>
                
            ';
        }

        

        $HTML .= '
            <div class="product-card root" data-id="' . $res['ID'] . '">
                ' . $PRODUCT__tags__HTML . '
                <a href="' . $res['DETAIL_PAGE_URL'] . '" class="product-card-favorite add-to-favorites active"></a>
                <a href="' . $res['DETAIL_PAGE_URL'] . '" class="product-card__ava">
                    <img src="' . CFile::GetPath( $res['PROPERTY_IMAGES_VALUE'][0] ) . '" alt="' . $NAME . '">
                </a>
                <a href="' . $res['DETAIL_PAGE_URL'] . '" class="product-card__title">
                    ' . $NAME . '
                </a>
                <div class="product-card__price">
                    ' . $price__formatted . ' руб.
                </div>

                <div class="product-card-buttons">
                    <div class="product-card-buttons__buy-button">
                        <a href="#" class="btn btn-black  add-to-basket">Купить</a>
                    </div>
                    <div class="product-card-buttons__buy-oneclick">
                        <a href="#" class="link-buy-in-one-click">Купить в один клик</a>
                    </div>
                </div>
            </div>
        ';
        
    }

    echo $HTML;
}

















function recently_viewed_products($IDs){
    $IBLOCK_ID = 5;
    $limit = 12;

    // $IDs__arr = array();
    $IDs__arr = explode(',', $IDs);
    $IDs__arr = array_reverse($IDs__arr);
    

    

    $db = CIBlockElement::GetList(
        // $arOrder = Array('SORT' => 'ASC'),
        $arOrder = array(
            'ID' => $IDs__arr,
        ),
        $arFilter = Array(
            'IBLOCK_ID' => $IBLOCK_ID,
            'ID' => $IDs__arr,
        ),
        $arGroupBy = false,
        // $arNavStartParams = false,
        $arNavStartParams = array(
            'nTopCount' => $limit,
        ),
        $arSelectFields = Array(
            'IBLOCK_ID',
            'ID',
            'DETAIL_PAGE_URL',
            'PROPERTY_NAME',
            'PROPERTY_PRICE',
            'PROPERTY_IMAGES',
            'PROPERTY_TAGS',
        )
    );


    $HTML = '';

    while( $res = $db->getNext() ){
        // echo '<pre>';
        // print_r( $res['ID'] );
        // echo '</pre>';
        // // die();

        $NAME = htmlspecialchars( $res['PROPERTY_NAME_VALUE'] );


        $price__raw = (int) preg_replace('/[^0-9]/', '', $res['PROPERTY_PRICE_VALUE']);
        $price__formatted = number_format($price__raw, 0, ',', ' ');


        

        $PRODUCT__tags__HTML = '';

        $PRODUCT__tags__arr = array(
            'Хит' => 'hit',
            'New' => 'new',
            'Sale' => 'sale',
        );
        
        foreach($res['PROPERTY_TAGS_VALUE'] as $item){
            $PRODUCT__tags__HTML .= '<div class="product-card-labels-item" data-type="' . $PRODUCT__tags__arr[$item] . '"></div>';
            // $PRODUCT__tags__HTML .= $item;
        }
        
        if( !empty($PRODUCT__tags__HTML) ){
            // $PRODUCT__tags__HTML = '
            //     <div class="page-product-card-info-labels">
            //         <div class="product-card-labels">
            //             ' . $PRODUCT__tags__HTML . '
            //         </div>
            //     </div>
            // ';
            $PRODUCT__tags__HTML = '
                    <div class="product-card-labels">
                        ' . $PRODUCT__tags__HTML . '
                    </div>
            ';
        }

        

        $HTML .= '
        <div class="swiper-slide">
            <div class="product-card root" data-id="' . $res['ID'] . '">
                ' . $PRODUCT__tags__HTML . '
                <a href="' . $res['DETAIL_PAGE_URL'] . '" class="product-card-favorite add-to-favorites"></a>
                <a href="' . $res['DETAIL_PAGE_URL'] . '" class="product-card__ava">
                    <img src="' . CFile::GetPath( $res['PROPERTY_IMAGES_VALUE'][0] ) . '" alt="' . $NAME . '">
                </a>
                <a href="' . $res['DETAIL_PAGE_URL'] . '" class="product-card__title">
                    ' . $NAME . '
                </a>
                <div class="product-card__price">
                    ' . $price__formatted . ' руб.
                </div>

                <div class="product-card-buttons">
                    <div class="product-card-buttons__buy-button">
                        <a href="#" class="btn btn-black  add-to-basket">Купить</a>
                    </div>
                    <div class="product-card-buttons__buy-oneclick">
                        <a href="#" class="link-buy-in-one-click">Купить в один клик</a>
                    </div>
                </div>
            </div>
        </div>
        ';
        
    }

    echo $HTML;
}



















function smtp_send_email(){

    ///////////////////
    // отправка писем
    include $_SERVER['DOCUMENT_ROOT'] . '/bitrix/templates/shop/js/PHPMailer/index.php';

    $email__to = EMAIL_ADMIN;
    $email__subject = 'С сайта';
    $email__subject .= !empty($_POST['subject'])  ?  ' - ' . $_POST['subject']  :  ' - Форма обратной связи';
    
    $email__body =  '';
    $email__body .= !empty( $_POST['name'] )  ?  'Имя: ' . $_POST['name'] . '<br>' :  '';
    $email__body .= !empty( $_POST['name2'] )  ?  'Фамилия: ' . $_POST['name2'] . '<br>' :  '';
    $email__body .= !empty( $_POST['tel'] )  ?  'Телефон: ' . $_POST['tel'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['email'] )  ?  'Email: ' . $_POST['email'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['device'] )  ?  'Устройство: ' . $_POST['device'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['comment'] )  ?  'Комментарий: ' . $_POST['comment'] . '<br>'  :  '';
    // $email__body .= !empty( $_POST['form-id'] )  ?  '<br>' . 'Из какой формы: ' . $_POST['form-id'] . '<br>'  :  '';


    $email__body .= !empty( $_POST['denomination'] )  ?  '<b>Номинал сертификата:</b> ' . $_POST['denomination'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['congratulation-text'] )  ?  '<b>Поздравление получателю:</b> ' . $_POST['congratulation-text'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['from-name'] )  ?  '<b>От кого - Имя:</b> ' . $_POST['from-name'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['from-surname'] )  ?  '<b>От кого - Фамилия:</b> ' . $_POST['from-surname'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['from-tel'] )  ?  '<b>От кого - Телефон:</b> ' . $_POST['from-tel'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['from-email'] )  ?  '<b>От кого - Email:</b> ' . $_POST['from-email'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['to-name'] )  ?  '<b>Кому - Имя:</b> ' . $_POST['to-name'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['to-surname'] )  ?  '<b>Кому - Фамилия:</b> ' . $_POST['to-surname'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['to-tel'] )  ?  '<b>Кому - Телефон:</b> ' . $_POST['to-tel'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['to-email'] )  ?  '<b>Кому - Email:</b> ' . $_POST['to-email'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['send-anonymously'] )  ?  '<b>Отправить анонимно</b><br>'  :  '';
    
    
    SMTP_mail($email__to, $email__subject, $email__body);
    echo 1;
}


?>