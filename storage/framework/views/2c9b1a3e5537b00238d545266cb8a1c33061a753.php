<?php echo $__env->make('web.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('web.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>
<?php /**PATH C:\xampp\htdocs\InVoice\resources\views/web/template/web_master.blade.php ENDPATH**/ ?>