'use strict';

$(function() {
  window.sr = new ScrollReveal();

  if($('.post-tile').length) {
    sr.reveal('.post-tile *', {
      origin: 'bottom',
      distance: '30px',
      opacity: 0,
      scale: 1,
      duration: 800,
      easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
    }, 50);
  }
});
