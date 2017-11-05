<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $messages ) return;
?>

<?php foreach ( $messages as $message ) : ?>
	<div id="wert" style="background:#9ad6f2;
	border:1px solid #76aec8;
	
	-moz-border-radius:4px;
   -webkit-border-radius:4px; text-align:center; display:block; margin-bottom:30px; padding:10px "><?php echo wp_kses_post( $message ); ?></div>
<?php endforeach; ?>