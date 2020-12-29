
@extends('admin.template.admin_master')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>Change Password</h2>
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
                        {{ Form::open(['method' => 'post','route'=>'admin.change_password']) }}
                                <div class="well" style="overflow: auto">
                                    <div class="form-row mb-10">
                                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                            <label for="category">Username</label>
                                            <input type="text" class="form-control" value="{{Auth::guard('admin')->user()->email}}" name="user_name" placeholder="Enter Username">
                                            @if($errors->has('user_name'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('user_name') }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                            <label for="ass_category">Password</label>
                                            <input type="text" class="form-control" value="" name="password" placeholder="Enter new password">
                                            @if($errors->has('password'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">    	            	
                                    {{ Form::submit('Change', array('class'=>'btn btn-success pull-right')) }}  
                                </div>
                        {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection


