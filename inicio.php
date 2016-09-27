<?php
/**
 * Template Name: Front
 * Description: Pagina de Inicio
 * @package WordPress
 * @subpackage Clinica Foianini
 * @since Clinica Foianini
 */
 get_header(); ?>
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
     <div id="slide">
     	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("foianini", ""); } ?>
     </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-12 contenedor-noticias">
            <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>`
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <article class="noticias" id="post-<?php the_ID; ?>">
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
               
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
     </div>
</div>

<div class="row">
    <div id="banner">
        <div class="col-xs-12 col-md-6 col-lg-6 frase">
            <h3>Nueva Clínica Foiniani sin ir más lejos, la clínica que todos esperábamos</h3>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 banner-video"></div>
    </div>
</div>


<?php get_footer(); ?>
