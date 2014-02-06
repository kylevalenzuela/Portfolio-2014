
<?php get_header(); ?>
	
	<div class="post-pic" style="background-image: url(<?php echo get_post_meta($post->ID, 'post_pic', true); ?>);" >
		<div class="header-content">
			<h1><?php the_title(); ?></h1>
			<p><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></p>
			
		</div>
	</div>
	
	<div class="post" >

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<div class="tags"> <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>

				<h5 class="follow-me"><a href="https://twitter.com/kylevalenzuela" target="blank">Follow me on twitter</a></h5>

			</div>
			
			<?php edit_post_link('Edit Bitch!','','.'); ?>


			<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>

