<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?php echo get_option('WOOBISNES_favicon'); ?>" />
<meta name="keywords" content="<?php echo get_option('WOOBISNES_keywords'); ?>" />
<meta name="description" content="<?php echo get_option('WOOBISNES_description'); ?>" />
<?php
				// Value from Text Area
				$google_tag = get_option('WOOBISNES_google_tag');
                echo stripslashes(stripslashes( $google_tag));
				?>	
<?php
				// Value from Text Area
				$yandex_tag = get_option('WOOBISNES_yandex_tag');
                echo stripslashes(stripslashes( $yandex_tag));
				?>	
<title><?php if (is_home () ) {    bloginfo('name');} elseif ( is_category() ) {    single_cat_title(); echo ' - ' ; bloginfo('name');} elseif (is_single() ) {    single_post_title();} elseif (is_page() ) {    bloginfo('name'); echo ': '; single_post_title();} else {    wp_title('',true);} ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<div class="inner_copy"><span style="font-style:italic; ">Тема создана проектом <a href="http://www.wp-city.ru">www.wp-city.ru</a>  Создание индивидуального дизайна для Вас!</span></div>
<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
   
<?php
if ( is_singular() && get_option( 'thread_comments' ) )
wp_enqueue_script( 'comment-reply' );
wp_head();
?>

</head>

<body <?php body_class(); ?>>



 <div class="cbp-af-header">
<div style="background:#333; color:#FFF; padding-bottom:5px ">
<div class="units-row geer" style="max-width:1000px; margin:0 auto 0 auto; padding:0 20px 0 20px;">
    <div class="unit-53 vopros">тел: +7 (495) 649-70-75</div>
     
    <div class="unit-53 carttop"> <?php global $woocommerce; ?>

<i class="fa fa-shopping-cart fa-lg"></i> &nbsp;
<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d товар', '%d товаров', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a></div>
</div>

</div>











<div class="units-row" style="max-width:1000px; margin:0 auto 0 auto; padding:0 20px 0 20px;">
    <div class="unit-30"><div align="center"><a href="<?php echo get_home_url(); ?>" ><?php
// Value from Image Upload
$Logotip_sitelogo = get_option('WOOBISNES_Logotip_sitelogo');
 echo '<img style="border:none;" src="'.$Logotip_sitelogo.'" />';
?></a></div></div>
   <!--меню-->  
    <div class="unit-70">
    
    <nav>
<div align="center"><a id="touch-menu" class="mobile-menu" href="#"><i class="fa fa-th-large fa-lg"></i></a></div>
<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_id' => 'navigation' ) ); ?>
</nav>
    
    
    </div>
    
    
    
    
    
</div>
    
    		
			</div>
            
            
            
            
            
            
            
            
  <div id="wraper">







            
