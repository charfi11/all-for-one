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
var id = $(this).attr('id');
  console.log($('#'+id))
  $('#'+id).click(function(){
   $('.card-dis').show('slow');
  })
});

$('#gallery').click(function(){
$('.form-member').hide('slow');
$('.gallery').show('slow');
});

$('#member').click(function(){
  $('.form-member').show('slow');
  $('.gallery').hide('slow');
  });

$('.block-gall').each(function(){
  var id = $(this).attr('id');
  $("#"+id).click(function(){
  var a = $(this).children()[0].src;
  console.log(a);
  $('#m').fadeIn(500);
  $(".divmodal").append("<img src="+a+" id='modal'>");
  });
  var app = "<div class='like'><i class='fas fa-heart text-red none'></i></div>";
    $('#'+id).mouseenter( function(){
      $("#"+id).append(app);
      $('.like').mouseenter(function(event){
        event.stopPropagation();
          });
    $('.none').fadeIn(500);
  });
  $('#'+id).mouseleave(function(){
    $('.like').fadeOut(500);
    $('.like').remove();
  });
});

$('.divmodal').click(function(){
  $('.divmodal').hide();
   $('#modal').remove();
});