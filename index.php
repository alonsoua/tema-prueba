<?php get_header(); ?>	<!-- //Llamamos al header en header.php -->
			
<section id="main-content">
	
	<!-- Loop para mostrar posts -->
	<?php if( have_posts() ) : while(have_posts()) : the_post(); ?>
	
	<article class="post resume">

		<header class="post-title">

			<h2>

				<a href="<?php the_permalink();?>"><?php the_title(); ?></a>

			</h2>

			<small class="meta"><?php the_time( get_option('date_format'));?> &bull; <a href=""><?php the_category(', '); ?></a></small>

		</header>

		<div class="post-content">

			<?php the_excerpt();?>

			<a href="<?php the_permalink();?>" class="readmore"><?php _e('Seguir leyendo &rarr;', 'apk'); ?></a>

		</div>

	</article>
	<!-- Fin Loop -->
	
	<?php endwhile; else : ?>

	<!-- Si no existen posts, muestra lo siguiente: -->
	<article class="post resume">

		<header class="post-title">

			<h2><?php _e('No hay contenidos disponibles', 'apk'); ?></h2>

		</header>

		<div class="post-content">

			<p><?php _e('No hay contenidos que correspondan con esta página, por favor realiza una búsqueda para encontrar lo que deseas ver:', 'apk'); ?></p>

			<?php get_search_form();  ?>

		</div>

	</article>

	<?php endif;?>

	<div class="posts-nav cf">
		<a href="" >&larr; Previos</a>
		<a href="" >Recientes &rarr;</a>
	</div>
	
	
</section><!-- /#main-content -->
			
			
<?php get_sidebar(); ?>	<!-- //Llamamos al sidebar en sidebar.php -->
			
<?php get_footer(); ?>	<!-- //Llamamos al footer en footer.php -->