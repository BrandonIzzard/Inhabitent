(function($) {

	$('.search-btn').on('click', function(event) {

		event.preventDefault();
		$('#search-1').animate({width: 'toggle'});
        
        $('#search-1').focus();

	})

    $('#search-1').focusout(function(){

    $('#search-1').animate({width: 'toggle'});
    });

})(jQuery);