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
						<div class="post-footer">	
								<?php posted_on(); ?>
						</div>
					<?php custom_breadcrumbs(); ?>
					<?php the_post_thumbnail('blog-thumb'); ?>
					<div class="emcabezado">
    					<!--p class="texto-intro"><?php echo get_post_meta($post->ID, 'Resumen', true)?></p-->
    					<p class="blog__subtitulo"><?php echo get_post_meta($post->ID, 'Subtitulo', true); ?> </p>
					</div>

					<!--h2 class="entry-title"><?php the_title(); ?></h2-->

					<div class="entry-content">
						
						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

					</div>
					
					<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>
					

				<div class="padding">
					<?php 
						global $post;
						$current_post = $post->ID;
						$categories = get_the_category();
						foreach ($categories as $category) :
					?>
					<div class="post-relacionado blog">
						<h4>Artículos Relacionados</h4>
						<ul class="padding">
							<?php $posts = get_posts('numberposts=5&category='. $category->term_id . '&exclude=' . $current_post);
								foreach($posts as $post) :
							?>
							<li class="rel--noticias">
								<span class="icon-right"></span>
									<a class="rel--enlaces" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
						
							<?php endforeach; ?><?php endforeach; ?>
						</ul>
					</div>
				</article>

			<?php endwhile; endif; ?>
				<!-- RELATED POST-->
				<?php 	wp_reset_query(); ?>

		</div>
		<?php get_sidebar(); ?>
	</div>	
</div>
<?php get_footer(); ?>