<<<<<<< HEAD
<?php get_header(); the_post();?>


			<div class="porfolio-cat-flex">	
				
				<?php 
			 	global $query_string;


				$posts = query_posts($query_string . "posts_per_page=9&post_type=page");

				while (have_posts()) : the_post();?>
				
					<a href="<?php the_permalink(); ?>"><div class="portfolio-item ">

						<?php echo "<img src='". get_post_meta($post->ID, "portfolio_thumbnail", true) . "'/>"; ?>

						<span><h3><?php  the_title() ?></h3><?php echo "<h5>" . get_post_meta($post->ID, 'portfolio_categories', true) . "</h5>"; ?></span>

					</div></a>
				<?php endwhile; wp_reset_query(); ?>

			</div>

			
=======
<?php get_header(); ?>


		
<?php get_header(); the_post() ?>

<div class= "porfolio-cat-flex">
	
	
		<?php


			$portfolioCat = get_post_meta($post->ID, "categories", true);
			//ex value = "Illustration|27"

			$allCategories = explode(",", $portfolioCat);

			
			foreach ($allCategories as $category) { ?>

 	

				<?php $pieces = explode ("|", $category);
				// ex: $pieces[0] = "Illustration"

				$link = get_permalink($pieces[1]);

				//echo "<div class='portfolio-item'>";

				query_posts("posts_per_page=&post_type=page&post_parent=$pieces[1]");

				while (have_posts()) : the_post(); 
		?>
				
				<div class="portfolio-item ">


						<?php echo "<img src='". get_post_meta($post->ID, "portfolio_thumbnail", true) . "'/>"; ?>
				
			
						<span><h4><?php  the_title() ?></h4></span>
					
				</div>	

					<?php endwhile; wp_reset_query(); }; ?>
	


</div>

>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b


<?php get_footer(); ?>

