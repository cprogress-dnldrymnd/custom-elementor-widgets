<div class="swiper-custom-slider-holder">
    <div class="swiper swiper-custom-slider">
        <div class="swiper-wrapper">
            <?php foreach ($slides as $index => $slide) { ?>
                <div class="swiper-slide">
                    <?php if (!empty($slide['image']['url'])) { ?>
                        <div class="bg-image">
                            <img src="<?php echo esc_url($slide['image']['url']); ?>" alt="<?php echo esc_attr($slide['image']['alt']); ?>">
                        </div>
                    <?php } ?>
                    <div class="inner">

                        <?php if (!empty($slide['slide_heading'])) { ?>
                            <div class="slide-heading">
                                <h3><?php echo $slide['slide_heading']; ?></h3>
                            </div>
                        <?php } ?>
                        <?php if (!empty($slide['slide_content'])) { ?>
                            <div class="slide-content">
                                <?php echo $slide['slide_content']; ?>
                            </div>
                        <?php } ?>
                        <?php if (!empty($slide['button_text']) && !empty($slide['button_link']['url'])) { ?>
                            <div class="qodef-m-button qodef-qi-clear">

                                <a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--filled qodef-type--standard   qodef-icon--right qodef-hover--icon-move-horizontal-short" href="<?php echo esc_url($slide['button_link']['url']); ?>" <?php echo ($slide['button_link']['is_external']) ? 'target="_blank"' : ''; ?> <?php echo ($slide['button_link']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                    <?php echo esc_html($slide['button_text']); ?>
                                </a>
                            </div>

                        <?php } ?>
                    </div>
                </div>

            <?php } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>