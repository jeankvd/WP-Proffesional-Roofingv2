jQuery(document).ready(function($){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText : ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
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

const menuToggle = document.getElementById('menu-toggle');
const menu = document.getElementById("primary-menu").firstChild;

menuToggle.addEventListener("click", () => {
    menu.classList.toggle("show");
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