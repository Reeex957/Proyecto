<div class="contenedor-login">
        <div class="contenedor-slider">
            <div class="slider">
                <div class="slide fade ">
                    <img src="img/1.jpg" alt="">
                    <div class="contenido-slider">
                        <div class="logot">
                            <img src="img/3.png" alt="">
                        </div>
                        <p class="slider-texto">
                            La rivalidad Norte-Sur promete un emocionante espectáculo durante el Juego de Estrellas LMB 2023, con la presentación de la nueva colección de gorras New Era. ¡Que comience la fiesta con estilo!</p>
                    </div>
                </div>
                <div class="slide fade">
                    <img src="img/2.jpg" alt="">
                    <div class="contenido-slider">
                        <div class="logot">
                            <img src="img/3.png" alt="">
                        </div>
                        <p class="slider-texto">
                            ¿No sabes qué tipo de gorra usar según la forma de tu cara? Estos consejos te asegurarán el éxito en tu búsqueda.
                        </p>
                    </div>
                </div>
            </div>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>
            <div class="dots">
            </div>
        </div>
        <div class="contenedor-texto">
            <div class="contenedor-form">
                <h1 class="titulo">¡Bienvenido a CapStyle!</h1>
                <p class="descripcion">Accede a tu cuenta y aprovecha todos tus beneficios junto con las mejores promociones que tenemos disponibles para ti.</p>
                <ul class="tabs-links">
                    <li class="tab-link active">Iniciar Sesión</li>
                    <li class="tab-link ">Registrate</li>
                </ul>
                <form action="" method="POST" id="formLogin" class="formulario active">
                    <div class="error-text">
                        <p>aqui los errores del formualrio</p>
                    </div>
                    <input type="text" placeholder="Correo electrónico" class="input-text" name="correo" autocomplete="off"> 
                    <div class="grupo-input">
                        <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                        <button type="button" class="icono fas fa-eye mostrarClave"></button>                        
                    </div>
                    <a href="#" class="link">¿Ovidaste tu contraseña?</a>
                    <button class="btn" id="btnLogin" type="button">Iniciar Sesión</button>
                </form>
                <form action="" method="POST" id="formRegistro" class="formulario">
                    <div class="error-text ">                        
                    </div>
                    <input type="text" placeholder="Nombre y Apellidos" class="input-text" name="nombre" autocomplete="off"> 
                    <input type="text" placeholder="Correo electrónico" class="input-text" name="correo" autocomplete="off"> 
                    <div class="grupo-input">
                        <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                        <button type="button" class="icono fas fa-eye mostrarClave"></button>                        
                    </div>
                     <label class="contenedor-cbx animate">
                        He leído y acepto los
                        <a href="#" class="link">Términos y Condiciones</a>
                        <a href="#" class="link">y Política de privacidad de mi Tienda</a>
                        <input type="checkbox" name="cbx_terminos" >
                        <span class="cbx-marca"></span>
                    </label>
                    <button class="btn" id="btnRegistro" type="button">Crear Cuenta</button>
                </form>
            </div>
        </div>
    </div>