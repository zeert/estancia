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
<link href="assets/css/legacy2.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery-1.7.2.min.js"></script>


    <style type="text/css" media="screen">
    #gal{width:960px; height:680px; margin:0 auto; padding:0 auto;background-image: url(assets/images/intro.jpg);}
    #idioma {position: relative;left:680px;top:330px;}
    a { font-size: 16px;font-family: "Century Gothic";color:#fff;}
    a:hover {color:#fdc99a;}
    	.thumbbuttons {visibility: hidden;}
    	.thumbs {visibility: hidden;}

    </style>
</head>
<body>
<div id="container">

<div class="clear"></div>
<div id="gal">
<div id="idioma"><a href="esp/" title="">ESPA&Ntilde;OL</a>
	<br>
    <br>
	<a href="eng/" title="">ENGLISH</a>
</div>
</div>
</div>

<!-- Precarga de imagenes -->
<script type="text/javascript">
	
jQuery.preloadImages = function(){
  for(var i = 0; i<arguments.length; i++){
    jQuery("<img>").attr("src", arguments[i]);
  }
}
// Para utilizar el script y cargar tus imágenes:
$.preloadImages("assets/images/fondo.jpg","assets/images/intro.jpg");

</script>
</body>
</html>
