(function ($, root, undefined) {

	$(function () {

		'use strict';

		var $flky, $flipit;

		$(window).load(function() {
			init();
			animate();
		});

		$(window).resize(function() {
			setHeight();
		});

		function init() {
			setHeight();
			setTimeout(function(){
				$(".title-flash").removeClass("show");
			}, 880);
			if($(".flky").length) {
				if($(document).scrollTop() < $(window).height()*.6) {
					$flipit = true;
				} else {
					$flipit = false;
				}
				$flky = new Flickity('.flky', {
					accessibility: true,
					adaptiveHeight: false,
					autoPlay: false,
					cellAlign: 'center',
					cellSelector: undefined,
					contain: false,
					draggable: true,
					dragThreshold: 3,
					freeScroll: false,
					selectedAttraction: 0.06,
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
			if($(".glry").length) {
				$flky = new Flickity('.glry', {
					accessibility: true,
					adaptiveHeight: false,
					autoPlay: false,
					cellAlign: 'center',
					cellSelector: undefined,
					contain: false,
					draggable: true,
					dragThreshold: 3,
					freeScroll: false,
					selectedAttraction: 0.06,
					friction: 1,
					groupCells: false,
					initialIndex: 0,
					lazyLoad: false,
					percentPosition: true,
					prevNextButtons: false,
					pageDots: false,
					resize: true,
					rightToLeft: false,
					setGallerySize: true,
					watchCSS: false,
					wrapAround: true
				});
			}
			$(".leftButton").on("click", function(){
				$flky.previous();
				if($flipit) {
					$flipit = false;
				}
			});
			$(".rightButton").on("click", function(){
				$flky.next();
				if($flipit) {
					$flipit = false;
				}
			});
			$(".glry-open").on("click", function(){
				$flky.select($(this).attr("data-index"), false, true);
				$("slider").toggleClass("show");
			});
			$(".glry-close").on("click", function(){
				$("slider").toggleClass("show");
			});
			$(".glry-back").on("click", function(){
				$flky.previous();
			});
			$(".glry-forth").on("click", function(){
				$flky.next();
			});
		}

		function setHeight() {
			$(".title-flash, .thankyou").height($(window).height());
		}

		function animate() {
			requestAnimationFrame( animate );
			// console.log($flipit);
			if($flipit && $flky) {
				if($(document).scrollTop() > ($(window).height()*.6)) {
					$flky.next();
					$flipit = false;
				}
			}
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
