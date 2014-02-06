$(document).ready(function () {

<<<<<<< HEAD
  /*fixed body content becomes relative to header */

  var nav = $('nav');
  var page = $('.page-wrap');

  nav.hover(function () {
    page.addClass('page-wrap-expand', 1000);
  }, function () {
    page.removeClass('page-wrap-expand', 1000);
  });
  
  nav.hover(function(){
=======
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
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
     $('.header-logo').addClass('animated', 1000);
  }, function(){
     $('.header-logo').removeClass('animated', 1000);
  });
   
<<<<<<< HEAD
  nav.hover(function(){
    $('.social-nav span').addClass('ease', 1000);
  }, function(){
    $('.social-nav span').removeClass('ease', 1000);
  });
 
  nav.hover(function(){
    $('.main-nav span').addClass('ease', 1000);
  }, function(){
    $('.main-nav span').removeClass('ease', 1000);
  });
  
  nav.hover(function(){
    $('.name').addClass('fall', 1000);
  }, function(){
    $('.name').removeClass('fall', 1000);
  });

  /*Blog's .post-pic fades to black on scroll  */

  page.scroll(function () {
    if ($(this).scrollTop() > 110) {
      $(".post-pic").addClass("fade-pic");
    } else {
      $(".post-pic").removeClass("fade-pic");
    }
  });
  
  /*About Page .section-2 Text Fade on scroll  */
 
  page.scroll(function () {
    if ($(this).scrollTop() > 30) {
      $(".welcome-text").addClass("fade-it");
    } else {
      $(".welcome-text").removeClass("fade-it");
    }
  });

  /*About Page .section-2 Text Fade on scroll  */
 
  page.scroll(function () {
    if ($(this).scrollTop() > 400) {
      $(".about-blurb").addClass("fade-it");
    } else {
      $(".about-blurb").removeClass("fade-it");
    }
  });


  page.scroll(function () {
    if ($(this).scrollTop() > 1500) {
      $(".section-4-wrap").addClass("fadeit");
    } else {
      $(".section-4-wrap").removeClass("fadeit");
    }
  });

  page.scroll(function () {
    if ($(this).scrollTop() > 1500) {
      $(".section-4-1 ul li").addClass("sweep-it");
    } else {
      $(".section-4-1 ul li").removeClass("sweep-it");
    }
  });

  page.scroll(function () {
    if ($(this).scrollTop() > 1500) {
      $(".section-4-2 ul li").addClass("sweep-it");
    } else {
      $(".section-4-2 ul li").removeClass("sweep-it");
    }
  });

  page.scroll(function () {
    if ($(this).scrollTop() > 1500) {
      $(".section-4-3 ul li").addClass("sweep-it");
    } else {
      $(".section-4-3 ul li").removeClass("sweep-it");
    }
  });
});


=======
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

 





 
>>>>>>> 98422308b4afb00ff74c9b6bad9dbc27456e510b
