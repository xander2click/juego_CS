$(document).ready(function(){
					$("#btn1").click(function(){
						$('#forma1').find('input, textarea, button, select').attr('disabled','disabled');					
						var vUserId = $('input:radio[name=radio]:checked').val()
						$.post("verificar.php", //enlaza a php 
						   { // envia valor seleccionado de radiobutton
							  valor:vUserId, 
							  },
					 function(response,status){ // Required Callback Function
						 $("#respuesta").html(response);//"carga respuesta de php en div #respuesta
					  });
					
				 });
			   });