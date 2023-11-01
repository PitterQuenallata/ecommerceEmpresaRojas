<link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/loginoff.css">
<div class="content-wrapper-login">
    <div class="containerE" id="containerE">
        <div class="form-containerE sign-up-containerE">
            <form class="formLogin" action="#">
                <h1 class="h1Login">Crear Cuenta</h1>
                <div class="social-containerE">
                    <a  href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span class="spanLogin">o usa tu correo electrónico para registrarte</span>
                <div class="infield">
                    <input class="inputLogin" type="text" placeholder="Nombre" />
                    <label class="labeLogin"></label>
                </div>
                <div class="infield">
                    <input class="inputLogin" type="email" placeholder="Email" name="email" />
                    <label class="labeLogin"></label>
                </div>
                <div class="infield">
                    <input class="inputLogin" type="password" placeholder="Contraseña" />
                    <label class="labeLogin"></label>
                </div>
                <button class="buttonLogin">Registrarse</button>
            </form>
        </div>

        <div class="form-containerE sign-in-containerE">
            <form class="formLogin" action="#">
                <h1 class="h1Login">Iniciar Sesión</h1>
                <div class="social-containerE">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span class="spanLogin">o usar tu cuenta</span>
                <div class="infield">
                    <input class="inputLogin" type="email" placeholder="Email" name="email" />
                    <label class="labeLogin"></label>
                </div>
                <div class="infield">
                    <input class="inputLogin" type="password" placeholder="Password" />
                    <label class="labeLogin"></label>
                </div>
                <a href="#" class="forgot">¿Olvidaste tu contraseña</a>
                <button class="buttonLogin" >Iniciar Sesión</button>
            </form>
        </div>
        
        <div class="overlay-containerE" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="h1Login">¡Hola!</h1>
                    <p class="pLogin" >Inicia sesión con tu información personal</p>
                    <button class="buttonLogin" >Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="h1Login">¡Hola!</h1>
                    <p class="pLogin">Ingresa tus datos personales y comienza tu viaje con nosotros</p>
                    <button class="buttonLogin" >Registrarse</button>
                </div>
            </div>
            <button class="buttonLogin" id="overlayBtn"></button>
        </div>
    </div>

</div>




<!-- js code -->
<script>
    const containerE = document.getElementById("containerE");
    const overlayCon = document.getElementById("overlayCon");
    const overlayBtn = document.getElementById("overlayBtn");

    overlayBtn.addEventListener('click', () => {
        containerE.classList.toggle('right-panel-active');

        overlayBtn.classList.remove('btnScaled');
        window.requestAnimationFrame(() => {
            overlayBtn.classList.add('btnScaled');
        });
    });
</script>