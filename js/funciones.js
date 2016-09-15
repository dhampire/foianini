( function( $ ) {
	$(document).ready(function(){
		$('.completo').addClass('hide')
		.before('<a class="read-more-show" href="#">(Leer más...)</a>')
		.append(' <a class="read-more-hide" href="#">(Leer menos...)</a>');
		// Set up the toggle effect:
		$('.read-more-show').on('click', function(e) {
		  $(this).next('.completo').removeClass('hide');
		  $(this).addClass('hide');
		  e.preventDefault();
		});

		$('.read-more-hide').on('click', function(e) {
		  $(this).parent('.completo').addClass('hide').parent().children('.read-more-show').removeClass('hide');
		  e.preventDefault();
		});
	});

$(document).ready(function() {
  $("#acordion section h3").click(function(e) {
    $(this).parents().siblings("section").addClass("ac_hidden");
    $(this).parents("section").removeClass("ac_hidden");

    e.preventDefault();
  });
});


		function initMobileMenu() {
		$('#primary-menu .menu-item-has-children').prepend('<span class="sub-trigger"></span>');

		$( '.mobile-trigger' ).click( function() {
			$( '#wrapper' ).toggleClass( 'is-visible' );
			$( this ).toggleClass( 'is-visible' );
		});
		$( '.sub-trigger' ).click( function() {
			$( this ).toggleClass( 'is-open' );
			$( this ).siblings( '.sub-menu' ).toggle( 300 );
		});
	}
	$( document ).ready( function() {
		initMobileMenu();
	});



$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
})( jQuery );


