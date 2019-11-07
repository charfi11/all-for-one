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