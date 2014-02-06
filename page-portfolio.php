<?php
	/*
		Template Name: Portfolio Page
	*/

?>

<?php get_header(); the_post(); ?>


<div class="port-title"><h1><?php the_title() ?><h1></div>

<div class="entry">

<?php the_content(); ?>

</div>	

<?php get_footer(); ?>
