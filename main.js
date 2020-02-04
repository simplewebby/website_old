jQuery(document).ready(function(){

    // // function for navbar toggle
    //     jQuery('.toggle-nav').click(function (e) {
    //         jQuery(this).toggleClass('active');
    //         jQuery('.menu ul').toggleClass('active');
    //         e.preventDefault();
    //     });



//Variable to knoe  current window height
    var windowHeight = jQuery(window).height();
    var windowScrollPosTop = jQuery(window).scrollTop();
    var windowScrollPosBottom = windowHeight + windowScrollPosTop;

jQuery.fn.showOnScroll = function(direction,speed){
    return this.each(function(){
        var objectOffset = jQuery(this).offset();
        var objectOffsetTop = objectOffset.top;


        if(!jQuery(this).hasClass("hidden")){
            if(direction == "left"){
                jQuery(this).css({"opacity": 0,
                "left" : "900px"
            });

            }else{
                jQuery(this).css({
                    "opacity": 0,
                    "left": "-900px"
                });

        }
            jQuery(this).addClass("hidden");
    }
        if (!jQuery(this).hasClass("animation-complete")) {
            if (windowScrollPosBottom > objectOffsetTop) {
                jQuery(this).animate({
                    "opacity": 1,
                    "left": 0
                },
                    speed
                ).addClass("animation-complete");
            }
        }
    });
} //end of function

    jQuery(window).scroll(function () {
        windowHeight = jQuery(window).height();
       windowScrollPosTop = jQuery(window).scrollTop();
       windowScrollPosBottom = windowHeight + windowScrollPosTop;
        jQuery(".name").showOnScroll("left", 800);
        jQuery(".box").showOnScroll("right", 800);
        jQuery(".box1").showOnScroll("left", 900);
        jQuery(".box2").showOnScroll("left", 900);
        jQuery(".box3").showOnScroll("right", 1000);
        jQuery(".box4").showOnScroll("right", 1000);
        jQuery(".box5").showOnScroll("left", 1000);
        jQuery(".box6").showOnScroll("left", 1000);
        jQuery(".box7").showOnScroll("right", 1000);
        jQuery(".box8").showOnScroll("right", 1000);

        jQuery("h3").showOnScroll("right", 1000);
        jQuery("h4").showOnScroll("left", 1000);


    });

});//end of ready



//Animate Smooth Scroll
$('#view-work').on('click', function(){
    const images = $('#images').position().top;
    $('html, body').animate({
        scrollTop: images
    }, 1000);
});

$('#view-work2').on('click', function () {
    const images = $('#images').position().top;
    $('html, body').animate({
        scrollTop: images
    }, 1300);
});


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
const grid = new Muuri('.grid', {
    dragEnabled: true
});
