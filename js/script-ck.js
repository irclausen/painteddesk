/* Author:

*/$(window).load(function(){$("#carousel").flexslider({animation:"slide",controlNav:!1,animationLoop:!1,slideshow:!1,itemWidth:100,itemMargin:5,asNavFor:"#slider"});$("#slider").flexslider({animation:"slide",controlNav:!1,smoothHeight:!0,animationLoop:!1,slideshow:!0,slideshowSpeed:4e3,animationSpeed:1e3,maxItems:1,itemWidth:0,sync:"#carousel"})});