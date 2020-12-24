<?php echo $__env->make('as.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('as.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>
<?php /**PATH C:\xampp\htdocs\invoicene\resources\views/as/template/web_master.blade.php ENDPATH**/ ?>