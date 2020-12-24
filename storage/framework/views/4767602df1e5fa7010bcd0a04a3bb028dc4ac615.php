


<?php $__env->startSection('content'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total News</span>
              <div class="count"><?php echo e($post); ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total English News</span>
              <div class="count"><?php echo e($eng_post); ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Assamese News</span>
              <div class="count green"><?php echo e($ass_post); ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Category</span>
              <div class="count"><?php echo e($category); ?></div>
            </div>
          </div>
          <!-- /top tiles -->
          <br />
          
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                    <h2>Daily News</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                  <div class="x_content">
                    <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Title</th>
                            <th>Body</th>
                        </tr>
                      </thead>
                      <tbody class="form-text-element">
                          <?php if(isset($all_post) && !empty($all_post)): ?>
                            <?php
                                $count = 1;
                            ?>
                              <?php $__currentLoopData = $all_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                  <td><?php echo e($count++); ?></td>
                                  <td><?php echo e(Str::words($item->title, 10, ' ...')); ?></td>
                                  <td><?php echo e(Str::words($item->body, 10, '...')); ?></td>
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                      </tbody>
                    </table>
                      <?php echo e($all_post->links()); ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\invoicene\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>