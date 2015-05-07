<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
	          	$("h4:contains('A PHP Error was encountered')").parent().remove();
	         	$("#mostrar-departments").click(function(){
	            	var url = 'http://localhost/ci/index.php/EjemploController/consulta_simple';
	              	$.post(url,function(resp){
	                	$(".respuesta").html("\nRespuesta: "+resp);
	            	});
	         	});
	        });
    	</script> 
	</head>
	<body>
		<div class="respuesta">
			<input id="mostrar-departments" type="button" value="Consulta simple"/>
		</div>
	</body>
</html>