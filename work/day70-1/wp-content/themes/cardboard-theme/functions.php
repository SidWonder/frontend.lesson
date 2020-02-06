<?php


add_action( 'wp_enqueue_scripts', 'cardboard_style' );
function cardboard_style() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap-reboot.min', get_template_directory_uri() . '/css/bootstrap-reboot.min.css' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
  wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );
  wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'  ); 
  wp_enqueue_style( 'main', get_template_directory_uri().'/css/style.css'  );
}

add_action( 'wp_enqueue_scripts', 'cardboard_scripts' );
function cardboard_scripts() {
  //Jquery (Отключаем стандартный и подключаем свой)
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
  wp_enqueue_script( 'jquery' );
  //slick-slider
  // array('jquery') - Означает, что подключаем только когда подключиться jQuery
  wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, false );
  //Wow.js
  wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js', array('jquery'), null, true );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, false );
  wp_enqueue_script( 'ya-metrika', get_template_directory_uri() . '/js/ya-metrika.js', array('jquery'), null, true );
}   
?>