<?php
/**
 * The Template for displaying all single posts.
 *
 * @package cb_neat
 */

get_header(); ?>

<section class="post-single container">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="img">
			<?php the_post_thumbnail('carousel-tile'); ?>
		</div>
		<div class="content">
			<div class="upper">
				<a href="<?php the_field('source_url') ?>" target="_blank" rel="nofollow">
					<h5 class="gold"><?php the_field('source_url_display'); ?></h5>
				</a>
				<h1><?php the_title(); ?></h1>
			</div>

			<div class="body">
				<h4><?php the_date(); ?></h4>
				<?php the_content(); ?>
			</div>

		</div>

		<?php
	  $prev_post = get_adjacent_post(false, '', true);
	  $next_post = get_adjacent_post(false, '', false);
	   ?>
		<nav class="tenant-nav container">
		  <?php if(!empty($prev_post)) :?>
		    <a href="<?php echo get_permalink($prev_post->ID) ?>" class="prev chevron left" title="<?php echo $prev_post->post_title ?>">
		      <h5 class="gold">prev</h5>
		      <h3><?php
						$content = $prev_post->post_title;
						echo wp_trim_words( $content , '4' );
					?></h3>
		    </a>
		    <?php if ($next_post): ?>
		      <div class="v-rule"></div>
		    <?php endif; ?>
		  <?php endif; ?>
		  <a href="<?php echo home_url() . '/directory'; ?>" class="center">
		    <h5 class="gold">view</h5>
		    <h3>All Press</h3>
		  </a>
		  <?php if(!empty($next_post)) :?>
		    <?php if ($prev_post): ?>
		      <div class="v-rule"></div>
		    <?php endif; ?>
		    <a href="<?php echo get_permalink($next_post->ID) ?>" class="next chevron right" title="<?php echo $next_post->post_title ?>">
		      <h5 class="gold">next</h5>
		      <h3><?php
						$content = $next_post->post_title;
						echo wp_trim_words( $content , '4' );
					 ?></h3>
		    </a>
		  <?php endif; ?>
		</nav>

	<?php endwhile; // end of the loop. ?>

</section>


<?php get_footer(); ?>
