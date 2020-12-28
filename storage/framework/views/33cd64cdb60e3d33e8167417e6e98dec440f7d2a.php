


<?php $__env->startSection('content'); ?>
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>Edit Category</h2>
                        <div class="clearfix"></div>
                    </div>
                <div>
                     <?php if(Session::has('message')): ?>
                        <div class="alert alert-success" ><?php echo e(Session::get('message')); ?></div>
                     <?php endif; ?>
                     <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
                     <?php endif; ?>

                </div>
                    <div>
                        <div class="x_content">
                        <?php echo e(Form::open(['method' => 'post','route'=>'admin.update_category'])); ?>

                            <input type="hidden" name="categoryId" value="<?php echo e($category->id); ?>">
                                <div class="well" style="overflow: auto">
                                    <div class="form-row mb-10">
                                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                            <label for="category">English Category Name</label>
                                            <input type="text" class="form-control" value="<?php echo e($category->category_name); ?>" name="category" placeholder="Enter Catgeory">
                                            <?php if($errors->has('category')): ?>
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong><?php echo e($errors->first('category')); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                            <label for="ass_category">Assamese Category Name</label>
                                            <input type="text" class="form-control" value="<?php echo e($category->as_category_name); ?>" name="ass_category" placeholder="Enter Catgeory">
                                            <?php if($errors->has('ass_category')): ?>
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong><?php echo e($errors->first('ass_category')); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">    	            	
                                    <?php echo e(Form::submit('Update', array('class'=>'btn btn-success pull-right'))); ?>  
                                </div>
                                <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.template.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\invoicene\resources\views/admin/edit_category.blade.php ENDPATH**/ ?>