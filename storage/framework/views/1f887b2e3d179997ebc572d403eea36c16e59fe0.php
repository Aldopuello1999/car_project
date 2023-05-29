<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="col-8">
                        <h3 class="mb-0">Productos</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">precio</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($producto->name); ?></td>
                                        <td><?php echo e($producto->id_categories); ?></td>
                                        <td><?php echo e($producto->precio); ?></td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary btn-sm"
                                                onclick="addNewProduct('<?php echo e($producto->id); ?>')">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-md-8 card-title" id="headerParametros">
                                Carrito
                            </div>
                            <div class="col-md-4" id="actionsButtons">
                                Total: <?php echo e($total); ?>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>SubTotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="bodyTable">
                                <?php $__currentLoopData = $carrito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        
                                        <td><?php echo e($item['producto']->name); ?></td>
                                        <td>
                                            <input id="txtCant<?php echo e($item['id']); ?>" type="numeric" class="form-control"
                                                placeholder="<?php echo e($item['cantidad']); ?>" name="cant"
                                                value="<?php echo e($item['cantidad']); ?>" disabled>
                                            <button id="btnGuardar<?php echo e($item['id']); ?>" style="display: none;"
                                                onclick="updateCantidad('<?php echo e($item['id']); ?>')">Guardar</button>
                                            <button id="btnCancelar<?php echo e($item['id']); ?>" style="display: none;"
                                                onclick="enableCantidad('<?php echo e($item['id']); ?>')">Cancelar</button>
                                        </td>
                                        <td><?php echo e($item['producto']->precio); ?></td>
                                        <td><?php echo e($item['producto']->precio * $item['cantidad']); ?></td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary btn-sm"
                                                onclick="enableCantidad('<?php echo e($item['id']); ?>')">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>

                                            <a href="javascript:;" class="btn btn-danger btn-sm"
                                                onclick="deleteProduct('<?php echo e($item['id']); ?>')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                        </td>
                                    <tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                    <a href="javascript:;" class="btn btn-primary btn-sm" onclick="">
                        <i aria-hidden="true">Comfirmar Compra</i>
                    </a>
                </div>


            </div>
        </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('js'); ?>
        <script>
            function addNewProduct(id) {
                //Cambiar la ruta de la consulta
                var UrlPath_ = "<?php echo e(route('actualCar.addproduct')); ?>";
                $.ajax({
                    type: 'POST',
                    url: UrlPath_,
                    data: {

                        idProducto: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".content_loading").fadeIn("slow");
                    },
                    success: function(response) {

                        swal.fire('Muy bien!', response.message, 'success')
                        location.reload();

                    },
                    error: function(xhr) {
                        //   console.log("ERROR");
                        $(".content_loading").fadeOut("slow");
                        swal.fire('Ops!', 'Hubo un error, por favor intentelo más tarde', 'error')
                    }
                });
            }

            function load() {
                var UrlPath_ = "<?php echo e(route('actualCar.get')); ?>";
                $.ajax({
                    type: 'GET',
                    url: UrlPath_,
                    data: {


                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".content_loading").fadeIn("slow");
                    },
                    success: function(response) {

                        if (response.code == 200) {
                            swal.fire('Muy bien!', response.message, 'success')
                            location.reload();
                        } else {
                            swal.fire('Ops!', response.message, 'error')
                        }
                    },
                    error: function(xhr) {
                        //   console.log("ERROR");
                        $(".content_loading").fadeOut("slow");
                        swal.fire('Ops!', 'Hubo un error, por favor intentelo más tarde', 'error')
                    }
                });
            }

            function deleteProduct(id) {
                //Cambiar la ruta de la consulta
                var UrlPath_ = "<?php echo e(route('actualCar.delete')); ?>";
                $.ajax({
                    type: 'post',
                    url: UrlPath_,
                    data: {

                        idEliminar: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".content_loading").fadeIn("slow");
                    },
                    success: function(response) {

                        swal.fire('Muy bien!', response.message, 'success')
                        location.reload();

                    },
                    error: function(xhr) {
                        //   console.log("ERROR");
                        $(".content_loading").fadeOut("slow");
                        swal.fire('Ops!', 'Hubo un error, por favor intentelo más tarde', 'error')
                    }
                });
            }

            function enableCantidad(id) {

                $('#txtCant' + id).prop('disabled', function(_, val) {
                    return !val;
                });

                if ($('#txtCant' + id).prop('disabled')) {
                    $('#btnGuardar' + id).hide();
                    $('#btnCancelar' + id).hide();

                } else {
                    $('#btnGuardar' + id).show();
                    $('#btnCancelar' + id).show();

                }
            }

            function updateCantidad(id) {
                var cantidad = $('#txtCant' + id).val();

                var UrlPath_ = "<?php echo e(route('actualCar.updateCant')); ?>";
                $.ajax({
                    type: 'post',
                    url: UrlPath_,
                    data: {
                        id: id,
                        cant: cantidad
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".content_loading").fadeIn("slow");
                    },
                    success: function(response) {

                        swal.fire('Muy bien!', response.message, 'success')
                        location.reload();

                    },
                    error: function(xhr) {
                        //   console.log("ERROR");
                        $(".content_loading").fadeOut("slow");
                        swal.fire('Ops!', 'Hubo un error, por favor intentelo más tarde', 'error')
                    }
                });
            }
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\car_project\resources\views/modules/carrito/index.blade.php ENDPATH**/ ?>