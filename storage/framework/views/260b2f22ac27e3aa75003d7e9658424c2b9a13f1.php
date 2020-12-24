

<?php $__env->startSection('content'); ?>
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Youtube Video List (Assamese)</h2>
                        <div class="clearfix"></div>
                    </div>
                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-success" ><?php echo e(Session::get('message')); ?></div>
                     <?php endif; ?>
                     <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
                     <?php endif; ?>
                    <div class="x_content">
                        <table id="post_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <th>Sl. No</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Thumbnail</th>
                                <th>Date</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>                       
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(function(){
            var table = $('#post_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(route('admin.ajax.get_ass_video_list')); ?>",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable: true},
                    {data: 'title', name: 'title',searchable: true},      
                    {data: 'author', name: 'author',searchable: true},      
                    {data: 'thumbnail', name: 'thumbnail',searchable: true},      
                    {data: 'created_at', name: 'created_at',searchable: true},      
                    {data: 'action', name: 'action',searchable: true},      
                ]
            });
        })
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.template.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\invoicene\resources\views/admin/ass_list_video.blade.php ENDPATH**/ ?>