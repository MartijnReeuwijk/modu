// menu
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 500) {
        $('.menu').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
    }
});

// icon
$(document).ready(function() {
  // time
  var d = new Date();
  var n = d.getDay();
  n = n > 0 ? n - 1 : 6; // zero is sunday, not monday in javascript
  $('.day').eq(n).addClass('today');

   window.setTimeout("fade();", 3500);
 })

function fade() {
   $(".meierijicon").fadeOut('slow');
}

// scroll balk
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 250) {
        $('.scroll').fadeOut();
    } else {
        $('.scroll').fadeIn();
    }
});

$(document).ready(function() {
  $(function() {
    $('.google_map').click(function(e) {
        $(this).find('iframe').css('pointer-events', 'all');
    }).mouseleave(function(e) {
        $(this).find('iframe').css('pointer-events', 'none');
    });
})

    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }

    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');

        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();

            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
        }

        e.preventDefault();
    });

    $( ".toggle-menu" ).click(function() {
        if (  $( this ).css( "transform" ) == 'none' ){
            $(this).css("transform","rotate(90deg)");
        } else {
            $(this).css("transform","" );
        }
    });

});


// smooth scroll
$(function() {
  $('a[href*=#][class*="smooth"]:not([href=#])').click(function()  {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


// instagram
/*
$(function() {
  $("a.group").fancybox({
    'nextEffect'	:	'fade',
    'prevEffect'	:	'fade',
    'overlayOpacity' :  0.8,
    'overlayColor' : '#000000',
    'arrows' : false,
  });
});
*/
