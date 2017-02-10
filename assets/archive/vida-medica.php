<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(vida); ?>
 <div class="row">
 	<a href="<?php echo esc_url( home_url( '/' ) ); ?>vida-medica" class="vm__enlaces">Vida MÉDICA
 		<div class="col-xs-12 vm__back">
 			<div class="vm__back__color">
  			</div>
 		</div>
 	</a>
 </div>
<div class="row">
<div class="col-xs-12 col-md-8 col-md-offset-2" id="contenedor">
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<div class="alert alert-info margin">
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<strong><?php _e('Articulos de','html5reset'); ?> </strong> &#8216;<?php single_cat_title(); ?>&#8217; 
				<?php } ?>
			</div>

			<?php while (have_posts()) : the_post(); ?>
			
				<article class="blog vm__blog" id="post-<?php the_ID(); ?>">

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt() ?>
				</article>

			<?php endwhile; ?>

			<?php post_navigation(); ?>
			
	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
</div>

</div></div>
<?php get_footer(vm); ?>
