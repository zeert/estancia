<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style type="text/css" media="screen">
			* {font-family: Century Gothic; font-size: 13px;}
			#cuadro {margin: 0 auto;} 
			#mapa_print {margin: 10px 10px auto;}
		</style>
	</head>	
	<body>
	 	<b>Ubicacion:</b> <span>Decher 440, Puerto Varas, Regi&oacute;n de Los Lagos, Chile</span><br>
	 	<b>Telefono:</b> <span>(56-65) 233921</span><br>
	 	<b>Contacto:</b> <span>reservas@estancia440.cl</span><br><br>
	 	<br>
	 	<br>
	 	<div id="mapa_print"><img src="../assets/images/mapa_web.jpg" alt="" class="print" onclick="window.print();"></div>
	 	<br><br>
	 	<div id="nota">* Para Imprimir, haga click sobre el mapa</div>
	 </body>
</html>