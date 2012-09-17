/* Author:

*/$(window).load(function(){$("#slider").waterwheelCarousel({itemDecreaseFactor:.4,flankingItems:3,startingItemSeparation:80});$(".isForSale").click(function(){var e=$(this).attr("id"),t=$(this).attr("data-forSale"),n=0;t==0?n=1:n=0;$.post("/admin/do_update",{id:e,isForSale:n},function(e){alert("Data loaded: "+e)})})});