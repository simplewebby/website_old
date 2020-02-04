jQuery(document).ready(function() {







//adding the x button
jQuery("ui-msg").append('<span class="close">X</span>');
 //Handling the click event
jQuery(".close").click(function() {
  jQuery(this).parents(".ui-msg").fadeOut(500);
});
 //Initially hide the answers
$(".answers").hide();
//handling faq questions
$(".faq h3").click(function(){
  $(this).next(".answers").fadeToggle(1000);
});
$(".faq h3").addClass(".faq");

//dinamically load about page
$("#about").click(function(){
  $(".about-placeholder").load("about.html .body-text");
  return false;

});

// global variables  from  the reusable function

var windowHeight = $(window).height();
var windowScrollPosTop = $(window).scrollTop();
var windowScrollPosBottom = windowHeight + windowScrollPosTop;


// Reusable function
$.fn.revealOnScroll = function() {
  return this.each(function() {

    var objectOffset = $(this).offset();
    var objectOffsetTop = objectOffset.top;
if (!$(this).hasClass("hidden")){

    $(this).css("opacity", 0).addClass("hidden");}

  if (!$(this).hasClass("animation-complete")){
    if (windowScrollPosBottom > objectOffsetTop) {
      $(this).animate({"opacity" : 1}, 1000).addClass("animation-complete");
    }

  }

  });
}
//end of the function

// Variables and functions

$(window).scroll(function(){
   windowHeight = $(window).height();
   windowScrollPosTop = $(window).scrollTop();
  windowScrollPosBottom = windowHeight + windowScrollPosTop;
$(this).addClass("hidden");
//call function
});


});
