jQuery(function($) {
	$('.carousel').carousel('cycle');
	
	//Copied from Eazy Start default.js 
	$('iframe').each(function () {/*fix youtube z-index*/
        var url = $(this).attr("src");
        if (url.indexOf("youtube.com") >= 0) {
            if (url.indexOf("?") >= 0) {
                $(this).attr("src", url + "&wmode=transparent");
            } else {
                $(this).attr("src", url + "?wmode=transparent");
            }
        }
    });

/*
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });
*/
    
	//Add an active class to the Main Menu Items
	/* $('.ddmenu li').first().addClass('active'); */
/*
	$('.ddmenu li').click(function()
	{
		$('.ddmenu li').removeClass('active');
		$(this).addClass('active');
	});
*/
});