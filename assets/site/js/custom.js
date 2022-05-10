//Menu e To-top
$(document).scroll(function () {

	var posicaoScroll = $(document).scrollTop();
   
    if (posicaoScroll > 100) 
    {
        $(".no-navbar-shrink").hide();
        $(".show-navbar-shrink").show();
        
        $("#to-top").css({bottom: '90px'});
    } 
    else 
    {
        $(".show-navbar-shrink").hide();
        $(".no-navbar-shrink").show();
        
    	$("#to-top").css({bottom: '-100px'});
    }
});

//action voltar o topo
$("#to-top").on('click', function(){
    
    $('html, body').animate({scrollTop: '0px'}, 800);
    
    return false;
});

//owl-carousel
$('.owl-carousel-portfolio').owlCarousel({
    loop:true,
    margin:10,
    responsive:{
        0:{
            items:1,
            dots:false,
        },
        1000:{
            items:1,
            dots: true,
        }
    }
})

$('.owl-carousel-tools').owlCarousel({
    loop:true,
    autoplay:true,
    slideTransition: 'linear',
    autoplayTimeout: 2000,
    autoplaySpeed: 2000,
    autoplayHoverPause:false,
    dots: false,
    nav: false,
    margin:10,
    responsive:{
        0:{
            items:1,
        },
        425:{
            items:2,
        },
        768:{
            items:3,
        },
        1024:{
            items:4,
        },
        1367:{
            items:7,
        }
    }
})