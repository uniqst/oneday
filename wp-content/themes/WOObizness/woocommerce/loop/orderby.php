<div class="box effect2">
  <div class="flexslider" style="margin-bottom:80px">
	    <ul class="slides">
        
	    	<li><?php
$slayd = get_option('WOOBISNES_slayd');
echo '<img src="'.$slayd.'" />';
?>
            
            </li>
            
            
            <li><?php
$slayd1 = get_option('WOOBISNES_slayd1');
echo '<img src="'.$slayd1.'" />';
?>
            	
            </li>
            
            
            
            <li><?php
$slayd3 = get_option('WOOBISNES_slayd3');
echo '<img src="'.$slayd3.'" />';
?>
            	
            </li>
            
            
            
            
            
            <li><?php
$slayd4 = get_option('WOOBISNES_slayd4');
echo '<img src="'.$slayd4.'" />';
?>
            	
            </li>
            
            
            <li><?php
$slayd5 = get_option('WOOBISNES_slayd5');
echo '<img src="'.$slayd5.'" />';
?>
            	
            </li>
            
            
	    </ul>
	  </div>

</div>






<?php
/**
 * Show options for ordering
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
 <form class="woocommerce-ordering" method="get" style=" width:100%; display:block; ">
	<span style="margin:5px 5px 0 0; float:left">Сортировать:&nbsp;</span> <select name="orderby" class="orderby">
		<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
			<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
		<?php endforeach; ?>
	</select>
	<?php
		// Keep query string vars intact
		foreach ( $_GET as $key => $val ) {
			if ( 'orderby' === $key || 'submit' === $key ) {
				continue;
			}
			if ( is_array( $val ) ) {
				foreach( $val as $innerVal ) {
					echo '<input type="hidden" name="' . esc_attr( $key ) . '[]" value="' . esc_attr( $innerVal ) . '" />';
				}
			} else {
				echo '<input type="hidden" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
			}
		}
	?>
</form>













