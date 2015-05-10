<!DOCTYPE html>
<html>
	<head>
		<script src="<?php echo base_url()."/assets/js/jquery-2.1.1.js" ?>"></script>
		<script type="text/javascript">

			// $(document).ready(function(){
	  //         	$("input").click(function(){
	  //         		var url;
		 //          	if (this.id==="mostrar-departments")
		 //            	url = 'http://localhost/ci/index.php/EjemploController/consulta_simple';
		 //            if (this.id==="mostrar2")
		 //            	url = 'http://localhost/ci/index.php/EjemploController/consulta_media';
		 //  			if (this.id==="mostrar3")
		 //            	url = 'http://localhost/ci/index.php/EjemploController/consulta_compleja';
		 //         	$.post(url,function(resp){
		 //                	$(".respuesta").html("\nRespuesta: "+resp);
		 //            });
		 //        });
	  //       });
    	</script>
	</head>
	<body>
		<!-- <input id="mostrar-departments" type="button" value="Consulta simple"/>
		<input id="mostrar2" type="button" value="Consulta media"/>
		<input id="mostrar3" type="button" value="Consulta Compleja"/> -->
		<a href="<?php echo base_url() ?>/index.php/ejemploController/consulta_simple">Consulta Simple</a><br>
		<a href="<?php echo base_url() ?>/index.php/ejemploController/consulta_media">Consulta Media</a><br>
		<a href="<?php echo base_url() ?>/index.php/ejemploController/consulta_compleja">Consulta Compleja</a>
		<div class="respuesta">
			
			
		</div>
	</body>
</html>