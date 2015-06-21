$(document).ready(start);

function start() {

	header();

}


function header() {

	var estado;

	if( $('#header').css('left') == '0px' ) { estado = true }
	else { estado = false }

	$(window).resize(function () {

		if( $('#header').css('left') == '0px' ) { estado = true }
		else { estado = false }

		if(estado == false && $('body > header .close-wrapper').css('display') == 'none') {

			$('#header').animate({ left: '0px' }); // Mostrar

			estado = true;

			// Extras
			$('body > .content').css({
				width: '80%',
				marginLeft: '20%'
			});

		}

		if(estado == true && $('body > header .close-wrapper').css('display') == 'block') {

			$('#header').animate({ left: '-100%' }); // Ocultar

			estado = false;

			// Extras
			$('body > .content').css({
				width: '100%',
				marginLeft: '0px'
			});

		}

	});

	$('.header-btn').click(function() {

		if(estado) { ocultar(); } 

		else { mostrar(); }

	});

	$('.close').click(function() {

		if(estado) { ocultar(); } 

		else { mostrar(); }

	});

	function mostrar() {

		$('#header').animate({ left: '0px' });
		
		estado = true;

		// Extras
		if($('body > header .close-wrapper').css('display') == 'none') {

			$('body > .content').animate({
				width: '80%',
				marginLeft: '20%'
			});
		}

	}

	function ocultar() {

		$('#header').animate({ left: '-100%' });

		estado = false;

		// Extras
		if($('body > header .close-wrapper').css('display') == 'none') {

			$('body > .content').css({
				width: '100%',
				marginLeft: '0px'
			});
			
		}

	}

}

// ACCORDION
$(function() {

	var Accordion = function(el, multiple) 
	{
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var link = this.el.find('.link');

		// Eventos
		link.on('click', {el: this.el, multiple: this.multiple}, this.dropdown);
	}

	Accordion.prototype.dropdown = function(e) 
	{
		var $el = e.data.el,
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if(!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		}
	}

	var accordion = new Accordion($('#accordion'));
	var menu = new Accordion($('#menu'));

});