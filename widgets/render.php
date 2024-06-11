<div class="swiper-wrapper">
    <?php foreach ( $slides as $index => $slide ) : ?>
        <div class="swiper-slide">
            <?php if ( ! empty( $slide['image']['url'] ) ) : ?>
                <img src="<?php echo esc_url( $slide['image']['url'] ); ?>" alt="<?php echo esc_attr( $slide['image']['alt'] ); ?>">
            <?php endif; ?>
            <div class="slide-content"><?php echo $slide['slide_content']; ?></div>

            <?php if (!empty($settings['button_text']) && !empty($settings['button_link']['url'])): ?>
                <a class="slide-button" href="<?php echo esc_url($settings['button_link']['url']); ?>" <?php echo ($settings['button_link']['is_external']) ? 'target="_blank"' : ''; ?> <?php echo ($settings['button_link']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                    <?php echo esc_html($settings['button_text']); ?>
                </a>
            <?php endif; ?>

            <?php // Example of using the index ?>
            <span class="slide-number">Slide <?php echo $index + 1; ?></span>
        </div>
    <?php endforeach; ?>
</div>