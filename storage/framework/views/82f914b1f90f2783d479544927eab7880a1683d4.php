<?php $__env->startSection('content'); ?>

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <div class="block category-listing news-list">
                        <h3 class="block-title"><span><?php echo e($cat_name); ?></span></h3>
                        <?php if(isset($news) && !empty($news)): ?>
                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="post-block-style post-list clearfix">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-6">
                                    <div class="post-thumb thumb-float-style">
                                        <a href="<?php echo e(route('web.viewPost',['slug'=>$post->slug,'id'=>$post->id])); ?>">
                                            <img class="img-fluid" src="<?php echo e(asset('/post/thumb/'.$post->image)); ?>" alt="" />
                                        </a>
                                    </div>
                                </div><!-- Img thumb col end -->

                                <div class="col-lg-8 col-md-6 col-xs-6">
                                    <div class="post-content">
                                        <h2 class="post-title">
                                            <a href="<?php echo e(route('web.viewPost',['slug'=>$post->slug,'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 6, ' ...'); ?></a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author"><a href="#"><?php echo e($post->author); ?></a></span>
                                            <span class="post-date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                        </div>
                                        <?php echo Str::words($post->body, 20, ' ...'); ?>

                                    </div><!-- Post content end -->
                                </div><!-- Post col end -->
                            </div><!-- 1st row end -->
                        </div><!-- 1st Post list end -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div><!-- Block Technology end -->

                    <div class="paging">
                        <ul class="pagination">
                            <li class="active"><a href="#"><div class="loader"></div>Load More</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget">
                            <h3 class="block-title"><span>Follow Us</span></h3>

                            <ul class="social-icon">
                                <li><a href="https://api.whatsapp.com/send?phone=8099134064" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://www.facebook.com/invoicene/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/InvoiceNe/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/invoice.ne/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCYpRDBixW0TboCUkx1C6ahQ/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!-- Widget Social end -->

                        <div class="widget text-center">
                            <img class="banner img-fluid" src="<?php echo e(asset('web/images/banner-ads/ad-sidebar2.png')); ?>" alt="" />
                        </div><!-- Sidebar Ad end -->

                        <div class="widget color-default hidden-xs-fb">
                            <h3 class="block-title"><span>Facebook</span></h3>
                            
                            <div class="widget text-center">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Finvoicene&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=318843728990066" width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div><!-- Sidebar Ad end -->

                        </div><!-- Popular news widget end -->

                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            // function load_data(){
            //   $.ajax({
            
            //    method:"POST",
            //    data:{id:id, _token:_token},
            //    success:function(data)
            //    {
            //     $('#load_more_button').remove();
            //     $('#post_data').append(data);
            //    }
            //   })
            // }
            var scroll_position_for_post_load = $(window).height() + $(window).scrollTop() + 100;
            if(scroll_position_for_post_load >= $(document).height()){
                console.log('I am coming');
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.template.web_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\invoice\resources\views/web/news/news-list.blade.php ENDPATH**/ ?>