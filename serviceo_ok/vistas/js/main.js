jQuery(document).ready(function($){
	load(1);
});  

function load(page){
	var q= $("#q").val();
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'/ajax/buscador.php?action=ajax&page='+page+'&q='+q,
		 beforeSend: function(objeto){
		 $('#loader').html('<img src="./images/ajax-loader.gif"> Cargando...');
	  },
		success:function(data){ 
			$(".outer_div").html(data).fadeIn('slow');
			$('#loader').html('');
			
		},
		error:function(error){
			console.log(error);
		}
	})
}

