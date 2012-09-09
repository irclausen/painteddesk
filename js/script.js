/* Author:

*/
$(window).load(function() {
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#slider'
  });
   
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    smoothHeight: true,
    animationLoop: false,
    slideshow: false,
    maxItems:1,
    itemWidth:0,
    sync: "#carousel"
  });
});






