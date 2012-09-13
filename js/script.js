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
    slideshow: true,                //Boolean: Animate slider automatically
    slideshowSpeed: 4000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
    animationSpeed: 1000,
    maxItems:1,
    itemWidth:0,
    sync: "#carousel"
  });
});






