


$(function() {
  $(".left-menu-drop").click(function() {
    $('.submission-menu').slideToggle();
  });
  
  $('.lang').on('click', function() {
    $(this).siblings('ul').slideToggle()
    $(this).toggleClass('active')
  })
});

$(document).ready(function () {
  "use strict";

  var aniT = 2500;
  //var aniT = 200;
  $("#wrapper").css("opacity", 0);
  $("body").prepend("<div id='loading'><p id='line'><span class='expand'></span></p></div>");
  $("#line").addClass("fullwidth");
  $("#loading").delay(aniT).fadeOut(aniT, function () {
    $("#wrapper").animate({opacity:1}, {duration:aniT, easing:'swing'})
  });
});

$(function() {
  $('.fade-top').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 160){
          $(this).addClass('scrollin');
      }
  });
  
  $( '.scroll').on("scroll", function(event) {
    $(this).addClass('scrolled');
  })
  $('.slicker_text_parts').on('afterChange', function(event, slick, currentSlide) {
      $('.paginavigation .current').html('0' + (currentSlide + 1))
  })
  $(window).scroll(function (){
      $('.fade-top').each(function(){
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight + 160){
              $(this).addClass('scrollin');
          }
      });
  });
});

$(window).resize(function() {
  $(window).scroll(function (){
      $('.fade-top').each(function(){
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight + 60){
              $(this).addClass('scrollin');
          }
      });
  });
});

$(function() {
  $(".menu-trigger").click(function() {
    scpos = $(window).scrollTop();
    $(this).toggleClass("active");
    $('.g_nav').toggleClass('active');
    if ($('.g_nav').hasClass('active')) {
        // alert('true')
        $('.g_nav').fadeIn('slow');
    } else {
        // alert('false')
        $('.g_nav').fadeOut('slow');
    }
  });

  $(".g_nav ul li a").click(function() {    
    $('.g_nav').fadeIn('slow');
    $('.menu-trigger').toggleClass("active");
    $('.g_nav').toggleClass('active');
  });
});


$(function() {
  $('.inviewfadeInUp').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 80){
          $(this).addClass('fadeInUp');
      }
  });
  $(window).scroll(function (){
      $('.inviewfadeInUp').each(function(){
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight + 80){
              $(this).addClass('fadeInUp');
          }
      });
  });
});

$(window).resize(function() {
    $(window).scroll(function (){
        $('.inviewfadeInUp').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 160){
                $(this).addClass('fadeInUp');
            }
        });
    });
});

$(function() {
  $(window).scroll(function (){
      $('.inviewfadeInUp2').each(function(){
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight + 160){
              $(this).addClass('fadeInUp2');
          }
      });
  });
});

$(window).resize(function() {
    $(window).scroll(function (){
        $('.inviewfadeInUp2').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 160){
                $(this).addClass('fadeInUp2');
            }
        });
    });
});
$(function() {
  $(window).scroll(function (){
      $('.inviewfadeInUp3').each(function(){
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight + 160){
              $(this).addClass('fadeInUp3');
          }
      });
  });
});

$(window).resize(function() {
    $(window).scroll(function (){
        $('.inviewfadeInUp3').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 160){
                $(this).addClass('fadeInUp3');
            }
        });
    });
});

$(function() {
  $(window).scroll(function (){
      $('.inviewfadeInUp4').each(function(){
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight + 160){
              $(this).addClass('fadeInUp4');
          }
      });
  });
});

$(window).resize(function() {
    $(window).scroll(function (){
        $('.inviewfadeInUp4').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 160){
                $(this).addClass('fadeInUp4');
            }
        });
    });
});

$(function() {
  $(window).scroll(function (){
      $('.inviewfadeInUp5').each(function(){
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight + 160){
              $(this).addClass('fadeInUp5');
          }
      });
  });
});

$(window).resize(function() {
    $(window).scroll(function (){
        $('.inviewfadeInUp5').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 160){
                $(this).addClass('fadeInUp5');
            }
        });
    });
});

$(function() {
  $(window).scroll(function (){
      $('.inviewfadeInUp6').each(function(){
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight + 160){
              $(this).addClass('fadeInUp6');
          }
      });
  });
});

$(window).resize(function() {
    $(window).scroll(function (){
        $('.inviewfadeInUp6').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 160){
                $(this).addClass('fadeInUp6');
            }
        });
    });
});
