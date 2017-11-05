<?php get_header(); ?>
 










<div class="units-row">
    <div class="unit-100 jever" style="border-bottom:2px solid #dd3c1e;"><h1 style="text-align:center; line-height:38px;"><?php echo get_option('WOOBISNES_welcome'); ?><br /><small class="jeter" style="font-size:17px; padding-top:10px; display:block;"><?php echo get_option('WOOBISNES_welcome2'); ?></small></h1><center><div id="triangle-down"></div></center></div>
   
</div>


<div class="units-row" style="margin-bottom:50px">
    <div class="unit-25 topviev"><?php
$homb = get_option('WOOBISNES_homb');
echo '<img src="'.$homb.'" />';
?><h2><?php echo get_option('WOOBISNES_blok1title'); ?></h2><center> <a href="<?php echo get_option('WOOBISNES_link1'); ?>" class="morekat"> <?php echo get_option('WOOBISNES_linktitle'); ?> <i class="fa fa-arrow-circle-o-right"></i></a></center> </div>
    
    
      <div class="unit-25 topviev"><?php
$homb2 = get_option('WOOBISNES_homb2');
echo '<img src="'.$homb2.'" />';
?><h2><?php echo get_option('WOOBISNES_blok2title'); ?></h2><center> <a href="<?php echo get_option('WOOBISNES_link2'); ?>" class="morekat"> <?php echo get_option('WOOBISNES_linktitle2'); ?> <i class="fa fa-arrow-circle-o-right"></i></a></center> </div>
    
    
    
   <div class="unit-25 topviev"><?php
$homb3 = get_option('WOOBISNES_homb3');
echo '<img src="'.$homb3.'" />';
?><h2><?php echo get_option('WOOBISNES_blok3title'); ?></h2> <center><a href="<?php echo get_option('WOOBISNES_link3'); ?>" class="morekat"> <?php echo get_option('WOOBISNES_linktitle3'); ?> <i class="fa fa-arrow-circle-o-right"></i></a> </center></div>
    
    
<div class="unit-25 topviev"><?php
$homb4 = get_option('WOOBISNES_homb4');
echo '<img src="'.$homb4.'" />';
?><h2><?php echo get_option('WOOBISNES_blok4title'); ?></h2> <center><a href="<?php echo get_option('WOOBISNES_link4'); ?>" class="morekat"> <?php echo get_option('WOOBISNES_linktitle4'); ?> <i class="fa fa-arrow-circle-o-right"></i></a></center> </div>
 
</div>




<div class="units-row">
    <div class="unit-100 jever" style="border-bottom:2px solid #dd3c1e;"><h1 style="text-align:center; line-height:27px; margin-bottom:14px"><?php echo get_option('WOOBISNES_welcomeshop'); ?> <br /><small style="font-size:17px; padding-top:10px; display:block;"> <?php echo get_option('WOOBISNES_welcome2shop'); ?> </small></h1><center><div id="triangle-down"></div></center></div>
   
</div>




<div class="slider4">
    <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 12, 'orderby' =>'rand','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

           
           
           <div class="slide">
             
        
       <h3 style="text-align:center;"> <a id="homlink" href="<?php the_permalink(); ?>"><?php trim_title_chars(35, ''); ?></a></h3>
        
        
       
        
         <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_image_path($post->ID); ?>&h=320&w=320&zc=1" alt="" title="<?php the_title(); ?>" border="0" style="padding:3px; " />
        
    <center><?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price" style=" margin:15px 0 15px 0;font-size:22px;color:#de462a; display:block;"><?php echo $price_html; ?></span></center>
        
    <?php endif; ?>  
     
      <center><a href="<?php the_permalink(); ?>" class="btn btn-red"><i class="fa fa-shopping-cart"></i>&nbsp; Купить &rarr;</a></center>
    
   </div>    
       
       
  
    
       
       
       
       
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
</div>



<div class="units-row" style=" padding-top:30px; display:block;">
    <div class="unit-100 jever" style="border-bottom:2px solid #dd3c1e;"><h1 style="text-align:center; line-height:27px; margin-bottom:14px"><?php echo get_option('WOOBISNES_welcomeshop3'); ?> <br /><small style="font-size:17px; padding-top:10px; display:block;"> <?php echo get_option('WOOBISNES_welcome3shop'); ?> </small></h1><center><div id="triangle-down"></div></center></div>
   
</div>



<div class="slider5">

 

 <?php query_posts( 'posts_per_page=12' ) ?>
                <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>

<div class="slide">


 <h2 style=" margin:0 0 15px 0; font-size:24px;"><a id="homlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 <span style="display:block; margin:-5px 0 5px 0; color: #666; font-size:12px;">
 Раздел: <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>&nbsp;/&nbsp;
 Дата: <?php the_time('j F, Y'); ?> в <?php the_time('G:i'); ?>&nbsp;/&nbsp;
 Просмотров: <?php echo get_post_meta ($post->ID,'views',true); ?>
 </span>
 <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_image_path($post->ID); ?>&h=120&w=120&zc=1" alt="" title="<?php the_title(); ?>" style="border:1px solid #eaeaea; padding:5px; float:left; margin:5px 20px 20px 0;" />  
  
   <p><?php 
$content = get_the_content();
$content = strip_tags($content);
echo mb_substr($content, 0, 270). '...';
?><a href="<?php the_permalink(); ?>"> Читать далее <i class="fa fa-arrow-circle-o-right"></i></a></p> 
 

</div>

 <?php endwhile ?>
                <?php endif ?>
                <?php wp_reset_query(); ?> 
                
  
  </div>             
		
<?php get_footer(); ?>