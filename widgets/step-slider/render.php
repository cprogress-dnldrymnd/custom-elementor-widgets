<?php
$slide_ids = $settings['slide_ids'];
$args = array('post_type' => 'elementor_library', 'post__in' => $slide_ids);
$loop = new WP_Query($args);
?>
<section class="slider">
  <div class="swiper swiper-is-vertical">
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
    <div class="swiper-pagination"></div>
  </div>
</section>