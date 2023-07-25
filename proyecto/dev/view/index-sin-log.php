<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Capstyle</title>
    <link rel="stylesheet" href="public/css/generales/layout-general.css">     <!--  ESTE ESTILO LO TENDRAN TODAS LAS PAGINAS -->
    <link rel="stylesheet" href="public/css/generales/all.min.css">            <!--  ESTE ESTILO LO TENDRAN TODAS LAS PAGINAS -->
    <link rel="stylesheet" href="public/css/personalizacion/personalizar.css">                <!--  ESTE ESTILO SE CAMBIARA POR VISTA -->
    <link rel="stylesheet" href="public/css/">
  </head>
  <body>
    <header>
        <div class="scroll">
            <div class="first-bar">
                <div class="promo"><a href="#">Grandes descuentos!, Conoce los productos participantes.</a></div>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>        
            <div class="second-bar">                
                    <div class="nav-father">
                        <div class="nav-child__1">
                            <a class="logo not-style" href="http://localhost/proyecto/"><p class="local-name">CapStyle</p></p></a>
                        </div>
                        <div class="nav-child__2">
                            <div class="container-search">
                                <input type="text" class="search" placeholder="¿Qué estás buscando?">
                                <button class="btn-search">Buscar<i class="fa fa-search search-icon" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="nav-child__3">
                            <div class="user-menu">
                                <div class="user-info">
                                <div class="obj"><a href="http://localhost/proyecto/index.php?c=LoginController&m=Login" class="user-name">Iniciar Sesion</a></div>
                                    <div class="obj">                              
                                        <button id="configButton"><i class="fa-solid fa-gear gearbtn"></i></button>
                                        
                                        <div id="configMenu" class="config-menu">                        
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <button class="btn-menu" id="modo-btn" onclick="cambiarModo()">
                                                            <i id="icono" class="fa-regular fa-moon"></i>
                                                            Cambiar Aspecto                                                        
                                                        </button>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
            </div>            
            <div class="third-bar">
                <nav class="">
                    <div class="nav-child__4">
                        <ul>
                            <li><a href="http://localhost/proyecto/" id="inicio"><span class=""><i class="icon fa fa-house"></i></span>Inicio</a></li>
                            <li><a href="http://localhost/proyecto/index.php?c=ModelsController&m=models" id="modelos"><span class=""><i class="icon fa fa-palette"></i></span>Modelos</a></li>
                            <li><a href="http://localhost/proyecto/index.php?c=PersonalizationController&m=personalization" id="personalizar"><span class=""><i class="icon fa fa-comment"></i></span>Personalizar</a></li>
                            <li><a href="http://localhost/proyecto/index.php?c=MapsController&m=maps" id="ubicacion"><span class=""><i class="icon fa fa-location"></i></span>Ubica tu tienda</a></li>
                            <li><a href="http://localhost/proyecto/index.php?c=ShopController&m=Cart"><span class=""><i class="icon fa fa-basket-shopping"></i></span><i class="icon fa fa-shopping-cart"></i></a></li>
                            <li class="ZaVCqa"><a><span class=""><i class="icon fa fa-bars"></i></span>Otros</a>
                                <ul>
                                    <li><a href="http://localhost/proyecto/index.php?c=ContactController&m=contact">¿Quienes somos?</a></li>
                                    <li><a href="http://localhost/proyecto/index.php?c=ContactController&m=contact">¿Que es CapStyle?</a></li>
                                    <li class="YrcaQE"><a href="http://localhost/proyecto/index.php?c=ContactController&m=contact">Contacto</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="content">
      <?php include_once($vista) ?>
    </section>
    <footer>
        <div class="footer">
            <div class="container-lists">
                <div class="footer-list LFR">
                    <a href="" class="CSLOGO"></a>
                </div>                
                <div class="footer-list">
                    <div class="no-wrap h3">Lorem ipsum</div> 
                        <ul class="list">
                            <li>
                                <a href="QUIENES SOMOS/QuienesSomos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>
                            <li>
                                <a href="PRODUCTOS/Modelos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            <li>
                               <a href="UBICACION/Ubicacion.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            <li>
                                <a href="QUIENES SOMOS/QuienesSomos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            <li>
                                <a href="QUIENES SOMOS/QuienesSomos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            <li>
                                <a href="TERMINOS/Terminos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            </ul>
             
                </div>
                <div class="footer-list">
                        <div class="no-wrap h3">Lorem ipsum</div> 
                        <ul class="list">
                            <li>
                                <a href="QUIENES SOMOS/QuienesSomos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>
                            <li>
                                <a href="PRODUCTOS/Modelos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            <li>
                               <a href="UBICACION/Ubicacion.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            <li>
                                <a href="QUIENES SOMOS/QuienesSomos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            <li>
                                <a href="QUIENES SOMOS/QuienesSomos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            <li>
                                <a href="TERMINOS/Terminos.html" class="no-wrap">dolor sit amet consectetur</a>
                            </li>                                  
                            </ul>
                </div>
                <div class="footer-list">
                    <div class="no-wrap h3">Newsletter</div>
                        <span class="asd">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia option</span>
                        <div class="">
                            <form method="post" class=""><input type="hidden" name="form_type" value="customer">
                                <p>
                                    <input type="email" placeholder="Correo electrónico" class="form-email" value="" name="" required="">
                                </p>
                                <p id="message-f"></p>
                                <button class="btn-send" type="submit">ENVIAR</button>                            
                            </form>
                        </div> 
                </div>
            </div>            
        </div>
    </footer>
    <script src="public/js/generales/all.min.js"></script>
    <script src="public/js/index/funciones_index.js"></script>
    <script src="public/js/personalization/personalize.js"></script>
  </body>
</html>
