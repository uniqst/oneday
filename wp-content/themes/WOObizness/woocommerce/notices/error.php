<?php
/**
 * Show error messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $messages ) return;
?>
<ul >
	<?php foreach ( $messages as $message ) : ?>
		<li style="background:#FEF4F1;
	border:1px solid #F7A68A;
	
	padding:5px;
	-moz-border-radius:4px;
   -webkit-border-radius:4px; display:block; margin-bottom:10px;"><?php echo wp_kses_post( $message ); ?></li>
	<?php endforeach; ?>
</ul>