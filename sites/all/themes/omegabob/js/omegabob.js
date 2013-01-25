jQuery(document).ready(function ($) 
{
	/* Masonry Plugin */
	var $container = $('#block-views-gallery-masonry-gallery');
	$container.imagesLoaded(function(){
	  $container.masonry({
	    itemSelector : '.item',
	    columnWidth : 380,
	  });
	});
	
	/* Homepage slideshow jQuery Tools */
	$('#scrollable').scrollable({circular:true}).autoscroll({autoplay:true});
	
	$("a.contact[rel]").overlay();
});