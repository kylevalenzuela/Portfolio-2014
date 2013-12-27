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



<?php get_footer(); ?>

