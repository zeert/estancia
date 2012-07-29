<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estancia 440 Bed & Breakfast</title>

<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- Favicon -->

<!-- Favicon -->
<link href="../assets/css/legacy2.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="../assets/js/jquery.datepicker.es.js"></script>

<script type="text/javascript" src="../assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="../assets/js/cufon-yui.js"></script>
<script type="text/javascript" src="../assets/js/fonts/century.font.js"></script>
<script type="text/javascript">
	Cufon.replace('ul#nav li a', { fontFamily: 'Century', hover: {color: '#fdc99a'} });

	Cufon.replace('#toolbar');
	
	

	
</script>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen" />
<link rel="stylesheet" href="../assets/css/smoothness/jquery-ui-1.8.17.custom.css" type="text/css" media="screen" />

<!-- jQuery Paradigm Slider  -->
<script type="text/javascript" src="../assets/kb-plugin/js/jquery.cssAnimate.mini.js"></script>
<!-- <script type="text/javascript" src="kb-plugin/js/jquery.waitforimages.js"></script> -->
<script type="text/javascript" src="../assets/kb-plugin/js/jquery.touchwipe.min.js"></script>
<script type="text/javascript" src="../assets/kb-plugin/js/jquery.themepunch.kenburn.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/kb-plugin/css/settings.css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:700' rel='stylesheet' type='text/css'>

<!-- LOADING THE GOOGLE FONTS HERE, If no Google Fonts Needed, set families like: families:['']  !! -->
<!--	<script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'PT+Sans+Narrow:400,700' ] },
		active: function() { $('body').data('googlefonts','loaded');},
		inactive: function() { $('body').data('googlefonts','loaded');}
      };	  
    </script>-->
</head>
<body>
<div id="container">
<div id="logo"><a href="index.php"><img src="../assets/images/logo.png" width="440" height="76" alt="" /></a></div>
<div class="clear"></div>
<div id="menu">
<ul id="nav">
<li><a href="inspiracion.php">Inspiracion Patagonica</a></li>
<li><a href="habitaciones.php">Habitaciones</a></li>
<li><a href="b&b.php">B&B Boutique</a></li>
<li><a href="pvaras.php">Puerto Varas Ciudad de las Rosas</a></li>
<li><a href="desayunos.php">Desayunos Sure&ntilde;os</a></li>
<li><a href="contacto.php" style="color:#fdc99a;">Reservas</a></li>
</ul>
</div>
<style type="text/css" media="screen">
	#banner-example-1 {

	}
	
	#gal {
		background-image:url('../assets/images/contacto/1.jpg');
	}
	
	
	html {
	    font-size:11px;
	}
	    #form {
	        position: absolute;
	        left: 50px;
	        top:85px;;        
	    }

	    input, textarea, select { 

	    padding: 9px;
	    border: solid 1px #000;
	    outline: 0;
	    font: normal 11px/100% Verdana, Tahoma, sans-serif;
	    width: 180px;

	    background: #FFFFFF url('bg_form.png') left top repeat-x;
	    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));
	    background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);
	    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	    -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; 

	    }

	    select {
	    	height:35px;
	    	width: 200px;
	    	font-weight:bolder;
	    }

      input[type="submit"] {
        width: 140px;
        left: 25px;
        position: absolute;
      }

	textarea { 
	    width: 400px;
	    max-width: 400px;
	    height: 150px;
	    line-height: 150%;
	    }

	input:hover, textarea:hover,
	input:focus, textarea:focus { 
	    border-color: #C9C9C9; 
	    -webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px;
	    }

	.form label { 
	    margin-left: 10px; 
	    color: #999999;
	    font-weight:bold;
	    }

	.submit input {
	    width: auto;
	    padding: 9px 15px;
	    background: #617798;
	    border: 0;
	    font-size: 14px;
	    color: #FFFFFF;
	    -moz-border-radius: 5px;
	    -webkit-border-radius: 5px;
	    cursor: pointer;
	    }

	    #adultos {width: 77.5px;}
	    #date {width: 77.5px;}
	    #date2 {width: 77.5px;}
	    #ninos {width: 77.5px;}

	    label {
	        color:#fff;
	    }

	    #mapa {
			position: absolute;
			left:31%;top:95px;}

	    #icono {
	        position: relative;
	        left:330px;
	        top:20px;
	    }
#ubicacion {color: #fff;
	width:25%;
	text-align: justify;
	position:absolute;
	top:85px;
	left:680px;
	}
	    
	#boton {
		width: 100%;
        font-weight:bold;
		  }
	
	    .submit {
	        font-weight:bold;
	    }

    
</style>
<div id="gal">
<div id="banner-example-1" class="dark" style="margin-left:-1px; margin-top:-1px;">
<img id="icono" src="../assets/images/iconotxt.png" alt="">
	<form id="form" class="blocks" action="enviar.php" method="post">
	    <p>
	        <label>Nombre</label><br>
	        <input type="text" id="nombre" class="text" name="nombre" />

	    </p>
	    <p><br>
	        <label>Fecha Llegada &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha Salida</label><br>
	        <input type="date" class="date" name="fecha_llegada" id="date" />
	         <input type="date" class="date" name="fecha_salida" id="date2" />
	    </p>
	    
	    <p><br>
	        <label>Adultos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ni&ntilde;os</label><br>
	        <input type="text" name="adultos" id="adultos" />
	        <input type="text" name="ninos" id="ninos" />
	    </p>
	   
	   
	    <p><br>
	        <label>E-Mail</label><br>
	        <input id="mail" type="text" class="text" name="mail" />
	    </p>
	    <p><br>
	        <label>Tel&eacute;fono</label><br>
	        <input id="fono" type="text" class="text" name="fono" />
	    </p>
	    <p><br>
	        <label>Pais</label><br>
	        <select name="pais">
                      <option value="Afganistan">Afganistán</option> 
                      <option value="Albania">Albania</option> 
                      <option value="Alemania">Alemania</option> 
                      <option value="Andorra">Andorra</option> 
                      <option value="Angola">Angola</option> 
                      <option value="Anguilla">Anguilla</option> 
                      <option value="Antartida">Antártida</option> 
                      <option value="Antigua">Antigua y Barbuda</option> 
                      <option value="AntillasHolandesas">Antillas Holandesas</option> 
                      <option value="ArabiaSaudita">Arabia Saudí</option> 
                      <option value="Argelia">Argelia</option> 
                      <option value="Argentina">Argentina</option> 
                      <option value="Armenia">Armenia</option> 
                      <option value="Aruba">Aruba</option> 
                      <option value="Australia">Australia</option> 
                      <option value="Austria">Austria</option>  
                      <option value="Azerbaiyan">Azerbaiyán</option>  
                      <option value="Bahamas">Bahamas</option>  
                      <option value="Bahrein">Bahrein</option>  
                      <option value="Bangladesh">Bangladesh</option>  
                      <option value="Barbados">Barbados</option>  
                      <option value="Belgica">Bélgica</option>  
                      <option value="Belice">Belice</option>  
                      <option value="Benin">Benin</option>  
                      <option value="Bermudas">Bermudas</option>  
                      <option value="Bielorrusia">Bielorrusia</option>  
                      <option value="Birmania">Birmania</option>  
                      <option value="Bolivia">Bolivia</option>  
                      <option value="Bosnia">Bosnia y Herzegovina</option>  
                      <option value="Botswana">Botswana</option>  
                      <option value="Brasil">Brasil</option>  
                      <option value="Brunei">Brunei</option>  
                      <option value="Bulgaria">Bulgaria</option>  
                      <option value="Burkina">Burkina Faso</option>  
                      <option value="Burundi">Burundi</option>  
                      <option value="Butan">Bután</option>  
                      <option value="CaboVerde">Cabo Verde</option>  
                      <option value="Camboya">Camboya</option>  
                      <option value="Camerun">Camerún</option>  
                      <option value="Canada">Canadá</option>  
                      <option value="Chad">Chad</option>  
                      <option value="Chile" selected>Chile</option>  
                      <option value="China">China</option>  
                      <option value="Chipre">Chipre</option>  
                      <option value="Vaticano">Ciudad del Vaticano (Santa Sede)</option>  
                      <option value="Colombia">Colombia</option>  
                      <option value="Comores">Comores</option>  
                      <option value="Congo">Congo</option>  
                      <option value="CongoRepublica">Congo, República Democrática del</option>  
                      <option value="Corea">Corea</option>  
                      <option value="CoreadelNorte">Corea del Norte</option>  
                      <option value="CostadeMarfíl">Costa de Marfíl</option>  
                      <option value="CostaRica">Costa Rica</option>  
                      <option value="Croacia">Croacia (Hrvatska)</option>  
                      <option value="Cuba">Cuba</option>  
                      <option value="Dinamarca">Dinamarca</option>  
                      <option value="Djibouti">Djibouti</option>  
                      <option value="Dominica">Dominica</option>  
                      <option value="Ecuador">Ecuador</option>  
                      <option value="Egipto">Egipto</option>  
                      <option value="Salvador">El Salvador</option>  
                      <option value="Emiratos">Emiratos Árabes Unidos</option>  
                      <option value="Eritrea">Eritrea</option>  
                      <option value="Eslovenia">Eslovenia</option>  
                      <option value="España">España</option>  
                      <option value="EEUU">Estados Unidos</option>  
                      <option value="Estonia">Estonia</option>  
                      <option value="Etiopia">Etiopía</option>  
                      <option value="Fiji">Fiji</option>  
                      <option value="Filipinas">Filipinas</option>  
                      <option value="Finlandia">Finlandia</option>  
                      <option value="Francia">Francia</option>  
                      <option value="Gabon">Gabón</option>  
                      <option value="Gambia">Gambia</option>  
                      <option value="Georgia">Georgia</option>  
                      <option value="Ghana">Ghana</option>  
                      <option value="Gibraltar">Gibraltar</option>  
                      <option value="Granada">Granada</option>  
                      <option value="Grecia">Grecia</option>  
                      <option value="Groenlandia">Groenlandia</option>  
                      <option value="Guadalupe">Guadalupe</option>  
                      <option value="Guam">Guam</option>  
                      <option value="Guatemala">Guatemala</option>  
                      <option value="Guayana">Guayana</option>  
                      <option value="Guayana Francesa">Guayana Francesa</option>  
                      <option value="Guinea">Guinea</option>  
                      <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>  
                      <option value="Guinea-Bissau">Guinea-Bissau</option>  
                      <option value="Haití">Haití</option>  
                      <option value="Honduras">Honduras</option>  
                      <option value="Hungría">Hungría</option>  
                      <option value="India">India</option>  
                      <option value="Indonesia">Indonesia</option>  
                      <option value="Irak">Irak</option>  
                      <option value="Irán">Irán</option>  
                      <option value="Irlanda">Irlanda</option>  
                      <option value="Isla Bouvet">Isla Bouvet</option>  
                      <option value="Isla de Christmas">Isla de Christmas</option>  
                      <option value="Islandia">Islandia</option>  
                      <option value="Islas Caimán">Islas Caimán</option>  
                      <option value="Islas Cook">Islas Cook</option>  
                      <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>  
                      <option value="Islas Faroe">Islas Faroe</option>  
                      <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>  
                      <option value="Islas Malvinas">Islas Malvinas</option>  
                      <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>  
                      <option value="Islas Marshall">Islas Marshall</option>  
                      <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>  
                      <option value="Islas Palau">Islas Palau</option>  
                      <option value="Islas Salomón">Islas Salomón</option>  
                      <option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>  
                      <option value="Islas Tokelau">Islas Tokelau</option>  
                      <option value="Islas Turks y Caicos">Islas Turks y Caicos</option>  
                      <option value="Islas Vírgenes (EE.UU.)">Islas Vírgenes (EE.UU.)</option>  
                      <option value="Islas Vírgenes (Reino Unido)">Islas Vírgenes (Reino Unido)</option>  
                      <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>  
                      <option value="Israel">Israel</option>  
                      <option value="Italia">Italia</option>  
                      <option value="Jamaica">Jamaica</option>  
                      <option value="Japón">Japón</option>  
                      <option value="Jordania">Jordania</option>  
                      <option value="Kazajistán">Kazajistán</option>  
                      <option value="Kenia">Kenia</option>  
                      <option value="Kirguizistán">Kirguizistán</option>  
                      <option value="Kiribati">Kiribati</option>  
                      <option value="Kuwait">Kuwait</option>  
                      <option value="Laos">Laos</option>  
                      <option value="Lesotho">Lesotho</option>  
                      <option value="Letonia">Letonia</option>  
                      <option value="Líbano">Líbano</option>  
                      <option value="Liberia">Liberia</option>  
                      <option value="Libia">Libia</option>  
                      <option value="Liechtenstein">Liechtenstein</option>  
                      <option value="Lituania">Lituania</option>  
                      <option value="Luxemburgo">Luxemburgo</option>  
                      <option value="Macedonia, Ex-República Yugoslava de">Macedonia, Ex-República Yugoslava de</option>  
                      <option value="Madagascar">Madagascar</option>  
                      <option value="Malasia">Malasia</option>  
                      <option value="Malawi">Malawi</option>  
                      <option value="Maldivas">Maldivas</option>  
                      <option value="Malí">Malí</option>  
                      <option value="Malta">Malta</option>  
                      <option value="Marruecos">Marruecos</option>  
                      <option value="Martinica">Martinica</option>  
                      <option value="Mauricio">Mauricio</option>  
                      <option value="Mauritania">Mauritania</option>  
                      <option value="Mayotte">Mayotte</option>  
                      <option value="México">México</option>  
                      <option value="Micronesia">Micronesia</option>  
                      <option value="Moldavia">Moldavia</option>  
                      <option value="Mónaco">Mónaco</option>  
                      <option value="Mongolia">Mongolia</option>  
                      <option value="Montserrat">Montserrat</option>  
                      <option value="Mozambique">Mozambique</option>  
                      <option value="Namibia">Namibia</option>  
                      <option value="Nauru">Nauru</option>  
                      <option value="Nepal">Nepal</option>  
                      <option value="Nicaragua">Nicaragua</option>  
                      <option value="Níger">Níger</option>  
                      <option value="Nigeria">Nigeria</option>  
                      <option value="Niue">Niue</option>  
                      <option value="Norfolk">Norfolk</option>  
                      <option value="Noruega">Noruega</option>  
                      <option value="Nueva Caledonia">Nueva Caledonia</option>  
                      <option value="Nueva Zelanda">Nueva Zelanda</option>  
                      <option value="OM">Nueva Zelanda</option>  
                      <option value="Países Bajos">Países Bajos</option>  
                      <option value="Panamá">Panamá</option>  
                      <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>  
                      <option value="Paquistán">Paquistán</option>  
                      <option value="Paraguay">Paraguay</option>  
                      <option value="Perú">Perú</option>  
                      <option value="Pitcairn">Pitcairn</option>  
                      <option value="Polinesia Francesa">Polinesia Francesa</option>  
                      <option value="Polonia">Polonia</option>  
                      <option value="Portugal">Portugal</option>  
                      <option value="Puerto Rico">Puerto Rico</option>  
                      <option value="Qatar">Qatar</option>  
                      <option value="Reino Unido">Reino Unido</option>  
                      <option value="República Centroafricana">República Centroafricana</option>  
                      <option value="República Checa">República Checa</option>  
                      <option value="República de Sudáfrica">República de Sudáfrica</option>  
                      <option value="República Dominicana">República Dominicana</option>  
                      <option value="República Eslovaca">República Eslovaca</option>  
                      <option value="Reunión">Reunión</option>  
                      <option value="Ruanda">Ruanda</option>  
                      <option value="Rumania">Rumania</option>  
                      <option value="Rusia">Rusia</option>  
                      <option value="Sahara Occidental">Sahara Occidental</option>  
                      <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>  
                      <option value="Samoa">Samoa</option>  
                      <option value="Samoa Americana">Samoa Americana</option>  
                      <option value="San Marino">San Marino</option>  
                      <option value="San Vicente y Granadinas">San Vicente y Granadinas</option>  
                      <option value="Santa Helena">Santa Helena</option>  
                      <option value="Santa Lucía">Santa Lucía</option>  
                      <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>  
                      <option value="Senegal">Senegal</option>  
                      <option value="Seychelles">Seychelles</option>  
                      <option value="Sierra Leona">Sierra Leona</option>  
                      <option value="Singapur">Singapur</option>  
                      <option value="Siria">Siria</option>  
                      <option value="Somalia">Somalia</option>  
                      <option value="Sri Lanka">Sri Lanka</option>  
                      <option value="St. Pierre y Miquelon">St. Pierre y Miquelon</option>  
                      <option value="Suazilandia">Suazilandia</option>  
                      <option value="Sudán">Sudán</option>  
                      <option value="Suecia">Suecia</option>  
                      <option value="Suiza">Suiza</option>  
                      <option value="Surinam">Surinam</option>  
                      <option value="Tailandia">Tailandia</option>  
                      <option value="Taiwán">Taiwán</option>  
                      <option value="Tanzania">Tanzania</option>  
                      <option value="Tayikistán">Tayikistán</option>  
                      <option value="Territorios franceses del Sur">Territorios franceses del Sur</option>  
                      <option value="Timor Oriental">Timor Oriental</option>  
                      <option value="Togo">Togo</option>  
                      <option value="Tonga">Tonga</option>  
                      <option value="Trinidad y Tobago">Trinidad y Tobago</option>  
                      <option value="Túnez">Túnez</option>  
                      <option value="Turkmenistán">Turkmenistán</option>  
                      <option value="Turquía">Turquía</option>  
                      <option value="Tuvalu">Tuvalu</option>  
                      <option value="Ucrania">Ucrania</option>  
                      <option value="Uganda">Uganda</option>  
                      <option value="Uruguay">Uruguay</option>  
                      <option value="Uzbekistán">Uzbekistán</option>  
                      <option value="Vanuatu">Vanuatu</option>  
                      <option value="Venezuela">Venezuela</option>  
                      <option value="Vietnam">Vietnam</option>  
                      <option value="Yemen">Yemen</option>  
                      <option value="Yugoslavia">Yugoslavia</option>  
                      <option value="Zambia">Zambia</option>  
                      <option value="Zimbabue">Zimbabue</option> 
</select>
	    </p>
	    <!--<p><br>
	        <label>Comentarios</label><br>
	        <input id="mail" type="text" class="text" name="mail" />
	    </p>-->
	   <br><br> <b><input type="submit" class="submit" value="Enviar" /></b> 

	    </p>
	</form>


	<div id="mapa"><a href="print_mapa.php" target="_blank"><img src="../assets/images/contacto/mapa.jpg" alt=""></a></div>


<div id="ubicacion">
    <span>
        <b>Ubicacion</b><br><br>
        <p>Estamos ubicados a s&oacute;lo cuatro cuadras del centro de Puerto Varas, cerca de los principales centros de convenciones de la ciudad y a s&oacute;lo tres cuadras del gran lago Llanquihue.</p><br /><br />
        <p>Direcci&oacute;n: Decher 440, Puerto Varas, <br>Regi&oacute;n de los Lagos, Chile.</p>
        <br /><br />
        <p>Fono-Fax: +56 65 233921 </p>  
    </span>

<br/>
<br/>
<br/>
<input id="boton" type="button" value="Ver en Google Maps" onclick="window.open('http://maps.google.cl/maps?f=q&source=s_q&hl=es&geocode=&q=decher+440,+puerto+varas,+region+de+los+lagos,+chile&aq=&sll=-33.40849,-70.569332&sspn=0.004997,0.009645&vpsrc=0&ie=UTF8&hq=&hnear=Decker+440,+Puerto+Varas,+Llanquihue,+Los+Lagos&t=m&z=16&ei=_m0hT7eeBIjozAS11Z2QCg&pw=2')">
</div>
<div id="sociales"><img src="../assets/images/twitter.png" alt="" style="position:absolute;left:800px;top:30px;">&nbsp;<a href="http://www.facebook.com/pages/Estancia-440/326983313985593" title=""><img src="../assets/images/facebook.png" alt="" style="position:absolute;left:830px;top:30px;"></a></div>
</div>
<div id="TA_rated257" class="TA_rated" style="position: relative;left:710px;top:290px;">
<ul id="SAJIaeylm" class="TA_links ouqsXFv4l">
<li id="r2nP3e" class="QsVmvz08sA"><a href=http://www.tripadvisor.es/Hotel_Review-g294299-d2487886-Reviews-Estancia_440_Bed_and_Breakfast_boutique-Puerto_Varas_Lake_District.html>Estancia 440, Bed and Breakfast boutique</a></li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=rated&amp;uniq=257&amp;locationId=2487886&amp;lang=es"></script>


<!--<div id="logomin"></div>-->
</div>
<div id="pie">
	<ul id="footer">
<li>Decher 440, Puerto Varas, Regi&oacute;n de Los Lagos, Chile | Fono: (56-65) 233921 | <a href="mailto:reservas@estancia440.cl?subject=Solicitud Informacion" "Contactenos">reservas@estancia440.cl</a> | <a href="print_mapa.php"  target="_blank" title="Como llegar">C&oacute;mo Llegar</a> | <a href="contacto.php" target="_blank" title="Reservas On  Line">Reservas Online</a></li>
</ul>
</div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script>
    $('#date').datepicker({
    	dateformat: 'dd-mm-yy'
    });
    $('#date2').datepicker({
    	dateformat: 'dd-mm-yy'
    });
</script>

<script type="text/javascript">

 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27131133-1']);
  _gaq.push(['_trackPageview']);

 (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>
	jQuery.preloadImages = function(){
  for(var i = 0; i<arguments.length; i++){
    jQuery("<img>").attr("src", arguments[i]);
  }
}
// Para utilizar el script y cargar tus imágenes:
$.preloadImages("../assets/images/fondo.jpg", "../assets/images/barra_verde.png", "../assets/images/barra_roja.jpg","../assets/images/logoblanco.png", "../assets/images/iconotxt.png", "../assets/images/contacto/1.jpg", "../assets/images/contacto/mapa.jpg");

</script>


</body>
</html>
