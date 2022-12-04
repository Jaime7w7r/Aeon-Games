$(document).ready(function(){
	//agregando clase active en la primer enlace
	$('.categorias .catProd[category="all"]').addClass('ctProd-active');

	$('.catProd').click( function(){
		var catProducto = $(this).attr('category');
		console.log(catProducto);


		$('.catProd').removeClass('ctProd-active');
		$(this).addClass('ctProd-active');

		//Ocultando prosuctos

		$('.producto').hide();

		//Mostrando productos

		$('.producto[category="'+catProducto+'"]').show();


	}); 

	//Mostrando todos los productos 

	$('.catProd[category="all"]').click(function(){
		$('.producto').show();
	});
});