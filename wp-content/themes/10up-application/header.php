<?php
/**
* The Header for our theme.
*/
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
  <?php tha_head_top(); ?>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

  <?php tha_head_bottom(); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <?php tha_body_top(); ?>

  <div id="page" class="hfeed site">
    <?php tha_content_before(); ?>

    <main id="main" class="site-main wrap" role="main">
      <?php tha_content_top(); ?>

        <nav class="nav-wrapper">
          <div class="upper container">
            <div class="mobile-menu-button hidden">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/menu.svg' ?>" alt="Mobile Menu Button" data-close="<?php echo get_template_directory_uri() . '/assets/img/icon/close.svg' ?>"/>
            </div>
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg' ?>" alt="Burger Logo" />
              <h3 class="logo-text">Eats.</h3>
            </a>
          </div>

          <div class="nav-row">
            <div class="container">
              <?php wp_nav_menu( array('menu' => 'Main-Nav') ); ?>
            </div>
          </div>
        </nav>
