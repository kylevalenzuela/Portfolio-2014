<?php
	/*
		Template Name: Blog Homepage
	*/

?>

<?php get_header(); ?>

<<<<<<< HEAD
<div class="blogroll">

=======
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
	<?php query_posts("posts_per_page=5"); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<<<<<<< HEAD
		<div class="post-roll">

			<a href="<?php the_permalink(); ?>">
			<div class="featured-img">
				<?php 

					$key = 'featured';
					$themeta = get_post_meta($post->ID, $key, TRUE);
					
					if($themeta != '') {
						echo "<img src='". get_post_meta($post->ID, "featured", true) . "'/>";
					} else {
						echo "<img src='http://kylevalenzuela.com/wp-content/uploads/2014/01/marceline-e1389322752347.jpg'>";
					}
				?>
			</div></a>

			<div class="entry-roll">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="roll-date"><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></div>
				<?php the_excerpt() ?>
				<div class="tags-roll"> <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
			</div>
		</div>

	<?php endwhile; wp_reset_query();?>
=======
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				
			</div>

		</div>

	<?php endwhile; ?>
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<<<<<<< HEAD
</div>
=======

>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b

<?php get_footer(); ?>