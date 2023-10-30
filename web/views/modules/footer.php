
<div class="container-fluid bg-dark small">
    <div class="container py-5 text-light">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

            <div class="col">
                <div class="col-12 col-sm-4 col-md-4 col-lg-6">
                    <h4 class="lead">
                        <a href="#" class="text-uppercase">Electricidad</a>
                    </h4>
                    <hr class="border-white">
                    <!-- <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                    </ul> -->
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-6">
                    <h4 class="lead">
                        <a href="#" class="text-uppercase">Transmisiones</a>
                    </h4>
                    <hr class="border-white">
                    <!-- <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                    </ul> -->
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-6">
                    <h4 class="lead">
                        <a href="#" class="text-uppercase">Frenos</a>
                    </h4>
                    <hr class="border-white">
                    <!-- <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                    </ul> -->
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-6">
                    <h4 class="lead">
                        <a href="#" class="text-uppercase">Suspenciones</a>
                    </h4>
                    <hr class="border-white">
                    <!-- <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                    </ul> -->
                </div>
            </div>

            <div class="col my-3 my-lg-0 px-lg-5 text-light">
                <h4 class="lead small"> Dudas y consultas, cantáctanos en: </h4>
                <br>
                <h1 class="lead small">
                    <i class="fa fa-phone-square pe-2"></i> 7000003
                    <br><br>
                    <i class="fa fa-envelope pe-2"></i> soporte@gmail.com
                    <br><br>
                    <i class="fa fa-map-marker pe-2"></i> Av. 16 de Julio, El Alto-La Paz
                    <br><br>
                    El Alto | La Paz - Bolivia
                    <iframe class="my-3" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d239.09997096676534!2d-68.17041188795876!3d-16.495803237261452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTbCsDI5JzQ0LjgiUyA2OMKwMTAnMTMuMSJX!5e0!3m2!1ses!2sbo!4v1697459200705!5m2!1ses!2sbo" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </h1>
            </div>

            <div class="col small my-3 my-lg-3 ">
                <h4>CONSULTAS</h4>
                <form role="form" method="post">

                    <input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required>

                    <br>

                    <input type="email" id="emailContactenos" name="emailContactenos" class=" form-control" placeholder="Escriba su correo electrónico" required>

                    <br>

                    <textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required></textarea>

                    <br>

                    <input type="submit" value="Enviar" class="btn btn-default float-end border-0 templateColor templateColor">

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Main Footer -->
<footer class="main-footer topColor">
    <div class="container">
        <!-- To the right -->
        <div class="float-end">

            <div class="d-flex justify-content-center" style="line-height:0px">
            <?php foreach ($socials as $key => $value): ?>
                        <div class="p-2">
                            <a href="<?php echo $value->url_social ?>" target="_blank">
                                <i class=" <?php echo $value->icon_social?> <?php echo $value->color_social?>"></i>
                            </a>
                        </div>
                    <?php endforeach ?> 
            </div>

        </div>
        <!-- Default to the left -->
        <small>&copy; <?php echo date("Y") ?> Todos los derechos reservados. Sitio elaborado por la Compañía.</small>
    </div>
</footer>