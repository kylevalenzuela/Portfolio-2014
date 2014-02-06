<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<<<<<<< HEAD
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
=======
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

<<<<<<< HEAD

=======
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
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
<<<<<<< HEAD

	
	

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
=======
	


	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b

	
	
</head>

<body <?php body_class(); ?>>
	
	

		<nav>
			
			<!-- SubHeader
			
			 <div class="description"><?php bloginfo('description'); ?></div> 
				
			-->

			<a href="<?php echo get_option('home'); ?>/"><div class="header-logo"></div></a>
			
			<div class="name"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
<<<<<<< HEAD

				
			<?php 

			if (is_page(8)){
				echo "<div class='back-mobile' style='display:none;'>";
			} else {
				echo "<div class='back-mobile'>";
			}

				if (is_page_template('page-portfolio.php')) {
					echo "<a style='display: none;'></a>";
				} elseif (is_single()) {
					echo "<a href='http://kylevalenzuela.com/blog'><div class='ico'><</div></a>";
				} else {
					echo "<a href='/'><div class='ico'><</div></a>";
				
			}?>
				
			</div>

				<ul class="main-nav">
					<li class="<?php if (is_page('8')) { echo 'current_page_item'; }?>"><a href="http://kylevalenzuela.com/portfolio"><div class="icon-font">2</div><span>Portfolio</span></a></li>
					<li class="<?php if (is_page('4')) { echo "current_page_item"; }?>"><a href="http://kylevalenzuela.com/about/"><div class="icon-font">1</div><span>About</span></a></li>
					<li class="<?php if (is_page('6')) { echo "current_page_item"; }?>"><a href="http://kylevalenzuela.com/blog"><div class="icon-font">w</div><span>Blog</span></a></li>
					<li><a href="http://github.com/kylevalenzuela" target="blank"><div class="icon-font">h</div><span>Github</span></a></li>
					<li><a href="http://twitter.com/kylevalenzuela" target="blank"><div class="icon-font">t</div><span>Twitter</span></a></li>
					<li><a href="http://www.behance.net/valenzuelak" target="blank"><div class="icon-font">b</div><span>Behance</span></a></li>
				</ul>
					<!-- <?php wp_nav_menu(array('menu'=>'Main Nav Menu')); ?>-->
		</nav>

	<div class="page-wrap">	
		
	<?php if (is_front_page()) {?>	
		<ul class="mobile-nav">
			<li class="<?php if (is_page('8')) { echo 'current_page_item'; }?>"><a href="http://kylevalenzuela.com/portfolio"><div class="icon-font">2</div><span>Portfolio</span></a></li>
			<li class="<?php if (is_page('4')) { echo "current_page_item"; }?>"><a href="http://kylevalenzuela.com/about/"><div class="icon-font">1</div><span>About</span></a></li>
			<li class="<?php if (is_page('6')) { echo "current_page_item"; }?>"><a href="http://kylevalenzuela.com/blog"><div class="icon-font">w</div><span>Blog</span></a></li>
			<li>
				<a href="https://github.com/kylevalenzuela" target="blank"><div class="icon-font">h</div></a>
				<a href="https://twitter.com/kylevalenzuela" target="blank"><div class="icon-font">t</div></a>
				<a href="https://www.behance.net/valenzuelak" target="blank"><div class="icon-font">b</div></a>
			</li>
		</ul>
	<?php } else {
		echo "<ul class='mobile-nav' style='display:none'></ul>";
	}?>
=======
			

			
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

		
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b

		

