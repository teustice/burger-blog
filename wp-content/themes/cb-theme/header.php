<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126323174-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126323174-1');
  </script>


  <?php tha_head_top(); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Titillium+Web:300,400,600" rel="stylesheet">

  <!--  favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/favicon' ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/favicon' ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/favicon' ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri() . '/favicon' ?>/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri() . '/favicon' ?>/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <?php tha_head_bottom(); ?>
  <?php wp_head(); ?>


</head>

<body <?php body_class(); ?> >
<?php tha_body_top(); ?>

<?php get_template_part('/template-parts/contact-modal'); ?>

<div id="page" class="hfeed site">


		<?php tha_content_before(); ?>

		<main id="main" class="site-main wrap" role="main">
			<?php tha_content_top(); ?>
