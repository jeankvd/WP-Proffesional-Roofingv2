jQuery(document).ready(function($){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
  });

// Sticky Nav

// const NAV = document.getElementById("site-navigation");

// document.addEventListener("scroll", (e) => {
//     if (window.scrollY > 250) {
//         NAV.classList.add("active");
//     } else {
//         NAV.classList.remove("active");
//     }
// });