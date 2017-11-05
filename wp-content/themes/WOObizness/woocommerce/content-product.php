<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>









<li style="margin:0 17px 17px 0">

	

	<h3 class="tutl" style="text-align:center;"> <a id="homlink" href="<?php the_permalink(); ?>"><?php trim_title_chars(35, ''); ?></a></h3>
    
  

		
        
       
  
         <img class="rooter" src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_image_path($post->ID); ?>&h=320&w=320&zc=1" alt="" title="<?php the_title(); ?>" border="0" />
        
   
        
      <center><?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price" style=" margin:15px 0 15px 0;font-size:22px;color:#de462a; display:block;"><?php echo $price_html; ?></span></center>
    
<?php endif; ?>
 


 <center><a href="<?php the_permalink(); ?>" class="btn btn-red"><i class="fa fa-shopping-cart"></i> в корзину &rarr;</a></center>
 
 
 
     
      

		
       




</li>



