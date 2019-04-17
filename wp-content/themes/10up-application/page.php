<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cb_neat
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content container">

			<?php while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
