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

  $('#homeSlider').waterwheelCarousel({
    itemDecreaseFactor: 0.5,
    flankingItems:3,
    startingItemSeparation:210,
    itemSeparationFactor:0.5,
    opacityDecreaseFactor:0.9,
    waveSeparationFactor:0.5,
    keyboardNav: true
  });

  //Ajax updates when updating items
  $('.isForSale').click(function() {
    var id = $(this).attr('id');
    var currentForSale = $(this).attr('data-forSale');
    var isForSale = 0;
    if(currentForSale === 0) {
        isForSale = 1;
    } else {
        isForSale = 0;
    }
    //alert(id+','+isForSale);
    $.post("/admin/do_update", { id: id, isForSale: isForSale },
        function() {
            //alert("Data loaded: " + data);
            window.location.reload();
        });
  });

  $('#da-thumbs > li').hoverdir();
});






