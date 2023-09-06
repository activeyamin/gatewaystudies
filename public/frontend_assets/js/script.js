// =========banner slider start=====
$('.banner_slider_box').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  // autoplaySpeed: 3000,
  prevArrow: '<i class="fa-solid fa-angle-left prev"></i>',
  nextArrow: '<i class="fa-solid fa-angle-right next"></i>',
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// ======banner slider  end======
// =========== counter-down start===========//
$('#simple_timer').syotimer({
  date: new Date(2035, 4, 9, 20, 30),

  afterDeadline: function(){
    // ...
  }
});

// =========== counter-down end===========//
