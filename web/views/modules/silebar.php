<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="<?php echo $path ?>views/assets/img/template/1/<?php echo $template->icon_template ?>" alt="Logo Admin" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Administrador</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $path ?>views/assets/img/adminlte/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION["admin"]->name_admin ?></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin/administradores" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="administradores"): ?> active <?php endif?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Administradores
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            General
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/plantillas" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="plantillas"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Plantillas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/integraciones" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="integraciones"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Integraciones</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Promocion
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/slides" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="slides"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/banners" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="banners"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Banners</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>
                            Productos
                            <i class="right fas fa-angle-left"></i>
                            <span class="right badge badge-primary mr-1">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/categorias" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="categorias"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/subcategorias" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="subcategorias"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subcategorias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/inventario" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="inventarios"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/mensajes" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="mensajes"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mensajes</p>
                                <span class="right badge badge-info mr-1">6</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-funnel-dollar"></i>
                        <p>
                            Ventas
                            <i class="right fas fa-angle-left"></i>
                            <span class="right badge badge-warning mr-1">5</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/pedidos" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="pedidos"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pedidos</p>
                                <span class="right badge badge-success ">2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/disputas" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="disputas"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Disputas</p>
                                <span class="right badge badge-danger">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/informes" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="informes"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Informes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/registroVentas" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="registroVentas"): ?> active <?php endif?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registro de ventas</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="/admin/clientes" class="nav-link <?php if(!empty($routesArray[1])&& $routesArray[1]=="clientes"): ?> active <?php endif?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Clientes
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/salir" class="nav-link ">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Salir
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>