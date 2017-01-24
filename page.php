<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="row post" id="post-<?php the_ID(); ?>"> 

		<div class="col-lg-12 col-xs-12 entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>

		</article>
		

		<?php endwhile; endif; ?>

<?php get_footer(); ?>
