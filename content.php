<?php
/**
 * @package WordPress
 * @subpackage Clinica Foianini
 * @since Clinica Foianini
 */
?>
				<article class="blog" id="post-<?php the_ID(); ?>">
					<div class="post-footer">	
						<?php posted_on(); ?>
					</div>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-thumb'); ?></a>
					<div class="emcabezado">
    					<!--p class="texto-intro"><?php echo get_post_meta($post->ID, 'Resumen', true)?></p -->
    					<p>
						<strong>
							<a class="blog__subtitulo" href="<?php the_permalink() ?>">
								<?php echo get_post_meta($post->ID, 'Subtitulo', true); ?>

							</a>
						</strong>
					</p>
					</div>
						<!--h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2-->

						<?php if (is_single()): ?>
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
						<?php else : ?>
						<div class="entry">
							<?php  the_content('Ver más...'); ?>
						</div>
					<?php endif; ?>
				</article>