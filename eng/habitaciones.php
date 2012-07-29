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
    
</head>
<body>
<div id="container">
<div id="logo"><a href="index.php"><img src="../assets/images/logo.png" width="440" height="76" alt="" /></a></div>
<div class="clear"></div>
<div id="menu">
<ul id="nav">
        	<li><a href="inspiracion.php" >Patagonic Inspiration</a></li>
<li><a href="habitaciones.php" style="color:#fdc99a;">Rooms</a></li>
<li><a href="b&b.php">B&B Boutique</a></li>
<li><a href="pvaras.php">Puerto Varas City of Roses</a></li>
<li><a href="desayunos.php" >Southern Breakfasts</a></li>
<li><a href="contacto.php">Reservations</a></li> 
            
</ul>
</div>
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
		state = (state == 'ROOMS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;-&nbsp;&nbsp;]' ? '<span id="shText">ROOMS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;+&nbsp;]</span>' : '<span id="shText">ROOMS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;-&nbsp;&nbsp;]</span>');					
		// Finally change whats insdide the element ID
		el.replaceWith(state); 
	}); // end sub panel click function
}); // end on DOM
    </script>
	<!-- PANEL DESLIZABLE CON TEXTO -->
<div id="sub-panel"><a href="#" id="toggle"><span id="shText">ROOMS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;+&nbsp;]</span></a></div>
	<div id="top-panel" style="display:none;">
	<img id="icono" src="../assets/images/iconotxt.png" alt="">
	<br>
	<br>
	<span id="texto" style="margin: 20px 0px 40px 0px;line-height:2.2em;font-size:13px;">The Bed & Breakfast consists of 7 rooms, four of them matrimonial and three double, each one  has central heating and private bathroom.</span>
	<br>
	<br>
 <br />
 <span>Room's Name</span>
 <br />
 <br />
 <div id="top2"></div>
 <br />
	<br>
	<style type="text/css" media="screen">
		.texto {font-size:14px;padding-top: 4px;}
		
		b {font-size: 12px;}
	</style>
	</div>
<b><div id="textthumb0" style="top:91px;width: 390px; left:-29px; position: relative;" class="texto"> <b>Room Weather W</b></div></b>
<b> <div id="textthumb3" style="top:91px;width: 390px; left:-74px; position: absolute;" class="texto"><b>Room Flee FLE</b></div></b>
<b><div id="textthumb7" style="top:91px; width: 390px; left:-119px; position: absolute;" class="texto"><b>Room Sheep E</b></div></b>
<b><div id="textthumb10" style="top:91px; width:391px;left:-165px; position: relative;color:#000;" class="texto"><b>Room Ram R</b></div></b>
<b><div id="textthumb13" style="top:91px; width:392px;left:-211px; position: absolute;color:#000;" class="texto"><b>Room Hoggett WH</b></div></b>
<b><div id="textthumb15" style="top:91px;width:392px; left:-256px; position: absolute;" class="texto"><b>Room Ram Hoggett RH</b></div></b>
<b><div id="textthumb17" style="top:91px;width: 392px; left:-301px; position: absolute;" class="texto"><b>Room Eye Hoggett EH</b></div></b>
				<ul>								
					<!-- THE 1. verde -->
					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/verde/1.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div class="creative_layer" id="text10">						
							</div>
					</li>
					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/verde/2.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div class="creative_layer" id="text10">						
							</div>
							
					</li>

					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/verde/3.jpg"  data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div class="creative_layer" id="text10">						
							</div>
							
					</li>


					<!-- THE 2. SLIDE -->
					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/morado/1.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
							
							<div  class="creative_layer" id="text1">								
							</div>
							
					</li>

					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/morado/2.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
							
							<div  class="creative_layer" id="text1">								
							</div>
							
					</li>

					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/morado/3.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
							
							<div  class="creative_layer" id="text1">								
							</div>
							
					</li>

					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/morado/4.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
							
							<div  class="creative_layer" id="text1">								
							</div>
							
					</li>
					
					<!-- THE 3. SLIDE -->
					<li data-transition="fade" data-panduration="8" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/celeste/1.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer"id="text2">
							</div>
							
					</li>
					
					<li data-transition="fade" data-panduration="8" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/celeste/2.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer"id="text2">
							</div>
							
					</li>
					
					<li data-transition="fade" data-panduration="8" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/celeste/3.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer"id="text2">
							</div>
							
					</li>
					
					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/rosado/1.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
														
							
							<div  class="creative_layer" id="text4">						
							</div>
							
					</li>
					
					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/rosado/2.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
														
							
							<div  class="creative_layer" id="text4">						
							</div>
							
					</li>
					
					<li data-transition="fade" data-panduration="12" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/rosado/3.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
														
							
							<div  class="creative_layer" id="text4">						
							</div>
							
					</li>		
					<!-- THE 4. SLIDE -->
					<li data-transition="fade" data-panduration="11" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/amarillo/1.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
								<div  class="creative_layer" id="text3">							
							</div>
							
					</li>

					<li data-transition="fade" data-panduration="11" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/amarillo/2.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
								<div  class="creative_layer" id="text3">							
							</div>
							
					</li>
					
					<!-- THE 5. SLIDE -->
					
					
					<!-- THE 6. SLIDE -->
					<li data-transition="fade" data-panduration="15" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/celeste2/a_celeste.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer" id="text5">									
							</div>
							
					</li>
					
					<!--<li data-transition="fade" data-panduration="15" data-colortransition="4"><img alt="" src="images/habitaciones/celeste2/a_celeste2.jpg" data-bw="images/habitaciones/celeste2/a_celeste2.jpg" data-thumb="images/thumbs/thumb1.jpg" data-thumb_bw="images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer" id="text5">									
							</div>
							
					</li>-->	
					<li data-transition="fade" data-panduration="15" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/rojo/1.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer" id="text5">									
							</div>
							
					</li>	

					<li data-transition="fade" data-panduration="15" data-colortransition="4"><img alt="" src="../assets/images/habitaciones/rojo/2.jpg" data-thumb="../assets/images/thumbs/thumb1.jpg" data-thumb_bw="../assets/images/thumbs/thumb1_blur.jpg">
																											
							<div  class="creative_layer" id="text5">									
							</div>
							
					</li>	

				</ul>
			</div><div id="logomin"></div></div>
<div id="pie">
			<ul id="footer">
<ul id="footer">
<li>Decher 440, Puerto Varas, Regi&oacute;n de Los Lagos, Chile | Fono: (56-65) 233921 | <a href="mailto:reservas@estancia440.cl?subject=Solicitud Informacion" "Contactenos">reservas@estancia440.cl</a> | <a href="print_mapa.php"  target="_blank" title="Como llegar">How to find</a> | <a href="contacto.php" target="_blank" title="Reservas On  Line">Online Reservations</a></li>
</ul>
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
							thumbAmount:21,							
							thumbSpaces:0,
							thumbPadding:9,
							thumbStyle:"both",
							
							
							shadow:'false',
							
							parallaxX:500,
							parallaxY:10,
							captionParallaxX:-40,
							captionParallaxY:2,
							
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
						$('.kenburn_thumb_container').css({'visibility':'hidden'});
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
   <script>
$(document).ready(function(){
$('.thumbbuttons').appendTo('#top2');
$('#textthumb0').appendTo('#minithumb0');
$('#textthumb3').appendTo('#minithumb3');
$('#textthumb7').appendTo('#minithumb7');
$('#textthumb10').appendTo('#minithumb10');
$('#textthumb13').appendTo('#minithumb13');
$('#textthumb15').appendTo('#minithumb15');
$('#textthumb17').appendTo('#minithumb17');
});
</script>
<script type="text/javascript">Cufon.now();</script>
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
<script>
	jQuery.preloadImages = function(){
  for(var i = 0; i<arguments.length; i++){
    jQuery("<img>").attr("src", arguments[i]);
  }
}
// Para utilizar el script y cargar tus imágenes:
$.preloadImages("../assets/images/fondo.jpg", "../assets/images/barra_verde.png", "../assets/images/barra_roja.jpg","../assets/images/logoblanco.png", "../assets/images/habitaciones/verde/1.jpg", "../assets/images/habitaciones/verde/2.jpg", "../assets/images/habitaciones/verde/3.jpg", "../assets/images/thumbs/thumb1.jpg", "../assets/images/thumbs/thumb1_blur.jpg", "../assets/images/habitaciones/morado/1.jpg", "../assets/images/habitaciones/morado/2.jpg", "../assets/images/habitaciones/morado/3.jpg", "../assets/images/habitaciones/celeste/1.jpg", "../assets/images/habitaciones/celeste/2.jpg", "../assets/images/habitaciones/celeste/3.jpg", "../assets/images/habitaciones/rosado/1.jpg", "../assets/images/habitaciones/rosado/2.jpg", "../assets/images/habitaciones/rosado/3.jpg", "../assets/images/habitaciones/amarillo/1.jpg", "../assets/images/habitaciones/rojo/1.jpg", "../assets/images/habitaciones/rojo/2.jpg");

</script>

</body>
</html>
