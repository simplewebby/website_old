$('#myCarousel').on('slide.bs.carousel', function () {
  // do something…
})

function init_carousel() {
            H = +($(window).height() /* -height here  */); // or $('.carousel-inner') as you want ...
            $('.carousel-inner').css('height', H + 'px');
        }
        window.onload = init_carousel;
        init_carousel();