'use strict';
$(function() {

  //Get menu icons from element
  let closeSVG = $('.mobile-menu-button').find('img').attr('data-close');
  let menuSVG = $('.mobile-menu-button').find('img').attr('src');

  $('.mobile-menu-button').click(function() {
    $(this).toggleClass('active'); //toggle styling state
    $('.nav-row').slideToggle(200); //toggle nav display

    let src = $(this).hasClass('active') ? closeSVG : menuSVG;
    $(this).find('img').attr('src', src); //update button image
  })
})
