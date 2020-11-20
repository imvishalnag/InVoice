
@extends('admin.template.admin_master')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>{{ $single_post->title }}</h2>  
                        <div class="clearfix"></div>
                    </div>
                <div>
                </div>
                <div class="x_content">
                    <div><img src="{{asset('post/thumb/'.$single_post->image.'')}}" alt=""></div>
                   <p>{!! $single_post->body !!}</p>
                   <hr>
                   <small>Written By {{$single_post->author}} on {{$single_post->created_at}}</small>
                   <button class="btn btn-danger pull-right" onclick="window.close()">Close</button>
                   <button class="btn btn-primary pull-right">{{$single_post->c_name}}</button>
                </div>
            </div>
            </div>
    </div>
</div>
@endsection



