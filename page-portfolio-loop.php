<?php
	/*
		Template Name: Portfolio Loop
	*/

?>

<?php get_header(); the_post() ?>

	
<<<<<<< HEAD
=======
		<?php


			$portfolioCat = get_post_meta($post->ID, "categories", true);
			//ex value = "Illustration|27"

			$allCategories = explode(",", $portfolioCat);?>

			<div class="cat-container">
				<?php foreach ($allCategories as $category) { 

				    $pieces = explode ("|", $category);
					// ex: $pieces[0] = "Illustration"

					$link = get_permalink($pieces[1]);
					echo "<div class='portfolio-cat'>";
					echo "<h2><a href='$link'>" . $pieces[0] . "</a></h2></div>"; 
				} ?>
			</div>

			<div class="porfolio-cat-flex">	
			
				<?php foreach ($allCategories as $category) { 

			 	$pieces = explode ("|", $category); ?>
			 	
				<?php query_posts("posts_per_page=&post_type=page&post_parent=$pieces[1]");

				while (have_posts()) : the_post();?>
				
					<div class="portfolio-item ">

						<?php echo "<img src='". get_post_meta($post->ID, "portfolio_thumbnail", true) . "'/>"; ?>

						<span><h4><?php  the_title() ?></h4></span>

								
						
					</div>	
				<?php endwhile; wp_reset_query(); }; ?>

			</div>

>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
			


<?php get_footer(); ?>
