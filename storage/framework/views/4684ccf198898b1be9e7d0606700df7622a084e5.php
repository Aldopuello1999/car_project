<?php if($errors->count() > 0): ?>)
<div class="row justify-content-center">
    <div class="col-xs-1-12">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> <?php echo e($message); ?> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\andre\car_project\resources\views/layouts/errors.blade.php ENDPATH**/ ?>