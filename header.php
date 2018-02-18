<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="><?php bloginfo('charset'); ?>">
	<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name');?></title>

	<?php wp_head(); ?> <!-- Carga funciones de cabecera -->
</head>

<body>
	
	<div id="global-container">
		
		
		<header id="main-header">
			
			<h1 class="site-title"><?php bloginfo('name');?></h1>
			<h2 class="site-description"><?php bloginfo('description');?></h2>
		
		</header><!-- /#main-header -->
		
		
		<nav id="main-nav">
			<ul class="menu">
				<?php wp_list_pages('title_li='); ?> <!-- Incluye páginas publicadas -->
			</ul>
		</nav><!-- /#main-nav -->
		
		
		<section id="global-content" class="cf">