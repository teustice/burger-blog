<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cb_neat
 */

get_header();

$page_cat = get_query_var('cat');
$page_cat = get_category($page_cat);
$parent = get_category($page_cat->category_parent);

$is_directory = false;

if($parent->cat_name == 'Tenant') {
	$is_directory = true;
}


if ($is_directory) {
	$categories = get_categories(
		array( 'parent' => get_cat_ID('Tenant') )
	);
} else {
	$categories = get_categories(
		array( 'parent' => get_cat_ID('Press') )
	);
}

?>

<div class="directory-wrapper">
  <section class="directory-upper container center">
    <h4>Westlake Commons</h4>
    <h1>EXPLORE THE SHOPS</h1>

    <ul>
      <li><a href="<?php echo home_url() . '/directory'; ?>">All</a></li>
      <?php
      if ( $categories ) {
        foreach( $categories as $cat )
        {
          echo '<li><a href="' . esc_url(get_term_link($cat, $cat->taxonomy)) . '">' . $cat->name . '</a></li>';
        }
      }
      ?>
    </ul>

    <figure>
      <img class="img-zoomable" src="<?php echo get_template_directory_uri() . '/assets/img/tenant-directory-map.png' ?>" data-zooming-width="1920"
  data-zooming-height="1080"  data-original="<?php echo get_template_directory_uri() . '/assets/img/tenant-directory-map2x.png' ?>" alt="Tenant directory map" />
    </figure>
  </section>

<section class="directory-main container">
  <?php
	if ($is_directory) {
		$args = array(
	    'post_type' => 'tenants',
	    'posts_per_page' => '-1',
	    'orderby' => 'title',
			'cat' => $page_cat->cat_ID,
	    'order' => 'ASC'
	  );
	} else {
		$args = array(
	    'post_type' => 'post',
	    'posts_per_page' => '-1',
	    'orderby' => 'date',
			'order' => 'DESC',
			'cat' => $page_cat->cat_ID,
	  );
	}



  $tenants = new WP_Query($args);
  ?>

	<?php if ($tenants->have_posts()): ?>

		<?php while ($tenants->have_posts()) :
			$tenants->the_post();
			$cats = get_categories();
			?>
			<?php get_template_part('/page-templates/template-parts/tenant-tile'); ?>
		<?php endwhile; ?>

	<?php endif; ?>
</section>
<?php get_footer(); ?>
