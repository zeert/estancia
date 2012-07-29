<?php

	$asunto = "Consulta enviada desde www.estancia440.cl";	
	$destinatario= "reservas@estancia440.cl";//"\n";
	$cuerpo = 	'<html>
<head>
<style type="text/css" media="screen">
	* {font-family: Century Gothic;
	font-size:12px;}
	span {font-weight: bold}
	#container {margin: 0 auto;width: 640px;border: 3px solid #993333;padding: 10px 10px 10px 10px}
	
	#notif {
		text-align: center;
		background-color:#993333;
		color: #fff;
		height:100px;
		padding-bottom: 20px;
	}
	h1 { font-size: 26px;
		font-weight: lighter;
	}

	h5 {font-weight: lighter;}

	.campo {display: block;}
	#logo {margin-left: 28%;}
	span.texto {
		font-size: 34px;color:#5a7882;
		font-weight: lighter;
	}
	span.numero {
		font-size: 34px;color:#ac8264;
		font-weight: lighter;
	}
</style>
<title>Estancia 440</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="cont">
<div id="container">
<div id="logo"><span class="texto">ESTANCIA</span><span class="numero">440</span></div>
<br><br>
<div id="notif">
	<br>
	<h1>HEMOS RECIBIDO UN MAIL DESDE:</h1>
	<h5>www.estancia440.cl</h5>
	<br><br>
</div>
<br><br>
<div class="campo">	
	<span>Nombre:</span>
	<div id="nombre">'.$_POST[nombre].'</div>
</div>
<br>
<div class="campo">
	<span>Fecha de Llegada:</span>
	<div id="fecha_llegada">'.$_POST[fecha_llegada].'</div>
</div>
<br>
<div class="campo">
	<span>Fecha de Salida:</span>
	<div id="fecha_salida">'.$_POST[fecha_salida].'</div>
</div>
<br>
<div class="campo">
	<span>Mail:</span>
	<div id="mail">'.$_POST[mail].'</div>
</div>
<br>
<div class="campo">
	<span>Adultos:</span>
	<div id="adultos">'.$_POST[adultos].'</div>
</div>
<br>
<div class="campo">
	<span>Ni&ntilde;os:</span>
	<div id="ninos">'.$_POST[ninos].'</div>
</div>
<br>
<div class="campo">	
	<span>Fono:</span>
	<div id="fono">'.$_POST[fono].'</div>
</div>
<br>
<div class="campo">	
	<span>Pais:</span>
	<div id="pais">'.$_POST[pais].'</div>
</div>
</div>
</div>
</body>
</html>	
				';	
	
	//$cuerpo = ".\n\n";
	//$cuerpo .= ;
	$headers = "From: ".$_POST[mail]."\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";	
	$permiso ="-f".$_POST[mail];
	
	if(mail($destinatario,$asunto,$cuerpo,$headers,$permiso))
	{
		header("Location: gracias.php?status=ok");
	}
	else
	{
		header("Location: gracias.php?status=error");
	}
?>





