jQuery( document ).ready(function() {
	initSlickSlider();
	initBurgerMenu();
	initDropDawn();
});


function initBurgerMenu() {
	jQuery('.burger').on('click', function(e){
		e.preventDefault()
		jQuery(this).toggleClass('open');
		jQuery('body').toggleClass('burger-active');
		
	});
	
}

function initDropDawn() {
	jQuery('.dropdawn').on('click', function(e){
		e.preventDefault()
		jQuery(this).toggleClass('open');
		jQuery('body').toggleClass('dropdawn-active');
	});
} 

function initSlickSlider() {
	jQuery('.slider').slick({
		fade: true,
		slidesToShow: 1,
		// slidesToScroll: -1,
		arrows: false,
		easing: 'ease',
		dots: true,
		rows: false,
		adaptiveHeight: true,
		rtl: true
	}
)};





