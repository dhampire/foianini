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

		<h2><?php _e('Search Results','html5reset'); ?></h2>

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
</div>
</div>
<?php get_footer(); ?>
