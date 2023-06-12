// var filter_fix = ".cover";
//         var mixer = mixitup(filter_fix,{
//             load: {
//                 filter: '.smarter-item22'
//             }
//         });
 

// AOS.init();

$(document).ready(function(){
    $('.menu-icon1').click(function(){
        $('.menu').slideToggle( 1000);
    });

    
    $('.Question99').click(function(){
        $(this).parent().find('.arrow').toggleClass('arrow-animate');
        $(this).parent().find('.up').slideToggle(200);
    });

    $(".trusted_text").owlCarousel({
            loop:true,
            items:1,
            nav:true,
            dots:false,
            autoplay:true,
            autoplayTimeout:3000,
            navText:['<i class="fa-solid fa-angle-left"></i>','<i class="fa-solid fa-angle-right"></i>']
             
        });

        $('#popupVideo').magnificPopup({
            type:'iframe'
        });
    });
     
    $(document).ready(function(){
        $('.counter1').countMe(40,65);
        $('.counter2').countMe(40,65);
        $('.counter3').countMe(40,65);
        $('.counter4').countMe(40,65);
    });