
<?php get_header(); ?>
	
	<div class="post-pic" style="background-image: url(<?php echo get_post_meta($post->ID, 'post_pic', true); ?>);" >
	</div>
	
	<div class="post" >

		<h2><?php the_title(); ?></h2>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit Bitch!','','.'); ?>


			<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>

