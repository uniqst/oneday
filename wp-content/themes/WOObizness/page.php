<?php get_header(); ?>

<div class="units-row">
    <div class="unit-65">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
  <div style="border-bottom:2px solid #dd3c1e; margin-bottom:30px">
 <h1 style="text-align:center; line-height:8px;"><?php the_title(); ?></h1><center><div id="triangle-down"></div></center>
   </div>
   
    
   <p><?php the_content(''); ?></p> 
   
 
  
 <?php endwhile; else: ?>
<?php endif; ?>	   
 
</div>

<div class="unit-35">
 Лента на заказ – это востребованная услуга, которая позволяет подчеркнуть заказчику свою индивидуальность и неповторимость. Известно, что атласные ленты на заказ, которые визуально всегда воспринимаются
</div>

</div>




 
<?php get_footer(); ?>