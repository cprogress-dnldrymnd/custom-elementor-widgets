<div class="swiper-custom-slider-holder">
    <div class="swiper swiper-custom-slider">
        <div class="swiper-wrapper">
            <?php foreach ($slides as $index => $slide) { ?>
                <div class="swiper-slide">
                    <div class="inner">
                        <?php if (!empty($slide['image']['url'])) { ?>
                            <div class="bg-image">
                                <img src="<?php echo esc_url($slide['image']['url']); ?>" alt="<?php echo esc_attr($slide['image']['alt']); ?>">
                            </div>
                        <?php } ?>
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
                        <?php if (!empty($settings['button_text']) && !empty($settings['button_link']['url'])) { ?>
                            <a class="slide-button" href="<?php echo esc_url($settings['button_link']['url']); ?>" <?php echo ($settings['button_link']['is_external']) ? 'target="_blank"' : ''; ?> <?php echo ($settings['button_link']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                <?php echo esc_html($settings['button_text']); ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>