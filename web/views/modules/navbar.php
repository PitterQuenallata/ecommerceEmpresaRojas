
<div class="container py-2 py-lg-4">
    <div class="row">
        <div class="col-12 col-lg-2 mt-1">
            <div class="d-flex justify-content-center">
                <div class="logoRojas">
                <a href="<?php echo $path ?>" class="navbar-brand">
                    <img src="<?php echo $path ?>views/assets/img/logoRojas/<?php echo $template->logo_template ?>"
                        class="brand-image img-fluid logoRojas" >
                </a>
                </div>


            </div>
        </div>

        <div class="col-12 col-lg-7 col-md-12 col-xl-8 mt-1 px-3 px-lg-0 "  > 

            <?php if (isset($_SESSION["admin"])){ ?>
                    <a class="nav-link float-start" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a> 
            <?php }?>
            


            <div class="dropdown px-1 float-start templateColor ">

                <a id="dropdownSubMenu1" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="nav-link dropdown-toggle text-uppercase">
                    <span class="d-lg-block d-none">Categorias<i class="ps-lg-2 fas fa-th-list"></i></span>
                    <span class="d-lg-none d-block"><i class="fas fa-th-list"></i></span>

                </a>

                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

                    <!-- 1ra Categoria-->
                    <li class="dropdown-submenu dropdown-hover">

                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase">

                            <i class="fas fa-bolt pe-2 fa-xs"></i> Electricidad

                        </a>

                        <ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">1</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">2</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">3</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">4</a>
                            </li>
                        </ul>

                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">1</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">2</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">3</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">4</a>
                            </li>
                        </ul>

                    </li>
                    <!-- End Level two -->

                    <li class="dropdown-submenu dropdown-hover">

                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase">

                            <i class="fas fa-car pe-2 fa-xs"></i> Transmisión

                        </a>

                        <ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">1</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">2</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">3</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">4</a>
                            </li>
                        </ul>

                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">1</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">2</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">3</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">4</a>
                            </li>
                        </ul>

                    </li>
                    <!-- End Level two -->

                    <li class="dropdown-submenu dropdown-hover">

                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase">

                            <i class="fas fa-car pe-2 fa-xs"></i> Frenos

                        </a>

                        <ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">1</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">2</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">3</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">4</a>
                            </li>
                        </ul>

                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">1</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">2</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">3</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">4</a>
                            </li>
                        </ul>

                    </li>
                    <!-- End Level two -->

                    <li class="dropdown-submenu dropdown-hover">

                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase">

                            <i class="fas fa-car pe-2 fa-xs"></i> Suspensiones

                        </a>

                        <ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">1</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">2</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">3</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">4</a>
                            </li>
                        </ul>

                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">1</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">2</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">3</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">4</a>
                            </li>
                        </ul>

                    </li>
                    <!-- End Level two -->
                </ul>
            </div>

            <!-- Buscador -->
            <form class="form-inline">
                <div class="input-group input-group w-100 me-0 me-lg-4">
                    <input class="form-control rounded-0 p-3 pe-5" type="search" placeholder="Buscar..."
                        style="height:40px">
                    <div class="input-group-append px-2 templateColor">
                        <button class="btn btn-navbar text-white" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

        </div>

        <!-- cesta -->
        <div class="col-12 col-lg-3 col-xl-2 mt-1 px-3 px-lg-0">

            <div class="my-2 my-lg-0 d-flex justify-content-center">

                <a href="#">

                    <button class="bt btn-default float-start rounded-0 border-0 py-2 px-3 templateColor">

                        <i class="fa fa-shopping-cart"></i>

                    </button>

                </a>

                <div class="small border float-start ps-2 pe-5 w-100">

                    TU CESTA <span>0</span><br> Bs. $<span>0</span>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- /.navbar -->