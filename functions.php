<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
     
<<<<<<< HEAD
       wp_register_script('myjquery' , get_bloginfo('template_directory') . "/js/myjquery-ck.js");
       wp_enqueue_script('myjquery');

       wp_register_script('nlform' , get_bloginfo('template_directory') . "/js/nlform.js");
       wp_enqueue_script('nlform');
=======
       wp_register_script('myjquery' , get_bloginfo('template_directory') . "/js/myjquery.js");
       wp_enqueue_script('myjquery');
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
                'main_nav'=> 'Main Navigation Menu'    
                )
        );
    }
?>