'use strict';

$(function () {
  // CONTACT MODAL
  if ($('.modal-bg').length) {
    $('a').click(function (e) {
      if ($(this).attr('href') == '#contact') {
        e.preventDefault();

        $('.modal-bg').fadeIn(500);
      }
    });

    $('.close-button').click(function () {
      $('.modal-bg').fadeOut(500);
    });
  }

  // hero carousel
  $('.carousel').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    dots: false,
    swipe: false,
    pauseOnHover: false
  });
});