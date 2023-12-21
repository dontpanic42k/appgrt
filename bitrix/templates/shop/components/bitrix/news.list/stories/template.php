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

// /bitrix/templates/shop/components/bitrix/news.list/stories/template.php
?>


<?
$HTML = '';

foreach($arResult["ITEMS"] as $item){
	// echo '<pre>';
	// print_r( $item );
	// echo '</pre>';
	// die();
    $main__ID = $item['ID'];
    $main__AVA = CFile::GetPath( $item['PROPERTIES']['AVA']['VALUE'] );
    $main__TITLE = htmlspecialchars($item['PROPERTIES']['TITLE']['~VALUE']);
    
    
    $items__HTML = '';
    
    foreach($item['PROPERTIES']['STORIES_ITEM']['VALUE'] as $key => $stories_item){
        $stories_item__DURATION = (int) $stories_item['XML_STORIES_ITEM_DURATION'];
        $stories_item__SRC = CFile::GetPath( $stories_item['XML_STORIES_ITEM_FILE'] );


        $stories_item__SRC__extension = mb_strtolower( end(explode('.', $stories_item__SRC)) );

        $all_extention_of_images = array(
            'jpg',
            'jpeg',
            'png',
            'webp',
            'bmp',
            'tiff',
            'gif',
            'jp2',
        );
        
        $stories_item__TYPE = 'photo';
        if( in_array($stories_item__SRC__extension, $all_extention_of_images) ){
            $stories_item__TYPE = 'photo';
        } else {
            $stories_item__TYPE = 'video';
        }
        

        $stories_item__LINK = '';
        if( !empty($stories_item['XML_STORIES_ITEM_LINK_HREF']) ){
            $stories_item__LINK = $stories_item['XML_STORIES_ITEM_LINK_HREF'];
        }
        
        
        $stories_item__ANCHOR = '';
        if( !empty($stories_item['XML_STORIES_ITEM_LINK_ANCHOR']) ){
            $stories_item__ANCHOR = '"' . $stories_item['XML_STORIES_ITEM_LINK_ANCHOR'] . '"';
        } else {
            $stories_item__ANCHOR = 'false';
        }
        
        
        $items__HTML .= '
                    {
                        id: "' . $main__ID . '-' . $key . '",
                        type: "' . $stories_item__TYPE . '",
                        length: ' . $stories_item__DURATION . ',
                        src: "' . $stories_item__SRC . '",
                        preview: "' . $main__AVA . '",
                        link: "' . $stories_item__LINK . '",
                        linkText: ' . $stories_item__ANCHOR . ',
                        time: timestamp()
                    },
        ';
    }


    $HTML .= '
            {
                id: "' . $main__ID . '",
                photo: "' . $main__AVA . '",
                name: "' . $main__TITLE . '",
                time: timestamp(),
                items: [
                    ' . $items__HTML . '
                ]
            },
    ';


}








?>




<script>
$(document).ready(function(){
    let currentSkin = getCurrentSkin();
    let stories = window.Zuck(document.querySelector('#stories'), {
        backNative: false,
        previousTap: true,
        skin: currentSkin['name'],
        autoFullScreen: currentSkin['params']['autoFullScreen'],
        avatars: currentSkin['params']['avatars'],
        paginationArrows: currentSkin['params']['paginationArrows'],
        list: currentSkin['params']['list'],
        cubeEffect: currentSkin['params']['cubeEffect'],
        localStorage: true,

        stories: [
<?= $HTML; ?>
<?
            // {
            //     id: '1',
            //     photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',
            //     name: 'Ramon',
            //     time: timestamp(),
            //     items: [
            //         {
            //             id: '1-1',
            //             type: 'photo',
            //             length: 0,
            //             src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',
            //             preview:
            //             'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',
            //             link: '',
            //             linkText: false,
            //             time: timestamp()
            //         },
            //     ]
            // },

            // {id: '2',items: [{id: '2-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '3',items: [{id: '3-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '4',items: [{id: '4-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '5',items: [{id: '5-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '6',items: [{id: '6-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '7',items: [{id: '7-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '8',items: [{id: '8-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '9',items: [{id: '9-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '10',items: [{id: '10-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '11',items: [{id: '11-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '12',items: [{id: '12-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '13',items: [{id: '13-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '14',items: [{id: '14-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '15',items: [{id: '15-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '16',items: [{id: '16-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '17',items: [{id: '17-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '18',items: [{id: '18-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '19',items: [{id: '19-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '20',items: [{id: '20-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '21',items: [{id: '21-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '22',items: [{id: '22-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '23',items: [{id: '23-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '24',items: [{id: '24-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '25',items: [{id: '25-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '26',items: [{id: '26-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '27',items: [{id: '27-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '28',items: [{id: '28-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '29',items: [{id: '29-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '30',items: [{id: '30-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '31',items: [{id: '31-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '32',items: [{id: '32-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '33',items: [{id: '33-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '34',items: [{id: '34-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '35',items: [{id: '35-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '36',items: [{id: '36-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '37',items: [{id: '37-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '38',items: [{id: '38-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '39',items: [{id: '39-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
            // {id: '40',items: [{id: '40-1',type: 'photo',length: 0,src: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',preview:'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/stories/1.jpg',link: '',linkText: false,time: timestamp()},], photo: 'https://raw.githubusercontent.com/ramonszo/assets/master/zuck.js/users/1.jpg',name: 'Ramon',time: timestamp(),},
?>

        ]
    });
});
</script>






<?
$HTML_2 = '';

if( !empty($HTML) ){
    $HTML_2 = '
		<div class="block  stories">

            <div class="container">
                <div class="h2-flex-blog">
                    <div class="h2-flex-blog-left">
                        <h2>Stories</h2>
                        <div class="h2-flex-blog-description">
                            Актуальная информация каждый день
                        </div>
                    </div>
                </div>

				<div id="stories" class="storiesWrapper"></div>
            </div><!-- .container -->

		</div><!-- .stories -->
    ';
}

echo $HTML_2;
?>