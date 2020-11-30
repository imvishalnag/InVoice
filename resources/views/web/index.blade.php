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
                                    <a class="post-cat" href="{{route('web.news', ['id'=> $post->cat_id, 'slug' => urlencode($post->slug)])}}">{{$post->category_name}}</a>
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
                    <div class="featured-tab not-feat-xs">
                        <h3 class="block-title"><span>Breaking<span></span></span></h3>
                        <div class="slideshow-container">
                            @php
                                $count = 1;
                            @endphp
                            @forelse ($breaking_news ?:[]  as $bn)
                            <div class="mySlides fade">
                                <div class="numbertext">{{ $count++ }} / {{ count($breaking_news) }}</div>
                                <img src="{{asset('/post/'.$bn->image)}}" width="420" height="279">
                                <div class="text">
                                    <div class="post-content">
                                       <h2 class="post-title title-small">
                                           <a href="{{route('web.viewPost',['slug'=>urlencode($bn->slug),'id'=>$bn->id])}}">{!! Str::words($bn->title, 10, ' ...') !!}</a>
                                       </h2>
                                       <div class="post-meta">
                                           <span class="post-author"><a href="#">{{ $bn->author }}</a></span>
                                           <span class="post-date">{{ date('M d, Y', strtotime($bn->created_at)) }}</span>
                                       </div>
                                   </div>
                                </div>
                              </div>
                            @empty
                                <div class="mySlides fade">
                                    No Post Found!
                                </div>
                            @endforelse
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            
                        </div>
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

    <div style="padding-bottom: 0;padding-top: 30px;">
        <a class="weatherwidget-io" href="https://forecast7.com/en/26d1491d74/guwahati/" data-label_1="GUWAHATI" data-label_2="WEATHER" data-theme="original" data-basecolor="#090d3d" >GUWAHATI WEATHER</a>
    </div>

    <section class="latest-news block mega-menu-content-inner" style="padding-bottom: 0;padding-top: 10px;">
        <div class="container-fluid">
            <h3 class="block-title"><span>Latest Videos</span></h3>
            <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                @if(isset($youtube_post) && !empty($youtube_post))
                    @foreach($youtube_post as $post)
                    <div class="item">
                        <ul class="list-post">
                            <li class="clearfix">
                                <div class="post-block-style clearfix">
                                    <div class="post-thumb">
                                        <img class="img-fluid" src="{{asset('youtube/thumb/'.$post->thumbnail)}}" alt="">
                                        <a class="popup cboxElement" href="https://www.youtube.com/embed/{{$post->v_id}}?autoplay=1&amp;loop=1">
                                        <div class="video-icon">
                                        <i class="fa fa-play"></i>
                                    </div>
                                    </a>
                                </div><!-- Post thumb end -->
                                    <div class="post-content">
                                        <h2 class="post-title title-small">
                                            <a href="#">{!! Str::words($post->title, 10, ' ...') !!}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author"><a href="#">{{$post->author}}</a></span>
                                            <span class="post-date">{{ date('F d, Y', strtotime($post->created_at))}}</span>
                                        </div>
                                    </div><!-- Post content end -->
                                </div><!-- Post Block style end -->
                            </li><!-- Li end -->
                        </ul><!-- List post 1 end -->
                    </div><!-- Item 1 end -->
                    @endforeach
                @endif             
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
                                <li><a href="https://api.whatsapp.com/send?phone=8099134064" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://www.facebook.com/invoicene/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/InvoiceNe/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/invoice.ne/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCYpRDBixW0TboCUkx1C6ahQ/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!-- Widget Social end -->
                        <div>
                            <div class="widget" style="font-size: 17px;;width: 70%;line-height: 24px;border: 1px solid #2D6AB4;background-color: #FFFFFF;">
                                <div style="background-color: #090d3d;font-weight:bold;text-align:left;padding: 10px 0;width:100%;">
                                    <span style="background-image:url(https://www.fxexchangerate.com/static/flag.webp); background-position: 0 -2064px;float:left; margin:4px 0 0 20px; width:20px;height:15px; background-repeat:no-repeat;"></span>
                                    <a rel="nofollow" style="color:#FFFFFF;padding-left:5px;text-decoration:none;" href="https://usd.fxexchangerate.com">Dollar To INR</a></div><script type="text/javascript" src="https://w.fxexchangerate.com/converter.php?fm=USD&ft=INR,&lg=en&am=1&ty=2"></script></div><!--  End of Currency Converter Script -  FxExchangeRate.com -->
                        </div>							

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

    <section class="block-wrapper homecol3 p-bottom-0">
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
                    <div class="sidebar sidebar-right hidden-xs-fb">
                        <h3 class="block-title"><span>Facebook</span></h3>

                        <div class="widget text-center">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Finvoicene&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=318843728990066" width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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