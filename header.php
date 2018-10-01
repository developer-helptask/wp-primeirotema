<html>
<head>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<title>	</title>
</head>

<body <?php body_class(); ?>>


	
<div class="container-full bg-topo">
	<div class="container">
		<div class="topo">
		<div class="contato">
		<i class="fas fa-mobile-alt"></i> 062 99849.2854  | <i class="fas fa-envelope-open"></i> contato@canavans.com.br
	</div>
	<div class="social">
		<a href=""><i class="fab fa-facebook"></i></a>
		<a href=""><i class="fab fa-instagram"></i></a>
		<a href=""><i class="fab fa-twitter-square"></i></a>
	</div>
	</div>
</div>
</div>	

<div class="container-full">
<div class="container pd-tb space-between">
	<div class="logo"><img src="<?php echo get_template_directory_uri();?>/assets/images/logotipo.png"></div>
	<div class="nav">
		<?php 
if(has_nav_menu('primary')){
	wp_nav_menu(array(
		'theme_location' => 'primary',
		'container' => 'nav',
		'container_class' => 'menu-header',
		//'container_class' => 'COLCOAR CLASSE SEPARADO POR VIRGULA'
		'fallback_cb' => false
	));
}
?>
	</div>
</div>
</div>



