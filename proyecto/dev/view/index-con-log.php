<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catando Ando Coffee Shop</title>
  <link rel="stylesheet" href="public/css/index/style.css"/>
  <link rel="stylesheet" href="public/css/index/defined.css"/>  
  <link rel="stylesheet" href="public/css/generales/all.min.css"/>

</head>

<body>
    <header>
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
            <nav class="">
                <div class="nav-father">
                    <div class="nav-child__1">
                        <a class="logo not-style" href="../index.html"><p class="local-name">CapStyle</p></p></a>
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
                                <div class="obj"><img src="imagenes/usuario.png" alt="Foto del usuario"></div>
                                <div class="obj"><a href="LOGIN/login.html" class="user-name">----------</a></div>
                                <div class="obj">                             
                                    <button id="configButton"><i class="fa-solid fa-gear gearbtn"></i></button>
                                    <div id="configMenu" class="config-menu">
                                        
                                        <ul>
                                            <li>
                                                <button class="btn-menu"><a href=""><i class="fa-solid fa-gear"></i>Configuracion</a></button>
                                            </li>

                                    
                                            <li>
                                                <a href="#">
                                                    <button class="btn-menu" id="modo-btn" onclick="cambiarModo()">
                                                        <i id="icono" class="fa-regular fa-moon"></i>
                                                        Cambiar Aspecto
                                                        
                                                    </button>
                                                </a>
                                            </li>


                                            <li class="YrcaQE">
                                                <button class="btn-menu SdxGFS"><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>Cerrar sesion</a></button>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>




        <div class="third-bar">
            <div class="nav-child__4">
                <ul>
                    <li><a href="index.html" id="inicio"><span class=""><i class="icon fa fa-house"></i></span>Inicio</a></li>
                    <li><a href="PRODUCTOS/Modelos.html" id="modelos"><span class=""><i class="icon fa fa-palette"></i></span>Modelos</a></li>
                    <li><a href="PERSONALIZACION/Personalizar.html" id="personalizar"><span class=""><i class="icon fa fa-comment"></i></span>Personalizar</a></li>
                    <li><a href="UBICACION/Ubicacion.html" id="ubicacion"><span class=""><i class="icon fa fa-location"></i></span>Ubica tu tienda</a></li>
                    <li><a href="#"><span class=""><i class="icon fa fa-basket-shopping"></i></span><i class="icon fa fa-shopping-cart"></i></a></li>
                    <!-- APARTADO DE OTROS CAMBIARLO PORQUE NO TIENE FUNCION ENTONCES EL ELEMENTO "A" SE RETIRA -->
                    <li class="ZaVCqa"><a href="#"><span class=""><i class="icon fa fa-bars"></i></span>Otros</a>
                        <ul>
                            <li><a href="QUIENES SOMOS/QuienesSomos.html">¿Quienes somos?</a></li>
                            <li><a href="QUIENES SOMOS/QuienesSomos.html">¿Que es CapStyle?</a></li>
                            <li class="YrcaQE"><a href="CONTACTO/contacto.html">Contacto</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
  <section class="content">
    <!--Aqui va a ir todo lo que pueda ser contenido de la plantilla -->
    <?php include_once($vista)?>
  </section>
  <footer>
        <div class="footer">
            <div class="container-lists">
                <div class="footer-list LFR">
                    <a href="" class="CSLOGO"></a>
                </div>                
                <div class="footer-list">
                    <div class="no-wrap h3">Sobre CapStyle</div> 
                        <ul class="list">
                            <li>
                                <a href="QUIENES SOMOS/QuienesSomos.html" class="no-wrap">Más de 100 años de historia </a>
                            </li>
                            <li>
                                <a href="PRODUCTOS/Modelos.html" class="no-wrap">Siluetas CapStyle </a>
                            </li>                                  
                            <li>
                               <a href="UBICACION/Ubicacion.html" class="no-wrap">Tiendas CapStyle</a>
                            </li>                                  
                            <li>
                                <a href="QUIENES SOMOS/QuienesSomos.html" class="no-wrap">Blog</a>
                            </li>                                  
                            <li>
                                <a href="QUIENES SOMOS/QuienesSomos.html" class="no-wrap">Comunidad #CapStyle</a>
                            </li>                                  
                            <li>
                                <a href="TERMINOS/Terminos.html" class="no-wrap">Consentimiento #OKCapStyle</a>
                            </li>                                  
                            </ul>
             
                </div>
                <div class="footer-list">
                        <div class="no-wrap h3">Enlaces Rapidos</div> 
                            <ul class="list">
                                <li>
                                    <a href="TERMINOS/Terminos.html" class="no-wrap">Devoluciones</a>
                                </li>
                                <li>
                                    <a href="TERMINOS/Terminos.html" class="no-wrap">Sobre el envio </a>
                                </li>                                  
                                <li>
                                   <a href="TERMINOS/Terminos.html" class="no-wrap">Metodos de pago</a>
                                </li>                                  
                                <li>
                                    <a href="TERMINOS/Terminos.html" class="no-wrap">Prevencion de Fraudes</a>
                                </li>                                  
                                <li>
                                    <a href="TERMINOS/Terminos.html" class="no-wrap">Aviso de Privacidad</a>
                                </li>                                  
                                <li>
                                    <a href="TERMINOS/Terminos.html" class="no-wrap">Terminos y Condiciones</a>
                                </li>         
                                <li>
                                    <a href="TERMINOS/Terminos.html" class="no-wrap">Solicitar Factura</a>
                                </li>                         
                                </ul>
                </div>
                <div class="footer-list">
                    <div class="no-wrap h3">Newsletter</div>
                        <span class="asd">Suscríbete a nuestro newsletter 
                            y no te pierdas lanzamientos y novedades.</span>
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
</body>
</html>