<?php
/**
 * Plugin Name: Custom Elementor Widgets
 * Description: A custom Elementor widgets.
 * Version: 1.0.0
 * Author: Digitally Disruptive
 * Author URI: https://digitallydisruptive.co.uk/
 */

 if (!defined('ABSPATH')) exit; // Exit if accessed directly

 // Register the widget
 function register_swiper_slider_widget($widgets_manager) {
     require_once(__DIR__ . '/widgets/swiper-slider-widget.php'); 
     $widgets_manager->register(new \Swiper_Slider_Widget());
 }
 add_action('elementor/widgets/register', 'register_swiper_slider_widget');


 function add_elementor_widget_categories($elements_manager)
{

	$elements_manager->add_category(
		'Coptrz',
		[
			'title' => esc_html__('Humphries', 'textdomain'),
			'icon'  => 'fa fa-plug',
		]
	);
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');

