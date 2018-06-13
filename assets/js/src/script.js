(function ($, root, undefined) {

	$(function () {

		'use strict';

		var $flky;

		$(window).load (function() {

			init();
			animate();

		});

		function init() {
			$(".title-flash, .thankyou").height($(window).height());
			setTimeout(function(){
				$(".title-flash").removeClass("show");
			}, 880);
			$flky = new Flickity('.flky', {
				accessibility: true,
				adaptiveHeight: false,
				autoPlay: 6000,
				cellAlign: 'center',
				cellSelector: undefined,
				contain: false,
				draggable: true,
				dragThreshold: 3,
				freeScroll: false,
				selectedAttraction: 0.04,
				friction: 1,
				groupCells: false,
				initialIndex: 0,
				lazyLoad: false,
				percentPosition: true,
				prevNextButtons: false,
				pageDots: true,
				resize: true,
				rightToLeft: false,
				setGallerySize: true,
				watchCSS: false,
				wrapAround: true
			});
		}

		function animate() {
			requestAnimationFrame( animate );
		}

		var requestAnimationFrame = ( function (){
		return  window.requestAnimationFrame       ||
				 		window.webkitRequestAnimationFrame ||
				 		window.mozRequestAnimationFrame    ||
				 		window.oRequestAnimationFrame      ||
				 		window.msRequestAnimationFrame     ||
				 		function(callback, element){
						 	window.setTimeout(callback, 1000 / 60);
				 		};
		} )();

	});

})(jQuery, this);
