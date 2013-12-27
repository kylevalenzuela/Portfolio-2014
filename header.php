<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	


	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

	
	
</head>

<body <?php body_class(); ?>>
	
	

		<nav>
			
			<!-- SubHeader
			
			 <div class="description"><?php bloginfo('description'); ?></div> 
				
			-->

			<a href="<?php echo get_option('home'); ?>/"><div class="header-logo"></div></a>
			
			<div class="name"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
			

			
				<ul class="main-nav">
					<li><a href="http://localhost:8888/portfolio"><div class="icon-font">h</div><span>Portfolio</span></a></li>
					<li><a href="#"><div class="icon-font">t</div><span>About</span></a></li>
					<li><a href="#"><div class="icon-font">d</div><span>Blog</span></a></li>
				</ul>
			
			
					<!-- <?php wp_nav_menu(array('menu'=>'Main Nav Menu')); ?>-->


		

			
				<ul class="social-nav">
					<li><a href="https://github.com/kylevalenzuela" target="blank"><div class="icon-font">h</div><span>Github</span></a></li>
					<li><a href="https://twitter.com/kylevalenzuela" target="blank"><div class="icon-font">t</div><span>Twitter</span></a></li>
					<li><a href="http://dribbble.com/kvalenzuela" target="blank"><div class="icon-font">d</div><span>Dribbble</span></a></li>
				</ul>
			
				
		

		</nav>

	<div class="page-wrap">	

		

		

