( function( $ ) {

	$(document).ready(function(){
		$('span.completo').addClass('hide')
		.before('<a class="read-more-show" href="#">(Ver más...)</a>')
		.append(' <a class="read-more-hide" href="#">(Ver menos...)</a>');

		$('.read-more-show').on('click', function(e){
			$(this).next('span.completo').removeClass('hide');
			$(this).addClass('hide');
			return false;
			e.preventDefault();
		});

		$('.read-more-hide').on('click', function(e){
			  $(this).parent('span.completo').addClass('hide').parent().children('.read-more-show').removeClass('hide');
 			 return false;
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
 // Scroll Icon 

	$(document).ready(function(){
		$('.clinica__icon').hide(0); 
			$(window).scroll(function() {
				var windowHeight = $(window).scrollTop();
				var main = $('.main').offset();

					main = main.top;

					if (windowHeight >= main) {
						$('.clinica__icon').fadeIn(500);
					} else {
						$('.clinica__icon').fadeOut(500);
					}
			});
	});
function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);

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