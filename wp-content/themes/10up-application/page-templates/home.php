<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<div class="container post-list">
  <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => '10',
      'orderby' => 'date',
      'order' => 'DESC'
    );

    $posts = new WP_Query($args);
  ?>

  <?php if ($posts->have_posts()): ?>
    <?php while ($posts->have_posts()) : $posts->the_post(); ?>
      <?php get_template_part('/template-parts/post-tile'); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
