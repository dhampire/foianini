<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<div class="row">
<div class="col-md-12">
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

			<?php post_navigation(); ?>

			<?php while (have_posts()) : the_post(); ?>
			
                <article class="noticias col-xs-12 col-md-4" id="post-<?php the_ID; ?>">
    				<div class="titulo"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('inicio'); ?>
                        <?php endif ?>
                    </a>
    					<div class="entry">
    						<?php the_excerpt(); ?>
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
