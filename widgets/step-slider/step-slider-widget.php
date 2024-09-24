<?php
class Step_Slider extends \Elementor\Widget_Base
{

    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);
        wp_register_script('step-slider', MY_PLUGIN_URL . 'assets/js/custom-swiper-slider.js');

    }

    public function get_name()
    {
        return 'slider';
    }

    public function get_title()
    {
        return esc_html__('Slider', 'textdomain');
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
        return ['slide', 's;lider', 'carousel'];
    }


    protected function register_controls()
    {

        $options = [];

        $posts = get_posts(array(
            'post_type' => 'elementor_library',
            'numberposts' => -1,
            'fields' => 'ids',
            'tax_query' => array(
                array(
                    'taxonomy' => 'elementor_library_category',
                    'field'    => 'slug',
                    'terms'    => 'slide'
                )
            )
        ));

        foreach ($posts as $post) {
            $options[$post] = get_the_title($post);
        }

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Slider', 'elementor-oembed-widget'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'slide_ids',
            [
                'label' => esc_html__('Slides', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'multiple' => true,
                'options' => $options,
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
        return ['swiper', 'step-slider'];
    }
}
