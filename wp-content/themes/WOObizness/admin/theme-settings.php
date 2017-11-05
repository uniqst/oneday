<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){

//Theme Shortname
$shortname = "WOOBISNES";


//Populate the options array
global $tt_options;
$tt_options = get_option('of_options');


//Access the WordPress Pages via an Array
$tt_pages = array();
$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($tt_pages_obj as $tt_page) {
$tt_pages[$tt_page->ID] = $tt_page->post_name; }
$tt_pages_tmp = array_unshift($tt_pages, "Select a page:"); 


//Access the WordPress Categories via an Array
$tt_categories = array();  
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$categories_tmp = array_unshift($tt_categories, "Выберите категорию:");


//Sample Array for demo purposes
$sample_array = array("1","2","3","4","5");


//Sample Advanced Array - The actual value differs from what the user sees
$sample_advanced_array = array("image" => "The Image","post" => "The Post"); 


//Folder Paths for "type" => "images"

$logourl =  get_template_directory_uri() . '/images/logo.png';
$faviconurl =  get_template_directory_uri() . '/favicon.png';


       

$SL1 =  get_template_directory_uri() . '/images/slayd/slayd1.jpg';      
$SL2 =  get_template_directory_uri() . '/images/slayd/slayd2.jpg';  
$SL3 =  get_template_directory_uri() . '/images/slayd/slayd3.jpg';  
$SL4 =  get_template_directory_uri() . '/images/slayd/slayd4.jpg'; 
$SL5 =  get_template_directory_uri() . '/images/slayd/slayd5.jpg';      
 
$bl1 =  get_template_directory_uri() . '/images/home/Dir_8_L.jpg';      
$bl2 =  get_template_directory_uri() . '/images/home/Dir_9_L.jpg';  
$bl3 =  get_template_directory_uri() . '/images/home/Dir_10_L.jpg';  
$bl4 =  get_template_directory_uri() . '/images/home/Dir_11_L.jpg'; 
  
 
 

/*-----------------------------------------------------------------------------------*/
/* Create The Custom Site Options Panel
/*-----------------------------------------------------------------------------------*/
$options = array(); // do not delete this line - sky will fall


			
			
	/* Option Page 3 - foter */
$options[] = array( "name" => __('Главная страница','framework_localize'),
			"sicon" => "glyphicons_019_cogwheel.png",					 
			"type" => "heading");
			
			
		$options[] = array( "name" => __('Логотип','framework_localize'),
			"desc" => __(' максимальный размер логотипа 180 на 60px','framework_localize'),
			"id" => $shortname."_Logotip_sitelogo",
			"std" => "$logourl",
			"type" => "upload");

$options[] = array( "name" => __('Иконка Favicon','framework_localize'),
			"desc" => __('Загрузите favicon иконку,размером 16px x 16px ','framework_localize'),
			"id" => $shortname."_favicon",
			"std" => "$faviconurl",
			"type" => "upload");			
			
			


$options[] = array( "name" => __('Блок приветствия','framework_localize'),
			"desc" => "Не большое приветствие для пользователей сайта",
			"id" => $shortname."_welcome",
			"std" => "Напишите небольшое приветствие для пользователей Вашего сайта!",
			"type" => "text");

$options[] = array( "name" => __('Текст под блоком приветствия','framework_localize'),
			"desc" => "Текст под блоком приветствия",
			"id" => $shortname."_welcome2",
			"std" => "Текст под блоком приветствия",
			"type" => "textarea");





$options[] = array( "name" => __('Картинка первого блока','framework_localize'),
			"desc" =>  "Картинка первого блока",
			"id" => $shortname."_homb",
			"std" => "$bl1",
			"type" => "upload");


$options[] = array( "name" => __('Заголовок первого блока','framework_localize'),
			"desc" => "Заголовок первого блока",
			"id" => $shortname."_blok1title",
			"std" => "Ноутбуки, планшеты, компьютеры",
			"type" => "text");


$options[] = array( "name" => __('Текст на ссылке первого блока','framework_localize'),
			"desc" => "Текст на ссылке первого блока",
			"id" => $shortname."_linktitle",
			"std" => "Перейти к товарам",
			"type" => "text");


$options[] = array( "name" => __('URL ссылки первого блока','framework_localize'),
			"desc" => "URL ссылки первого блока",
			"id" => $shortname."_link1",
			"std" => "",
			"type" => "text");













$options[] = array( "name" => __('Картинка второго блока','framework_localize'),
			"desc" =>  "Картинка второго блока",
			"id" => $shortname."_homb2",
			"std" => "$bl2",
			"type" => "upload");


$options[] = array( "name" => __('Заголовок второго блока','framework_localize'),
			"desc" => "Заголовок второго блока",
			"id" => $shortname."_blok2title",
			"std" => "Телефоны, смартфоны, планшеты",
			"type" => "text");


$options[] = array( "name" => __('Текст на ссылке второго блока','framework_localize'),
			"desc" => "Текст на ссылке второго блока",
			"id" => $shortname."_linktitle2",
			"std" => "Перейти к товарам",
			"type" => "text");


$options[] = array( "name" => __('URL ссылки второго блока','framework_localize'),
			"desc" => "URL ссылки второго блока",
			"id" => $shortname."_link2",
			"std" => "",
			"type" => "text");










$options[] = array( "name" => __('Картинка третьего блока','framework_localize'),
			"desc" =>  "Картинка третьего блока",
			"id" => $shortname."_homb3",
			"std" => "$bl3",
			"type" => "upload");


$options[] = array( "name" => __('Заголовок третьего блока','framework_localize'),
			"desc" => "Заголовок третьего блока",
			"id" => $shortname."_blok3title",
			"std" => "Цифровая, фото, видео техника",
			"type" => "text");


$options[] = array( "name" => __('Текст на ссылке третьего блока','framework_localize'),
			"desc" => "Текст на ссылке третьего блока",
			"id" => $shortname."_linktitle3",
			"std" => "Перейти к товарам",
			"type" => "text");


$options[] = array( "name" => __('URL ссылки третьего блока','framework_localize'),
			"desc" => "URL ссылки третьего блока",
			"id" => $shortname."_link3",
			"std" => "",
			"type" => "text");











$options[] = array( "name" => __('Картинка четвертого блока','framework_localize'),
			"desc" =>  "Картинка четвертого блока",
			"id" => $shortname."_homb4",
			"std" => "$bl4",
			"type" => "upload");


$options[] = array( "name" => __('Заголовок четвертого блока','framework_localize'),
			"desc" => "Заголовок четвертого блока",
			"id" => $shortname."_blok4title",
			"std" => "Техника для дома и кухни",
			"type" => "text");


$options[] = array( "name" => __('Текст на ссылке четвертого блока','framework_localize'),
			"desc" => "Текст на ссылке четвертого блока",
			"id" => $shortname."_linktitle4",
			"std" => "Перейти к товарам",
			"type" => "text");


$options[] = array( "name" => __('URL ссылки четвертого блока','framework_localize'),
			"desc" => "URL ссылки четвертого блока",
			"id" => $shortname."_link4",
			"std" => "",
			"type" => "text");










$options[] = array( "name" => __('Заголовок блока рейтенговых товаров','framework_localize'),
			"desc" => "Заголовок блока рейтенговых товаров",
			"id" => $shortname."_welcomeshop",
			"std" => "Заголовок блока рейтенговых товаров",
			"type" => "text");

$options[] = array( "name" => __('Текст под блоком рейтенговых товаров','framework_localize'),
			"desc" => "Текст под блоком рейтенговых товаров",
			"id" => $shortname."_welcome2shop",
			"std" => "Текст под блоком рейтенговых товаров",
			"type" => "textarea");



$options[] = array( "name" => __('Заголовок блока новостей сайта','framework_localize'),
			"desc" => "Заголовок блока новостей сайта",
			"id" => $shortname."_welcomeshop3",
			"std" => "Заголовок блока новостей сайта",
			"type" => "text");

$options[] = array( "name" => __('Текст под блоком новостей сайта','framework_localize'),
			"desc" => "Текст под блоком новостей сайта",
			"id" => $shortname."_welcome3shop",
			"std" => "Текст под блоком новостей сайта",
			"type" => "textarea");






	
/* Option Page 3 - slayder */
$options[] = array( "name" => __('Слайдер','framework_localize'),
			"sicon" => "glyphicons_086_display.png",					 
			"type" => "heading");





	
$options[] = array( "name" => __('Картинка 1слайда','framework_localize'),
			"desc" =>  "Размер картинки должен быть не менее 1018рх на 460рх",
			"id" => $shortname."_slayd",
			"std" => "$SL1",
			"type" => "upload");


$options[] = array( "name" => __('Картинка 2слайда','framework_localize'),
			"desc" =>  "Размер картинки должен быть не менее 1018рх на 460рх",
			"id" => $shortname."_slayd1",
			"std" => "$SL2",
			"type" => "upload");


	
$options[] = array( "name" => __('Картинка 3слайда','framework_localize'),
			"desc" =>  "Размер картинки должен быть не менее 1018рх на 460рх",
			"id" => $shortname."_slayd3",
			"std" => "$SL3",
			"type" => "upload");



$options[] = array( "name" => __('Картинка 4слайда','framework_localize'),
			"desc" =>  "Размер картинки должен быть не менее 1018рх на 460рх",
			"id" => $shortname."_slayd4",
			"std" => "$SL4",
			"type" => "upload");



	
$options[] = array( "name" => __('Картинка 5слайда','framework_localize'),
			"desc" =>  "Размер картинки должен быть не менее 1018рх на 460рх",
			"id" => $shortname."_slayd5",
			"std" => "$SL5",
			"type" => "upload");	





/* Option Page 3 - Metta */
$options[] = array( "name" => __('Мета','framework_localize'),
			"sicon" => "glyphicons_066_tags.png",					 
			"type" => "heading");





$options[] = array( "name" => __('Проверочный метта тег Яндекса','framework_localize'),
			"desc" => "Проверочный метта тег Яндекса",
			"id" => $shortname."_yandex_tag",
			"std" => "",
			"type" => "textarea");

$options[] = array( "name" => __('Проверочный метта тег google','framework_localize'),
			"desc" => "Проверочный метта тег google",
			"id" => $shortname."_google_tag",
			"std" => "",
			"type" => "textarea");

			
$options[] = array( "name" => __('Ключевые слова (keywords)','framework_localize'),
			"desc" => "Вводите слова через запятую.",
			"id" => $shortname."_keywords",
			"std" => "",
			"type" => "textarea");


$options[] = array( "name" => __('Описание (description)','framework_localize'),
			"desc" => "Описание (description)",
			"id" => $shortname."_description",
			"std" => "",
			"type" => "textarea");




/* Option Page 3 - foter */
$options[] = array( "name" => __('Футер','framework_localize'),
			"sicon" => "glyphicons_030_pencil.png",					 
			"type" => "heading");


$options[] = array( "name" => __('Укажите страну и город компании','framework_localize'),
			"desc" => "Укажите страну и город проживания",
			"id" => $shortname."_sity",
			"std" => "Санкт Питербург",
			"type" => "text");

$options[] = array( "name" => __('Укажите телефон  компании','framework_localize'),
			"desc" => "Укажите телефон  компании",
			"id" => $shortname."_pfone",
			"std" => "+7 420-300-3850",
			"type" => "text");


$options[] = array( "name" => __('Укажите e-mail  компании','framework_localize'),
			"desc" => "Укажите e-mail  компании",
			"id" => $shortname."_mail",
			"std" => "info@wp-city.ru",
			"type" => "text");




$options[] = array( "name" => __('Копирайт текст','framework_localize'),
			"desc" => "Пропишите текст копирайта в адинистративной части!",
			"id" => $shortname."_foter_text",
			"std" => "",
			"type" => "textarea");



$options[] = array( "name" => __('Укажите ссылку Twitter ','framework_localize'),
			"desc" => "Укажите ссылку Twitter",
			"id" => $shortname."_Twitter",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Укажите ссылку vk','framework_localize'),
			"desc" => "Укажите ссылку vk'",
			"id" => $shortname."_vk",
			"std" => "",
			"type" => "text");


$options[] = array( "name" => __('Укажите ссылку Google+','framework_localize'),
			"desc" => "Укажите ссылку Google+",
			"id" => $shortname."_Google",
			"std" => "",
			"type" => "text");


$options[] = array( "name" => __('Укажите ссылку YouTube ','framework_localize'),
			"desc" => "Укажите ссылку YouTube",
			"id" => $shortname."_YouTube",
			"std" => "",
			"type" => "text");




$options[] = array( "name" => __('Текст под поисковой формой','framework_localize'),
			"desc" => "Текст под поисковой формой",
			"id" => $shortname."_searh_text",
			"std" => "",
			"type" => "textarea");



$options[] = array( "name" => __('Текст под формой подписки','framework_localize'),
			"desc" => "Текст под формой подписки",
			"id" => $shortname."_subscribe_text",
			"std" => "",
			"type" => "textarea");



$options[] = array( "name" => __('Ваш акаунт на feedburner','framework_localize'),
			"desc" => "Ваш акаунт на feedburner",
			"id" => $shortname."_feedburner",
			"std" => "",
			"type" => "text");






/* Option Page 3 - foter */
$options[] = array( "name" => __('Статистика','framework_localize'),
			"sicon" => "glyphicons_042_pie_chart.png",							 
			"type" => "heading");




$options[] = array( "name" => __('Код Google Analytics','framework_localize'),
			"desc" => "Код Google Analytics",
			"id" => $shortname."_Analytics",
			"std" => "",
			"type" => "textarea");







update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}
?>