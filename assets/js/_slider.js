import $ from 'jquery';
import 'imports?jQuery=jquery!owl.carousel';
// require('owlcarousel-umd-webpack');
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    nav:true,
    navText: ["<i class='icon-left'></i>","<i class='icon-right'></i>"], 
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  });