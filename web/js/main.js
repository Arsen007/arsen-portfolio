
$('body').scrollspy({ target: '.navmenu' });

// When we click on the LI
$("ul.qcontrols li").click(function(){
  // If this isn't already active
  if (!$(this).hasClass("active")) {
    // Remove the class from anything that is active
    $("ul.qcontrols li.active").removeClass("active");
    // And make this active
    $(this).addClass("active");
  }
});

function detectmob() {
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
}

function centralizeOverlayZoom() {
    setTimeout(function () {
        $('.masonry-item').each(function () {
            var $inner = $(this).find('.overlay a'),
                $wrapper = $(this).find('.overlay');
            $inner.css({
                'top': ($(this).outerHeight() / 2) - ($inner.outerHeight(true) / 2),
                'left': ($(this).outerWidth() / 2) - ($inner.outerWidth(true) / 2)
            });
        })
    }, 500)
}

//WOW Scroll Spy
var wow = new WOW({
    //disabled for mobile
    mobile: true
});

jQuery(document).ready(function( $ ) {
    wow.init();
    // set masonry grid
    setTimeout(function(){
        var $container = $('.masonry-container');
            // initialize
            $container.masonry({
              //columnWidth: 200,
              itemSelector: '.masonry-item'
            });
    },500)

        $('.circle').circleProgress({
        value: 0.80,
        startAngle: 4.75,
        size: 200,
        fill: { gradient: ["#FFFFFF"] }
      });
        $('.two').circleProgress({
          value: 0.9,
        });
        $('.three').circleProgress({
          value: 0.85,
        });
        $('.four').circleProgress({
          value: 0.85,
        });

   //Clients carousel Slider
    $('#clients-carousel').owlCarousel({
        navigation: false, // Show next and prev buttons
        slideSpeed: 400,
        paginationSpeed: 800,
        autoPlay: true,
        pagination : false,
        items : 4,
        itemsCustom : false,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
    });
       $('#menu').click(function(){
       $('#menu').not(this).removeClass("active");
       $(this).toggleClass("active");
      });

    // "I AM" slider
    var i = 0;
    var titles = ['DEVELOPER', 'EXPERT', 'JUST GOOD PERSON ;)', 'ARSEN SARGSYAN']
    setInterval(function () {

        $('.slide_item').animate({
            //'margin-top':'25px',
            'height': '0px'
        }, 500, function () {
            $(this).text(titles[i]);
            i++;
            if (typeof (titles[i]) == 'undefined') {
                i = 0;
            }
            $('.slide_item').animate({
                //'margin-top':'0px',
                'height': '50px'
            })
        })


    }, 2000);

    $('#works a').fancybox({
        'type': 'ajax',
        'width': '85%',
        'autoScale': true,
        'autoDimensions': false,
        'autoSize': false,
        beforeLoad : function() {
                if(detectmob()){
                    this.width = '100%';
                    this.height = '100%';
                }
           },
        helpers: {
            overlay: {
                locked: true
            }
        }
    });

    $('#mail-form').submit(function(e){
        e.preventDefault();
        $('.input-group').each(function(i,element){
            $(element).next('span').text('');
        });
        $('button[type="submit"]').html('<i class="fa fa-envelope-o"></i>SENDING...')
        $.ajax({
            url:'site/contact',
            type:"post",
            dataType:"json",
            data:$(this).serialize(),
            success:function(data){
                $('button[type="submit"]').text('SENDING...').prop('disabled',true);
                if(!data.success && data.errors){
                    $('.input-group').each(function(i,element){
                        $.each(data.errors,function(key,value){
                            if($(element).find('.form-control').attr('name') == key){
                                $(element).next('span').text(value);
                            }
                        })
                    });
                    $('button[type="submit"]').html('<i class="fa fa-envelope-o"></i>SEND').prop('disabled',false);

                }else{
                    $('#mail-form').addClass('hidden');
                    $('.success-mail-sent').removeClass('hidden');
                }
            }
        })
    })

  // centralize overlay zoom icon
    centralizeOverlayZoom();
    $(window).on('resize',function(){
        centralizeOverlayZoom();
    })

    });

//ScrollTop
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
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
