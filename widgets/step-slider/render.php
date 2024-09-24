<?php
$slide_ids = $settings['slide_ids'];
$args = array('post_type' => 'elementor_library', 'post__in' => $slide_ids);
$loop = new WP_Query($args);
?>
<section class="step-slider">
    <div class="thumb-slider-holder">
        <div class="outer">
            <div thumbsSlider class="swiper swiper-step-thumb">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($slide_ids as $slide_id) {
                        $title =  get_the_title($slide_id);
                        echo '<div class="swiper-slide">';
                        echo '<div class="inner">';
                        echo substr($title, strpos($title, ":") + 1);
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="main-slider-holder">
        <div class="swiper swiper-step-slider">
            <div class="swiper-wrapper">
                <?php
                foreach ($slide_ids as $slide_id) {
                    echo '<div class="swiper-slide">';
                    echo '<div class="inner">';
                    echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($slide_id);
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>