$(function(){
                $('.triangulo1').addClass('active');
                $('.bolinha1').addClass('active');
                $('.robozinho-home').addClass('active');
			});

        	$(function(){
				$.fn.parallax = function(resistance, mouse) {
				$el = $(this);
				TweenLite.to($el, 0.2, {
					x: -((mouse.clientX - window.innerWidth / 2) / resistance),
					y: -((mouse.clientY - window.innerHeight / 2) / resistance)
					});
				};

				$(document).mousemove(function(e) {
					$(".homem1").parallax(-30, e);
					$(".triangulo1").parallax(10, e);
					$(".bolinha1").parallax(20, e);
					$(".robozinho-home").parallax(5, e);
				});

                $("#scroll").click( function() {
                    $(window).scrollTop( $('.scrolla').outerHeight())
                });
});