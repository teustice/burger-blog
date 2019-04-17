'use strict';

$(function () {

  //Get menu icons from element
  var closeSVG = $('.mobile-menu-button').find('img').attr('data-close');
  var menuSVG = $('.mobile-menu-button').find('img').attr('src');

  $('.mobile-menu-button').click(function () {
    $(this).toggleClass('active'); //toggle styling state
    $('.nav-row').slideToggle(200); //toggle nav display

    var src = $(this).hasClass('active') ? closeSVG : menuSVG;
    $(this).find('img').attr('src', src); //update button image
  });
});
'use strict';

$(function () {
  window.sr = ScrollReveal();

  if ($('.post-tile').length) {
    sr.reveal('.post-tile *', {
      origin: 'bottom',
      distance: '30px',
      opacity: 0,
      scale: 1,
      duration: 800,
      easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
    }, 50);
  }
});