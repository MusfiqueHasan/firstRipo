$(document).ready(function () {
  $(window).scroll(function () {
    if (this.scrollY > 20) {
      $('.navbar').addClass('sticky');
    } else {
      $('.navbar').removeClass('sticky');
    }
    if (this.scrollY > 500) {
      $('.scroll-up-btn').addClass('show');
    } else {
      $('.scroll-up-btn').removeClass('show');
    }
  });
  $('.scroll-up-btn').click(function () {
    $('html').animate({ scrollTop: 0 });
  });
  var typed = new Typed('.typing', {
    strings: ['Developer', ' Designer', 'Freelencer', 'Blogger'],
    typeSpeed: 110,
    backSpeed: 70,
    loop: true,
  });
  var typed = new Typed('.typing2', {
    strings: [
      'Front-end Developer',
      ' Front-end Designer',
      'Freelencer',
      'Blogger',
    ],
    typeSpeed: 110,
    backSpeed: 70,
    loop: true,
  });

  $('.menu-btn').click(function () {
    $('.navbar .menu').toggleClass('active');
    $('.menu-btn i').toggleClass('active');
  });
  $('.carousel').owlCarousel({
    margin: 20,
    loop: true,
    autoplayHoverPause: true,
    autoplayTimeOut: 2000,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 1,
        nav: false,
      },
    },
  });
});
