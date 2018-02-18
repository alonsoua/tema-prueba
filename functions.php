<?php
	function apk_load_styles() {
		wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all'); 	//Registra la hoja de estilo
		wp_enqueue_style('theme_style');											//Cargamos hoja de estilos
	}

	add_action('wp_enqueue_scripts', 'apk_load_styles'); //Asociamos la función "apk_load_styles" a la acción "wp_enqueue_scripts"

	function apk_register_sidebars(){
		register_sidebar(array(
			'name' 	=> __('Sidebar Principal', 'apk'),
			'id'	=> 'main_sidebar',
			'description' 	=> __('Este es el sidebar principal', 'apk'),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">', 
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>'
		));
	}

	add_action('widgets_init', 'apk_register_sidebars'); //Asociamos la función "apk_register_sidebars" a la acción "widgets_init"
?>