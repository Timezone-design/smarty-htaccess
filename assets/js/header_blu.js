////////////////
// Header Nav js

// let navToggle = document.querySelector(".nav__toggle");
// let navWrapper = document.querySelector(".nav__wrapper");

// navToggle.addEventListener("click", function () {
//   if (navWrapper.classList.contains("active")) {
//     this.setAttribute("aria-expanded", "false");
//     this.setAttribute("aria-label", "menu");
//     navWrapper.classList.remove("active");
//   } else {
//     navWrapper.classList.add("active");
//     this.setAttribute("aria-label", "close menu");
//     this.setAttribute("aria-expanded", "true");
//   }
// });

// $(function () {
//     $('a.page-scroll').bind('click', function (event) {
//         var $anchor = $(this);
//         $('html, body').stop().animate({
//             scrollTop: $($anchor.attr('href')).offset().top
//         }, 1500, 'easeInOutExpo');
//         event.preventDefault();
//     });
// });

// // Highlight the top nav as scrolling occurs
// $('body').scrollspy({
//     target: '.navbar-fixed-top'
// })

// // Closes the Responsive Menu on Menu Item Click
// $('.navbar-collapse ul li a').click(function () {
//     $('.navbar-toggle:visible').click();
// });