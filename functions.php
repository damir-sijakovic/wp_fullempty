<?php

add_action( 'wp_enqueue_scripts', function(){
		
	wp_enqueue_style( 'fullempty-style', get_stylesheet_uri() ); //load style.css

});


