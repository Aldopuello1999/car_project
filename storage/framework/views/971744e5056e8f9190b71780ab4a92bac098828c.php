<div class="modal fade" id="crearUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Crear Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?php echo e(route('productos.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="apellidoUsuario" class="form-control-label">Nombre</label>
                            <input type="text" class="form-control form-control-alternative" id="apellidoUsuario"
                                placeholder="Nombre" name="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidoUsuario" class="form-control-label">Descripcón</label>
                            <input type="text" class="form-control form-control-alternative" id="apellidoUsuario"
                                placeholder="Descripcón" name="description" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidoUsuario" class="form-control-label">Photo</label>
                            <input type="text" class="form-control form-control-alternative" id="apellidoUsuario"
                                placeholder="Photo" name="photo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidoUsuario" class="form-control-label">precio</label>
                            <input type="text" class="form-control form-control-alternative" id="apellidoUsuario"
                                placeholder="Precio" name="precio" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dependencia" class="form-control-label">Categoria</label>
                        <select id="dependencia" class="form-control form-control-alternative" name="id_categories">
                            <option selected disabled>-- Seleccione --</option>
                            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\andre\car_project\resources\views/modules/productos/create.blade.php ENDPATH**/ ?>