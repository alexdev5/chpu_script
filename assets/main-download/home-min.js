jQuery(document).ready(function(e){(e(".first-slide").addClass("animated fadeindown"),e("#hero-carousel .hero-carousel-slide").length>1)&&(e("#hero-carousel").on("changed.owl.carousel",function(a){e(".owl-item").each(function(){e(this).hasClass("active")?setTimeout(function(){e(".owl-item.active .hero-carousel-slide .carousel-content").addClass("animated fadeindown")},200):(e(this).find(".carousel-content").removeClass("animated"),e(this).find(".carousel-content").removeClass("fadeindown"))})}),e("#hero-carousel").owlCarousel({items:1,autoplay:!0,addClassActive:!0,autoplayTimeout:8e3,dots:!1,animateOut:"fadeOut",lazyLoad:!0,loop:!0}));e(".merchant-slider").owlCarousel({autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,pagination:!1,addClassActive:!0,lazyLoad:!0,loop:!0,margin:4,responsive:{0:{items:1},600:{items:2},1000:{items:3}}})});