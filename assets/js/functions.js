$( document ).ready(function() {

  // Get started!
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    stagePadding: 0,
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
});

AOS.init({
   once: true
})

});


