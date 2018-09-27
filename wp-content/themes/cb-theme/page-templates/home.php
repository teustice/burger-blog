<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<div class="upper">

  <div class="logo">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg' ?>" alt="MKT logo">
  </div>

  <div class="hero">
    <div class="carousel">
      <div class="bg" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero/hero.jpg'; ?>)"></div>
      <div class="bg" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero/hero1.jpg'; ?>)"></div>
      <div class="bg" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero/hero3.jpg'; ?>)"></div>
      <div class="bg" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero/hero4.jpg'; ?>)"></div>
      <div class="bg" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero/hero5.jpg'; ?>)"></div>
      <div class="bg" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero/hero6.jpg'; ?>)"></div>
      <div class="bg" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero/hero7.jpg'; ?>)"></div>
    </div>
    <h1 class="h2">Over 200,000 square feet of thoughtfully adapted space for creative office users, merchants and chefs</h1>
    <span>
      <a href="#contact" class="btn_1">Download lookbook</a>
    </span>
  </div>

</div>

<div class="lower">
    <div class="left">
      <div class="section">
        <h5>retail / food &amp; beverage opportunities</h5>

        <h4>barton kelly</h4>
        <a href="tel:713-783-4444">713-783-4444</a>
        <a href="mailto:BARTON@RADOMCAPITAL.COM">BARTON@RADOMCAPITAL.COM</a>

        <h4>RADOM CAPITAL</h4>
      </div>
      <div class="section">
        <h5>office lease opportunities</h5>
        <h4>russel hodges</h4>
        <a href="tel:713-425-5894">713-425-5894</a>
        <a href="mailto:RUSSEL.HODGES@AM.JLL.COM">RUSSEL.HODGES@AM.JLL.COM</a>
        <h4>jones lang lesalle</h4>
      </div>
    </div>
    <div class="right">
      <img src="<?php echo get_template_directory_uri() . '/assets/img/lady.png' ?>" alt="Woman wearing hat" class="hidden">
    </div>
</div>



<?php get_footer(); ?>
