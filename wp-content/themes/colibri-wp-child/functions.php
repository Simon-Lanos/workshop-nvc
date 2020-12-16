<?php

/**
 * activation theme
 */

add_action(
    'wp_enqueue_scripts',
    static function () {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('child-style', get_stylesheet_uri());
    }
);

function init_custom_menu() {
    register_nav_menus(
      array(
        'footer-custom-menu' => __( 'Footer custom menu' )
      )
    );
  }
  add_action( 'init', 'init_custom_menu' );