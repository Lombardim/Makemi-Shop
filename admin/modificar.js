$(document).ready(function(){
	$(".eliminar").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('./ejecuta.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
			Imagen:imagen
		},function(e){
			alert("Producto eliminado");
		});
		
	});
	$(".modificar").click(function(){
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
		var descripcion=$(this).parent('td').parent('tr').find('.descripcion').val();
		var categoria=$(this).parent('td').parent('tr').find('.categoria').val();
		var precio=$(this).parent('td').parent('tr').find('.precio').val();
		$.post('./ejecuta.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Nombre:nombre,
			Categoria:categoria,
			Descripcion:descripcion,
			Precio:precio
		},function(e){
			alert("Producto modificado");
		});
	});
});