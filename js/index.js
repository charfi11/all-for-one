$(document).ready(function(){
  $('nav').css('background', '#6d071a');
  $('.coll ul li').show('slow');
  $('nav').css('width', '30%');
});

$(window).scroll(function(){
  
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 500) {
      $('nav').css('opacity', '0.6');
  }
  else {
      $('nav').css('opacity', '1');
  }
});

$(".arrow").click(function() {
  $('html,body').animate({
      scrollTop: $(".block2").offset().top},
      'slow');
});

$('.plus').click(function(){
  $('.card-dis').slideToggle('slow');
});

$('#gallery').click(function(){
$('.form-member').hide('slow');
$('.gallery').show('slow');
});

$('#member').click(function(){
  $('.form-member').show('slow');
  $('.gallery').hide('slow');
  });

$('.block-gall').mouseover(function(){
  $('.none').fadeIn('slow');
})

$('.block-gall').mouseleave(function(){
  $('.none').hide('slow');
})