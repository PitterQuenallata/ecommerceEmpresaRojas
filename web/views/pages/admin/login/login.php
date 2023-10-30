<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/login.css">

</head>
<body>

    <div class="containerE" id="containerE">
        <div class="form-containerE sign-up-containerE">
            <form action="#">
                <h1>Crear Cuenta</h1>
                <div class="social-containerE">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu correo electrónico para registrarte</span>
                <div class="infield">
                    <input type="text" placeholder="Nombre" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Contraseña" />
                    <label></label>
                </div>
                <button>Registrarse</button>
            </form>
        </div>
        <div class="form-containerE sign-in-containerE">
            <form action="#">
                <h1>Iniciar Sesión</h1>
                <div class="social-containerE">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o usar tu cuenta</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" />
                    <label></label>
                </div>
                <a href="#" class="forgot">¿Olvidaste tu contraseña</a>
                <button>Iniciar Sesión</button>
            </form>
        </div>
        <div class="overlay-containerE" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¡Hola!</h1>
                    <p>Inicia sesión con tu información personal</p>
                    <button>Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¡Hola, amigo!</h1>
                    <p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
                    <button>Registrarse</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>

    
    <!-- js code -->
    <script>
        const containerE = document.getElementById("containerE");
        const overlayCon = document.getElementById("overlayCon");
        const overlayBtn = document.getElementById("overlayBtn");

        overlayBtn.addEventListener('click',()=>{
            containerE.classList.toggle('right-panel-active');

            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame(()=>{
                overlayBtn.classList.add('btnScaled');
            });
        });
    </script>

</body>
</html>
