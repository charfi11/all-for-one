$(window).scroll(function() {
  if ($(document).scrollTop() > 500) {
      $('nav').css('opacity', '0.6');
  }
  else {
      $('nav').css('opacity', '1');
  }
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 10) {
      $('.up').css('opacity', '0.4');
  }
  else {
      $('.up').css('opacity', '1');
  }
});

$(".arrow").click(function() {
  $('html,body').animate({
      scrollTop: $(".block2").offset().top},
      'slow');
});

$(".up").click(function() {
  console.log('ok');
  $('html,body').animate({
      scrollTop: $("header").offset().top},
      'slow');
});

$('#gallery').click(function(){
$('.form-member').hide('slow');
$('.gallery').show('slow');
});

$('#member').click(function(){
  $('.form-member').show('slow');
  $('.gallery').hide('slow');
  });

$(document).ready(function(){
$('.block-gall').each(function(){
  var id = $(this).attr('id');
  var url = "crud/selectLike.php";
  $('#'+id).click(function(){
   var url = 'crud/selectLikes.php';
   $.get(url, {id}).done(function(res){
       $('.divspan').append("<span class='liked'><p>"+res+" <i class='fas fa-heart'></i>"+"</p></span>")
    });
  });
    $.ajax({
     type: 'post',
     url: url,
     dataType: 'html',
     success:function(data){
    var app = "<div class='like' id="+data+" name='like'><i class='fas fa-heart text-red none'></i></div>";
    $('#'+id).mouseenter( function(){
      $("#"+id).append(app);
      $('.like').click(function(e){
        e.preventDefault();
        var url = 'crud/insertL.php';
        var gallery = $(this).parent().attr('id');
        var like = $(this).attr('id');
        var data = {gallery: gallery, like: like};
          $.ajax({
           type: 'post',
           url: url,
           data: data,
           success: function(res){
             $('.liked').replaceWith('.liked');
             $('.none').css('color', 'red')
             $('.none').animate({
              height: "toggle",
              opacity: "toggle",
            }, "slow" );
           }
        });
        });
      $('.like').mouseenter(function(event){
        event.stopPropagation();
          });
          $('.like').click(function(event){
            event.stopPropagation();
              });
    $('.none').fadeIn(500);
  });
  $('#'+id).mouseleave(function(){
    $('.like').fadeOut(500);
    $('.like').remove();
  });
}
});
});
});

$('.img-gallery').each(function(){
  var id = $(this).attr('id');
  var a = $(this)[0].src;
  $("#"+id).click(function(){
  $('#m').fadeIn(500);
  $(".divmodal").append("<img src="+a+" id='modal'>");
  });
});

$('.divmodal').click(function(){
  $('.divmodal').fadeOut(500);
   $('#modal').remove();
   $('.liked').remove();
});

// $('.card').each(function(){
// var id = $(this).attr('id');
// console.log(id);
// $('#'+id).mouseenter(function(){

// });
// $('#'+id).mouseleave(function(){
//   $().remove();
// });
// });

$('.contact').submit(function(e){
  e.preventDefault();
var url = 'mail.php';
var data = {
  name: $("#form_name").val(),
  email: $("#form_email").val(),
  message: $("#msg_text").val()
};
$.ajax({
  type: 'post',
  url: url,
  data: data,
  success: function(res){
$('.successmodal').fadeIn();
$('.successmodal').append("<div class='success d-flex flex-column align-items-center mt-3'><p class='mt-2'>"+res+"</p><small class='text-secondary mb-2'>Vous allez être redirigé dans quelques secondes.</small><div class='spinner-border mb-3 mt-3 text-info' role='status'><span class='sr-only'>Loading...</span></div></div></div>");
setTimeout(
  function() 
  {
    window.location = 'index.html';
  }, 4000);
}
});
});