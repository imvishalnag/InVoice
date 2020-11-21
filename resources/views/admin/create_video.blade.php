@extends('admin.template.admin_master')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>Post Youtube Video</h2>
                        <div class="clearfix"></div>
                    </div>
                <div>
                     @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                     @endif
                     @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                     @endif
                </div>
                    <div>
                        <div class="x_content">
                        {{ Form::open(['method' => 'post','route'=>'admin.add_video', 'enctype'=>'multipart/form-data']) }}
                            <div class="well" style="overflow: auto">
                                <div class="form-row mb-10">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{old('title')}}">
                                        @if($errors->has('title'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                                        <label for="type">Type</label>
                                        <select class="form-control" name="type" id="type">
                                            <option selected="" disabled="" value="">Select Type</option>
                                            <option value="1" >English</option>
                                            <option value="2" >Assamese</option>
                                        </select>
                                        @if($errors->has('type'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                        <label for="author">Author</label>
                                        <input type="text" class="form-control" value="{{old('author')}}" name="author" placeholder="Author">
                                        @if($errors->has('author'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('author') }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-10">
                                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                        <label for="v_id">Video ID</label>
                                        <input type="text" class="form-control" name="v_id" placeholder="Enter Video ID" value="{{old('v_id')}}">
                                        @if($errors->has('v_id'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('v_id') }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                        <label for="thumb">Thumbnail* (850 X 565 )</label>
                                        <input type="file" class="form-control" name="thumb" accept="/*">
                                        @if($errors->has('thumb'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('thumb') }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">    	            	
                                {{ Form::submit('Post', array('class'=>'btn btn-success pull-right')) }}  
                            </div>
                        {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection



