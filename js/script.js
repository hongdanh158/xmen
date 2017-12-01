window.onresize = function(event) {
	if ($('#pagepiling').length) {
		 $('#pagepiling').height($(window).height());
	}
	if ($('.slider-product').length) {
		$('.slider-product').height($(window).height());
	}
};
$(document).ready(function() {
	if ($('#pagepiling').length) {
		$('#pagepiling').pagepiling();
		$('#pagepiling').height($(window).height());
	}
	if ($('.slider-product').length) {
		$('.slider-product').height($(window).height());
	}
	if ($('.bx-viewport').length) {
		$('.bx-viewport').height($(window).height());
	}
	// Initialize Slidebars
	var controller = new slidebars();
	controller.init();
	$( '.trigger-menu' ).on( 'click', function ( event ) {

		if ($('.three-bars-icon').hasClass('close')) {
			$('.three-bars-icon').removeClass('close');
		}
		else {
			$('.three-bars-icon').addClass('close');
		}
		// Stop default action and bubbling
		event.stopPropagation();
		event.preventDefault();

		// Toggle the Slidebar with id 'id-2'
		controller.toggle( 'id-2' );
	});
	if($('#pagepiling').length) {
		$('.slider-product .all-product .item').hover(function() {
			$.each($('.slider-product .all-product .item'), function(index, obj) {
				$(obj).stop(false, true).addClass('not-hover')
			});
			$(this).removeClass('not-hover')
		}, function() {
			$('.slider-product .all-product .item').removeClass('not-hover')
		});
	}
	if($('.slider-product-group').length) {
		$('.slider-product-group .slider').bxSlider({
			slideWidth: 200,
		    minSlides: 3,
		    maxSlides: 3,
		    slideMargin: 10,
		    pager : false,
		});
	}
});
$('.o-brand-mobile').html($('.o-brand').html());
$('.navbar-mobile').html($('.navbar').html());
$('.o-brand-mobile > ul > li').click(function(event) {
	$(this).find('ul').eq(0).addClass('active')
});
if ($('.navbar-mobile').length) {
    $.each($(".navbar-mobile li"), function (index, obj) {
	    if ($(obj).has("ul").length) {
	        $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
	    }
	});
    $(".navbar-mobile li").click(function(event) {
    	$.each($(".navbar-mobile ul"), function (index, obj) {
		    $(".navbar-mobile li").removeClass('active');
		});
    	
    	$(this).find('ul:first').addClass('active');
    });
}
$('.video-product').hover(function() {
	var id = $(this).attr('id');
	playVideo(id);
	$(this).css('opacity', '1');
}, function() {
	var id = $(this).attr('id');
	$(this).css('opacity', '0');
});
function playVideo(id) {
	var vid = document.getElementById(id); 
	vid.play();
}
function pauseVideo(id) {
	var vid = document.getElementById(id); 
	vid.pause();
}


function createCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}
function tomorrow(argument) {
	var tomorrow = new Date();
	tomorrow.setDate(tomorrow.getDate() + 1);
	return tomorrow;
}
function setMenuActive(element) {
	$('#menu-fullpage .' + element).addClass('active')
}