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
<script type="text/javascript" src="../assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="../assets/js/cufon-yui.js"></script>
<script type="text/javascript" src="../assets/js/fonts/century.font.js"></script>
<script type="text/javascript">
	Cufon.replace('ul#nav li a', { fontFamily: 'Century', hover: {color: '#fdc99a'} });
	Cufon.replace('#toolbar');
</script>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen" />		
	
	
     <!-- jQuery Paradigm Slider  -->	
	<script type="text/javascript" src="../assets/kb-plugin/js/jquery.cssAnimate.mini.js"></script>	
	<script type="text/javascript" src="../assets/kb-plugin/js/jquery.waitforimages.js"></script>	
	<script type="text/javascript" src="../assets/kb-plugin/js/jquery.touchwipe.min.js"></script>			
    <script type="text/javascript" src="../assets/kb-plugin/js/jquery.themepunch.kenburn.min.js"></script>	
	
	
	
	
	<link rel="stylesheet" type="text/css" href="../assets/kb-plugin/css/settings.css" media="screen" />

<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:700' rel='stylesheet' type='text/css'>
	
	<!-- LOADING THE GOOGLE FONTS HERE, If no Google Fonts Needed, set families like: families:['']  !! -->
	<script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'PT+Sans+Narrow:400,700' ] },
		active: function() { $('body').data('googlefonts','loaded');},
		inactive: function() { $('body').data('googlefonts','loaded');}
      };	  
    </script>
    
<style type="text/css" media="screen">
    	.thumbbuttons {visibility: hidden;}
    	.thumbs {visibility: hidden;}
    </style>
</head>
<body>
<div id="container">
<div id="logo"><a href="index.php"><img src="../assets/images/logo.png" width="440" height="76" alt="" /></a></div>
<div class="clear"></div>
<div id="menu">
<ul id="nav">
        	<li><a href="inspiracion.php" style="color:#fdc99a;">Inspiracion Patagonica</a></li>
           	<li><a href="habitaciones.php">Habitaciones</a></li>
            <li><a href="b&b.php">B&B Boutique</a></li>
            <li><a href="pvaras.php">Puerto Varas Ciudad de las Rosas</a></li>
            <li><a href="desayunos.php">Desayunos Sure&ntilde;os</a></li>
            <li><a href="contacto.php">Reservas</a></li>
            
</ul>
</div>
<style>
	#signo {
		float: right;
		position: relative;
		left: 0px;
	}
</style>
<div id="gal"><div id="banner-example-1" class="dark" style="margin-left:-1px; margin-top:-1px;">
    <script type="text/javascript">
    $(document).ready(function(){
	// Lets make the top panel toggle based on the click of the show/hide link	
	$("#sub-panel").click(function(){
		// Toggle the bar up 
		$("#top-panel").slideToggle();	
		// Settings
		var el = $("#shText");  
		// Lets us know whats inside the element
		var state = $("#shText").html();
		// Change the state  
		state = (state == 'INSPIRACION PATAGONICA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;-&nbsp;]' ? '<span id="shText">INSPIRACION PATAGONICA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;+&nbsp;]</span>' : '<span id="shText">INSPIRACION PATAGONICA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;-&nbsp;]</span>');					
		// Finally change whats insdide the element ID
		el.replaceWith(state); 
	}); // end sub panel click function
}); // end on DOM
    </script>
	<!-- PANEL DESLIZABLE CON TEXTO -->
<div id="sub-panel"><a href="#" id="toggle"><span id="shText">INSPIRACION PATAGONICA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;+&nbsp;]</span></a></div>
	<div id="top-panel" style="display:none;">
	
	<img id="icono" src="../assets/images/iconotxt.png" alt="">
	
	<br>
	<span id="texto"><div id="contenedor">De la uni&oacuten familiar entre Andr&eacutes Benavides, oriundo de Puerto Varas, y Christy Mac Leay nacida en Punta Arenas, nace con 	las m&aacute;s puras tradiciones Alemanas, Estancia 440, un lugar &uacute;nico y acogedor que har&aacute; de su estad&iacute;a en La Patag&oacute;nia Norte, un momento inolvidable.</div></span>
	<br>
	<br>
	<br>
	</div>

				
				<ul>								
					<!-- THE 1. SLIDE -->
					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/slides/image9.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer">									
							</div>
							
					</li>
					
					<!-- THE 2. SLIDE -->
					<li data-transition="fade" data-panduration="15" data-colortransition="4"><img alt="" src="../assets/images/slides/image10.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
							
							<div  class="creative_layer">									
							</div>
							
					</li>
					
					<!-- THE 3. SLIDE -->
					<li data-transition="fade" data-panduration="8" data-colortransition="4"><img alt="" src="../assets/images/slides/image11.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer">
							</div>
							
					</li>					
					<!-- THE 4. SLIDE -->
					<li data-transition="fade" data-panduration="11" data-colortransition="4"><img alt="" src="../assets/images/slides/image12.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
								<div  class="creative_layer">
							</div>
							
					</li>
					
					<!-- THE 5. SLIDE -->
					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/slides/image13.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
														
							
							<div  class="creative_layer">							
							</div>
							
					</li>
					
					<!-- THE 6. SLIDE -->
					<li data-transition="fade" data-panduration="15" data-colortransition="4"><img alt="" src="../assets/images/slides/image14.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer">				
							</div>
							
					</li>	


					<!-- THE 7. SLIDE -->
					<li data-transition="fade" data-panduration="15" data-colortransition="4"><img alt="" src="../assets/images/slides/image15.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer">			
							</div>
							
					</li>		


					<!-- THE 8. SLIDE -->
					<li data-transition="fade" data-panduration="15" data-colortransition="4"><img alt="" src="../assets/images/slides/image16.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer">						
							</div>
							
					</li>					

				</ul>
			</div><div id="logomin"></div></div>
<div id="pie">
			<ul id="footer">
<li>Decher 440, Puerto Varas, Regi&oacute;n de Los Lagos, Chile | Fono: (56-65) 233921 | <a href="mailto:reservas@estancia440.cl?subject=Solicitud Informacion" "Contactenos">reservas@estancia440.cl</a> | <a href="print_mapa.php"  target="_blank" title="Como llegar">C&oacute;mo Llegar</a> | <a href="contacto.php" target="_blank" title="Reservas On  Line">Reservas Online</a></li>
</ul>
    </div>
</div>
			<script type="text/javascript">
				 
				 (function() {
					var wf = document.createElement('script');
					wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
						'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
					wf.type = 'text/javascript';
					wf.async = 'true';
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(wf, s);
				 })();
				 
				$(document).ready(function() {			 									
					
					$('#banner-example-1').kenburn(
						{										
							width:960,
							height:512,
							
							thumbWidth:120,
							thumbHeight:70,
							thumbAmount:0,							
							thumbSpaces:0,
							thumbPadding:9,
							thumbStyle:"both",
							
							
							shadow:'false',
							
							parallaxX:0,
							parallaxY:0,
							captionParallaxX:0,
							captionParallaxY:0,
							
							touchenabled:'on',
							pauseOnRollOverThumbs:'off',
							pauseOnRollOverMain:'off',
							
							timer:5
						});
						
					$('.tnone').click(function() {
						$('.tbull').removeClass('selected');
						$('.tthumb').removeClass('selected');
						$('.tnone').addClass('selected');
						$('.kenburn_thumb_container').css({'visibility':'hidden'});
						$('.thumbbuttons').css({'visibility':'hidden'});
						$('.bannershadow').cssAnimate({'margin-top':"100px"});
					});
					
					$('.tthumb').click(function() {
						$('.tbull').removeClass('selected');
						$('.tthumb').addClass('selected');
						$('.tnone').removeClass('selected');
						$('.kenburn_thumb_container').css({'visibility':'visible'});
						$('.thumbbuttons').css({'visibility':'hidden'});
						$('.bannershadow').cssAnimate({'margin-top':"150px"});
					});
					
					$('.tbull').click(function() {
						$('.tbull').addClass('selected');
						$('.tthumb').removeClass('selected');
						$('.tnone').removeClass('selected');
						$('.kenburn_thumb_container').css({'visibility':'hidden'});
						$('.thumbbuttons').css({'visibility':'visible'});
						$('.bannershadow').cssAnimate({'margin-top':"100px"});
					});
					
					$('.tthumb').click();
					
						
			});
			</script>
<script type="text/javascript">Cufon.now();</script>
<script>
	jQuery.preloadImages = function(){
  for(var i = 0; i<arguments.length; i++){
    jQuery("<img>").attr("src", arguments[i]);
  }
}
// Para utilizar el script y cargar tus imágenes:
$.preloadImages("../assets/images/fondo.jpg", "../assets/images/barra_verde.png", "../assets/images/barra_roja.jpg","../assets/images/logoblanco.png", "../assets/images/slides/image9.jpg", "../assets/images/slides/image10.jpg", "../assets/images/slides/image11.jpg", "../assets/images/slides/image12.jpg", "../assets/images/slides/image13.jpg", "../assets/images/slides/image14.jpg", "../assets/images/slides/image15.jpg", "../assets/images/thumbs/thumb1.jpg", "../assets/images/thumbs/thumb1_blur.jpg");

</script>

<script  type="text/javascript">
var gaJsHost = (("https:" ==  document.location.protocol) ? "https://ssl <https://ssl/> ." : "http://www.estancia440.cl");
document.write(unescape("%3Cscript  src='" + gaJsHost + "google-analytics.com/ga.js <http://google-analytics.com/ga.js> '  type='text/javascript'%3E%3C/script%3E"));
</script>
<script  type="text/javascript">
try{
var pageTracker =  _gat._getTracker("UA-xxxxxx-x");
pageTracker._trackPageview();
}  catch(err) {}
</script>

</body>
</html>
