<?php 

//adicionando suporte ao menu
add_theme_support( 'menus' );

//mostra o menu
function showmenu(){
  $args = array(
		'menu' => 'principal',
		'container' => false
	);
	wp_nav_menu( $args );
}
