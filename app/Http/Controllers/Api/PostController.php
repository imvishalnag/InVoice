<?php

namespace App\Http\Controllers\Api;

use App\AppId;
use App\Http\Controllers\Controller;
use App\Post;
use App\Video;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function homePage($type){
        $slider = DB::table('posts')->latest()->whereStatus(1)->latest()->select('id', 'title', 'body', 'image', 'author', 'slug', 'created_at')->wherePost_type($type)->whereHp_section1('1')->limit(8)->get();
        $breaking = DB::table('posts')->latest()->whereStatus(1)->select('id', 'title', 'body', 'image', 'author', 'slug', 'created_at')->wherePost_type($type)->whereBreaking('1')->limit(8)->get();
        $category = DB::table('category')->whereStatus(1)->get();
        $data = [
            'slider' => $slider,
            'breaking' => $breaking,
            'category' => $category
        ];
        $response = [
            'status' => true,
            'message' => 'Posts',
            'data' => $data,
        ];
        return response()->json($response, 200);
    }


    public function postListWithCategory($type, $category, $page)
    {
        $posts = DB::table('posts')->latest()->where('cat_id', $category)->where('post_type', $type);

        $total_rows = $posts->count();
        $total_page = ceil($total_rows / 10);
        $limit = ($page * 10) - 10;
        $posts = $posts->skip($limit)->take(10)->get();

        $response = [
            'status' => true,
            'message' => 'Post List',
            'total_page' => $total_page,
            'current_page' => $page,
            'data' => $posts,
        ];
        return response()->json($response, 200);
    }

    public function postList($id)
    {
        $posts = DB::table('posts')->where('id', $id)->first();
        $share_url = null;
        if ($posts) {
            if ($posts->post_type == '1') {
                $share_url = route('web.viewPost', ['slug' => $posts->slug, 'id' => $posts->id]);
            } else {
                $share_url = route('assamese.viewPost', ['slug' => $posts->slug, 'id' => $posts->id]);
            }
        }

        $response = [
            'status' => true,
            'message' => 'Post Details',
            'data' => $posts,
            'shareURL' => $share_url
        ];
        return response()->json($response, 200);
    }

    public function videoList($type, $page)
    {
        $video = DB::table('video')->latest()->where('type', $type)->select('id', 'title', 'author', 'v_id', 'thumbnail', 'created_at');
        $total_rows = $video->count();
        $total_page = ceil($total_rows / 10);
        $limit = ($page * 10) - 10;
        $video = $video->skip($limit)->take(10)->get();

        $response = [
            'status' => true,
            'message' => 'Video Details',
            'total_page' => $total_page,
            'current_page' => $page,
            'data' => $video,
        ];
        return response()->json($response, 200);
    }

     public function search($searchKey)
    {
        $posts = DB::table('posts')->latest()->where('title', 'like', '%'.$searchKey.'%')->limit(10)->get();
        $response = [
            'status' => true,
            'message' => 'Search Details',
            'data' => $posts
        ];
        return response()->json($response, 200);
    }

    public function deviceId(Request $request){
        $validator =  Validator::make($request->all(),[
            'device_id' =>'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'status' => false,
                'message' => 'Required data Can not Be Empty',
                'error_code' => true,
                'error_message' => $validator->errors(),
            ];
            return response()->json($response, 200);
        }

        $api_ids = new AppId();
        $api_ids->app_id = $request->input('device_id');
        if($api_ids->save()){
            $response = [
                'status' => true,
                'message' => 'Device Id Inserted',
            ];
            return response()->json($response, 200);
        }
    }
}