<?php get_header(); ?>

<div class="units-row">
    <div class="unit-65">
    
     <ul class="blocks preds">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
   <li>
 <h2 style=" margin:0 0 15px 0; font-size:28px;"><?php the_title(); ?></h2>
 <span style="display:block; margin:-5px 0 5px 0; color: #666; font-size:12px;">
 Раздел: <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>&nbsp;/&nbsp;
 Дата: <?php the_time('j F, Y'); ?> в <?php the_time('G:i'); ?>&nbsp;/&nbsp;
 Просмотров: <?php echo get_post_meta ($post->ID,'views',true); ?>
 </span>
 <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_image_path($post->ID); ?>&h=150&w=150&zc=1" alt="" title="<?php the_title(); ?>" style="border:1px solid #eaeaea; padding:5px; float:left; margin:5px 20px 20px 0;" />  
  
   <p><?php 
$content = get_the_content();
$content = strip_tags($content);
echo mb_substr($content, 0, 360). '...';
?></p> 
 <a href="<?php the_permalink(); ?>" class="btnsin btn-red">Читать далее &rarr;</a>
  </li>
  
 <?php endwhile; else: ?>
<?php endif; ?>	   
 </ul>
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