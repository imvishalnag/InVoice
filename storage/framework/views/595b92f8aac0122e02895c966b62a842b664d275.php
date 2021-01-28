

<?php $__env->startSection('meta'); ?>
    <meta property="og:url"                content="http://webinfotechghy.xyz" />
    <meta property="og:type"               content="news" />
    <meta property="og:title"              content=" <?php echo e($single_post->title); ?>" />
    <meta property="og:description"        content="<?php echo e($single_post->body); ?>" />
    <meta property="og:image"              content="<?php echo e(asset('post/'.$single_post->image)); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    
                    <div class="single-post">
                        
                        <div class="post-title-area">
                            <a class="post-cat" href="<?php echo e(route('web.news', ['id'=> $single_post->cat_id, 'slug' =>urlencode($single_post->slug)])); ?>"><?php echo e($single_post->category_name); ?></a>
                            <h2 class="post-title">
                                <?php echo e($single_post->title); ?>

                            </h2>
                            <div class="post-meta">
                                <span class="post-author">
                                    By <a href="#"> <?php echo e($single_post->author); ?></a>
                                </span>
                                <span class="post-date"><i class="fa fa-clock-o"></i> <?php echo e(date('F d, Y', strtotime($single_post->created_at))); ?></span>
                                
                            </div>
                        </div><!-- Post title end -->

                        <div class="post-content-area">
                            <div class="post-media post-featured-image">
                                <a href="<?php echo e(asset('post/'.$single_post->image)); ?>" class="gallery-popup"><img src="<?php echo e(asset('post/'.$single_post->image)); ?>" class="img-fluid" alt=""></a>
                            </div>
                            <div class="entry-content">
                                <p><?php echo $single_post->body; ?></p>
                            </div><!-- Entery content end -->

                            <h4 style="margin-bottom: 0;text-transform: uppercase;">Share it on</h4>
                            <div class="share-items clearfix">
                                <ul class="post-social-icons unstyled">
                                    <li class="facebook">
                                        <a href="http://www.facebook.com/sharer.php?u=<?php echo e(url()->current()); ?>" target="_blank">
                                        <i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="http://www.twitter.com/share?url=<?php echo e(url()->current()); ?>" target="_blank">
                                        <i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a>
                                    </li>
                                    <li class="gplus">
                                        <a href="https://api.whatsapp.com/send?text=<?php echo e(url()->current()); ?>" target="_blank">
                                        <i class="fa fa-whatsapp"></i> <span class="ts-social-title">Whtasapp</span></a>
                                    </li>
                                </ul>
                            </div><!-- Share items end -->

                        </div><!-- post-content end -->
                    </div><!-- Single post end -->

                    <div class="related-posts block">
                        <h3 class="block-title"><span>Related Posts</span></h3>

                        <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                            <?php if(isset($related_post) && !empty($related_post)): ?>
                            <?php $__currentLoopData = $related_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="post-block-style clearfix">
                                    <div class="post-thumb">
                                        <a href="<?php echo e(route('web.viewPost',['slug'=>$post->slug, 'id' => $post->id])); ?>">
                                            <img class="img-fluid single-news" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                        </a>
                                    </div>
                                    
                                    <div class="post-content">
                                        <h2 class="post-title title-medium">
                                            <a href="<?php echo e(route('web.viewPost',['slug'=>$post->slug,'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 6, ' ...'); ?></a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author"><a href="#"><?php echo e($post->author); ?></a></span>
                                            <span class="post-date"><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></span>
                                        </div>
                                    </div><!-- Post content end -->
                                </div><!-- Post Block style end -->
                            </div><!-- Item 1 end -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div><!-- Carousel end -->
                    </div><!-- Related posts end -->                        

                </div><!-- Content Col end -->

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
                            <img class="banner img-fluid" src="<?php echo e(asset('web/images/banner-ads/ad-sidebar..png')); ?>" alt="" />
                        </div><!-- Sidebar Ad end -->

                        <div class="widget color-default">
                            <h3 class="block-title"><span>Popular News</span></h3>
                            <?php if(isset($popular_post) && !empty($popular_post)): ?>
                            <?php $__currentLoopData = $popular_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key == 0): ?>
                                <div class="post-overaly-style clearfix">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                        </a>
                                    </div>
                                    
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                         </h2>
                                         <div class="post-meta">
                                             <span class="post-date"><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></span>
                                         </div>
                                     </div><!-- Post content end -->
                                </div><!-- Post Overaly Article end -->
                            <?php else: ?>
                                <div class="list-post-block">
                                    <ul class="list-post">
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                                        <img class="img-fluid " src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                     <h2 class="post-title title-small">
                                                         <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                                     </h2>
                                                     <div class="post-meta">
                                                         <span class="post-date"><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></span>
                                                     </div>
                                                 </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->
                                    </ul><!-- List post end -->
                                </div><!-- List post block end -->
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <div class="gap-40"></div>
                        </div><!-- Popular news widget end -->                          

                        <div class="widget text-center">
                            <img class="banner img-fluid" src="<?php echo e(asset('web/images/banner-ads/ad-sidebar2..png')); ?>" alt="" />
                        </div><!-- Sidebar Ad end -->

                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.template.web_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\invoice\resources\views/web/show.blade.php ENDPATH**/ ?>