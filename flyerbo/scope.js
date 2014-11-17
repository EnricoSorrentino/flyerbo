$(document).ready(function(){

 var $container = $('#wall');
    
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.flyer',
        columnWidth: 320,
		gutter: 1,
		isFitWidth:  true
      });
    });
    


});