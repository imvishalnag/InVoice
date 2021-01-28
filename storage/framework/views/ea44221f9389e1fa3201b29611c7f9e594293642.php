<?php $__env->startSection('content'); ?>
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>Change Password</h2>
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
                        <?php echo e(Form::open(['method' => 'post','route'=>'admin.change_password'])); ?>

                                <div class="well" style="overflow: auto">
                                    <div class="form-row mb-10">
                                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                            <label for="category">Username</label>
                                            <input type="text" class="form-control" value="<?php echo e(Auth::guard('admin')->user()->email); ?>" name="user_name" placeholder="Enter Username">
                                            <?php if($errors->has('user_name')): ?>
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong><?php echo e($errors->first('user_name')); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                            <label for="ass_category">Password</label>
                                            <input type="text" class="form-control" value="" name="password" placeholder="Enter new password">
                                            <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">    	            	
                                    <?php echo e(Form::submit('Change', array('class'=>'btn btn-success pull-right'))); ?>  
                                </div>
                        <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.template.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\invoice\resources\views/admin/change-password.blade.php ENDPATH**/ ?>