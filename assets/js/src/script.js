(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(window).load (function() {

			init();
			animate();

		});

		function init() {
			$("body").addClass("show");
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
