(function(){
	
	var Navigation = {
		init: function(menutimeline){
			TweenMax.set('#menu', {display:'none',opacity:0});
			TweenMax.set('#menu .brand .social ul > *', {opacity:0,y:20});
			TweenMax.set('#menu .menu', {opacity:0,x:'100%'});
			TweenMax.set('#menu h1.logo img', {opacity:0});
			TweenMax.set('#menu .menu li', {opacity:0,y:20});
			TweenMax.set('#menu .closer span', {opacity:0});
			
			var menutimeline = new TimelineMax({paused:true});
			menutimeline.to('header.black.hidden', 0.25, {top:'-7.8rem',ease:Power2.easeIn})
						.to('#menu', 0.45, {display:'block',opacity:1,ease:Power2.easeIn})
						.to('#menu .menu', 0.45, {opacity:1,x:'0%',ease:Power2.easeOut})
						.to('#menu .closer span, #menu h1.logo img', 0.5, {opacity:1,ease:Power2.easeOut}, '-=0.1')
						.staggerTo('#menu .brand .social ul > *', 0.5, {opacity:1,y:0,ease:Power2.easeOut}, 0.1, "-=0.5")
						.staggerTo('#menu .menu li', 0.5, {opacity:1,y:0,ease:Power2.easeOut}, 0.1, "-=0.4");

			this.bindEvents(menutimeline);
			return menutimeline;
		},

		openMenu: function(menutimeline){
			TweenMax.set('body', {overflow:'hidden'});
			menutimeline.timeScale += 3;
			menutimeline.play();
		},
		closeMenu: function(menutimeline){
			menutimeline.timeScale += 2;
			menutimeline.reverse();
		  	setTimeout(function(){
				TweenMax.set('body', {overflow:'auto'});
		  	}, 2100);
		},

		bindEvents: function(menutimeline){
			$(document).on('click', '#trigger', function(){
				Navigation.openMenu(menutimeline);
			});
			$(document).keyup(function(e){
				if(e.which == 27) {
				  	Navigation.closeMenu(menutimeline);
				}
			});
			$(document).on('click', '.closeMenu', function(){
				// TweenMax.to('#menu .closer span', 0.3, {opacity:0,ease:Power2.easeIn});
				Navigation.closeMenu(menutimeline);
			});
			$(document).on('click', '.overlay', function(){
				Navigation.closeMenu(menutimeline);
			});
		}
	}

	Navigation.init();

})();