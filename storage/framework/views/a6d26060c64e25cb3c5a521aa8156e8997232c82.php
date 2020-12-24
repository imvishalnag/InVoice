


<?php $__env->startSection('content'); ?>
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2><?php echo e($single_post->title); ?></h2>  
                        <div class="clearfix"></div>
                    </div>
                <div>
                </div>
                <div class="x_content">
                    <div><img src="<?php echo e(asset('post/thumb/'.$single_post->image.'')); ?>" alt=""></div>
                   <p><?php echo $single_post->body; ?></p>
                   <hr>
                   <small>Written By <?php echo e($single_post->author); ?> on <?php echo e($single_post->created_at); ?></small>
                   <button class="btn btn-danger pull-right" onclick="window.close()">Close</button>
                   <button class="btn btn-primary pull-right"><?php echo e($single_post->c_name); ?></button>
                </div>
            </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.template.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\invoicene\resources\views/admin/view_post.blade.php ENDPATH**/ ?>