$(window).scroll(function(){
  $('.coll ul li').show('slow');
  $('nav').css('width', '30%');
  });

$(window).scroll(function(){
  $('nav').css('background', '#6d071a');
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