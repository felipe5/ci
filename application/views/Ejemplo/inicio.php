<!DOCTYPE html>
<html>
	<head>
		<script src="<?php echo base_url()."/assets/js/jquery-2.1.1.js" ?>"></script>
		<script type="text/javascript">
			// $(document).ready(function(){
	  //         	$("h4:contains('A PHP Error was encountered')").parent().remove();
	  //        	$("#mostrar-departments").click(function(){
	  //           	var url = 'http://localhost/ci/index.php/EjemploController/consulta_simple';
	  //             	$.post(url,function(resp){
	  //               	$(".respuesta").html("\nRespuesta: "+resp);
	  //           	});
	  //        	});
	  //        	$("#mostrar2").click(function(){
	  //           	var url = 'http://localhost/ci/index.php/EjemploController/consulta_media';
	  //             	$.post(url,function(resp){
	  //               	$(".respuesta").html("\nRespuesta: "+resp);
	  //           	});
	  //        	});
	  //        	$("#mostrar3").click(function(){
	  //           	var url = 'http://localhost/ci/index.php/EjemploController/consulta_compleja';
	  //             	$.post(url,function(resp){
	  //               	$(".respuesta").html("\nRespuesta: "+resp);
	  //           	});
	  //        	});
	  //       });
			$(document).ready(function(){
	          	$("input").click(function(){
	          		var url;
		          	if (this.id==="mostrar-departments")
		            	url = 'http://localhost/ci/index.php/EjemploController/consulta_simple';
		            if (this.id==="mostrar2")
		            	url = 'http://localhost/ci/index.php/EjemploController/consulta_media';
		  			if (this.id==="mostrar3")
		            	url = 'http://localhost/ci/index.php/EjemploController/consulta_compleja';
		         	$.post(url,function(resp){
		                	$(".respuesta").html("\nRespuesta: "+resp);
		            });
		        });
	        });
    	</script> 
	</head>
	<body>
		<input id="mostrar-departments" type="button" value="Consulta simple"/>
		<input id="mostrar2" type="button" value="Consulta media"/>
		<input id="mostrar3" type="button" value="Consulta Compleja"/>
		<div class="respuesta">
			
		</div>
	</body>
</html>