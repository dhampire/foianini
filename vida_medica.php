<?php
/**
 * Template Name: Vida Medica
 * Description: Gaceta Medica
 * @package WordPress
 * @subpackage Clinica Foianini
 * @since Clinica Foianini
 */
 get_header(vida); ?>
 <!-- titulo-->
 <div class="row">
 	<a href="<?php echo esc_url( home_url( '/' ) ); ?>vida-medica" class="vm__enlaces">Vida MÉDICA
 		<div class="col-xs-12 vm__back">
 			<div class="vm__back__color">
  			</div>
 		</div>
 	</a>
 </div>
<!-- DESCRIPCION -->
<div class="row vm__box__descripcion">
	<div class="col-xs-12 vm__descripcion">
		<strong>VIDAmédica</strong>, es una <strong>publicación digital</strong> de la Clínica Foianini orientada a generar un <strong>espacio donde los profesionales del área médica y asistencial relacionados con la clínica pueden dar a conocer los trabajos realizados</strong> producto de su desarrollo profesional.
	</div>
</div>

<!--div class="row">
	<div class="col-md-3">
		<div class="vm__destacados vm__disertacion vm__isotipo">
			<?php $the_query = new WP_Query( 'cat=26&showposts=1' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<h3 class="vm__titulos"><a class="vm__enlaces" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<a class="vm__icons__categorias" href="" title="Eventos Científicos"><img src="<?php bloginfo('template_url'); ?>/img/vm/disertaciones.png" alt="Eventos Científicos"></a>
					<a class="vm_icons" href="<?php the_permalink() ?>"><span class="fa fa-plus-circle"></span></a>
			<?php
            endwhile;
            wp_reset_postdata();
            ?>
		</div>
	</div>
	<div class="col-md-3">
		<div class="vm__destacados vm__publicaciones vm__isotipo">
			<?php $the_query = new WP_Query( 'cat=24&showposts=1' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<h3 class="vm__titulos"><a class="vm__enlaces" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<a class="vm__icons__categorias" href="" title="Eventos Científicos"><img src="<?php bloginfo('template_url'); ?>/img/vm/publicaciones.png" alt="Eventos Científicos"></a>
					<a class="vm_icons" href="<?php the_permalink() ?>"><span class="fa fa-plus-circle"></span></a>
			<?php
            endwhile;
            wp_reset_postdata();
            ?>
		</div>
	</div>
	<div class="col-md-6">
		<div class="vm__destacados vm__eventos vm__isotipo">
			<?php $the_query = new WP_Query( 'cat=25&showposts=1' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<h3 class="vm__titulos"><a class="vm--titulo--evento" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<div class="vm__evento__lugar"><?php echo get_post_meta($post->ID, 'Organizadores', true)?></div>
				<div class="vm__evento__fecha"><?php echo get_post_meta($post->ID, 'Lugar', true)?></div>

 

				<a class="vm__icons__categorias" href="" title="Eventos Científicos"><img src="<?php bloginfo('template_url'); ?>/img/vm/eventos.png" alt="Eventos Científicos"></a>
				<a class="vm_icons" href="<?php the_permalink() ?>"><span class="fa fa-plus-circle"></span></a>
			<?php
            	endwhile;
            wp_reset_postdata();
            ?>

		</div>
	</div>
</div-->

<!-- Publicaciones más extensas-->
<div class="row margin--bottom">
	<?php $the_query = new WP_Query( 'cat=25&showposts=2' ); ?>
	<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	<div class="col-md-6 vm__borde__medio">
		<div class="vm__articulo">
			<div class="vm__articulo__title">
				<h3><a class="vm__articulo__titulo" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<div class="vm__articulo__subtitulo"><?php echo get_post_meta($post->ID, 'Subtitulo', true); ?></div>
			</div>
			<div class="vm__articulo__post">
				<?php the_content(); ?>
				<a class="vm_icons vm__plus__articulos" href="<?php the_permalink() ?>"><span class="fa fa-plus-circle"></span></a>
			</div>
		</div>
	</div>
	<?php
        endwhile;
            wp_reset_postdata();
	?>
</div>

<!-- resumenes-->

<div class="row vm__resumen">
	<div class="col-md-12 vm__resumen__contenedor vm__publicaciones">

		<div class="col-md-8 col-md-offset-2">
			<h3 class="vm__titulos vm__destacados__titulos vm__destacados--publicaciones">Publicaciones</h3>
			<?php $the_query = new WP_Query( 'cat=24&showposts=3' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<li class="vm__contenedor__listas col-md-11 col-md-offset-1"><a class="vm__enlaces" href="<?php the_permalink() ?>"><?php the_title(); ?>
				<a class="vm__float__right vm_icons" href="<?php the_permalink() ?>"><span class="fa fa-plus-circle"></span></a>
				<?php
            		endwhile;
            		wp_reset_postdata();
            	?>
				</li>			
		</div>
		<div class="col-md-1 flechas__ajuste">				
			<a class="vm__flechas" href="<?php echo home_url() ?>/category/vida-medica/publicaciones">
				<img src="<?php bloginfo('template_url'); ?>/img/vm/vm__flechas.png" alt="">
			</a>	
		</div>
	</div>
	<div class="col-md-12 vm__resumen__contenedor vm__eventos">
		<div class="col-md-8 col-md-offset-2">
		<h3 class="vm__titulos vm__destacados__titulos vm__destacados--eventos">Eventos Científicos</h3>
			<?php $the_query = new WP_Query( 'cat=25&showposts=3' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<li class="vm__contenedor__listas col-md-11 col-md-offset-1"><a class="vm__enlaces" href="<?php the_permalink() ?>"><?php the_title(); ?>
				<a class="vm__float__right vm_icons" href="<?php the_permalink() ?>"><span class="fa fa-plus-circle"></span></a>

				<?php
            		endwhile;
            		wp_reset_postdata();
            	?>
				</li>
		</div>
		<div class="col-md-1 flechas__ajuste">
				<a class="vm__flechas" href="<?php echo home_url() ?>/category/vida-medica/eventos">
					<img src="<?php bloginfo('template_url'); ?>/img/vm/vm__flechas.png" alt="">
				</a>
		</div>
	</div>
	<div class="col-md-12 vm__resumen__contenedor vm__disertacion">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="vm__titulos vm__destacados__titulos vm__destacados--disertaciones">Disertaciones</h3>
			<?php $the_query = new WP_Query( 'cat=26&showposts=3' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<li class="vm__contenedor__listas col-md-11 col-md-offset-1"><a class="vm__enlaces" href="<?php the_permalink() ?>"><?php the_title(); ?>
				<a class="vm__float__right vm_icons" href="<?php the_permalink() ?>"><span class="fa fa-plus-circle"></span></a>
				<?php
            		endwhile;
            		wp_reset_postdata();
            	?>
				</li>
		</div>
		<div class="col-md-1 flechas__ajuste">
				<a class="vm__flechas" href="<?php echo home_url() ?>/category/vida-medica/disertaciones">
					<img src="<?php bloginfo('template_url'); ?>/img/vm/vm__flechas.png" alt="">
				</a>
		</div>		
	</div>
</div>
<?php get_footer(vm); ?>