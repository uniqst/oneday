

<?php get_header(); ?>



<div class="units-row">























    <div class="unit-70">
    
   
    
<?php woocommerce_content(); ?>
</div>

<div class="unit-30">
 <div class="blok">
  <?php /* Widgetized sidebar */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Сайтбар woocommerce') ) : ?>
<?php endif; ?> 
    
    </div>
</div>

</div>




 
<?php get_footer(); ?>