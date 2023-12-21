<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

// /bitrix/templates/shop/components/bitrix/news.list/info_contacts/template.php
?>

<?
$HTML = '';


// сначала находим стандартный город
$ID__STD = '';
$CITY_NAME__STD = '';
$CITY_NAME_MODAL__STD = '';
$TEL__STD = '';
$EMAIL__STD = '';
$REQUISITES__STD = '';

$POINTS = '';
// $ADDRESS_FOOTER__STD = '';
// $ADDRESS_PAGE_CONTACTS__STD = '';
// $MAP_COORDS__STD = '';
// $SCHEDULE__STD = '';

$MESSENGER_WHATSAPP__STD = '';
$MESSENGER_TELEGRAM__STD = '';
$MESSENGER_VIBER__STD = '';
$SOCIALS_VK__STD = '';
$SOCIALS_YOUTUBE__STD = '';
$SOCIALS_OK__STD = '';
$SOCIALS_FB__STD = '';
$SOCIALS_TIKTOK__STD = '';

foreach($arResult['ITEMS'] as $arItem){
    if( $arItem['ID'] != 59 ){
        continue;
    }

    // echo '<pre>';
    // print_r( $arItem );
    // echo '</pre>';
    // die();
    

    $ID__STD = $arItem['ID'];
    $CITY_NAME__STD = htmlspecialchars($arItem['PROPERTIES']['CITY_NAME']['~VALUE']);
    $CITY_NAME_MODAL__STD = htmlspecialchars($arItem['PROPERTIES']['CITY_NAME_MODAL']['~VALUE']);
    $TEL__STD = $arItem['PROPERTIES']['TEL']['~VALUE'];
    $EMAIL__STD = $arItem['PROPERTIES']['EMAIL']['~VALUE'];
    $REQUISITES__STD = CFile::GetPath( $arItem['PROPERTIES']['REQUISITES']['VALUE'] );

    // $ADDRESS_FOOTER__STD = htmlspecialchars($arItem['PROPERTIES']['ADDRESS_FOOTER']['~VALUE']);
    // $ADDRESS_PAGE_CONTACTS__STD = htmlspecialchars($arItem['PROPERTIES']['ADDRESS_PAGE_CONTACTS']['~VALUE']);
    // $MAP_COORDS__STD = $arItem['PROPERTIES']['MAP_COORDS']['~VALUE'];
    // $SCHEDULE__STD = $arItem['PROPERTIES']['SCHEDULE']['~VALUE'];

    // $ADDRESS_NUM = $arItem['PROPERTIES']['ADDRESS_NUM']['~VALUE'];
    $ADDRESS_FOOTER__STD = $arItem['PROPERTIES']['ADDRESS_FOOTER']['~VALUE'];
    $ADDRESS_PAGE_CONTACTS__STD = $arItem['PROPERTIES']['ADDRESS_PAGE_CONTACTS']['~VALUE'];
    $MAP_COORDS__STD = $arItem['PROPERTIES']['MAP_COORDS']['~VALUE'];
    $SCHEDULE__STD = $arItem['PROPERTIES']['SCHEDULE']['~VALUE'];

    $MESSENGER_WHATSAPP__STD = $arItem['PROPERTIES']['MESSENGER_WHATSAPP']['~VALUE'];
    $MESSENGER_TELEGRAM__STD = $arItem['PROPERTIES']['MESSENGER_TELEGRAM']['~VALUE'];
    $MESSENGER_VIBER__STD = $arItem['PROPERTIES']['MESSENGER_VIBER']['~VALUE'];
    $SOCIALS_VK__STD = $arItem['PROPERTIES']['SOCIALS_VK']['~VALUE'];
    $SOCIALS_YOUTUBE__STD = $arItem['PROPERTIES']['SOCIALS_YOUTUBE']['~VALUE'];
    $SOCIALS_OK__STD = $arItem['PROPERTIES']['SOCIALS_OK']['~VALUE'];
    $SOCIALS_FB__STD = $arItem['PROPERTIES']['SOCIALS_FB']['~VALUE'];
    $SOCIALS_TIKTOK__STD = $arItem['PROPERTIES']['SOCIALS_TIKTOK']['~VALUE'];
}


foreach($arResult['ITEMS'] as $arItem){
    // echo '<pre>';
    // print_r( $arItem );
    // echo '</pre>';
    // die();

    $ID = $arItem['ID'];
    if( empty($ID) ){
        $ID = $ID__STD;
    }

    $CITY_NAME = htmlspecialchars($arItem['PROPERTIES']['CITY_NAME']['~VALUE']);
    if( empty($CITY_NAME) ){
        $CITY_NAME = $CITY_NAME__STD;
    }

    $CITY_NAME_MODAL = htmlspecialchars($arItem['PROPERTIES']['CITY_NAME_MODAL']['~VALUE']);
    if( empty($CITY_NAME_MODAL) ){
        $CITY_NAME_MODAL = $CITY_NAME_MODAL__STD;
    }

    $TEL = $arItem['PROPERTIES']['TEL']['~VALUE'];
    if( empty($TEL) ){
        $TEL = $TEL__STD;
    }

    $EMAIL = $arItem['PROPERTIES']['EMAIL']['~VALUE'];
    if( empty($EMAIL) ){
        $EMAIL = $EMAIL__STD;
    }

    $REQUISITES = CFile::GetPath( $arItem['PROPERTIES']['REQUISITES']['VALUE'] );
    if( empty($REQUISITES) ){
        $REQUISITES = $REQUISITES__STD;
    }




    // $ADDRESS_FOOTER = htmlspecialchars($arItem['PROPERTIES']['ADDRESS_FOOTER']['~VALUE']);
    // if( empty($ADDRESS_FOOTER) ){
    //     $ADDRESS_FOOTER = $ADDRESS_FOOTER__STD;
    // }

    // $ADDRESS_FOOTER = $arItem['PROPERTIES']['ADDRESS_FOOTER']['~VALUE'];
    // if( empty($ADDRESS_FOOTER) ){
    //     $ADDRESS_FOOTER = $ADDRESS_FOOTER__STD;
    // }
    // echo '<pre>';
    // print_r( $arItem['PROPERTIES']['ADDRESS_FOOTER']['~VALUE'] );
    // echo '</pre>';
    // die();
    
    // echo '<pre>';
    // print_r( $arItem['PROPERTIES']['ADDRESS_NUM']['~VALUE'] );
    // echo '</pre>';
    // die();
    
    // foreach($arItem['PROPERTIES']['ADDRESS_FOOTER']['~VALUE'] as $item){
    //     echo '<pre>';
    //     print_r( $item );
    //     echo '</pre>';
    //     // die();
        
    // }

    $MAP_CENTER = $arItem['PROPERTIES']['MAP_CENTER']['~VALUE'];
    if( empty($MAP_CENTER) ){
        $MAP_CENTER = $MAP_CENTER__STD;
    }

    $MAP_ZOOM = $arItem['PROPERTIES']['MAP_ZOOM']['~VALUE'];
    if( empty($MAP_ZOOM) ){
        $MAP_ZOOM = $MAP_ZOOM__STD;
    }


    $POINTS = '';
    foreach($arItem['PROPERTIES']['ADDRESS_NUM']['~VALUE'] as $key => $value){
        // echo '<pre>';
        // print_r( $item );
        // echo '</pre>';
        // die();

        $POINTS .= '
            {
                ID: "' . $arItem['PROPERTIES']['ADDRESS_NUM']['~VALUE'][$key] . '",
                ADDRESS_FOOTER: "' . $arItem['PROPERTIES']['ADDRESS_FOOTER']['~VALUE'][$key] . '",
                ADDRESS_PAGE_CONTACTS: "' . $arItem['PROPERTIES']['ADDRESS_PAGE_CONTACTS']['~VALUE'][$key] . '",
                MAP_COORDS: "' . $arItem['PROPERTIES']['MAP_COORDS']['~VALUE'][$key] . '",
                SCHEDULE: "' . $arItem['PROPERTIES']['SCHEDULE']['~VALUE'][$key] . '",
                TEL_POINT: "' . $arItem['PROPERTIES']['TEL_POINT']['~VALUE'][$key] . '",
            },
        ';
    }
    




    // $ADDRESS_PAGE_CONTACTS = htmlspecialchars($arItem['PROPERTIES']['ADDRESS_PAGE_CONTACTS']['~VALUE']);
    // if( empty($ADDRESS_PAGE_CONTACTS) ){
    //     $ADDRESS_PAGE_CONTACTS = $ADDRESS_PAGE_CONTACTS__STD;
    // }

    // $MAP_COORDS = $arItem['PROPERTIES']['MAP_COORDS']['~VALUE'];
    // if( empty($MAP_COORDS) ){
    //     $MAP_COORDS = $MAP_COORDS__STD;
    // }

    // $SCHEDULE = $arItem['PROPERTIES']['SCHEDULE']['~VALUE'];
    // if( empty($SCHEDULE) ){
    //     $SCHEDULE = $SCHEDULE__STD;
    // }




    $MESSENGER_WHATSAPP = $arItem['PROPERTIES']['MESSENGER_WHATSAPP']['~VALUE'];
    if( empty($MESSENGER_WHATSAPP) ){
        $MESSENGER_WHATSAPP = $MESSENGER_WHATSAPP__STD;
    }

    $MESSENGER_TELEGRAM = $arItem['PROPERTIES']['MESSENGER_TELEGRAM']['~VALUE'];
    if( empty($MESSENGER_TELEGRAM) ){
        $MESSENGER_TELEGRAM = $MESSENGER_TELEGRAM__STD;
    }

    $MESSENGER_VIBER = $arItem['PROPERTIES']['MESSENGER_VIBER']['~VALUE'];
    if( empty($MESSENGER_VIBER) ){
        $MESSENGER_VIBER = $MESSENGER_VIBER__STD;
    }

    $SOCIALS_VK = $arItem['PROPERTIES']['SOCIALS_VK']['~VALUE'];
    if( empty($SOCIALS_VK) ){
        $SOCIALS_VK = $SOCIALS_VK__STD;
    }

    $SOCIALS_YOUTUBE = $arItem['PROPERTIES']['SOCIALS_YOUTUBE']['~VALUE'];
    if( empty($SOCIALS_YOUTUBE) ){
        $SOCIALS_YOUTUBE = $SOCIALS_YOUTUBE__STD;
    }

    $SOCIALS_OK = $arItem['PROPERTIES']['SOCIALS_OK']['~VALUE'];
    if( empty($SOCIALS_OK) ){
        $SOCIALS_OK = $SOCIALS_OK__STD;
    }

    $SOCIALS_FB = $arItem['PROPERTIES']['SOCIALS_FB']['~VALUE'];
    if( empty($SOCIALS_FB) ){
        $SOCIALS_FB = $SOCIALS_FB__STD;
    }

    $SOCIALS_TIKTOK = $arItem['PROPERTIES']['SOCIALS_TIKTOK']['~VALUE'];
    if( empty($SOCIALS_TIKTOK) ){
        $SOCIALS_TIKTOK = $SOCIALS_TIKTOK__STD;
    }


    $HTML .=
    '   {' . "\n\r" .
    '       ID: "' . $ID . '",' . "\n\r" . 
    '       CITY_NAME: "' . $CITY_NAME . '",' . "\n\r" . 
    '       CITY_NAME_MODAL: "' . $CITY_NAME_MODAL . '",' . "\n\r" . 
    '       TEL: "' . $TEL . '",' . "\n\r" . 
    '       EMAIL: "' . $EMAIL . '",' . "\n\r" . 
    '       REQUISITES: "' . $REQUISITES . '",' . "\n\r" . 

    // '       ADDRESS_FOOTER: "' . $ADDRESS_FOOTER . '",' . "\n\r" . 
    // '       ADDRESS_PAGE_CONTACTS: "' . $ADDRESS_PAGE_CONTACTS . '",' . "\n\r" . 
    // '       MAP_COORDS: "' . $MAP_COORDS . '",' . "\n\r" . 
    // '       SCHEDULE: "' . $SCHEDULE . '",' . "\n\r" . 
    '       MAP_CENTER: "' . $MAP_CENTER . '",' . "\n\r" . 
    '       MAP_ZOOM: "' . $MAP_ZOOM . '",' . "\n\r" . 
    '       POINTS: [
' . $POINTS . '
            ],' . "\n\r" . 

// ' . '
// POINTS: [
//     {
//         ADDRESS_FOOTER: "' . $ADDRESS_FOOTER . '",
//         ADDRESS_PAGE_CONTACTS: "' . $ADDRESS_PAGE_CONTACTS . '",
//         MAP_COORDS: "' . $MAP_COORDS . '",
//         SCHEDULE: "' . $SCHEDULE . '",
//     },
// ],

    '       MESSENGER_WHATSAPP: "' . $MESSENGER_WHATSAPP . '",' . "\n\r" . 
    '       MESSENGER_TELEGRAM: "' . $MESSENGER_TELEGRAM . '",' . "\n\r" . 
    '       MESSENGER_VIBER: "' . $MESSENGER_VIBER . '",' . "\n\r" . 
    '       SOCIALS_VK: "' . $SOCIALS_VK . '",' . "\n\r" . 
    '       SOCIALS_YOUTUBE: "' . $SOCIALS_YOUTUBE . '",' . "\n\r" . 
    '       SOCIALS_OK: "' . $SOCIALS_OK . '",' . "\n\r" . 
    '       SOCIALS_FB: "' . $SOCIALS_FB . '",' . "\n\r" . 
    '       SOCIALS_TIKTOK: "' . $SOCIALS_TIKTOK . '",' . "\n\r" . 
    '   },' . "\n\r";

}

$HTML = '
let contacts = [
' . $HTML . '
];
';

echo $HTML;
// return $HTML;
?>