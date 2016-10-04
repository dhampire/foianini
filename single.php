<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<div class="blog-cabecera">
	<img src="<?php echo get_template_directory_uri(); ?>/img/blog.png" alt="">
</div>
<div class="row">
	<div class="col-xs-12 col-md-10 col-md-offset-1" id="contenedor">
		<div class="col-xs-12 col-md-9">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="blog" id="post-<?php the_ID(); ?>">
					<?php the_post_thumbnail(''); ?>
					<div class="emcabezado">
    					<p><strong><?php echo get_post_meta($post->ID, 'Subtitulo', true); ?> </strong></p>
    					<p class="texto-intro"><?php echo get_post_meta($post->ID, 'Resumen', true)?></p>
					</div>

					<h2 class="entry-title"><?php the_title(); ?></h2>

					<div class="entry-content">
						
						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

					<div class="post-footer">	
							<?php posted_on(); ?>
					</div>
					</div>
					
					<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>
					
				</article>

			<?php endwhile; endif; ?>

<?php post_navigation(); ?>
</div>	
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>