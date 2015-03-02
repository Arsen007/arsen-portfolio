
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


//WOW Scroll Spy
var wow = new WOW({
    //disabled for mobile
    mobile: true
});

jQuery(document).ready(function( $ ) {
    //wow.init();
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
          value: 0.85,
        });
        $('.three').circleProgress({
          value: 0.70,
        });
        $('.four').circleProgress({
          value: 0.90,
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
        type: 'ajax',
        //'scrolling'   : 'no',
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
