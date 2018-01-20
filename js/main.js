/* ==============================================
    Sticky nav
=============================================== */
(function($){
	
	$(window).scroll( function() {
			if ( $(this).scrollTop() > 10 ) {
					$('header').addClass("sticky");
			} else {
					$('header').removeClass("sticky");
			}
	});	
	/* ==============================================
			Menu
	=============================================== */
	$('a.open_close').on( "click", function() {
			$('.main_menu').toggleClass('show');
			$('.layer').toggleClass('layer-is-visible');
	});

	$('a.show-submenu').on("click",function() {
		$(this).next().toggleClass("show_normal");
	});

	$('a.show-submenu-mega').on("click",function() {
		$(this).next().toggleClass("show_mega");
	});

	if( $(window).width() <= 480 ) {
			$('a.open_close').on( "click", function() {
					$('.cmn-toggle-switch').removeClass('active')
			});
	}	
	/* ==============================================
			Hamburger icon
	=============================================== */
	var toggles = document.querySelectorAll(".cmn-toggle-switch");
	
		for (var i = toggles.length - 1; i >= 0; i--) {
			var toggle = toggles[i];
			toggleHandler(toggle);
		};
	
		function toggleHandler(toggle) {
			toggle.addEventListener( "click", function(e) {
				e.preventDefault();
				(this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
			});
		};
		
		/* ==============================================
				Responsive Carousel
	=============================================== */
	
	$('.carousel[data-type="multi"] .item').each(function(){
		var next = $(this).next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));
		
		for (var i=0;i<2;i++) {
			next=next.next();
			if (!next.length) {
				next = $(this).siblings(':first');
			}
			
			next.children(':first-child').clone().appendTo($(this));
		}
	});

	/* ==============================================
				Filtro de tours y oculta 
	=============================================== */
	$('#tx_tours > div').not(':first').hide();
	// agregar .active first li
	$('#cat_list_nav li:first-child').addClass('active');
	// $('#cat_list_nav .active').css( 'background', '#e6e6e6');

	$('.aside_cat_list #cat_list_nav a').on('click', function() {
		$('.aside_cat_list #cat_list_nav li').removeClass('active');
		$(this).parent().addClass('active');
		var enlace = $(this).attr('href');
		$('#tx_tours > div').hide();
		$(enlace).fadeIn();
		return false;
	});
	// $('#cat_list_nav li:first-child').addClass( 'active');
	$('#cat_list_nav .all a').on('click', function() {
		$('#tx_tours > div').show().fadeIn();
		return false;
	});

	/* ==============================================
				Formulario 
	=============================================== */
	/* Input incrementer*/
	$(".numbers-row").append('<div class="inc button_inc">+</div><div class="dec button_inc">-</div>');
	$(".button_inc").on("click", function () {

		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		//$button.parent().className().find

		if ($button.text() == "+") {
				var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 1) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		var newvalor = $button.parent().find("input").val(newVal);
	});

	/* ==============================================
			Formulario Suma de precios por persona + agregar
	================================================== */
	var totaladult = document.getElementById("tt_totaladult");
	var totalnino = document.getElementById("tt_totalnino");
	
	$(".button_inc").on("click", function () {
		var $button = $(this);

		
		var price_adul = document.getElementById("tt_adul");
		var price_nin = document.getElementById("tt_nino");
		

		// Mostrar en el DOM
		var oldval_adl = $button.parent().find("#adulto_booking").val();
		var oldval_nin = $button.parent().find("#nino_booking").val();

		// Precio de Tour Adulto y Niño
		var precio_real_adul= document.getElementsByClassName("precio_Tour");
		var precio_real_nin = document.getElementsByClassName("precio_Tour_n");

		var auxprecio_real_adul = precio_real_adul.innerHTML;
		var auxprecio_real_nin = precio_real_nin.innerHTML;

		var totalfinal= document.getElementsByClassName("pr_total");

		if (oldval_adl ) {
			if (oldval_adl < 1) {
				var oldval_adl = 0;
			}
			else {
				var auxadult = oldval_adl;// + " X $" + precio_real_adul;						
								
			}
			var yount = (price_adul.innerHTML = oldval_adl);
			totaladult.innerHTML = "";
			var auxprecio = yount * auxprecio_real_adul;
			console.log(yount);
			console.log(auxprecio_real_adul);
			var most_precio = (totalfinal.innerHTML = auxprecio);
			//console.log("Mostrar precio de adulto  "+most_precio);
		}
		if( oldval_nin ) {
			if (oldval_nin < 1) {
				var oldval_nin = 0 ;			
			}
			else {
				var auxnino = oldval_nin;//+ " X $" + precio_real_nin;
				var auxprecio = auxnino * precio_real_nin;
				console.log(auxnino);
			}
			var child = (price_nin.innerHTML = oldval_nin);
			totalnino.innerHTML = "";
			var most_precio = (totalfinal.innerHTML = auxprecio);
			//console.log("Mostrar precio de adulto  "+most_precio);
		}
	});

	/* ==============================================
			Agregando al .totaladul y totalnino
	=============================================== */ 

		/*$(".tt_todo").append('<span class="tt_totaladult"></span><span class="tt_totalnino"></span>');
		
		var totaltodo = document.getElementsByClassName("tt_todo");
		var nose_adul = document.getElementById("tt_adul");
		var nose_nino = document.getElementById("tt_nino");
		var totalfinal= document.getElementsByClassName("pr_total");
		

		var temp_prec = precio.innerText;
		var yount = nose_adul.innerHTML;
		var child = nose_nino.innerHTML;

		console.log(yount);
		console.log(child);
		totaltodo.innerHTML = yount + " + " + child;

		let prec_final = (yount * 15) + (child * 10);
		totalfinal.innerHTML = "prec_final";
		console.log("precio final " + prec_final);*/
		
		

	/* ==============================================
				tabs
	=============================================== */
	function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
	}

	
})( jQuery );
	
