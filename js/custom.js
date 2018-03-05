// HOME BANNER
$('.home-banner .owl-carousel').owlCarousel({
    items:1,
    loop:true,
    margin:0,
    nav:true,
    animateOut:'fadeOut',
    animateIn:'fadeIn',
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
});

// HOME BANNER GO DOWN
$('body').scrollspy({target: ".navbar", offset: 50});

// Add smooth scrolling on all links inside the navbar
$(".home-banner .go-down a").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });

  } // End if

});

//matchHeight
$('.matchHeight').matchHeight();

//Testimonials
$('.testimonials .owl-carousel').owlCarousel({
    items:1,
    loop:true,
    margin:10,
    animateOut:'fadeOut',
    animateIn:'fadeIn',
});