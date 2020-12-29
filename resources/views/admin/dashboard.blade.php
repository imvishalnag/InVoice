
@extends('admin.template.admin_master')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total News</span>
              <div class="count">{{ $post }}</div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total English News</span>
              <div class="count">{{ $eng_post }}</div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Assamese News</span>
              <div class="count green">{{ $ass_post }}</div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Category</span>
              <div class="count">{{ $category }}</div>
            </div>
          </div>
          <!-- /top tiles -->
          <br />
          
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                    <h2>Daily News</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                  <div class="x_content">
                    <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Title</th>
                            <th>Body</th>
                        </tr>
                      </thead>
                      <tbody class="form-text-element">
                          @if (isset($all_post) && !empty($all_post))
                            @php
                                $count = 1;
                            @endphp
                              @foreach ($all_post as $item)
                                <tr>
                                  <td>{{$count++}}</td>
                                  <td>{{Str::words($item->title, 10, ' ...')}}</td>
                                  <td>{!!Str::words($item->body, 10, '...')!!}</td>
                                </tr>
                              @endforeach
                          @endif
                      </tbody>
                    </table>
                      {{ $all_post->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        @endsection