<?php if(Session::has('message')): ?>
<div class="row justify-content-center">
    <div class="col-xs-1-12">
        <div class="alert alert-success alert-dismissible text-center" role="alert">
            <button type="button" class="close btn" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            😉 <?php echo e(Session::get('message')); ?> 😉
        </div>
    </div>
</div>
<?php endif; ?>


<?php /**PATH C:\Users\andre\car_project\resources\views/layouts/messages.blade.php ENDPATH**/ ?>