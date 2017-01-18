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
<div class="col-xs-12 col-md-10 col-md-offset-1">
<div class="col-xs-12 col-md-9">
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2><?php _e('Articulos de','html5reset'); ?> &#8216;<?php single_cat_title(); ?>&#8217; </h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2><?php _e('Etiquetado en','html5reset'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2><?php _e('Articulos de','html5reset'); ?> <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2><?php _e('Articulos de','html5reset'); ?> <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle"><?php _e('Articulos de','html5reset'); ?> <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle"><?php _e('Articulos de Autor','html5reset'); ?></h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle"><?php _e('Articulos de','html5reset'); ?></h2>
			
			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<article class="blog" id="post-<?php the_ID(); ?>">
					<div class="post-footer">	
						<?php posted_on(); ?>
					</div>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-thumb'); ?> </a>
					<div class="emcabezado">
    					<!--p class="texto-intro"><?php echo get_post_meta($post->ID, 'Resumen', true)?></p-->
    					<p><a class="blog__subtitulo" href="<?php the_permalink() ?>"><?php echo get_post_meta($post->ID, 'Subtitulo', true); ?> </a></p>
					</div>
						<!--h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2-->
						<div class="entry">
							<?php  the_content('Ver más...'); ?>
						</div>
				</article>

			<?php endwhile; ?>

			<?php post_navigation(); ?>
			
	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div></div>
<?php get_footer(); ?>
