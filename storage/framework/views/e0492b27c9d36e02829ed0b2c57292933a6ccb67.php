


<?php $__env->startSection('content'); ?>
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>Edit Post</h2>
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
                        <?php if(isset($posts) && !empty($posts)): ?>
                            <div class="x_content">
                                <?php echo e(Form::open(['method' => 'post','route'=>'admin.update_post', 'enctype'=>'multipart/form-data'])); ?>

                                    <input type="hidden" name="postId" value="<?php echo e($posts->id); ?>">
                                    <div class="well" style="overflow: auto">
                                        <div class="form-row mb-10">
                                            <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" value="<?php echo e($posts->title); ?>" name="title" placeholder="Enter Title">
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
                                                <select class="form-control" name="type">
                                                    <option selected="" disabled="" value="">Select Type</option>
                                                    <option <?php echo e($posts->post_type == '1' ? 'selected':''); ?> value="1">English</option>
                                                    <option <?php echo e($posts->post_type == '2' ? 'selected':''); ?> value="2">Assamese</option>
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
                                            <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                                                <label for="category">Author</label>
                                                <input type="text" class="form-control" value="<?php echo e($posts->author); ?>" name="author" placeholder="Author">
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
                                                <label for="category">Category</label>
                                                <select class="form-control" name="category" id="category">
                                                    <option disabled="" value="">Select Category</option>
                                                    <?php if(isset($categorys) && !empty($categorys) && count($categorys) > 0): ?>
                                                        <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php echo e($posts->cat_id == $category->id ? 'selected' : ''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
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
                                                <label for="image">Image Upload</label>
                                                <input type="file" class="form-control" name="image" accept="/*">
                                                <?php if($errors->has('image')): ?>
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong><?php echo e($errors->first('image')); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>                
                                    </div>
                                    <div class="well" style="overflow: auto">
                                        <div class="form-row mb-10">
                                            <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                                <label for="category">Body*</label>
                                                <textarea class="form-control" name="body" placeholder="Enter full description" id="body"><?php echo e($posts->body); ?></textarea>
                                                <?php if($errors->has('body')): ?>
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong><?php echo e($errors->first('body')); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>                                 
                                        </div>
                                    </div>
                                    <div class="form-group">    	            	
                                        <?php echo e(Form::submit('Publish', array('class'=>'btn btn-success pull-right'))); ?>  
                                    </div>
                                <?php echo e(Form::close()); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

 <script src="<?php echo e(asset('ckeditor4/ckeditor.js')); ?>"></script>
<script>
    CKEDITOR.replace( 'body', {
        height: 400,
        filebrowserUploadUrl: "<?php echo e(route('admin.ck_editor_image_upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    } );
</script>
 <?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.template.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\invoice\resources\views/admin/edit_post.blade.php ENDPATH**/ ?>