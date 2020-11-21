


<?php $__env->startSection('content'); ?>
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>List Category</h2>
                        <div class="clearfix"></div>
                    </div>
                <div>
                </div>
                    <div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>Sl. No</th>
                                    <th>Enlglish Category Name</th>
                                    <th>Assamese Category Name</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($category) > 0): ?>
                                    <?php
                                        $cnt = 1;
                                    ?>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($cnt++); ?></td>
                                            <td><?php echo e($row_cat->category_name); ?></td>
                                            <td><?php echo e($row_cat->as_category_name); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('edit_category', ['categoryId' => encrypt($row_cat->id)])); ?>" class="btn btn-primary text-bold">Edit</a>
                                                <?php if($row_cat->status == 1): ?>
                                                    <a href="<?php echo e(route('status_category', ['id' => encrypt($row_cat->id), 'status' => encrypt(2)])); ?>" class="btn btn-danger text-bold">Disable</a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(route('status_category', ['id' => encrypt($row_cat->id), 'status' => encrypt(1)])); ?>" class="btn btn-success text-bold">Enable</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.template.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\newstimenortheast\resources\views/admin/list_category.blade.php ENDPATH**/ ?>