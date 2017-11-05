<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Store_Villa
 */

?>
	<?php if( !( is_home() || is_front_page() ) ) { ?>
		</div>
	</div> <!-- Store Vill Container -->
	<?php } ?>

</div><!-- #content -->

	<?php do_action( 'storevilla_before_footer' ); ?>
	
		<footer id="colophon" class="site-footer" role="contentinfo" >

            <div style="background-color: #2f2f2f;color:white">

                <p style="text-align: center;margin: 0px;padding: 30px">
                    Разработано <a href="http://uniq-st.com" target="_blank" style="color: gold;text-decoration: none">Uniq Studio Team</a>
                </p>

            </div>
        </footer><!-- #colophon -->
		
	<?php do_action( 'storevilla_before_footer' ); ?>

    <a href="#" class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
