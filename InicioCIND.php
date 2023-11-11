<?php
session_start();

if(empty($_SESSION["id"])){
   header("location: loginConductores.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio Transportistas</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="estilos.css">
    <!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">
	<!-- animate -->
	<link rel="stylesheet" href="assets/css/animate.css" />
	<!-- owl Carousel assets -->
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/owl.theme.css" rel="stylesheet">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- hover anmation -->
	<link rel="stylesheet" href="assets/css/hover-min.css">
	<!-- flag icon -->
	<link rel="stylesheet" href="assets/css/flag-icon.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- elegant icon -->
	<link rel="stylesheet" href="assets/css/elegant_icon.css">
  <!-- jquery library  -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<!-- fontawesome  -->
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">


</head>

<!--NavBar-->
<!--NavBar-->
<body style="background-color: Black;">




<nav class="navbar navbar-expand-lg navbar-brand navbar-black col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background: linear-gradient(90deg, rgba(93,93,93,0.04525560224089631) 0%, rgba(255,255,255,0.5046393557422969) 50%, rgba(93,93,93,0.05) 100%);">
       <div class="container-fluid" style="height: auto;">

          <a class="navbar-brand" href="InicioCIND.php"><font color="#FFFFFF"><h1> SISTEMA LOGISTICO </h1></font></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span> <img src="img/navbar/responseve_3line.png" height="40" width="40"></span>
          </button>

          <div class=".flex-row-reverse" >
            <div class="collapse navbar-collapse" id="navbarNav">

              <ul class="nav justify-content-center nav-tabs">
                <li class="nav-item">
                  <a class="nav-link"  href="CompletarRegistro.php"><img src="img/Registro.png" height="40" width="40"><font color="#FFFFFF"> Completar Registro </font></a>
                </li>
               


                <li class="nav-item">
                  <a class="nav-link" href="DisponibilidaddeCamion.php"><img src="img/navbar/camiones.png" height="40" width="40"><font color="#FFFFFF"> Disponibilidad de Unidad  </font></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Rutas.php"><img src="img/navbar/calidad.png" height="40" width="40"><font color="#FFFFFF"> Viaje </font></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="perfil.php"><img src="img/navbar/iconUser.png" height="40" width="40"><font color="#FFFFFF"> Perfil </font></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="controlador/controlador_cerrar_conductor.php"><img src="img/navbar/salir.png" height="40" width="40"><font color="#FFFFFF"> Salir </font></a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </nav>
<!--Fin NavBar-->

<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="logistics-2" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/rslider/assets/29384-slider-3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYER -->
                    <div class="tp-caption   tp-resizeme" id="slide-5-layer-1" data-x="['right','right','center','center']" data-hoffset="['0','41','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-111','-138','-147','-128']" data-fontsize="['50','50','50','45']" data-width="['461','461','462','462']" data-height="['173','173','none','none']" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px; max-width: 173px; white-space: nowrap; font-size: 50px; line-height: 59px; font-weight: 400; color: #ffffff; letter-spacing: -4px;font-family:Poppins;">
                        BIENVENIDO 
                        <br>
                        TRANSPORTISTA 
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
 
    
<div class="partners">
        <div class="nile-about-section">
        <div class="icon text-main-color"><i class="fa fa-money"></i></div>
                        <div class="h2">Empresas Afiliadas</div>
            <div class="container">
                <div class="row">
                
                    <!-- partners item -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="partners-item margin-bottom-tb-15px text-center">
                            <img src="assets/img/partners-1.jpg" alt="">
                        </div>
                    </div>
                    <!--//  partners item -->


                    <!-- partners item -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="partners-item margin-tb-15px text-center">
                            <img src="assets/img/partners-2.jpg" alt="">
                        </div>
                    </div>
                    <!--//  partners item -->


                    <!-- partners item -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="partners-item margin-tb-15px text-center">
                            <img src="assets/img/partners-3.jpg" alt="">
                        </div>
                    </div>
                    <!--//  partners item -->


                    <!-- partners item -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="partners-item margin-tb-15px text-center">
                            <img src="assets/img/partners-4.jpg" alt="">
                        </div>
                    </div>
                    <!--//  partners item -->


                    <!-- partners item -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="partners-item margin-tb-15px text-center">
                            <img src="assets/img/partners-5.jpg" alt="">
                        </div>
                    </div>
                    <!--//  partners item -->


                    <!-- partners item -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="partners-item margin-tb-15px text-center">
                            <img src="assets/img/partners-6.jpg" alt="">
                        </div>
                    </div>
                    <!--//  partners item -->

                </div>
            </div>
        </div>
    </div>



    
    <!--============= About Us =============-->
    <div class="nile-about-section" style="background: linear-gradient(90deg, rgba(93,93,93,0.04525560224089631) 0%, rgba(255,255,255,0.5046393557422969) 50%, rgba(93,93,93,0.05) 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-mb-45px">

                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <h4><font color="#FFFFFF">Ya no te preocupes por un regreso vacío, aumenta tus ingresos en cada viaje.</font></h4>
                    
                    </div>
                    

                </div>
                <div class="col-lg-6">
                    <img src="img/camion1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--============= //About Us =============-->

    <!--============= About Us =============-->
    <div class="nile-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-mb-45px">

                <img src="img/dinero1.jpg" alt="">
                    

                </div>
                <div class="col-lg-6">
                    
                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <h4>Este sitio de enlace logístico, facilita la búsqueda de carga disponible en base a tu ubicación actual y destino</h4>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= //About Us =============-->
   
    <!--============= About Us =============-->
    <div class="nile-about-section" style="background: linear-gradient(90deg, rgba(93,93,93,0.04525560224089631) 0%, rgba(255,255,255,0.5046393557422969) 50%, rgba(93,93,93,0.05) 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-mb-45px">

                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <h4><font color="#FFFFFF">Reduce tus regresos vacíos y optimiza costos </font></h4>
                    
                    </div>
                    

                </div>
                <div class="col-lg-6">
                    <img src="img/mapa1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--============= //About Us =============-->
            
 

  

               




    <div class="container-boton">
        <a href="https://wa.me/5555555555?text=Quiero%20realizar%20un%20proyecto%20web%20php" target="_blank">
            <img class="boton1" src="assets/img/icono.png" alt="">
        </a>
    </div>
    <footer class="layout-dark">
        <div class="container padding-tb-100px">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="nile-widget widget_nav_menu sm-mb-45px">
                        <h2 class="title">Camiones</h2>
                        <ul class="footer-menu">
                        <font color="#FFFFFF">
                            <div style="margin: .5em;">
                                <li> RABON </li>
                            </div>

                            <div style="margin: .5em;">
                                <li> TORTON </li>
                            </div>

                            <div style="margin: .5em;">
                                <li> CAJA CERRADA DE 53 y 48 PIES </li>
                            </div>
                            
                            <div style="margin: .5em;">
                                <li> FULL/DOBLE SEMIREMOLQUE </li>
                            </div>
                            
                            <div style="margin: .5em;">
                                <li> CAJA REFRIGERADA </li>
                            </div>
                            
                            <div style="margin: .5em;">
                                <li> PLATAFORMA 45 PIES </li>
                            </div>

                        </font>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="nile-widget">
                      
                        <div style="text-align: justify;">
                                <h2 class="title"><div style="padding-left: 3em;"> Dirección </div></h2>

                                <div class="contact-info opacity-9">
                                <div class="icon margin-top-1px"><span class="icon_pin_alt"></span></div>
                                <h4> Mex - Cuautitlán Izcalli </h4>
                                </div>
      
                            </div>
                        
                            <br>
                            <br>
                            <br>

                        <div class="call_center">
                            <div style="text-align: justify;">
                                <h2 class="title"><div style="padding-left: 3em;"> Llamanos </div></h2>

                                <div class="contact-info opacity-9">
                                <div class="icon  margin-top-1px"><span class="icon_phone"></span></div>
                                <h4> 55-55-55-55-55 </h4>
                                </div>
      
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                <div class="nile-widget widget_nav_menu sm-mb-45px">


                        <h2 class="title">Menu</h2>
                        <ul class="footer-menu">

                        <li><a href="CompletarRegistro.php"><font color="#FFFFFF">  Completar Registro </font></a></li>
                        <li><a href="DisponibilidaddeCamion.php"><font color="#FFFFFF"> Disponibilidad de Unidad  </font></a></li>
                        <li><a href="Rutas.php"><font color="#FFFFFF"> Viaje</font></a></li>
                        <li><a href="perfil.php"><font color="#FFFFFF"> Perfil </font></a></li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
        <div class="copy-right">
            <div class="container padding-tb-50px">
                <div class="row">
                    <div class="col-lg-6">
                        <div style="text-align: center;">
                            <font color="#FFFFFF">  Redes Sociales </font> 
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--  Social -->
                        <ul class="social-media list-inline text-lg-center text-center margin-0px text-white">
                            <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- // Social -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    
<!-- jquery library  -->
<script src="assets/js/nile-slider.js"></script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="assets/rslider/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/rslider/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="assets/rslider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/js/YouTubePopUp.jquery.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/imagesloaded.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>


</body>


<!-- home-100:30-->
</html>