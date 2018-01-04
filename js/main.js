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

		/*if ($button.text() == "+") {
				var newVal = parseFloat(oldValue) + 1;
		} else {
				// Don't allow decrementing below zero
				if (oldValue > 1) {
						var newVal = parseFloat(oldValue) - 1;
				} else {
						newVal = 0;
				}
		}
		var newvalor = $button.parent().find("input").val(newVal);*/			
		
		/* ==============================================
					Formulario Suma de precios por persona 
		=============================================== */
		if ( document.getElementById("adulto_booking") || $button.parent().find("input").val() )
		{
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
			var x = document.getElementById("tt_adul").innerText = newvalor.val()  ;
			console.log(x);
		}
		else if ( document.getElementById("nino_booking") || $button.parent().find("input").val() )
		{
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
			var y = document.getElementById("tt_ninos").innerText = newvalor.val() ;
			console.log(y);
		}
		//var adulto = $button.parent().find("input").val(newVal);
		//var chidrens = $button.parent().find("input").val(newVal);
		//document.getElementById("adulto_booking").innerText;
		//console.log(x);
		//document.getElementById("tt_adul").innerHTML = newvalor.val();
		//var x = document.getElementById("tt_adul").innerText = adulto.val() ;
		//console.log(x);
		//document.getElementById("tt_ninos").innerHTML = newvalor.val();
		//console.log(chidrens).innerHTML;
			
	});

	

	// coger valor de formlario
	//var x = document.getElementById("tt_adul").innerText;
	//tt_adult.innerHTML="\Por newVal: "+ newvalor;
	//console.log(tt_adult)["0"].innerText;
	/* var tt_adul = $(".tt_adul").attr(newvalor); */
	/* if (empthy(tt_adul)) { $(".tt_adul").text(newvalor); } */
	
	//var x = document.getElementById("tt_adul").innerText;
	
/* 	$(".tt_adul").addend('<p class="new_tt_adul"></p>'); */
	//div_a_ocultar.style.background = "#a83";

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
	
