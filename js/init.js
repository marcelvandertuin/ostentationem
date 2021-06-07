// Init masonry
$('.row-articles').masonry({
  itemSelector: '.articles-article'
});

// Scroll skiplink to main
$(document).ready(function() {
	$('body').on('click', '.skiplink', function(e) {
		e.preventDefault();
		$('#main').animate({ scrollTop: 0 }, 'slow');
		$('.skiplink').blur();
		return false;
	});
});

// Scroll footer to top
$(document).ready(function() {
	$('body').on('click', '.to-top', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, 'slow');
		$('.to-top').blur();
		return false;
	});
});
