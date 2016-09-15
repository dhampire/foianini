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
<div id="contenedor">
	<div class="contenido-blog izquierda">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="blog" id="post-<?php the_ID(); ?>">

					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()): ?>
						   <?php the_post_thumbnail(''); ?>
						<?php endif ?>
					</a>

					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>


					<div class="entry">
						<?php  the_content('Continua Leyendo'); ?>
					</div>
				<div class="post-footer">	
					<?php the_category(__('Categoria: ','Foianini'), '&gt;  ', '');?> | 
					<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?> | 
					<?php posted_on(); ?>
				</div>
			</article>

		<?php endwhile; ?>

		<?php post_navigation(); ?>

		<?php else : ?>

			<h2><?php _e('Nothing Found','html5reset'); ?></h2>

		<?php endif; ?>
	</div>

<?php get_sidebar();?>
</div>
<?php get_footer(); ?>
