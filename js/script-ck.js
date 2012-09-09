/* Author:

*/$(window).load(function(){$("#carousel").flexslider({animation:"slide",controlNav:!1,animationLoop:!1,slideshow:!1,itemWidth:100,itemMargin:5,asNavFor:"#slider"});$("#slider").flexslider({animation:"slide",controlNav:!1,smoothHeight:!0,animationLoop:!1,slideshow:!1,maxItems:1,itemWidth:0,sync:"#carousel"})});