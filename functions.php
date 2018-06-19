<?php

function recipe_files() {
  wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.0.13/css/all.css');
  wp_enqueue_style('bootstrap4', '//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700');
  wp_enqueue_style('recipe_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'recipe_files');