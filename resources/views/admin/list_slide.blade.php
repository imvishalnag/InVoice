
@extends('admin.template.admin_master')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List Slide Post</h2>
                        <div class="clearfix"></div>
                    </div>
                <div>
                </div>
                    <div>
                        <div class="x_content">
                            <table id="post_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>Sl. No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>                       
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(function(){
            var table = $('#post_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.ajax.get_slider_post_list') }}",
                columns: [
                    {data: 'id', name: 'id',searchable: true},
                    {data: 'title', name: 'title',searchable: true},      
                    {data: 'category', name: 'category',searchable: true},          
                    {data: 'type', name: 'type',searchable: true},          
                    {data: 'action', name: 'action',searchable: true},      
                ]
            });
        })
    </script>
@endsection


