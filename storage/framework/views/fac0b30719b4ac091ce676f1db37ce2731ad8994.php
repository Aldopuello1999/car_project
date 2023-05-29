

<?php $__env->startSection('searchRoute'); ?>
    <?php echo e(route('entidades.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Productos</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#crearUsuarioModal">
                                Crear Productos
                            </button>
                            <!-- Modal -->
                            <?php echo $__env->make('modules.productos.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Precio</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($producto->id); ?></td>
                                    <td><?php echo e($producto->name); ?></td>
                                    <td><?php echo e($producto->id_categories); ?></td>
                                    <td><?php echo e($producto->description); ?></td>
                                    <td><?php echo e($producto->photo); ?></td>
                                    <td><?php echo e($producto->precio); ?></td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#editarUsuarioModal<?php echo e($producto->id); ?>">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </a>
                                        <form action="<?php echo e(route('productos.destroy', $producto->id)); ?>" method="POST"
                                            style="display: inline-block;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <?php echo $__env->make('modules.productos.editar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>
        function changeState(id) {
            //Cambiar la ruta de la consulta
            var UrlPath_ = "<?php echo e(route('entidades.state')); ?>";
            $.ajax({
                type: 'POST',
                url: UrlPath_,
                data: {
                    //Cambiar los parametros para la ruta
                    idEntidad: id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                    $(".content_loading").fadeIn("slow");
                },
                success: function(response) {
                    console.log(response)
                    console.log(response.data.state);
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




        function deleteEntidad(id) {
            Swal.fire({
                title: '¿Estas seguro de eliminar este elemento?',
                text: "No podrás revertir esto una vez eliminado",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'SI, quiero eliminarlo!'
            }).then((result) => {
                if (result.isConfirmed) {

                    var UrlPath_ = "<?php echo e(route('entidades.destroy')); ?>"
                    $.ajax({
                        type: 'POST',
                        url: UrlPath_,
                        data: {
                            //Editar los parametros que se desean enviar a la ruta
                            idEntidad: id
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {
                            $(".content_loading").fadeIn("slow");
                        },
                        success: function(response) {
                            console.log(response)
                            if (response.code == 200) {
                                swal.fire('Muy bien!', response.message, 'success')
                                location.reload();

                            } else {
                                swal.fire('Oops!', response.message, 'error')
                            }
                        },
                        error: function(xhr) {
                            //   console.log("ERROR");
                            $(".content_loading").fadeOut("slow");
                            swal.fire('Ops!',
                                'Hubo un error desconocido, por favor intentelo más tarde', 'error')
                        }
                    });

                }
            })
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\car_project\resources\views/modules/productos/index.blade.php ENDPATH**/ ?>