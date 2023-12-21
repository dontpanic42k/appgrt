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

// /bitrix/templates/shop/components/bitrix/news.list/page_trade_in__calc/template.php
?>

<?
$obj2__JS = '';

foreach($arResult['ITEMS'] as $arItem){
    // echo '<pre>';
    // print_r( $arItem );
    // echo '</pre>';
    // die();

    $obj2__item_specs = '';
    foreach($arItem['PROPERTIES']['MEMORY_AND_PRICE']['VALUE'] as $item){
        $obj2__item_specs .= '
        {
            memory: "' . $item['XML_MEMORY_AND_PRICE_MEMORY'] . '",
            price: "' . $item['XML_MEMORY_AND_PRICE_PRICE'] . '",
        },
        ';
    }

    $obj2__JS .= '
    {
        id: "' . $arItem['ID'] . '",
        name: "' . $arItem['NAME'] . '",
        specs: [
    ' . $obj2__item_specs . '
        ],
    },
';
}
?>
<script>
let obj2 = [
<?= $obj2__JS; ?>
];
</script>

<script>
$(document).ready(function(){
    let models__HTML = '';
    let models__list__HTML = '';

    for(let i in obj2){
        models__list__HTML += '<li><a href="#" data-id="' + obj2[i].id + '">' + obj2[i].name + '</a></li>';
    }

    models__HTML = `
        <ul>
            ${models__list__HTML}
        </ul>
    `;
    $('.page-trade-in-calc-left-list.model').html( models__HTML );
    




    $('body').on('click', '.page-trade-in-calc-left-list.model ul li a', function(e){
        e.preventDefault();
        
        let id = $(this).attr('data-id');
        let specs__HTML = '';
        let specs__list__HTML = '';
        let memory_prev = $('.page-trade-in-calc-left-list.memory ul li a.active').attr('data-id');

        for(i in obj2){
            if( obj2[i].id == id ){
                for(j in obj2[i].specs){
                    specs__list__HTML += '<li><a href="#" data-id="' + obj2[i].specs[j].memory + '" data-price="' + obj2[i].specs[j].price + '">' + obj2[i].specs[j].memory + '</a></li>';
                }

                break;
            }
        }

        specs__HTML = `
            <ul>
                ${specs__list__HTML}
            </ul>
        `;
        $('.page-trade-in-calc-left-list.memory').html( specs__HTML );



        // метка активности и инициализация клика в память
        $('.page-trade-in-calc-left-list.model ul li a').each(function(){
            $(this).removeClass('active');
        });
        $(this).addClass('active');

        if( $('.page-trade-in-calc-left-list.memory ul li a[data-id="' + memory_prev + '"]').length > 0 ){
            $('.page-trade-in-calc-left-list.memory ul li a[data-id="' + memory_prev + '"]').trigger('click');
        } else {
            $('.page-trade-in-calc-left-list.memory ul li a').eq(0).trigger('click');
        }
    });



    




    $('body').on('click', '.page-trade-in-calc-left-list.memory ul li a', function(e){
        e.preventDefault();

        $('.page-trade-in-calc-left-list.memory ul li a').each(function(){
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        
        let price = $(this).attr('data-price');
        $('.page-trade-in-calc-resume__value .value').html( price );

        // для письма
        let model = $('.page-trade-in-calc-left-list.model ul li a.active').html();
        let memory = $('.page-trade-in-calc-left-list.memory ul li a.active').html();
        let comment_about_device = "<br>\n\rМодель: " + model + '; Память: ' + memory + '; Заявленная скидка: ' + price + ' руб.';
        $('#modal-trade-in [name="comment"]').val( comment_about_device );
    });



    // инициализация
    $('.page-trade-in-calc-left-list.model ul li a').eq(0).trigger('click');

});
</script>