<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('argon')); ?>/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        <i class="ni ni-tv-2 text-primary"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('usuarios.index')); ?>">
                        <i class="ni ni-badge text-blue"></i> Usuarios
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo e(route('categorias.index')); ?>">
                        <i class="ni ni-building text-blue"></i> Categorias
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo e(route('productos.index')); ?>">
                        <i class="ni ni-building text-blue"></i> Productos
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo e(route('carrito.index')); ?>">
                        <i class="ni ni-cart text-blue"></i> Carrito
                    </a>
                </li>

            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">By Aldo</h6>
            <!-- Navigation -->

        </div>
    </div>
</nav>
<?php /**PATH C:\Users\andre\car_project\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>