
<?php get_header(); ?>

<div class="units-row">
    <div class="unit-65">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
  
 <h2 style=" margin:0 0 15px 0; font-size:28px;"><?php the_title(); ?></h2>
 
<span style="display:block; margin:-5px 0 5px 0; color: #666; font-size:12px;">
 Раздел: <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>&nbsp;/&nbsp;
 Дата: <?php the_time('j F, Y'); ?> в <?php the_time('G:i'); ?>&nbsp;/&nbsp;
 Просмотров: <?php echo get_post_meta ($post->ID,'views',true); ?>
 </span>
    
   <p><?php the_content('', FALSE, ''); ?></p> 

 
  
 <?php endwhile; else: ?>
<?php endif; ?>	   
 
 
 
 <!--Horizontal Tab-->
        <div id="horizontalTab" style="margin-top:20px">
            <ul class="resp-tabs-list">
                <li>Рекомендуем </li>
                <li>Комментарии</li>
               
                <li>Наши товары</li>
            </ul>
            <div class="resp-tabs-container">
            
            
            
                <div>
                
                  
                   <?php
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
 $args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'showposts'=>5, // Number of related posts that will be shown.
'caller_get_posts'=>1
);
// Rest is the same as the previous code
$my_query = new wp_query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) {
$my_query->the_post();
?>


<span class="rell" style="display:block; border:1px solid #eaeaea; width:170px; float:left; margin:0 10px 20px 10px; padding:7px;">
        
       <h3 style="text-align:center;"> <a id="homlink" href="<?php the_permalink(); ?>"><?php trim_title_chars(35, ''); ?></a></h3>
        
        
       
      
         <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_image_path($post->ID); ?>&h=320&w=320&zc=1" alt="" title="<?php the_title(); ?>" border="0" style="padding:6px;  " />
        
    
     
      <center><a href="<?php the_permalink(); ?>"> Читать далее <i class="fa fa-arrow-circle-o-right"></i></a></center>
     
        </span>




<?php
}

}
wp_reset_query();
}
?>
                   
                   
                   
                   
                </div>
                
                
                
                
                
                
                
                <div>
                   <?php comments_template( '', true ) ?>
                </div>
                
                
                
              <div>
               
              
                    <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 3, 'orderby' =>'rand','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            
          <span class="rell" style="display:block; border:1px solid #eaeaea; width:180px; float:left; margin:0 10px 20px 10px; padding:7px;">
        
       <h3 style="text-align:center;"> <a id="homlink" href="<?php the_permalink(); ?>"><?php trim_title_chars(35, ''); ?></a></h3>
        
        
       
         <a href="<?php the_permalink(); ?>">
         <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_image_path($post->ID); ?>&h=320&w=320&zc=1" alt="" title="<?php the_title(); ?>" border="0" style="padding:3px; " /></a>
        
    <center><?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price" style=" margin:15px 0 15px 0;font-size:22px;color:#de462a; display:block;"><?php echo $price_html; ?></span></center>
        
    <?php endif; ?>  
     
      <center><a href="<?php the_permalink(); ?>" class="btn btn-red"><i class="fa fa-shopping-cart"></i> в корзину &rarr;</a></center>
     
        </span>



 <?php endwhile; ?>
        <?php wp_reset_query(); ?>
            
                </div>  
                
                
            </div>
        </div> 
 
 
 
 
</div>

<div class="unit-35">
<div class="blok">
  <?php /* Widgetized sidebar */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Сайтбар сайта') ) : ?>
<?php endif; ?> 
    
    </div>
</div>

</div>




 
<?php get_footer(); ?>





















