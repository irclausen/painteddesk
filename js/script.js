/* Author:

*/
$(window).load(function() {
  /*$('#carousel').flexslider({
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
  });*/

  $('#slider').waterwheelCarousel({
    itemDecreaseFactor: .4,
    flankingItems:3,
    startingItemSeparation:80,
  });

  //Ajax updates when updating items
  $('.isForSale').click(function() {
    var id = $(this).attr('id');
    var currentForSale = $(this).attr('data-forSale');
    var isForSale = 0;
    if(currentForSale == 0) {
        isForSale = 1;
    } else {
        isForSale = 0;
    }
    //alert(id+','+isForSale);
    $.post("/admin/do_update", { id: id, isForSale: isForSale },
        function(data) {
            alert("Data loaded: " + data);
        });
  });
});






