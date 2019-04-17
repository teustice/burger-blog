<?php
/**
 * The Template for displaying all single posts.
 *
 * @package cb_neat
 */

get_header(); ?>

<section class="post-single container">
  <?php while (have_posts()) : the_post(); ?>
    <article class="post-tile row">
      <div class="img">
        <?php the_post_thumbnail(); ?>
      </div>
    </article>
    <div class="content">
      <h4 class="date"><?php echo get_the_date() ?></h4>
      <h3><?php the_title(); ?></h3>
      <div><?php the_content(); ?></div>
    </div>
  <?php endwhile; ?>
</section>


<?php get_footer(); ?>
