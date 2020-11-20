
@extends('web.template.web_master')

@section('content')
    <section class="featured-post-area no-padding" style="padding-top: 13px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 pad-r">
                    <div id="featured-slider" class="owl-carousel owl-theme featured-slider">
                        @if(isset($slider_post) && !empty($slider_post))
                            @foreach($slider_post as $post)
                            <div class="item" style="background-image:url({{asset('post/thumb/'.$post->image ?? 'web/images/news/tech/gadget2.jpg')}})">
                                <div class="featured-post">
                                    <div class="post-content">
                                    <a class="post-cat" href="{{route('web.news', ['id'=> encrypt($post->cat_id)])}}">{{$post->category_name}}</a>
                                        <h2 class="post-title title-extra-large">
                                            <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 6, ' ...') !!}</a>
                                        </h2>
                                        <span class="post-date">{{ date('F d, Y', strtotime($post->created_at))}}</span>
                                    </div>
                                </div><!--/ Featured post end -->
                                
                            </div><!-- Item 1 end -->
                            @endforeach
                        @endif
                    </div><!-- Featured owl carousel end-->
                </div><!-- Col 6 end -->

                <div class="col-lg-4 col-md-12">
                    <div class="featured-tab">
                        <h3 class="block-title"><span>Breaking<span></span></span></h3>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_a">
                                <div class="row">
                                    <div class="col-md-6 pad-r-lg">
                                        <div class="post-block-style clearfix">
                                            <div class="post-thumb">
                                                <a href="http://localhost/invoice/public/english/posts/this-is-test-title/34">
                                                    <img class="img-fluid" src="http://localhost/invoice/public/post/thumb/ee6bbce8240e00ac828deb75aa64b245.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="http://localhost/invoice/public/english/posts/this-is-test-title/34">This is test Title</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-author"><a href="#">News Desk</a></span>
                                                    <span class="post-date">March 27, 2020</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus laborum maxime fugiat mollitia voluptas autem itaque, beatae officiis quos quis doloribus aliquid nostrum hic tenetur.</p>
                                            </div><!-- Post content end -->
                                        </div><!-- Post Block style end -->
                                    </div>                                       
                                    <div class="col-md-6 pad-l-lg">
                                        <div class="list-post-block">
                                            <ul class="list-post">                                                                                 
                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="http://localhost/invoice/public/english/posts/similique-est-voluptatem-blanditiis-quia-optio/8">
                                                                <img class="img-fluid" src="http://localhost/invoice/public/post/thumb/a87d6a4d09c2a045b283c5b0cb4182c2.jpg" alt="">
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                                <h2 class="post-title title-small">
                                                                    <a href="http://localhost/invoice/public/english/posts/similique-est-voluptatem-blanditiis-quia-optio/8">Similique est voluptatem blanditiis quia optio.</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-date">March 23, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 1 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="http://localhost/invoice/public/english/posts/eaque-dolores-ut-vel-eos-culpa-ut/3">
                                                                <img class="img-fluid" src="http://localhost/invoice/public/post/thumb/6a6f3190a894b450a92b96658d5aeb10.jpg" alt="">
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                                <h2 class="post-title title-small">
                                                                    <a href="http://localhost/invoice/public/english/posts/eaque-dolores-ut-vel-eos-culpa-ut/3">Eaque dolores ut vel eos culpa ut.</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-date">March 23, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 1 end -->  

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="http://localhost/invoice/public/english/posts/assumenda-necessitatibus-animi-rerum-molestiae/1">
                                                                <img class="img-fluid" src="http://localhost/invoice/public/post/thumb/748279d8c4a9e32b2b1b7c0da39ba03b.jpg" alt="">
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                                <h2 class="post-title title-small">
                                                                    <a href="http://localhost/invoice/public/english/posts/assumenda-necessitatibus-animi-rerum-molestiae/1">Assumenda necessitatibus animi rerum molestiae.</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-date">March 23, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 1 end -->   

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="http://localhost/invoice/public/english/posts/similique-est-voluptatem-blanditiis-quia-optio/8">
                                                                <img class="img-fluid" src="http://localhost/invoice/public/post/thumb/a87d6a4d09c2a045b283c5b0cb4182c2.jpg" alt="">
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                                <h2 class="post-title title-small">
                                                                    <a href="http://localhost/invoice/public/english/posts/similique-est-voluptatem-blanditiis-quia-optio/8">Similique est voluptatem blanditiis quia optio.</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-date">March 23, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 1 end -->
                                            </ul><!-- List post end -->
                                        </div><!-- List post block end -->
                                    </div><!-- List post Col end -->
                                    <!-- Col end -->
                                </div><!-- Tab pane Row 1 end -->
                            </div><!-- Tab pane 1 end -->

                        </div><!-- tab content -->
                    </div>
                    {{-- <div class="row">
                        @if(count($fourth_post) && !empty($fourth_post))
                            @foreach($fourth_post as $post)
                                <div class="col-md-6 pad-r-small">
                                    <div class="post-overaly-style contentTop fourNewsboxTop clearfix">
                                        <div class="post-thumb">
                                            <a href="#"><img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt=""/></a>
                                        </div>
                                        <div class="post-content">
                                            <a class="post-cat" href="{{route('web.news', ['id'=> encrypt($post->cat_id)])}}">{{$post->category_name}}</a>
                                            <h2 class="post-title title-medium">
                                                <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 6, ' ...') !!}</a>
                                            </h2>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Overaly end -->
                                </div><!-- Col end -->
                            @endforeach
                        @endif
                    </div><!-- Row end --> --}}
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
                                    <img class="img-fluid" src="{{asset('web/images/news/video/video4.jpg')}}" alt="">
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
                                    <img class="img-fluid" src="{{asset('web/images/news/video/video3.jpg')}}" alt="">
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
                                    <img class="img-fluid" src="{{asset('web/images/news/video/video2.jpg')}}" alt="">
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
                                    <img class="img-fluid" src="{{asset('web/images/news/video/video1.jpg')}}" alt="">
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
                    @if(isset($assam_post) && !empty($assam_post))

                    <div class="featured-tab">
                        <h3 class="block-title"><span>{{$assam_cat_name}}<span></h3>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_a">
                                    <div class="row">
                                        @php
                                            $count_as = 1;
                                            $total_ass = count($assam_post);
                                        @endphp
                                        @foreach ($assam_post as $post)
                                        @if ($count_as == 1)
                                            <div class="col-md-6">
                                                <div class="post-block-style clearfix">
                                                    <div class="post-thumb">
                                                    <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                            <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h2 class="post-title">
                                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-author"><a href="#">{{$post->author}}</a></span>
                                                            <span class="post-date">{{ date('F d, Y', strtotime($post->created_at))}}</span>
                                                        </div>
                                                        <p></p>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post Block style end -->
                                            </div>
                                        @else
                                        @if ($count_as == 2)
                                            <div class="col-md-6">
                                                <div class="list-post-block">
                                                    <ul class="list-post">
                                        @endif
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                        <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">{{ date('F d, Y', strtotime($post->created_at))}}</span>
                                                        </div>
                                                    </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->


                                        @if ($count_as == $total_ass)
                                                        </ul><!-- List post end -->
                                                    </div><!-- List post block end -->
                                            </div><!-- List post Col end -->
                                        @endif
                                        @endif

                                            @php
                                                $count_as++;
                                            @endphp
                                        @endforeach
                                        <div class="gap-40"></div>
                                        <!-- Col end -->
                                    </div><!-- Tab pane Row 1 end -->
                            </div><!-- Tab pane 1 end -->

                        </div><!-- tab content -->
                    </div><!-- Technology Tab end -->


                    @endif

                     <!--- Featured Tab startet -->
                     @if(isset($guwahati_post) && !empty($guwahati_post))

                     <div class="featured-tab">
                         <h3 class="block-title"><span>{{$guwahati_cat_name}}<span></h3>
                         <div class="tab-content">
                             <div class="tab-pane active animated fadeInRight" id="tab_a">
                                     <div class="row">
                                         @php
                                             $count_as = 1;
                                             $total_ass = count($guwahati_post);
                                         @endphp
                                         @foreach ($guwahati_post as $post)
                                         @if ($count_as == 1)
                                             <div class="col-md-6">
                                                 <div class="post-block-style clearfix">
                                                     <div class="post-thumb">
                                                         <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                             <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                                         </a>
                                                     </div>
                                                     <div class="post-content">
                                                         <h2 class="post-title">
                                                         <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                                         </h2>
                                                         <div class="post-meta">
                                                             <span class="post-author"><a href="#">{{$post->author}}</a></span>
                                                             <span class="post-date">{{ date('F d, Y', strtotime($post->created_at))}}</span>
                                                         </div>
                                                         <p></p>
                                                     </div><!-- Post content end -->
                                                 </div><!-- Post Block style end -->
                                             </div>
                                         @else
                                         @if ($count_as == 2)
                                             <div class="col-md-6">
                                                 <div class="list-post-block">
                                                     <ul class="list-post">
                                         @endif
                                         
                                         <li class="clearfix">
                                             <div class="post-block-style post-float clearfix">
                                                 <div class="post-thumb">
                                                     <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                         <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                                     </a>
                                                 </div><!-- Post thumb end -->
 
                                                 <div class="post-content">
                                                         <h2 class="post-title title-small">
                                                             <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                                         </h2>
                                                         <div class="post-meta">
                                                             <span class="post-date">{{ date('F d, Y', strtotime($post->created_at))}}</span>
                                                         </div>
                                                     </div><!-- Post content end -->
                                             </div><!-- Post block style end -->
                                         </li><!-- Li 1 end -->
 
 
                                         @if ($count_as == $total_ass)
                                                         </ul><!-- List post end -->
                                                     </div><!-- List post block end -->
                                             </div><!-- List post Col end -->
                                         @endif
                                         @endif
 
                                             @php
                                                 $count_as++;
                                             @endphp
                                         @endforeach
                                         <div class="gap-40"></div>
                                         <!-- Col end -->
                                     </div><!-- Tab pane Row 1 end -->
                             </div><!-- Tab pane 1 end -->
 
                         </div><!-- tab content -->
                     </div><!-- Technology Tab end -->
 
 
                     @endif

                    <!--- Featured Tab startet -->
                    @if(isset($technology_post) && !empty($technology_post))

                    <div class="featured-tab">
                        <h3 class="block-title"><span>{{$technology_cat_name}}<span></h3>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_a">
                                    <div class="row">
                                        @php
                                            $count_as = 1;
                                            $total_ass = count($technology_post);
                                        @endphp
                                        @foreach ($technology_post as $post)
                                        @if ($count_as == 1)
                                            <div class="col-md-6">
                                                <div class="post-block-style clearfix">
                                                    <div class="post-thumb">
                                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                            <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h2 class="post-title">
                                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-author"><a href="#">{{$post->author}}</a></span>
                                                            <span class="post-date">{{ date('F d, Y', strtotime($post->created_at))}}</span>
                                                        </div>
                                                        <p></p>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post Block style end -->
                                            </div>
                                        @else
                                        @if ($count_as == 2)
                                            <div class="col-md-6">
                                                <div class="list-post-block">
                                                    <ul class="list-post">
                                        @endif
                                        
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                        <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">{{ date('F d, Y', strtotime($post->created_at))}}</span>
                                                        </div>
                                                    </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->


                                        @if ($count_as == $total_ass)
                                                        </ul><!-- List post end -->
                                                    </div><!-- List post block end -->
                                            </div><!-- List post Col end -->
                                        @endif
                                        @endif

                                            @php
                                                $count_as++;
                                            @endphp
                                        @endforeach
                                        <div class="gap-40"></div>
                                        <!-- Col end -->
                                    </div><!-- Tab pane Row 1 end -->
                            </div><!-- Tab pane 1 end -->

                        </div><!-- tab content -->
                    </div><!-- Technology Tab end -->
                    @endif
                    <div class="gap-40"></div>
                    <div class="block">
                        <div class="row">
                            <div class="col-md-6 homecol2">
                                <h3 class="block-title"><span>{{$lifestyle_cat_name}}</span></h3>
                                @if(isset($lifestyle_1) && !empty($lifestyle_1))
                                @foreach($lifestyle_1 as $key => $post)
                                @if ($key == 0)
                                <div class="post-overaly-style last clearfix">
                                    <div class="post-thumb">
                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                            <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                        </a>
                                    </div>
                                    
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{{$post->title}}</a>
                                         </h2>
                                         <div class="post-meta">
                                             <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                         </div>
                                     </div><!-- Post content end -->
                                </div><!-- Post Overaly Article end -->
                                @else
                                <div class="list-post-block">
                                    <ul class="list-post">
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                        <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                     <h2 class="post-title title-small">
                                                         <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{{$post->title}}</a>
                                                     </h2>
                                                     <div class="post-meta">
                                                         <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                                     </div>
                                                 </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end --> 
                                    </ul><!-- List post end -->
                                </div><!-- List post block end -->
                                @endif
                                @endforeach
                                @endif
                                <div class="gap-40"></div>
                            </div><!-- Col 2 end -->
                            <div class="col-md-6">
                                <h3 class="block-title"><span>{{$lifestyle_cat_name}}</span></h3>
                                @if(isset($lifestyle_2) && !empty($lifestyle_2))
                                @foreach($lifestyle_2 as $key => $post)
                                @if ($key == 0)
                                <div class="post-overaly-style last clearfix">
                                    <div class="post-thumb">
                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                            <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                        </a>
                                    </div>
                                    
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{{$post->title}}</a>
                                         </h2>
                                         <div class="post-meta">
                                             <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                         </div>
                                     </div><!-- Post content end -->
                                </div><!-- Post Overaly Article end -->
                                @else
                                <div class="list-post-block">
                                    <ul class="list-post">
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                        <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                     <h2 class="post-title title-small">
                                                         <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{{$post->title}}</a>
                                                     </h2>
                                                     <div class="post-meta">
                                                         <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                                     </div>
                                                 </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end --> 
                                    </ul><!-- List post end -->
                                </div><!-- List post block end -->
                                @endif
                                @endforeach
                                @endif
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
                            <img class="banner img-fluid" src="{{asset('web/images/banner-ads/ad-sidebar.png')}}" alt="" />
                        </div><!-- Sidebar Ad end -->

                        <div class="widget color-default">
                            <h3 class="block-title"><span>Popular News</span></h3>
                            @if(isset($popular_post) && !empty($popular_post))
                            @foreach($popular_post as $key => $post)
                            @if($key == 0)
                                <div class="post-overaly-style clearfix">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                        </a>
                                    </div>
                                    
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                         </h2>
                                         <div class="post-meta">
                                             <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                         </div>
                                     </div><!-- Post content end -->
                                </div><!-- Post Overaly Article end -->
                            @else
                                <div class="list-post-block">
                                    <ul class="list-post">
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                        <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                     <h2 class="post-title title-small">
                                                         <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                                     </h2>
                                                     <div class="post-meta">
                                                         <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                                     </div>
                                                 </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->
                                    </ul><!-- List post end -->
                                </div><!-- List post block end -->
                            @endif
                            @endforeach
                            @endif
                            <div class="gap-40"></div>
                        </div><!-- Popular news widget end -->						

                        <div class="widget text-center">
                            <img class="banner img-fluid" src="{{asset('web/images/banner-ads/ad-sidebar2.png')}}" alt="" />
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
                    <img class="img-fluid" src="{{asset('web/images/banner-ads/ad-top-header.png')}}" alt="" />
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Ad content top end -->

    <section class="block-wrapper homecol3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="block">
                        <h3 class="block-title"><span>{{$health_cat_name}}</span></h3>
                        @if(isset($health) && !empty($health))
                        @foreach($health as $key => $post)
                        @if ($key == 0)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                        <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{{$post->title}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->
                        @else
                        <div class="list-post-block">
                            <ul class="list-post">
                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                            </a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                             <h2 class="post-title title-small">
                                                 <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                             </h2>
                                             <div class="post-meta">
                                                 <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                             </div>
                                         </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 1 end -->
                            </ul><!-- List post end -->
                        </div><!-- List post block end -->
                        @endif
                        @endforeach
                        @endif
                        <div class="gap-40"></div>
                    </div><!-- Block end -->
                </div><!-- Travel Col end -->
                <div class="col-lg-4 col-md-12">
                    <div class="block">
                        <h3 class="block-title"><span>{{$gadget_cat_name}}</span></h3>
                        @if(isset($gadget) && !empty($gadget))
                        @foreach($gadget as $key => $post)
                        @if ($key == 0)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                        <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                    </a>
                                </div>
                                
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{{$post->title}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->
                        @else
                        <div class="list-post-block">
                            <ul class="list-post">
                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                            </a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                             <h2 class="post-title title-small">
                                                 <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                             </h2>
                                             <div class="post-meta">
                                                 <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                             </div>
                                         </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 1 end -->
                            </ul><!-- List post end -->
                        </div><!-- List post block end -->
                        @endif
                        @endforeach
                        @endif
                        <div class="gap-40"></div>
                    </div><!-- Block end -->
                </div><!-- Travel Col end -->
                <div class="col-lg-4 col-md-12">
                    <div class="block">
                        <h3 class="block-title"><span>{{$travel_cat_name}}</span></h3>
                        @if(isset($travel) && !empty($travel))
                        @foreach($travel as $key => $post)
                        @if ($key == 0)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                        <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                    </a>
                                </div>
                                
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{{$post->title}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->
                        @else
                        <div class="list-post-block">
                            <ul class="list-post">
                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                                <img class="img-fluid" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                            </a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                             <h2 class="post-title title-small">
                                                 <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                             </h2>
                                             <div class="post-meta">
                                                 <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                             </div>
                                         </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 1 end -->
                            </ul><!-- List post end -->
                        </div><!-- List post block end -->
                        @endif
                        @endforeach
                        @endif
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
                                @if(isset($business_posts_1) && !empty($business_posts_1))
                                @foreach($business_posts_1 as $post)
                                <div class="post-block-style post-float-half clearfix">
                                    <div class="post-thumb">
                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                            <img class="img-fluid single-news" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                         </h2>
                                         <div class="post-meta">
                                             <span class="post-author"><a href="#">{{$post->author}}</a></span>
                                             <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                         </div>
                                         <p>{!! Str::words($post->body, 20, ' ...') !!}</p>
                                     </div><!-- Post content end -->
                                </div><!-- Post Block style 1 end -->

                                <div class="gap-30"></div>
                                @endforeach
                                @endif
                            </div><!-- Item 1 end -->
                            <div class="item">
                                @if(isset($business_posts_2) && !empty($business_posts_2))
                                @foreach($business_posts_2 as $post)
                                <div class="post-block-style post-float-half clearfix">
                                    <div class="post-thumb">
                                        <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">
                                            <img class="img-fluid single-news" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                         <h2 class="post-title">
                                             <a href="{{route('web.viewPost',['slug'=>urlencode($post->slug),'id'=>$post->id])}}">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                         </h2>
                                         <div class="post-meta">
                                             <span class="post-author"><a href="#">{{$post->author}}</a></span>
                                             <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                         </div>
                                         <p>{!! Str::words($post->body, 20, ' ...') !!}</p>
                                     </div><!-- Post content end -->
                                </div><!-- Post Block style 5 end -->
                                <div class="gap-30"></div>
                                @endforeach
                                @endif

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
                    <img class="img-fluid" src="{{asset('web/images/banner-ads/ad-top-header.png')}}" alt="" />
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Ad content two end -->
@endsection