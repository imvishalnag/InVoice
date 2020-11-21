


<?php $__env->startSection('content'); ?>
    <section class="featured-post-area no-padding" style="padding-top: 13px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 pad-r">
                    <div id="featured-slider" class="owl-carousel owl-theme featured-slider">
                        <?php if(isset($slider_post) && !empty($slider_post)): ?>
                            <?php $__currentLoopData = $slider_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item" style="background-image:url(<?php echo e(asset('post/thumb/'.$post->image ?? 'web/images/news/tech/gadget2.jpg')); ?>)">
                                <div class="featured-post">
                                    <div class="post-content">
                                    <a class="post-cat" href="<?php echo e(route('web.news', ['id'=> encrypt($post->cat_id)])); ?>"><?php echo e($post->category_name); ?></a>
                                        <h2 class="post-title title-extra-large">
                                            <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 6, ' ...'); ?></a>
                                        </h2>
                                        <span class="post-date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                    </div>
                                </div><!--/ Featured post end -->
                                
                            </div><!-- Item 1 end -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div><!-- Featured owl carousel end-->
                </div><!-- Col 6 end -->

                <div class="col-lg-4 col-md-12">
                    <div class="featured-tab">
                        <h3 class="block-title"><span>Breaking<span></span></span></h3>
                        <div class="slideshow-container">
                            <?php $__empty_1 = true; $__currentLoopData = $breaking_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="mySlides fade">
                                <div class="numbertext">1 / 3</div>
                                <img src="<?php echo e(asset('/post/'.$bn->image)); ?>" width="420" height="279">
                                <div class="text">
                                    <div class="post-content">
                                       <h2 class="post-title title-small">
                                           <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($bn->slug),'id'=>$bn->id])); ?>"><?php echo Str::words($bn->title, 10, ' ...'); ?></a>
                                       </h2>
                                       <div class="post-meta">
                                           <span class="post-author"><a href="#"><?php echo e($bn->author); ?></a></span>
                                           Feb 24, 2017
                                           <span class="post-date"><?php echo e(date('M d, Y', strtotime($bn->created_at))); ?></span>
                                       </div>
                                   </div>
                                </div>
                              </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="mySlides fade">
                                    No Post Found!
                                </div>
                            <?php endif; ?>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            
                        </div>
                    </div>
                    
                </div><!-- Col 6 end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Trending post end -->


    <section class="latest-news block mega-menu-content-inner">
        <div class="container-fluid">
            <h3 class="block-title"><span>Latest Videos</span></h3>
            <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                <div class="item">
                    <ul class="list-post">
                        <li class="clearfix">
                              <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <img class="img-fluid" src="<?php echo e(asset('web/images/news/video/video4.jpg')); ?>" alt="">
                                    <a class="popup cboxElement" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                                  <div class="video-icon">
                                      <i class="fa fa-play"></i>
                                   </div>
                                </a>
                               </div><!-- Post thumb end -->
                                <div class="post-content">
                                     <h2 class="post-title title-small">
                                         <a href="#">Netcix cuts out the chill with an integrated...</a>
                                     </h2>
                                     <div class="post-meta">
                                         <span class="post-author"><a href="#">John Doe</a></span>
                                         <span class="post-date">Feb 24, 2017</span>
                                     </div>
                                 </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        </li><!-- Li end -->
                    </ul><!-- List post 1 end -->

                </div><!-- Item 1 end -->

                <div class="item">

                    <ul class="list-post">
                        <li class="clearfix">
                              <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <img class="img-fluid" src="<?php echo e(asset('web/images/news/video/video3.jpg')); ?>" alt="">
                                    <a class="popup cboxElement" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                                  <div class="video-icon">
                                      <i class="fa fa-play"></i>
                                   </div>
                                </a>
                               </div><!-- Post thumb end -->
                                <div class="post-content">
                                     <h2 class="post-title title-small">
                                         <a href="#">Netcix cuts out the chill with an integrated...</a>
                                     </h2>
                                     <div class="post-meta">
                                         <span class="post-author"><a href="#">John Doe</a></span>
                                         <span class="post-date">Feb 24, 2017</span>
                                     </div>
                                 </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        </li><!-- Li end -->
                    </ul><!-- List post 2 end -->
                    
                </div><!-- Item 2 end -->

                <div class="item">

                    <ul class="list-post">
                        <li class="clearfix">
                              <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <img class="img-fluid" src="<?php echo e(asset('web/images/news/video/video2.jpg')); ?>" alt="">
                                    <a class="popup cboxElement" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                                  <div class="video-icon">
                                      <i class="fa fa-play"></i>
                                   </div>
                                </a>
                               </div><!-- Post thumb end -->
                                <div class="post-content">
                                     <h2 class="post-title title-small">
                                         <a href="#">Netcix cuts out the chill with an integrated...</a>
                                     </h2>
                                     <div class="post-meta">
                                         <span class="post-author"><a href="#">John Doe</a></span>
                                         <span class="post-date">Feb 24, 2017</span>
                                     </div>
                                 </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        </li><!-- Li end -->
                    </ul><!-- List post 3 end -->
                    
                </div><!-- Item 3 end -->

                <div class="item">
                    <ul class="list-post">
                        <li class="clearfix">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <img class="img-fluid" src="<?php echo e(asset('web/images/news/video/video1.jpg')); ?>" alt="">
                                    <a class="popup cboxElement" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                                  <div class="video-icon">
                                      <i class="fa fa-play"></i>
                                   </div>
                                </a>
                               </div><!-- Post thumb end -->
                                <div class="post-content">
                                     <h2 class="post-title title-small">
                                         <a href="#">Netcix cuts out the chill with an integrated...</a>
                                     </h2>
                                     <div class="post-meta">
                                         <span class="post-author"><a href="#">John Doe</a></span>
                                         <span class="post-date">Feb 24, 2017</span>
                                     </div>
                                 </div><!-- Post content end -->
                            </div>
                        </li><!-- Li end -->
                    </ul><!-- List post 4 end -->
                    
                </div><!-- Item 4 end -->
            </div><!-- Latest News owl carousel end-->
        </div>
    </section><!--- Latest Video end -->

    <section class="block-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <!--- Featured Tab startet -->
                    <?php if(isset($assam_post) && !empty($assam_post)): ?>

                    <div class="featured-tab">
                        <h3 class="block-title"><span><?php echo e($assam_cat_name); ?><span></h3>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_a">
                                    <div class="row">
                                        <?php
                                            $count_as = 1;
                                            $total_ass = count($assam_post);
                                        ?>
                                        <?php $__currentLoopData = $assam_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($count_as == 1): ?>
                                            <div class="col-md-6">
                                                <div class="post-block-style clearfix">
                                                    <div class="post-thumb">
                                                    <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                                            <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h2 class="post-title">
                                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-author"><a href="#"><?php echo e($post->author); ?></a></span>
                                                            <span class="post-date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                                        </div>
                                                        <p></p>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post Block style end -->
                                            </div>
                                        <?php else: ?>
                                        <?php if($count_as == 2): ?>
                                            <div class="col-md-6">
                                                <div class="list-post-block">
                                                    <ul class="list-post">
                                        <?php endif; ?>
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                                        <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                                        </div>
                                                    </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->


                                        <?php if($count_as == $total_ass): ?>
                                                        </ul><!-- List post end -->
                                                    </div><!-- List post block end -->
                                            </div><!-- List post Col end -->
                                        <?php endif; ?>
                                        <?php endif; ?>

                                            <?php
                                                $count_as++;
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="gap-40"></div>
                                        <!-- Col end -->
                                    </div><!-- Tab pane Row 1 end -->
                            </div><!-- Tab pane 1 end -->

                        </div><!-- tab content -->
                    </div><!-- Technology Tab end -->


                    <?php endif; ?>

                     <!--- Featured Tab startet -->
                     <?php if(isset($guwahati_post) && !empty($guwahati_post)): ?>

                     <div class="featured-tab">
                         <h3 class="block-title"><span><?php echo e($guwahati_cat_name); ?><span></h3>
                         <div class="tab-content">
                             <div class="tab-pane active animated fadeInRight" id="tab_a">
                                     <div class="row">
                                         <?php
                                             $count_as = 1;
                                             $total_ass = count($guwahati_post);
                                         ?>
                                         <?php $__currentLoopData = $guwahati_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <?php if($count_as == 1): ?>
                                             <div class="col-md-6">
                                                 <div class="post-block-style clearfix">
                                                     <div class="post-thumb">
                                                         <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                                             <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                                         </a>
                                                     </div>
                                                     <div class="post-content">
                                                         <h2 class="post-title">
                                                         <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                                         </h2>
                                                         <div class="post-meta">
                                                             <span class="post-author"><a href="#"><?php echo e($post->author); ?></a></span>
                                                             <span class="post-date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                                         </div>
                                                         <p></p>
                                                     </div><!-- Post content end -->
                                                 </div><!-- Post Block style end -->
                                             </div>
                                         <?php else: ?>
                                         <?php if($count_as == 2): ?>
                                             <div class="col-md-6">
                                                 <div class="list-post-block">
                                                     <ul class="list-post">
                                         <?php endif; ?>
                                         
                                         <li class="clearfix">
                                             <div class="post-block-style post-float clearfix">
                                                 <div class="post-thumb">
                                                     <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                                         <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                                     </a>
                                                 </div><!-- Post thumb end -->
 
                                                 <div class="post-content">
                                                         <h2 class="post-title title-small">
                                                             <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                                         </h2>
                                                         <div class="post-meta">
                                                             <span class="post-date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                                         </div>
                                                     </div><!-- Post content end -->
                                             </div><!-- Post block style end -->
                                         </li><!-- Li 1 end -->
 
 
                                         <?php if($count_as == $total_ass): ?>
                                                         </ul><!-- List post end -->
                                                     </div><!-- List post block end -->
                                             </div><!-- List post Col end -->
                                         <?php endif; ?>
                                         <?php endif; ?>
 
                                             <?php
                                                 $count_as++;
                                             ?>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <div class="gap-40"></div>
                                         <!-- Col end -->
                                     </div><!-- Tab pane Row 1 end -->
                             </div><!-- Tab pane 1 end -->
 
                         </div><!-- tab content -->
                     </div><!-- Technology Tab end -->
 
 
                     <?php endif; ?>

                    <!--- Featured Tab startet -->
                    <?php if(isset($technology_post) && !empty($technology_post)): ?>

                    <div class="featured-tab">
                        <h3 class="block-title"><span><?php echo e($technology_cat_name); ?><span></h3>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_a">
                                    <div class="row">
                                        <?php
                                            $count_as = 1;
                                            $total_ass = count($technology_post);
                                        ?>
                                        <?php $__currentLoopData = $technology_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($count_as == 1): ?>
                                            <div class="col-md-6">
                                                <div class="post-block-style clearfix">
                                                    <div class="post-thumb">
                                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                                            <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h2 class="post-title">
                                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-author"><a href="#"><?php echo e($post->author); ?></a></span>
                                                            <span class="post-date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                                        </div>
                                                        <p></p>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post Block style end -->
                                            </div>
                                        <?php else: ?>
                                        <?php if($count_as == 2): ?>
                                            <div class="col-md-6">
                                                <div class="list-post-block">
                                                    <ul class="list-post">
                                        <?php endif; ?>
                                        
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                                        <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                                        </div>
                                                    </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->


                                        <?php if($count_as == $total_ass): ?>
                                                        </ul><!-- List post end -->
                                                    </div><!-- List post block end -->
                                            </div><!-- List post Col end -->
                                        <?php endif; ?>
                                        <?php endif; ?>

                                            <?php
                                                $count_as++;
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="gap-40"></div>
                                        <!-- Col end -->
                                    </div><!-- Tab pane Row 1 end -->
                            </div><!-- Tab pane 1 end -->

                        </div><!-- tab content -->
                    </div><!-- Technology Tab end -->
                    <?php endif; ?>
                    <div class="gap-40"></div>
                    <div class="block">
                        <div class="row">
                            <div class="col-md-6 homecol2">
                                <h3 class="block-title"><span><?php echo e($lifestyle_cat_name); ?></span></h3>
                                <?php if(isset($lifestyle_1) && !empty($lifestyle_1)): ?>
                                <?php $__currentLoopData = $lifestyle_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key == 0): ?>
                                <div class="post-overaly-style last clearfix">
                                    <div class="post-thumb">
                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                            <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                        </a>
                                    </div>
                                    
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo e($post->title); ?></a>
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
                                                        <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                     <h2 class="post-title title-small">
                                                         <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo e($post->title); ?></a>
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
                            </div><!-- Col 2 end -->
                            <div class="col-md-6">
                                <h3 class="block-title"><span><?php echo e($lifestyle_cat_name); ?></span></h3>
                                <?php if(isset($lifestyle_2) && !empty($lifestyle_2)): ?>
                                <?php $__currentLoopData = $lifestyle_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key == 0): ?>
                                <div class="post-overaly-style last clearfix">
                                    <div class="post-thumb">
                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                            <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                        </a>
                                    </div>
                                    
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo e($post->title); ?></a>
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
                                                        <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                     <h2 class="post-title title-small">
                                                         <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo e($post->title); ?></a>
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
                            </div><!-- Col 2 end -->
                        </div><!-- Row end -->
                    </div><!-- Block Lifestyle end -->
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
                            <img class="banner img-fluid" src="<?php echo e(asset('web/images/banner-ads/ad-sidebar.png')); ?>" alt="" />
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
                                                        <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
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
                            <img class="banner img-fluid" src="<?php echo e(asset('web/images/banner-ads/ad-sidebar2.png')); ?>" alt="" />
                        </div><!-- Sidebar Ad end -->

                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->

    <section class="ad-content-area text-center no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid" src="<?php echo e(asset('web/images/banner-ads/ad-top-header.png')); ?>" alt="" />
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Ad content top end -->

    <section class="block-wrapper homecol3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="block">
                        <h3 class="block-title"><span><?php echo e($health_cat_name); ?></span></h3>
                        <?php if(isset($health) && !empty($health)): ?>
                        <?php $__currentLoopData = $health; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key == 0): ?>
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                        <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo e($post->title); ?></a>
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
                                                <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
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
                    </div><!-- Block end -->
                </div><!-- Travel Col end -->
                <div class="col-lg-4 col-md-12">
                    <div class="block">
                        <h3 class="block-title"><span><?php echo e($gadget_cat_name); ?></span></h3>
                        <?php if(isset($gadget) && !empty($gadget)): ?>
                        <?php $__currentLoopData = $gadget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key == 0): ?>
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                        <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                    </a>
                                </div>
                                
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo e($post->title); ?></a>
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
                                                <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
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
                    </div><!-- Block end -->
                </div><!-- Travel Col end -->
                <div class="col-lg-4 col-md-12">
                    <div class="block">
                        <h3 class="block-title"><span><?php echo e($travel_cat_name); ?></span></h3>
                        <?php if(isset($travel) && !empty($travel)): ?>
                        <?php $__currentLoopData = $travel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key == 0): ?>
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                        <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                    </a>
                                </div>
                                
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo e($post->title); ?></a>
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
                                                <img class="img-fluid" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
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

                    </div><!-- Block end -->
                </div><!-- Travel Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- 2nd block end -->

    <section class="block-wrapper p-bottom-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="more-news block">
                        <h3 class="block-title"><span>Business</span></h3>

                        <div id="more-news-slide" class="owl-carousel owl-theme more-news-slide">
                            <div class="item">
                                <?php if(isset($business_posts_1) && !empty($business_posts_1)): ?>
                                <?php $__currentLoopData = $business_posts_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="post-block-style post-float-half clearfix">
                                    <div class="post-thumb">
                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                            <img class="img-fluid single-news" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                         </h2>
                                         <div class="post-meta">
                                             <span class="post-author"><a href="#"><?php echo e($post->author); ?></a></span>
                                             <span class="post-date"><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></span>
                                         </div>
                                         <p><?php echo Str::words($post->body, 20, ' ...'); ?></p>
                                     </div><!-- Post content end -->
                                </div><!-- Post Block style 1 end -->

                                <div class="gap-30"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div><!-- Item 1 end -->
                            <div class="item">
                                <?php if(isset($business_posts_2) && !empty($business_posts_2)): ?>
                                <?php $__currentLoopData = $business_posts_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="post-block-style post-float-half clearfix">
                                    <div class="post-thumb">
                                        <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>">
                                            <img class="img-fluid single-news" src="<?php echo e(asset('post/thumb/'.$post->image)); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="<?php echo e(route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])); ?>"><?php echo Str::words($post->title, 10, ' ...'); ?></a>
                                         </h2>
                                         <div class="post-meta">
                                             <span class="post-author"><a href="#"><?php echo e($post->author); ?></a></span>
                                             <span class="post-date"><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></span>
                                         </div>
                                         <p><?php echo Str::words($post->body, 20, ' ...'); ?></p>
                                     </div><!-- Post content end -->
                                </div><!-- Post Block style 5 end -->
                                <div class="gap-30"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </div><!-- Item 2 end -->
                        </div><!-- More news carousel end -->
                    </div><!--More news block end -->
                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar sidebar-right">
                        <h3 class="block-title"><span>Facebook</span></h3>

                        <div class="widget text-center">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=600&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div><!-- Sidebar Ad end -->
                    </div><!--Sidebar right end -->
                </div><!-- Sidebar col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- 3rd block end -->

    <section class="ad-content-area text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <img class="img-fluid" src="<?php echo e(asset('web/images/banner-ads/ad-top-header.png')); ?>" alt="" />
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Ad content two end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.template.web_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\invoice\resources\views/web/index.blade.php ENDPATH**/ ?>