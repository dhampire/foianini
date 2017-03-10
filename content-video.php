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

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2-->
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(''); ?></a>
						<div class="entry">
							<?php the_excerpt('Ver más...'); ?>	
						</div>
				</article>