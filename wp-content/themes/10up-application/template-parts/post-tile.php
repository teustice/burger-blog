<article class="post-tile row">
  <div class="img col-md-8">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="content col-md-4">
    <h4 class="date"><?php echo get_the_date() ?></h4>
    <a href="<?php the_permalink(); ?>">
      <h3><?php the_title(); ?></h3>
    </a>
    <p><?php echo get_snippet(get_the_content(), 200); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn-1">Read More</a>
  </div>
</article>
