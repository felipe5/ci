<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript">
	        $(document).ready(function(){
			     $("#boton-enviar").click(function(){
			        nombre = $("#nombre").val();
		          	$.ajax({
		           		url:"<?php echo base_url().'index.php/EjemploController/nuevo_usuario'; ?>",
		           		type:'POST',
		           		data:{nombre:nombre},
		           		error: function(req, err){ console.log('my message' + err); }
			        });   
			        console.log("Despues de .click");
			     });  
			});
    	</script> 
	</head>
	<body>
		<form id="formulario">
			<div id="campos-registro">
				<div id="campo-nombre">
					<label for="nombre">Nombre:</label>
					<input id="nombre" type="text" name="nombre" placeholder="escriba nombre"/>
				</div>
			</div>

			<div id="buttons">
				<input id="boton-enviar" type="button" value="Enviar mensaje" title="Enviar mensaje"/>
				<input type="reset" value="limpiar"/>
			</div>
		</form>
	</body>
</html>