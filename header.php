<?php
/**
 * The Header for our theme.
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html lang="en"><!--<![endif]-->

<head>

 <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
 
 <link rel="icon" href="images/favicon.ico" type="image/x-icon">
 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

 

 <!--[if lt IE 8]>
      <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
          <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
       </a>
     </div>
    <![endif]-->
 <!--[if lt IE 9]>
   		<script src="js/html5.js"></script>
  		<link rel="stylesheet" href="css/ie.css"> 
	<![endif]-->
	
	
<!-- START WORDPRESS HEAD -->

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php

	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<!-- END WORDPRESS HEAD -->

 <script> 
 	//START JQUERY
 	jQuery(document).ready(function($){

 	 		//START SUPERSIZED CALL SCRIPT
			$(window).load(function(){	
				jQuery.supersized({
				
					// Functionality
					slide_interval          :   2000,		// Length between transitions
					transition              :   4, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1500,		// Speed of transition															   

					// Components						
					slides 					:  	[			// Slideshow Images
					{image : 'http://localhost/wordpress/wp-content/uploads/2013/02/IMG_1779.jpg',
					 image : 'http://localhost/wordpress/wp-content/uploads/2013/02/IMG_1802.jpg'}																										
												]					                                      
				});
		    });
		


		
	$(window).load(function() {
							
	//SPLASH MENU HOVERS					
	jQueryx = $(window).width();
	if(jQueryx >= 768)
	{ 
	
	$('.enter').hover(
	  function(){
		$(this).find("span").stop().animate({marginLeft:24},300,'easeOutBack')},  			
		 
	  function(){
		$(this).find("span").stop().animate({marginLeft:14},400,'easeOutQuart')}  	
	)
			
	$('.enter').toggle(
	  function(){
    	$(this).stop().animate({left:'-300px'},400)},  			
		 
	  function(){
    	$(this).stop().animate({left:'238px'},400);}
    )
		    
    $('.enter').toggle(
	  function(){
		$('.splash-menu').stop().delay(200).animate({left:'238px'},500,'easeOutQuart')},  			
		 
	 function(){
		$('.splash-menu').stop().delay(200).animate({left:'-400px'},400);}
	)
				
 	$('.enter').toggle(
	  function(){
		 $(this).parent().stop().animate({width:'808px'},500,'easeOutQuart')},  			
		 
	 function(){
		$(this).parent().stop().animate({width:'422px'},400);}
	)
		

    }	
  
  
		});	
		
 	});
 </script>
 
</head>

<body <?php body_class(); ?> id="splash-1">


<div class="spinner"></div>
<div id="body-wrapper"> 
    
   <!--==============================header=================================-->
   <header class="splash">
    <div class="btn-logo"> 
       <!--=======logo======-->
          <h1><a href="<?php echo home_url(); ?>">Kim + Chi <span>Hyun & Duri</span></a></h1>
       
       <!--=======menu======-->
       <ul class="splash-menu menu-mobile">
       <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
       </ul>
       
       <div class="enter">Enter <span></span></div>
          <div class="clear"></div>
     </div>
  </header>
 </div>
