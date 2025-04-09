<?php
/**
 * Theme functions and definitions
 */

function nike_clone_theme_setup() {
  // Add theme support
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'nike_clone_theme_setup');

// Enqueue styles and scripts
function nike_clone_theme_scripts() {
  // Tailwind CSS
  wp_enqueue_style('tailwind', 'https://cdn.tailwindcss.com');
  
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Helvetica+Neue:wght@400;500;700&display=swap');
  
  // Font Awesome
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'nike_clone_theme_scripts');
