<html>
<head>
	<meta charset="utf-8">
<link rel="stylesheet" href="index.css">
	<title>Canvas</title>

</head>
<body>
	
	<div class="contenedor">

		<div class="row">
			<div class="col-md-12">
		 		<canvas id="draw-canvas" width="620" height="360">
		 			No tienes un buen navegador.
		 		</canvas>
		 	</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<form id='formCanvas' method='post' action='#' ENCTYPE='multipart/form-data'>
				<input type="button" class="button" id="draw-submitBtn" value="Crear Imagen"></input>
				<input type="button" class="button" id="draw-clearBtn" value="Borrar Canvas"></input>
				<button id="btnDescargar">Descargar</button>

						<label>Color</label>
						<input type="color" id="color">
						<label>Tamaño Puntero</label>
						<input type="range" id="puntero" min="1" default="1" max="5" width="10%">

			</form>
			</div>

		</div>

		<br/>
		<div class="row">
			<div class="col-md-12">
				<textarea id="draw-dataUrl" class="form-control" rows="5">Para los que saben que es esto:</textarea>
			</div>
		</div>
		<br/>
		<div class="contenedor">
			<div class="col-md-12">
				<img id="draw-image" src="" alt="Tu Imagen aparecera Aqui!"/>
			</div>
		</div>
	</div>

<div class="" id="hola"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="index.js"></script>
<script type="text/javascript" src="code.js"></script>
<script type="text/javascript">

  </script>
</body>

</html>