<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<div class="blog-cabecera">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">
		<img src="<?php echo get_template_directory_uri(); ?>/img/blog.png" alt="">
	</a>
</div>
<div class="row">
	<div class="col-xs-12 col-md-10 col-md-offset-1" id="contenedor">
		<div class="col-xs-12 col-md-9">
			<?php if (have_posts()) : while (have_posts()) : the_post(); 
				get_template_part('content', get_post_format());
			?>

			<?php endwhile; ?>
					<?php post_navigation(); ?>
			<?php else : ?>

				<h2><?php _e('Nothing Found','html5reset'); ?></h2>

			<?php endif; ?>
		</div>

		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer(); ?>
