<?php
$slide_ids = $settings['slide_ids'];
$args = array('post_type' => 'elementor_library', 'post__in' => $slide_ids);
$loop = new WP_Query($args);
?>
<section class="step-slider">


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
    <div class="thumb-slider-holder">
        <div class="thumb-slider-inner">
            <div class="left">
                <div class="left-inner">
                    <div class="swiper-button-prev swiper-button-prev-step"></div>
                    <div class="outer">
                        <div class="custom-pagination-holder">
                            <?php
                            foreach ($slide_ids as $key => $slide_id) {
                                $number = '0' . $key + 1;
                                echo '<div class="custom-pagination">';
                                echo '<div class="inner">';
                                echo '<div class="slide-number">' . $number . '</div>';
                                echo '<div class="slide-progress"></div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next-step"></div>
                </div>
            </div>
            <div class="right"></div>
        </div>
    </div>
</section>