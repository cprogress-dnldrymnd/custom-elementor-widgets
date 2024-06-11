<?php
class Swiper_Slider_Widget extends \Elementor\Widget_Base
{

  public function __construct($data = [], $args = null)
  {
    parent::__construct($data, $args);
    wp_register_script('elementor-custom-widgets', get_stylesheet_directory_uri() . '/includes/elementor-widgets/elementor-custom-widgets.js', ['elementor-frontend'], '1.0.0', true);
  }

  public function get_name()
  {
    return 'custom_slider';
  }

  public function get_title()
  {
    return esc_html__('Custom Slider', 'textdomain');
  }

  public function get_icon()
  {
    return 'eicon-slider-album';
  }


  public function get_categories()
  {
    return ['Humphries'];
  }

  public function get_keywords()
  {
    return ['slider', 'carousel'];
  }


  protected function register_controls()
  {

    $this->start_controls_section(
      'content_section',
      [
        'label' => esc_html__('Brand Slider', 'elementor-oembed-widget'),
        'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
      'important_note',
      [
        'label'           => esc_html__('', 'textdomain'),
        'type'            => \Elementor\Controls_Manager::RAW_HTML,
        'raw'             => esc_html__('This widget will display product brands attribute.', 'textdomain'),
        'content_classes' => 'your-class',
      ]
    );

    $this->end_controls_section();
  }

  /**
   * Render oEmbed widget output on the frontend.
   *
   * Written in PHP and used to generate the final HTML.
   *
   * @since 1.0.0
   * @access protected
   */
  protected function render()
  {
    $settings = $this->get_settings_for_display();

    include(__DIR__ . '/render.php');
  }

  public function get_script_depends()
  {
    return ['coptz-swiper', 'elementor-custom-widgets'];
  }
}