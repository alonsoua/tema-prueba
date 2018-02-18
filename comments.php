<?php if (have_comments()) { ?>

<h3><?php comments_number(
	__('No hay comentarios aún', 'apk'),
	__('Hay un comentario publicado', 'apk'),
	__('Hay % comentarios', 'apk')
); ?></h3>

<ol id="comments-list">
<?php wp_list_comments();			//Listado de comentarios publicados ?>
</ol>

<?php paginate_comments_links();	//Enlace a los comentarios recientes +50 ?>

<?php } ?>

<?php comment_form();				//Muestra formulatio para agregar comentarios?>