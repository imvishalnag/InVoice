
@extends('admin.template.admin_master')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>Edit Post</h2>
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
                        @if(isset($posts) && !empty($posts))
                            <div class="x_content">
                                {{ Form::open(['method' => 'post','route'=>'admin.update_post', 'enctype'=>'multipart/form-data']) }}
                                    <input type="hidden" name="postId" value="{{$posts->id}}">
                                    <div class="well" style="overflow: auto">
                                        <div class="form-row mb-10">
                                            <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" value="{{$posts->title}}" name="title" placeholder="Enter Title">
                                                @if($errors->has('title'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                                                <label for="type">Type</label>
                                                <select class="form-control" name="type">
                                                    <option selected="" disabled="" value="">Select Type</option>
                                                    <option {{ $posts->post_type == '1' ? 'selected':'' }} value="1">English</option>
                                                    <option {{ $posts->post_type == '2' ? 'selected':'' }} value="2">Assamese</option>
                                                </select>
                                                @if($errors->has('type'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('type') }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                                                <label for="category">Author</label>
                                                <input type="text" class="form-control" value="{{$posts->author}}" name="author" placeholder="Author">
                                                @if($errors->has('author'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('author') }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mb-10">
                                            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                                <label for="category">Category</label>
                                                <select class="form-control" name="category" id="category">
                                                    <option disabled="" value="">Select Category</option>
                                                    @if(isset($categorys) && !empty($categorys) && count($categorys) > 0)
                                                        @foreach($categorys as $category)
                                                            <option {{$posts->cat_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->category_name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @if($errors->has('category'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('category') }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                                <label for="image">Image Upload</label>
                                                <input type="file" class="form-control" name="image" accept="/*">
                                                @if($errors->has('image'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>                
                                    </div>
                                    <div class="well" style="overflow: auto">
                                        <div class="form-row mb-10">
                                            <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                                <label for="category">Body*</label>
                                                <textarea class="form-control" name="body" placeholder="Enter full description" id="body">{{$posts->body}}</textarea>
                                                @if($errors->has('body'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('body') }}</strong>
                                                </span>
                                                @enderror
                                            </div>                                 
                                        </div>
                                    </div>
                                    <div class="form-group">    	            	
                                        {{ Form::submit('Publish', array('class'=>'btn btn-success pull-right')) }}  
                                    </div>
                                {{ Form::close() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

@section('script')

 <script src="{{ asset('ckeditor4/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'body', {
        height: 400,
        filebrowserUploadUrl: "{{route('admin.ck_editor_image_upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
</script>
 @endsection


