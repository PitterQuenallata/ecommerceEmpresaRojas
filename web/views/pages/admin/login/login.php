<div class="login-page" style="min-height: 466px;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-dark">
            <div class="card-header text-center">
                <h3><b>Administradores<b></h3>
            </div>
            <div class="card-body">

                <form  method="post" class="needs-validation" novalidate>

                    <div class="input-group mb-3">
                        <input 
                            onchange="validateJS(event,'email')"
                            type="email" 
                            class="form-control" 
                            placeholder="Email" 
                            name="loginAdminEmail" 
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="valid-feedback">Valido</div>
                        <div class="invalid-feedback">Campo Invaldio</div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" name="loginAdminPassword" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        
                        <div class="valid-feedback">Valid</div>
                        <div class="invalid-feedback">Campo Invalido</div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="icheck-primary">
                                <input 
                                    onchange="rememberEmail(event)"
                                    type="checkbox" 
                                    id="remember">
                                <label for="remember">
                                    Recordarme
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-default templateColor btn-block">Iniciar Sesión</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    
                    <?php
                        require_once "controllers/admins.controller.php";
                        $login = new AdminsController();
                        $login->login();
                    ?>

                </form>

                <!-- <div class="social-auth-links text-center mt-2 mb-3 ">
                    <a href="#" class="btn btn-block btn-default">
                        <i class="fab fa-facebook mr-2 text-facebook"></i> Iniciar sesión con Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-default">
                        <i class="fab fa-google-plus mr-2  text-youtube"></i> Iniciar sesión con Google+
                    </a>
                </div> -->
                <!-- /.social-auth-links -->
                
                <p class="mb-1">
                    <a href="#resetPassword" data-bs-toggle="modal">Olvide mi contraseña</a>
                </p>


                <!-- <p class="mb-0">
                    <a href="register.html" class="text-center">Registrar nuevo usuario</a>
                </p> -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

</div>

<!-- The Modal -->
<div class="modal" id="resetPassword">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Recuperar la contraseña</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body pb-0">
            <p> Ingrese su correo electrónico</p>
            <form method="post">
                <div class="input-group bn.3">
                    <input 
                        onchange="validateJS(event,'email')"
                        type="email" 
                        class="form-control" 
                        placeholder="Email" 
                        name="resetPassword" 
                        required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="valid-feedback">Valido</div>
                    <div class="invalid-feedback">Campo Invaldio</div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-7 pt-2 pb-2 container-fluid">
                        <button type="submit" class="btn btn-default templateColor btn-block">Recibir ueva contraseña</button>
                    </div>
                    <!-- /.col -->
                <?php
                    require_once "controllers/admins.controller.php";
                    $reset = new AdminsController();
                    $reset->resetPassword();
                ?>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer pt-1 pb-1 ">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
        </div>

        </div>
    </div>
</div>