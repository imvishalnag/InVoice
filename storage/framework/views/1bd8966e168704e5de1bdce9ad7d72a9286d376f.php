

<?php $__env->startSection('content'); ?>
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>Post Youtube Video</h2>
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
                        <?php echo e(Form::open(['method' => 'post','route'=>'admin.add_video', 'enctype'=>'multipart/form-data'])); ?>

                            <div class="well" style="overflow: auto">
                                <div class="form-row mb-10">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="<?php echo e(old('title')); ?>">
                                        <?php if($errors->has('title')): ?>
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong><?php echo e($errors->first('title')); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                                        <label for="type">Type</label>
                                        <select class="form-control" name="type" id="type">
                                            <option selected="" disabled="" value="">Select Type</option>
                                            <option value="1" >English</option>
                                            <option value="2" >Assamese</option>
                                        </select>
                                        <?php if($errors->has('type')): ?>
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong><?php echo e($errors->first('type')); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                        <label for="author">Author</label>
                                        <input type="text" class="form-control" value="<?php echo e(old('author')); ?>" name="author" placeholder="Author">
                                        <?php if($errors->has('author')): ?>
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong><?php echo e($errors->first('author')); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-row mb-10">
                                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                        <label for="v_id">Video ID</label>
                                        <input type="text" class="form-control" name="v_id" placeholder="Enter Video ID" value="<?php echo e(old('v_id')); ?>">
                                        <?php if($errors->has('v_id')): ?>
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong><?php echo e($errors->first('v_id')); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                        <label for="thumb">Thumbnail* (850 X 565 )</label>
                                        <input type="file" class="form-control" name="thumb" accept="/*">
                                        <?php if($errors->has('thumb')): ?>
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong><?php echo e($errors->first('thumb')); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">    	            	
                                <?php echo e(Form::submit('Post', array('class'=>'btn btn-success pull-right'))); ?>  
                            </div>
                        <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.template.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\invoice\resources\views/admin/create_video.blade.php ENDPATH**/ ?>