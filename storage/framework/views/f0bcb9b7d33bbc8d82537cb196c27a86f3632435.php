


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
                                        <a href="<?php echo e(route('assamese.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                            <img class="img-fluid" src="<?php echo e(asset('/post/thumb/'.$post->image)); ?>" alt="" />
                                        </a>
                                    </div>
                                </div><!-- Img thumb col end -->

                                <div class="col-lg-8 col-md-6 col-xs-6">
                                    <div class="post-content">
                                        <h2 class="post-title">
                                            <a href="<?php echo e(route('assamese.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 6, ' ...'); ?></a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author"><a href="#"><?php echo e($post->author); ?></a></span>
                                            <span class="post-date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                            <span class="post-comment pull-right"><i class="fa fa-eye"></i>
                                            <a href="#" class="comments-link"><span>03</span></a></span>
                                        </div>
                                        <p><?php echo Str::words($post->body, 20, ' ...'); ?></p>
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


                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget">
                            <h3 class="block-title"><span>Follow Us</span></h3>

                            <ul class="social-icon">
                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!-- Widget Social end -->

                        <div class="widget text-center">
                            <img class="banner img-fluid" src="<?php echo e(asset('web/images/banner-ads/ad-sidebar2.png')); ?>" alt="" />
                        </div><!-- Sidebar Ad end -->

                        <div class="widget color-default">
                            <h3 class="block-title"><span>Facebook</span></h3>
                            
                            <div class="widget text-center">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=600&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div><!-- Sidebar Ad end -->

                        </div><!-- Popular news widget end -->

                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('as.template.web_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\newstimenortheast\resources\views/as/news/news-list.blade.php ENDPATH**/ ?>