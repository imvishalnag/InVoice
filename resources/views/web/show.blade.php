
@extends('web.template.web_master')

@section('meta')
    <meta property="og:url"                content="http://webinfotechghy.xyz" />
    <meta property="og:type"               content="news" />
    <meta property="og:title"              content=" {{$single_post->title}}" />
    <meta property="og:description"        content="{!! $single_post->body !!}" />
    <meta property="og:image"              content="{{asset('post/'.$single_post->image)}}" />
@endsection

@section('content')

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    
                    <div class="single-post">
                        
                        <div class="post-title-area">
                            <a class="post-cat" href="{{route('web.news', ['id'=> encrypt($single_post->cat_id)])}}">{{$single_post->category_name}}</a>
                            <h2 class="post-title">
                                {{$single_post->title}}
                            </h2>
                            <div class="post-meta">
                                <span class="post-author">
                                    By <a href="#"> {{$single_post->author}}</a>
                                </span>
                                <span class="post-date"><i class="fa fa-clock-o"></i> {{ date('F d, Y', strtotime($single_post->created_at))}}</span>
                                <span class="post-hits"><i class="fa fa-eye"></i> 21</span>
                                <span class="post-comment"><i class="fa fa-comments-o"></i>
                                <a href="#" class="comments-link"><span>01</span></a></span>
                            </div>
                        </div><!-- Post title end -->

                        <div class="post-content-area">
                            <div class="post-media post-featured-image">
                                <a href="{{asset('post/'.$single_post->image)}}" class="gallery-popup"><img src="{{asset('post/'.$single_post->image)}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="entry-content">
                                <p>{!! $single_post->body !!}</p>
                            </div><!-- Entery content end -->

                            <h4 style="margin-bottom: 0;text-transform: uppercase;">Share it on</h4>
                            <div class="share-items clearfix">
                                <ul class="post-social-icons unstyled">
                                    <li class="facebook">
                                        <a href="http://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank">
                                        <i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="http://www.twitter.com/sharer.php?u={{url()->current()}}" target="_blank">
                                        <i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a>
                                    </li>
                                    <li class="gplus">
                                        <a href="http://www.google.com/sharer.php?u={{url()->current()}}" target="_blank">
                                        <i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="http://www.pinterest.com/sharer.php?u={{url()->current()}}" target="_blank">
                                        <i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a>
                                    </li>
                                </ul>
                            </div><!-- Share items end -->

                        </div><!-- post-content end -->
                    </div><!-- Single post end -->

                    <div class="related-posts block">
                        <h3 class="block-title"><span>Related Posts</span></h3>

                        <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                            @if(isset($related_post) && !empty($related_post))
                            @foreach($related_post as $post)
                            @php
                                // dd($re_post->slug);
                            @endphp
                            <div class="item">
                                <div class="post-block-style clearfix">
                                    <div class="post-thumb">
                                        <a href="{{route('web.viewPost',['slug'=>$post->slug, 'id' => $post->id])}}">
                                            <img class="img-fluid single-news" src="{{asset('post/thumb/'.$post->image)}}" alt="" />
                                        </a>
                                    </div>
                                    {{-- <a class="post-cat" href="#">{{$re_post->category_name}}</a> --}}
                                    <div class="post-content">
                                        <h2 class="post-title title-medium">
                                            <a href="{{route('web.viewPost',['slug'=>$post->slug,'id'=>$post->id])}}">{!! Str::words($post->title, 6, ' ...') !!}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author"><a href="#">{{$post->author}}</a></span>
                                            <span class="post-date">{{ date('M d, Y', strtotime($post->created_at))}}</span>
                                        </div>
                                    </div><!-- Post content end -->
                                </div><!-- Post Block style end -->
                            </div><!-- Item 1 end -->
                            @endforeach
                            @endif
                        </div><!-- Carousel end -->
                    </div><!-- Related posts end -->                        

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
                            <img class="banner img-fluid" src="{{asset('web/images/banner-ads/ad-sidebar..png')}}" alt="" />
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
                                                        <img class="img-fluid " src="{{asset('post/thumb/'.$post->image)}}" alt="" />
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
                            <img class="banner img-fluid" src="{{asset('web/images/banner-ads/ad-sidebar2..png')}}" alt="" />
                        </div><!-- Sidebar Ad end -->

                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->
    
@endsection