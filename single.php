
<?php get_header(); ?>
	
	<div class="post-pic" style="background-image: url(<?php echo get_post_meta($post->ID, 'post_pic', true); ?>);" >
<<<<<<< HEAD
		<div class="header-content">
			<h1><?php the_title(); ?></h1>
			<p><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></p>
			
		</div>
=======
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
	</div>
	
	<div class="post" >

<<<<<<< HEAD
=======
		<h2><?php the_title(); ?></h2>

>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
<<<<<<< HEAD
=======
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
<<<<<<< HEAD
				<div class="tags"> <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>

				<h5 class="follow-me"><a href="https://twitter.com/kylevalenzuela" target="blank">Follow me on twitter</a></h5>
=======
				<?php the_tags( 'Tags: ', ', ', ''); ?>
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b

			</div>
			
			<?php edit_post_link('Edit Bitch!','','.'); ?>


			<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>

