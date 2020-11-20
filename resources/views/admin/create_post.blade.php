
@extends('admin.template.admin_master')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>Create Post</h2>
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
                        {{ Form::open(['method' => 'post','route'=>'admin.add_post', 'enctype'=>'multipart/form-data']) }}
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
                                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
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
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option selected="" disabled="" value="">Select Category</option>
                                            
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
                            </div>
                            <div class="well" style="overflow: auto">
                                <div class="form-row mb-10">
                                    <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                        <label for="category">Body*</label>
                                        <textarea class="form-control" name="body" placeholder="Enter full description" id="body">{{old('body')}}</textarea>
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

    $(document).ready(function(){
        function fetch_category(query){
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax({
                url: "{{route('admin.populate_category')}}",
                method: "GET",
                data: {query:query},
                success: function(data){
                  if(data == 1){
                    
                  }
                  else{
                    $("#category").html(data);
                  }
                }
            })
        }
        $(document).on('change', '#type', function(){
            var query = $(this).val();
            if(query){
                fetch_category(query);
            }
        });
    });
</script>
 @endsection


