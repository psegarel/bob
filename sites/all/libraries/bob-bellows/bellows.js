jQuery(function($) {

		var $container = $('#block-views-gallery-masonry-gallery .view-content');
		
		$container.imagesLoaded(function(){
		  $container.masonry({
		    itemSelector : '.item',
		    columnWidth: 380,
		    /*
columnWidth : function( containerWidth ) {	return containerWidth / 3;
							  							},
*/
		  });
		});
		
});