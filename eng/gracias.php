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
<!--    <script type="text/javascript">
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
<ul id="nav"><li><a href="inspiracion.php">Patagonic Inspiration</a></li>
<li><a href="habitaciones.php">Rooms</a></li>
<li><a href="b&b.php">B&B Boutique</a></li>
<li><a href="pvaras.php">Puerto Varas City of Roses</a></li>
<li><a href="desayunos.php">Southern Breakfasts</a></li>
<li><a href="contacto.php" style="color:#fdc99a;">Reservations</a></li>
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
            position: relative;
            left: 5%;
            top:75px;;        
        }

        input, textarea { 

        padding: 9px;
        border: solid 1px #000;
        outline: 0;
        font: normal 13px/100% Verdana, Tahoma, sans-serif;
        width: 15%;
        background: #FFFFFF url('bg_form.png') left top repeat-x;
        background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));
        background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);
        box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
        -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
        -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
        -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; 
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

        label {
            color:#fff;
        }

        #mapa {
            position: relative;
            left:30%;top:-240px;}

        #icono {
            position: relative;
            left:36%;
            top:20px;
        }
#test {color: #fff;
    width:50%;
    text-align: center;
    position:relative;
    top:130px;
    left:200px;
    }
        
    #boton {
        width: 100%;
        font-weight:bold;
          }
    
        .submit {
            font-weight:bold;
        }
        #pie {position: absolute;
            top:638px;
        }

        #home {
            color:#9a542a;
            font-size:14px;
        }
</style>
<div id="gal">
<div id="banner-example-1" class="dark" style="margin-left:-1px; margin-top:-1px;">
<<script type="text/javascript">
    var pagina = 'http://www.estancia440.cl/esp/';
</script>

    <?php  
                if($_GET[status] == "ok")
                {
                    echo '  <div id="test">
    <span>
        <b>Tanks you for contact us</b><br><br>
        <p>We recive your mail, and we contact you soon as possible</p>
        <p>Remember, if you need some information, we\'ve very diferent ways to do that.
        <br>
        <br>
        <br>
        <br>
        <p><b>Address:</b><b> Decher 440, Puerto Varas, Regi&oacute;n de los Lagos, Chile.</b></p>
        <p><b>Phone-Fax:</b> <b>+56 65 233921</b> </p>  
        <br>
        <br>
        <br>
        <br>
        <input type="button" name="volver" value="Back to Home" style="width:200px;" onclick=document.location.href=pagina;>
    </span>
 
                         ';
                }
                else if($_GET[status] == "error")
                {
                    echo '  <div class"BoxGraciasContacto" id="test">
                                <div align="center" class="formulario"><span class="TextosContenidosFamec">
                                <b>Error</b><br><br>
                                    It was no possible to receive your request.
                                    <br><br>
                                    <!--<a id="home" href="javascript:window.history.go(-1)"><b>
                                    Volver al Formulario de Contacto / .</b></a>-->

                                    
                                    <br/><br/>
                                    <b><input type="button" name="volver" value="Back to the contact form" style="width:200px;" onclick="window.history.go(-1)"></b>
                                </span> </div></div>
                                                            
                             
                         ';
                }
            ?>


</div>


<!--<div id="logomin"></div>-->
</div>
<div id="pie">
    <ul id="footer">
<li>Decher 440, Puerto Varas, Regi&oacute;n de Los Lagos, Chile | Fono: (56-65) 233921 | <a href="mailto:reservas@estancia440.cl?subject=Solicitud Informacion" "Contactenos">reservas@estancia440.cl</a> | <a href="print_mapa.php"  target="_blank" title="Como llegar">How to find</a> | <a href="contacto.php" target="_blank" title="Reservas On  Line">Online Reservations</a></li>
</ul>
</div>
</div>
<!--<script type="text/javascript">
                 
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
                            
                            thumbWidth:0,
                            thumbHeight:0,
                            thumbAmount:0,                          
                            thumbSpaces:0,
                            thumbPadding:9,
                            thumbStyle:"none",
                            
                            
                            shadow:'false',
                            
                            parallaxX:0,
                            parallaxY:0,
                            captionParallaxX:0,
                            captionParallaxY:0,
                            
                            touchenabled:'on',
                            pauseOnRollOverThumbs:'off',
                            pauseOnRollOverMain:'off',
                            
                            timer:8
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
            </script>-->
<script type="text/javascript">Cufon.now();</script>
<script>
    $('#date').datepicker();
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

</body>
</html> 