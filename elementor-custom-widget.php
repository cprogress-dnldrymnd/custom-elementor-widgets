<?php
/**
 * Plugin Name: Custom Elementor Widgets
 * Description: A custom Elementor widgets.
 * Version: 1.0.0
 * Author: Digitally Disruptive
 * Author URI: https://digitallydisruptive.co.uk/
 */

 if (!defined('ABSPATH')) exit; // Exit if accessed directly

 // Enqueue widget scripts and styles (optional)
 function enqueue_swiper_slider_assets() {
     wp_enqueue_style('swiper-slider-css', plugins_url('assets/css/swiper-slider.css', __FILE__));
     wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js'); // Include Swiper library
     wp_enqueue_script('swiper-slider-js', plugins_url('assets/js/swiper-slider.js', __FILE__), array('swiper-js'), '1.0.0', true);
 }
 add_action('elementor/frontend/after_register_scripts', 'enqueue_swiper_slider_assets');
 
 // Register the widget
 function register_swiper_slider_widget($widgets_manager) {
     require_once(__DIR__ . '/widgets/swiper-slider-widget.php'); 
     $widgets_manager->register(new \Elementor\Swiper_Slider_Widget());
 }
 add_action('elementor/widgets/register', 'register_swiper_slider_widget');