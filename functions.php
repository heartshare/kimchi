<?php 

// MENU SUPPORT IN ONE LOCATION
register_nav_menu( 'primary', __( 'Primary Menu', 'Kimchi Wedding' ) );



//ENQUEUE THEME STYLES
function theme_styles()  
{ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  wp_register_style( 'main', 
  		get_template_directory_uri() . '/css/main.css', 
   		array(), 
    	false, 
    	'all' );
   
  wp_register_style( 'bgstretcher',
  		get_template_directory_uri() . '/css/bgstretcher.css',
  		array(),
  		false,
  		'all' );
  
  wp_register_style( 'supersized-gallery',
  		get_template_directory_uri() . '/css/supersized-gallery.css',
  		array(),
  		false,
  		'all' );
  
  wp_register_style( 'ie',
  		get_template_directory_uri() . '/css/ie.css',
  		array(),
  		false,
  		'all' );

  // enqueing:
  wp_enqueue_style( 'main' );
  wp_enqueue_style( 'bgstretcher' );
  wp_enqueue_style( 'supersized-gallery' );
  wp_enqueue_style( 'ie' );
}
add_action('wp_enqueue_scripts', 'theme_styles');


//ENQUEUE THEME SCRIPTS
function theme_scripts() {
	//registering
	wp_register_script( 'modernizr', //handle
			get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'supersized', //handle
			get_template_directory_uri() . '/js/supersized.3.2.7.js', //src
			array(), 	//depends
			false, 	//version
			false ); 	//in-footer
	
	wp_register_script( 'shutter', //handle
			get_template_directory_uri() . '/js/supersized.shutter.min.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'main', //handle
			get_template_directory_uri() . '/js/main.js', //src
			array(), 	//depends
			false, 		//version
			true ); 	//in-footer
	
	wp_register_script( 'cookie', //handle
			get_template_directory_uri() . '/js/jquery.cookie.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'easing', //handle
			get_template_directory_uri() . '/js/jquery.easing.1.3.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'jplayer', //handle
			get_template_directory_uri() . '/js/jquery.jplayer.min.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'mobilemenu', //handle
			get_template_directory_uri() . '/js/jquery.mobilemenu.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'bgstretcher', //handle
			get_template_directory_uri() . '/js/bgstretcher.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'forms', //handle
			get_template_directory_uri() . '/js/forms.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'html5', //handle
			get_template_directory_uri() . '/js/html5.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'fitvids', //handle
			get_template_directory_uri() . '/js/fitvids.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'flexslider', //handle
			get_template_directory_uri() . '/js/flexslider-min.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'gridrotator', //handle
			get_template_directory_uri() . '/js/gridrotator.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'isotope', //handle
			get_template_directory_uri() . '/js/isotope.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'preloader', //handle
			get_template_directory_uri() . '/js/preloader.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'tweet', //handle
			get_template_directory_uri() . '/js/tweet.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'login', //handle
			get_template_directory_uri() . '/js/login.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	wp_register_script( 'superfish', //handle
			get_template_directory_uri() . '/js/superfish.js', //src
			array(), 	//depends
			false, 		//version
			false ); 	//in-footer
	
	// enqueing:
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'supersized' );
	wp_enqueue_script( 'shutter' );
	wp_enqueue_script( 'main' );
	wp_enqueue_script( 'cookie' );
	wp_enqueue_script( 'easing' );
	wp_enqueue_script( 'jplayer' );
	wp_enqueue_script( 'mobilemenu' );
	wp_enqueue_script( 'bgstretcher' );
	wp_enqueue_script( 'forms' );
	wp_enqueue_script( 'html5' );
	wp_enqueue_script( 'fitvids' );
	wp_enqueue_script( 'flexslider' );
	wp_enqueue_script( 'gridrotator' );
	wp_enqueue_script( 'isotope' );
	wp_enqueue_script( 'preloader' );
	wp_enqueue_script( 'tweet' );
	wp_enqueue_script( 'login' );
	wp_enqueue_script( 'superfish' );
	
}
	// enqueing:
add_action('wp_enqueue_scripts', 'theme_scripts');

?>