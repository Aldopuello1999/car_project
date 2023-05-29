<div class="modal fade" id="editarUsuarioModal<?php echo e($item->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Crear Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?php echo e(route('categorias.update', $item->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-body">
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="apellidoUsuario" class="form-control-label">Nombre</label>
                            <input type="text" class="form-control form-control-alternative" id="nombre"
                                placeholder="Nombre" name="nombre" value="<?php echo e($item->nombre); ?>">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\andre\car_project\resources\views/modules/categorias/editar.blade.php ENDPATH**/ ?>