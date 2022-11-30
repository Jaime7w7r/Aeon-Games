let ubicacionPrincipal = 0;
window.onscroll = function(){
    let Desplazamiento_Actual = window.pageYOffset;
    var a = this.document.getElementById("carouselExampleFade");
    if(ubicacionPrincipal <= Desplazamiento_Actual ){
        a.style.opacity = '1'-(window.pageYOffset/400);
    }else{
        a.style.opacity = '1';
    }
    if(window.pageYOffset <= 330){
        ubicacionPrincipal = Desplazamiento_Actual;
    }else{
        Desplazamiento_Actual = ubicacionPrincipal;
    }

    if(window.pageYOffset == 0){
        a.style.opacity = '1';
    }
}

window.addEventListener("scroll", function(){
    var header = document.getElementById("nav");
    header.classList.toggle("abajo", window.scrollY>0);
})

window.addEventListener("scroll", function(){
    var h = document.getElementById("nav");
    h.classList.toggle("desparecer", window.scrollY>450);
})



var swiper = new Swiper('.swiper-container', {
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev'
	},
	slidesPerView: 1,
	spaceBetween: 10,
	// init: false,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},

  
	breakpoints: {
	  620: {
		slidesPerView: 1,
		spaceBetween: 20,
	  },
	  680: {
		slidesPerView: 2,
		spaceBetween: 40,
	  },
	  920: {
		slidesPerView: 3,
		spaceBetween: 40,
	  },
	  1240: {
		slidesPerView: 4,
		spaceBetween: 50,
	  },
	} 
    });