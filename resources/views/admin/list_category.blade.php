
@extends('admin.template.admin_master')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>List Category</h2>
                        <div class="clearfix"></div>
                    </div>
                <div>
                </div>
                    <div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>Sl. No</th>
                                    <th>Enlglish Category Name</th>
                                    <th>Assamese Category Name</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @if(count($category) > 0)
                                    @php
                                        $cnt = 1;
                                    @endphp
                                    @foreach($category as $row_cat)
                                        <tr>
                                            <td>{{$cnt++}}</td>
                                            <td>{{$row_cat->category_name}}</td>
                                            <td>{{$row_cat->as_category_name}}</td>
                                            <td>
                                                <a href="{{ route('edit_category', ['categoryId' => encrypt($row_cat->id)]) }}" class="btn btn-primary text-bold">Edit</a>
                                                @if($row_cat->status == 1)
                                                    <a href="{{ route('status_category', ['id' => encrypt($row_cat->id), 'status' => encrypt(2)]) }}" class="btn btn-danger text-bold">Disable</a>
                                                @else
                                                    <a href="{{ route('status_category', ['id' => encrypt($row_cat->id), 'status' => encrypt(1)]) }}" class="btn btn-success text-bold">Enable</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection


