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

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="blog" id="post-<?php the_ID(); ?>">
					<div class="titulo"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>
					<?php custom_breadcrumbs(); ?>
					<?php the_post_thumbnail('blog-thumb'); ?>

					<!--h2 class="entry-title"><?php the_title(); ?></h2-->

					<div class="entry-content blog--vida--medica">
						
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
</div>
<?php get_footer(vm); ?>