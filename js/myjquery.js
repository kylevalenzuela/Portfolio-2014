$(document).ready(function () {

/*fixed body content becomes relative to header */

  $('nav').hover(function () {
    $('.page-wrap').addClass('page-wrap-expand', 1000);
  }, function () {
    $('.page-wrap').removeClass('page-wrap-expand', 1000);
  });
  
  $('nav').hover(function(){
     $('footer').addClass('page-wrap-expand', 1000);
  }, function(){
     $('footer').removeClass('page-wrap-expand', 1000);
  });
 
  $('nav').hover(function(){
     $('.header-logo').addClass('animated', 1000);
  }, function(){
     $('.header-logo').removeClass('animated', 1000);
  });
   
   $('nav').hover(function(){
     $('.social-nav span').addClass('ease', 1000);
  }, function(){
     $('.social-nav span').removeClass('ease', 1000);
  });
 
   $('nav').hover(function(){
     $('.main-nav span').addClass('ease', 1000);
  }, function(){
     $('.main-nav span').removeClass('ease', 1000);
  });
  
   $('nav').hover(function(){
     $('.name').addClass('fall', 1000);
  }, function(){
     $('.name').removeClass('fall', 1000);
  });

    $(".page-wrap").scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".post-pic").addClass("fade-pic");
        }
        else {
            $(".post-pic").removeClass("fade-pic");
        }
    });
   
});

 





 